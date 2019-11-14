<?php

namespace app\index\controller;

use app\index\model\User;
use think\Controller;
use think\Loader;

class Model extends Controller
{
    public function index()
    {
        //使用模型的方法

        // $res = model("User");
        // $res = $res::get(22);


        //静态调用的写法
        // $res = User::get(22);

        //new的写法

        // $res = new User();
        // $res = User::get(22);

        //可以加多个模型的写法
        // $res = Loader::model("User");
        // $res = $res::get(22);

        //使用助手函数的写法
        $res = model("User");
        $res = $res::get(23);
        //读取出对象其中的数组的值
        $res = $res->toArray();
        dump($res);
    }
}
