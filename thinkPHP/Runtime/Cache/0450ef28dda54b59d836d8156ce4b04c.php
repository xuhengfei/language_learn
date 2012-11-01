<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<body>
		注册账号
		<form action="<?php echo U('Login/doReg');?>" method="post">
			用户名称：<input name="name" /><br/>
			密码：<input type="password" name="password" /><br/>
			<button type="submit">提交</button>
		</form>
	</body>
</html>