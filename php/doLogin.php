<?php 
	session_start();
	$name=$_POST["name"];
	$password=$_POST["password"];
	
	
	$con=mysql_connect("localhost","root","");
	mysql_select_db("forum",$con);
	
	$sql="select * from user where name='" . $name ."'";
	echo $sql;
	$result=mysql_query($sql,$con);
	$row=mysql_fetch_array($result);
	if($row!=null){
		if($row['password'] == $password){
			$_SESSION['uid']=$row['id'];
			echo "µÇÂ½³É¹¦";
			header("Location: ".$_GET['redirect']);
		}
	}else{
		echo "µÇÂ½Ê§°Ü";
	}
	
	
?>
