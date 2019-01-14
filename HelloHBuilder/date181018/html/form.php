<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
		欢迎我们亲爱的用户：
		<?php
			echo $_GET["usename"]
//			PHP里面的一个传输方式
		?>
		你的年龄是：
		<?php
			echo $_GET["age"]
		?>
	</body>
</html>
