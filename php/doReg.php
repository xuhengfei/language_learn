<?php 
	$name=$_POST["name"];
	$password=$_POST["password"];
	
	
	$con=mysql_connect("localhost","root","");
	mysql_select_db("forum",$con);
	
	$sql="insert into user (name,password) values('" . $name . "','" . $password ."')";
	echo $sql;
	if(!mysql_query($sql,$con)){
		die("�����û�ʧ��" . mysql_error());
	}
	echo "<br/>id:" . mysql_insert_id() ;
	echo "<br/>name:" . $name;
	
?>
<a href="login.php" >��½</a>