<?php 
	
	$uid=$_SESSION["uid"];
	
	
	$con=mysql_connect("localhost","root","");
	mysql_select_db("forum",$con);
	
	$sql="select * from user where id=" . $uid ;
	
	$result=mysql_query($sql,$con);
	$row=mysql_fetch_array($result);
	if($row!=null){
		echo "<div>".$row['name']."欢迎你&nbsp;&nbsp;&nbsp;<a href='logout.php'>退出</a></div>";
		
	}else{
		echo "<div>你还没有登陆，请先<a href='login.php'>登陆</a></div>";
	}
	
	
?>