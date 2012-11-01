

<html>

	<body>
		<form action="doLogin.php<?php if($_GET['redirect']){echo "?redirect=".$_GET['redirect'];}?>" method="post">
			用户名:<input name="name" /><br/>
			密码:<input type="password" name="password" /><br/>
			<button type="submit" >登陆</button>
		</form>
		没有账号？请先<a href="reg.php">注册</a>
	</body>
</html>