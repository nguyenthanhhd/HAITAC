<!DOCTYPE html>
<html lang="zh-cn">
<head>
<?php
	include_once "../../core/config.php";
	if(!$_SESSION['accountName']) exit("<script> alert('Vui lòng đăng nhập để sử dụng！');location.href='../../index.php';</script>");
	$sql2="select * from account where name='".$_SESSION['accountName']."'";
	$result2=mysql_query($sql2); 
	$SCDJ=$row2['dj'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="/WebRes/Css/pintuer.css">
<link rel="stylesheet" href="/WebRes/Css/my.css">
<script src="/WebRes/Js/jquery.js"></script>
<script src="/WebRes/Js/pintuer.js"></script>
<script src="/WebRes/Js/jquery.SuperSlide.2.1.1.js"></script>
<script src="/WebRes/Js/layer.min.js"></script>
<script src="/WebRes/Js/core.js"></script>
<script src="/WebRes/Js/cookie.js"></script>
<script src="/WebRes/Js/respond.js"></script></head>
<body >
	<div id="test" class="container margin-large-top">
		<?php  
			$sql="select * from server order by fqid desc limit 0,1000";
			$result=mysql_query($sql); 
			while($row=mysql_fetch_array($result))
			{
		?>
		<a  class="button button-large bg-main badge-corner margin-large" href="game.php?FQ=<?php echo $row['fcm']?>"  target="_black"><?php echo $row['name']?><span class="badge text-big bg-dot"><?php echo $row['jieshao']?></span></a><?php }?> 
	</div>
</body>
</html>