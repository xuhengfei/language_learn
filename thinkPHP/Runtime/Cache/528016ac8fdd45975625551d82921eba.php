<?php if (!defined('THINK_PATH')) exit();?><html>
	<body>
		<form action="<?php echo U('Login/doLogin');?>" method="post">
			用户名:<input name="name" /><br/>
			密码:<input type="password" name="password" /><br/>
			<button type="submit" >登陆</button>
		</form>
		没有账号？请先<a href="<?php echo U('Login/reg');?>">注册</a>
	</body>
</html>