<?php

namespace app\index\controller;

use think\Db;
use think\Request;

class Bbs extends \think\Controller
{
    public function show()
    {
        // $db = db('user');
        // $show = $db->where('id', '<', 4)->select();

        // $this->assign('show', $show);
        // return $this->fetch('show');

        $show = Db::table('user')->where('id', '>', 0)->order('id', 'desc')->paginate(4);

        $this->assign('show', $show);
        return $this->fetch('show');
    }
    public function add()
    {
        // $request = Request::instance();

        // echo '请求方法：' . $request->method() . '<br/>';
        // echo '请求参数';
        // dump($request->param());

        $title = input('param.title');
        $content = input('param.content');

        if (!empty($title)) {
            $result = Db::table('user')
                ->insert([
                    'title' => $title, 'content' => $content,
                    'create_time' => time()
                ]);
            // dump($result);
            return $this->success('发布成功', 'bbs/show');
        }
        return $this->fetch();
    }
    public function view()
    {
        // echo input('param.id');
        echo dirname(__FILE__);
        $id = input('id');
        if ($id <> '') {
            //查询数据 -查询留言详情内容
            $list = Db::table('user')
                ->where('id', '=', $id)
                ->select();
            // dump($list);
            //查询数据 - 上一页
            $up = Db::table('user')
                ->where('id', '>', $id)
                ->order('id', '')
                ->limit(1)
                ->value('id');
            // dump($up);
            //查询数据 - 下一页
            $next = Db::table('user')
                ->where('id', '<', $id)
                ->order('id', 'desc')
                ->limit(1)
                ->value('id');
            // dump($next);
            $this->assign('up', $up);
            $this->assign('next', $next);
            $this->assign('list', $list);
            return $this->fetch();
        } else {
            return "留言不存在";
        }
    }
}
