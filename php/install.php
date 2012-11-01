<?php 

$con=mysql_connect("localhost","root","");

if(!$con){
	die('Could not connect :' . mysql_error());
}


#if(mysql_query("CREATE DATABASE forum",$con)){
#	echo "Database forum created";
#}
mysql_select_db("forum",$con);

mysql_query("drop table user if exists",$con);
$sql="create table user 
( 
	id int auto_increment,
	name varchar(100),
	password varchar(20),
	primary key(id)
)";
if(mysql_query($sql,$con)){
	echo "Create User Table Success";
}

mysql_query("drop table topic if exists",$con);
$sql="create table topic
(
	id int auto_increment,
	title varchar(200),
	owner int,
	content text,
	primary key(id)
)";
if(mysql_query($sql,$con)){
	echo "Create Table topic success";
}

mysql_query("drop table reply if exists",$con);
$sql="create table reply
(
	id int auto_increment,
	topic_id int,
	owner int,
	content text,
	primary key(id)
)";
if(mysql_query($sql,$con)){
	echo "create table reply success";
}

 ?>