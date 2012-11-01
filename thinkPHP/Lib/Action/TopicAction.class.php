<?php 

class TopicAction extends LoginCheckAction{
	public function publish(){
		$this->loginCheck();
		$this->display();
	}
	
	public function doPublish(){
		$this->loginCheck();
		
		$title=$_POST['title'];
		$content=$_POST["content"];
		$uid=$_SESSION['uid'];
		$topic=M("Topic")->add(array(
			'title'=>$title,
			'content'=>$content,
			'owner'=>$uid
		));
		if($topic){
			$this->jumpUrl=U('Index/index');
			$this->success("发帖成功");
		}else{
			$this->jumpUrl=U('publish');
			$this->error("发帖失败,".M('Topic')->getError());
		}
	}
}
?>