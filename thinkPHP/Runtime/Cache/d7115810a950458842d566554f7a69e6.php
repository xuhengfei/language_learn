<?php if (!defined('THINK_PATH')) exit();?><style>
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
<div>
	<?php if($isLogin): ?>欢迎你，<?php echo ($uname); ?> ,<a href="<?php echo ($logout); ?>">退出</a>
	<?php else: ?>
		请<a href="<?php echo ($login); ?>">登录</a><?php endif; ?>
</div>
<div>
	<a href="<?php echo U('Topic/publish');?>">发帖</a>
</div>
<div class="list">

	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>标题</th>
				<th>作者</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): ++$i;$mod = ($i % 2 )?><tr onmouseover="this.className='rowover'" onmouseout="this.className=''">
					<td><?php echo ($record["id"]); ?></td>
					<td><?php echo ($record["title"]); ?></td>
					<td><?php echo ($record["name"]); ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
</div>