

<html>

	<body>
		<form action="doLogin.php<?php if($_GET['redirect']){echo "?redirect=".$_GET['redirect'];}?>" method="post">
			�û���:<input name="name" /><br/>
			����:<input type="password" name="password" /><br/>
			<button type="submit" >��½</button>
		</form>
		û���˺ţ�����<a href="reg.php">ע��</a>
	</body>
</html>