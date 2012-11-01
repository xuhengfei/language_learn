<?php 

class LoginCheckAction extends Action{
	
	public function loginCheck(){
		if($_SESSION["uid"]==null){
			$this->jumpUrl=U('Login/login');
			$this->error("你没有登录");
		}
	}
}
?>