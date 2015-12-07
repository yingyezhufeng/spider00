<?php
namespace AppBundle\Command;

use AppBundle\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MyCollect2Command extends BaseCommand
{
    protected $config_params = ['name'        => "spidertest2",
                                'description' => "none",
                                'help'        => "很屌的命令"];

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->start($output, "脚本开始运行了...");
        $this->wait($output, "程序正在执行中,请耐心等候...");
        $this->dytt();
        $this->end($output, "完成!");
    }

    protected function dytt()
    {
        $target = "http://www.ygdy8.net/html/gndy/dyzz/20151201/49616.html";
        $content = $this->getContentFromUrl($target);
        // $content = file_get_contents($target);
        
        $content = mb_convert_encoding($content, "UTF-8","gb2312");
        preg_match('/<div id="Zoom">(.*?)<table/si', $content, $area);

        // $space = "\xe3\x80\x80";
        // $area = str_replace("&nbsp;", "", $area);
        // $area = str_replace($space, "", $area);
        // var_dump($area);die;

        $items = explode("<br />", $area[1]);

        // var_dump($items);die;

        $info = array();
        foreach ($items as $i) {
            foreach ($this->dyttItems() as $key => $value) {
                if (strpos($i, $value)) {
                    $info[$key] = $this->cleanItem($i, $value);
                }
            }
        }
        var_dump($info);die;



        preg_match_all('/<br \/>(.*?)<br \/>/si', $area[1], $items);
        $items_clean = array();
        foreach ($items[1] as $item) {
            $items_clean[] = str_replace("&nbsp;", " ", $item);
        }
        // var_dump($items_clean);die;
        // $items_clean2 = array();
        $info = array();
        foreach ($items_clean as $item) {
            foreach ($this->dyttItems() as $i) {
                if(strpos($item, $i)) $info['country'] = $item;
            }
        }
        var_dump($info);die;
        // $urls_clean = array();
        // foreach ($urls[1] as $url) {
        //     preg_match('/\/(nba|cba)\/[\d]+\//si', $url) ? $urls_clean[] = $url : '';
        // }
        var_dump($urls[1]);die;
    }

    public function dyttItems()
    {
        return array(
            "chinese_title" => "译　　名",
            "description" => "简　　介"
            );
        // return array(
        //     "chinese_title" => "译名",
        //     "title"    => "片名",
        //     "year"    => "年代",
        //     "country"  => "国家",
        //     "category" => "类别",
        //     "language" => "语言",
        //     "subtitle"    => "字幕",
        //     "grade"    => "IMDb评分",
        //     "format"  => "文件格式",
        //     "screen_size"     => "视频尺寸",
        //     "file_size" => "文件大小",
        //     "length"   => "片长",
        //     "director" => "导演",
        //     "author"   => "编剧",
        //     "star" => "主演",
        //     "description" => "简介"
        //     );
    }

    public function cleanItem($item, $del)
    {
        $result = explode($del, $item);
        return trim($result[count($result)-1]);
    }
}