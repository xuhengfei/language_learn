<?php 
	
	$uid=$_SESSION["uid"];
	
	
	$con=mysql_connect("localhost","root","");
	mysql_select_db("forum",$con);
	
	$sql="select * from user where id=" . $uid ;
	
	$result=mysql_query($sql,$con);
	$row=mysql_fetch_array($result);
	if($row!=null){
		echo "<div>".$row['name']."��ӭ��&nbsp;&nbsp;&nbsp;<a href='logout.php'>�˳�</a></div>";
		
	}else{
		echo "<div>�㻹û�е�½������<a href='login.php'>��½</a></div>";
	}
	
	
?>