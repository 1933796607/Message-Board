<?php

namespace app\index\controller;

use think\Db;

class Index extends \think\Controller
{
    public  function muban()
    {
        $list = Db::name('user')
            ->where('id', '<', 12)
            ->select();
        dump($list);

        // exit();
        // # code...
        // $data = [
        //     'name' => 'test',
        //     'status' => '1'
        // ];
        // $this->assign('data', $data);
        $this->assign('list', $list);
        return $this->fetch('muban');
    }
    public function index()
    {

        // $result = Db::execute("insert into user (name,status) values ('test',1)");
        // dump($result);
        // Db::table('user')
        // ->insert(['name' => 'test2', 'status' => '1']);
        //     $db = db('user');
        //     $result = $db->insertGetId(['name' => 'test4', 'status' => '1']);
        //     dump($result);
    }
    public function update()
    {
        // $result = Db::execute(" update user set name ='aaa' where  id<=5 ");
        // dump($result);
        // Db::table('user')
        //     ->where('id', 6)
        //     ->update(['name' => 'bbb']);
        $db = db('user');
        $result = $db->where('id', 8)->update(['name' => 'ccc']);
        dump($result);
    }
    public function select()
    {
        // $result = Db::query('select *from user where id < 5');
        // dump($result);

        // $list = DB::table('user')
        //     ->where('id', '>', 15)
        //     ->select();
        // dump($list);
        $db = db('user');
        $list = $db->where('id', '>', '19')->select();
        dump($list);
    }
    public function delete()
    {
        // $result = Db::execute("delete from user where id =20");

        // Db::table('user')
        //     ->where('id', 21)
        //     ->delete();
        // $db = db('user')->where('id', '>', '15')->delete();

        db('user')->delete([2, 5, 8]);
    }
}
