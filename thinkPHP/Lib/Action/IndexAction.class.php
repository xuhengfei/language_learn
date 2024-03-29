<?php
// 本文档自动生成，仅供测试运行
class IndexAction extends LoginCheckAction
{
    /**
    +----------------------------------------------------------
    * 默认操作
    +----------------------------------------------------------
    */
    public function index()
    {
    	$this->list=M("Topic")->table("topic t")
    	->join(" user u on u.id=t.owner")
    	->field("t.*,u.name")
    	->select();
    	$this->logout=U('Login/doLogout');
    	$this->login=U('Login/login');
    	$this->isLogin=$_SESSION['uid']!=null;
    	$this->uname=$_SESSION['uname'];
    	$this->display();
        //$this->display(THINK_PATH.'/Tpl/Autoindex/hello.html');
    }

    /**
    +----------------------------------------------------------
    * 探针模式
    +----------------------------------------------------------
    */
    public function checkEnv()
    {
        load('pointer',THINK_PATH.'/Tpl/Autoindex');//载入探针函数
        $env_table = check_env();//根据当前函数获取当前环境
        echo $env_table;
    }

}
?>