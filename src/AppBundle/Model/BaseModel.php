<?php

namespace AppBundle\Model;

use Doctrine\ORM\EntityRepository;

class BaseModel extends EntityRepository
{
    protected $_container;

    protected $dql = '';
    protected $pars = array();

    protected $countDql = '';
    protected $countPars = [];

    protected $_qb;

    public function __construct($container, $class = null)
    {
        $className  = explode('\\', get_class($this));
        $className  = array_pop($className);
        $entityName = substr($className, 0 ,strlen($className)-5);

        $this->_entityName = 'Azhibo\\ZhiboBundle\\Entity\\'.$entityName;
        $this->_container  = $container;
        $this->_em         = $this->_container->get('doctrine')->getManager();
        $this->_class      = $this->_em->getClassMetadata($this->_entityName);
        $this->_qb         = $this->_em->createQueryBuilder();
    }

    protected function getResults($max = null)
    {
        return $this->_em
                    ->createQuery($this->dql)
                    ->useResultCache(true, 300)
                    ->useQueryCache(true)
                    ->setParameters($this->pars)
                    ->setMaxResults($max)
                    ->getResult();
    }

    protected function getOneResult()
    {
        return $this->_em
                    ->createQuery($this->dql)
                    ->useResultCache(true, 300)
                    ->useQueryCache(true)
                    ->setParameters($this->pars)
                    ->setMaxResults(1)
                    ->getOneOrNullResult();
    }

    protected function getPagination($perPage, $countData = null)
    {
        $query = $this->_em
                      ->createQuery($this->dql)
                      ->useResultCache(true, 300)
                      ->useQueryCache(true)
                      ->setParameters($this->pars);

        $page = $this->_container->get('request')->query->get('page', 1);

        if ($countData)
        {
            $redis = $this->_container->get('snc_redis.default');

            $key = $countData['key'];

            if ($count = $redis->get($key))
            {
                $count = $count;
            }
            else
            {
                $count = $this->_em
                    ->createQuery($countData['dql'])
                    ->setParameters($this->pars)
                    ->getSingleScalarResult();

                $redis->setex($key, 1800, $count);
            }

            $count && $query->setHint('knp_paginator.count', $count);
        }

        $paginator = $this->_container->get('knp_paginator');

        return $paginator->paginate($query, $page, $perPage, ['distinct' => false]);
    }

    protected function getPaginationNoCache($perPage)
    {
        $query = $this->_em
                      ->createQuery($this->dql)
                      ->setParameters($this->pars);

        $page = $this->_container->get('request')->query->get('page', 1);

        $paginator = $this->_container->get('knp_paginator');

        return $paginator->paginate($query, $page, $perPage, ['distinct' => false]);
    }
}