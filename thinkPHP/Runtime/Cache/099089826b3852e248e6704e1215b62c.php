<?php if (!defined('THINK_PATH')) exit();?>
<html>

	<body>
		<form action="<?php echo U('Topic/doPublish');?>" method="post">
			标题:<input name="title" /><br/>
			内容:<textarea name="content" ></textarea><br/>
			<button type="submit">提交</button>
		</form>
	</body>

</html>