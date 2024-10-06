<?php
	include_once "../../core/config.php";
	//session_start();
	if(!$_SESSION['accountName'] || !$_GET['FQ']) exit("<script> alert('Vui Lòng Đăng Nhập Để Sử Dụng!!!;location.href='/index.php';</script>");

	$newtime=time();
	$server=$_GET['FQ'];
	$sql="select * from server where fcm='".$server."'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$server_nm = $row['name'];
	if($row['opentime']>$newtime){
		$tim3=date('y-m-d h:i:s',$row['opentime']);
		$array = array("info"=> "","status" => "y" ,"url" => "/member.php");
		echo "<script>alert('【".$row['name']."】Giờ Mở Cửa Là【".$tim3."】');location.href='../../member.php'</script>";
		exit;
	}
	$sql="select * from account where name ='".$_SESSION['accountName']."'";
	$result=mysql_query($sql);
	$row2=mysql_fetch_array($result);
	$url = "http://192.168.127.142:80/T9NuoYa/T9NuoYa.html?sid=".$row2['id']."";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>【<?php echo $server_nm;?>】Chào Mừng Bạn</title>
	<style type="text/css">
		a:hover{ text-decoration:underline;}
		body, html {width:100%;height:100%;margin-top:-10;margin-left:0;padding-top:0;}
	</style>
</head>
<body scroll="no" style="background:#000;">
	<iframe src="<?php echo $url;?>" id='mainFrame' name='mainFrame' scrolling='no' width='100%' height='100%' frameborder='0'></iframe>
</body>
</html>
