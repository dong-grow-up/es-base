<?php

namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;


/**
 * Class Index
 * @package App\HttpController
 */
class Index extends Controller
{

    public function onRequest(?string $action): ?bool
    {
//        if($action != 'index'){
//            $this->response()->write('<div style="text-align: center;margin-top: 30px"><h2>NOT ACTION</h2></div></br>');
//            return false;
//        }
        return true;
    }

    /**
     * 首页方法
     * @author : evalor <master@evalor.cn>
     */
    function index()
    {
        $this->response()->withHeader('Content-type', 'text/html;charset=utf-8');
        $this->response()->write('<div style="text-align: center;margin-top: 30px"><h2>欢迎使用EASYSWOOLE</h2></div></br>');
        $this->response()->write('<div style="text-align: center">您现在看到的页面是默认的 Index 控制器的输出</div></br>');
        $this->response()->write('<div style="text-align: center"><a href="https://www.easyswoole.com/Manual/2.x/Cn/_book/Base/http_controller.html">查看手册了解详细使用方法</a></div></br>');
    }


    public function test()
    {
        $mixData = $this->request()->getRequestParam("orderId");
        var_dump($mixData);
        $this->response()->withHeader('Content-type', 'text/html;charset=utf-8');
        $this->response()->write('<div style="text-align: center;margin-top: 30px"><h2>hello</h2></div></br>');
    }

}
