<?php 

class LoginAction extends Action{
	
	public function login(){
		$this->display();
	}
	
	public function  doLogin(){
		$name=$_POST['name'];
		$password=$_POST['password'];
		$user=M("User")->where("name='".$name."'")->select();
		if($user!=null && $user[0]['password']==$password){
			$_SESSION['uid']=$user[0]['id'];
			$_SESSION['uname']=$user[0]['name'];
			$redirect=$_REQUEST['redirect'];
			if($redirect==null){
				$redirect=U('Index/index');
			}
			$this->jumpUrl=$redirect;
			$this->success("登录成功");
		}else{
			$this->jumpUrl=U('login');
			$this->error("登录失败");
		}
	}
	
	public function doLogout(){
		$_SESSION['uid']=null;
		$_SESSION['uname']=null;
		$this->jumpUrl=$_REQUEST['redirect']==null?U('Index/index'):$_REQUEST['redirect'];
		$this->success("退出成功");
	}
	
	public function reg(){
		$this->submitUrl=U('doReg');
		$this->display();
	}
	
	public function doReg(){
		$data=array(
			'name'=>$_REQUEST['name'],
			'password'=>$_REQUEST['password']
		);
		$result=M('User')->add($data);
		if($result){
			$this->jumpUrl=U('Login/login');
			$this->success("注册成功，请登录");
		}else{
			$this->jumpUrl=U('Login/reg');
			$this->error("注册失败,".M('User')->getError());
			//$this->display("Login:login");
		}
		
	}
}