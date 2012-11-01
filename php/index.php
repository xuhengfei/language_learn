<?php require("logincheck.php") ?>
<?php require("header.php") ?>
<html>
	<head>
		<style>
			.list{
				width:500px;
			}
			.list th{
				color:green;
			}
			.list td{
				text-align:center;
			}
			.list .rowover{
				background-color:#ADFEDC;
			}
		</style>
	</head>
	
	<body>
	
		帖子列表<a href="newtopic.php">发帖</a>
		
		<?php 
			$con=mysql_connect("localhost","root","");
			mysql_select_db("forum",$con);
			$sql="select t.*,u.name from topic t left join user u on t.owner=u.id";
			$result=mysql_query($sql,$con);
			echo "<table class='list'>";
			echo "<thead><tr><th>ID</th><th>标题</th><th>作者</th></tr></thead>";
			echo "<tbody>";
			while($row=mysql_fetch_array($result)){
				echo "<tr onmouseover='this.className=\"rowover\"' onmouseout='this.className=\"\"'>";
				echo "<td>" . $row['id'] ."</td>";
				echo "<td><a href='topic.php?id=".$row['id']."'>" . $row['title'] . "</a></td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
		?>
	
	</body>
</html>