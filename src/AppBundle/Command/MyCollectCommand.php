<?php
namespace AppBundle\Command;

use AppBundle\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MyCollectCommand extends BaseCommand
{
    protected $config_params = ['name'        => "spidertest",
                                'description' => "none",
                                'help'        => "很屌的命令"];

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->start($output, "脚本开始运行了...");
        $this->wait($output, "程序正在执行中,请耐心等候...");
        $this->zhibo8();
        $this->end($output, "完成!");
    }

    protected function zhibo8()
    {
        $target = "http://www.zhibo8.cc/nba/2015/1204-rehuo-luxiang.htm";
        $content = $this->getContentFromUrl($target);
        preg_match_all('/href="([^"]+)"/si', $content, $urls);

        $urls_clean = array();
        foreach ($urls[1] as $url) {
            preg_match('/\/(nba|cba)\/[\d]+\//si', $url) ? $urls_clean[] = $url : '';
        }
        var_dump($urls[1]);die;
    }
}