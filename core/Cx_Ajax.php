<?php 
include_once "config.php";
$Action=$_REQUEST['Action'];
$acc=$_POST['Uname'];
$passwd=$_POST['Upass'];
date_default_timezone_set("PRC");
if($_SESSION['tgid'] || $_SESSION['tgid'] != ""){
	$tgsid=$_SESSION['tgid'];
  }else{
	$tgsid=="";
}
$Action=$_GET['Action'];
if($Action=='SignOut'){
	logout();
	$array = array("info"=> "Người dùng đã thoát khỏi hệ thống thành công!","status" => "y" ,"url" => "/index.php");
	echo json_encode($array);
	exit;
}
if($Action=='Login'){
	$sql="SELECT * FROM account WHERE name='".$acc."' and password='".$passwd."' ";
	$result=mysql_query($sql);
	$row2=mysql_fetch_array($result);
	$total=mysql_num_rows($result);
	$logintime = date("Y-m-d H:i:s");
	$ip = GetIP();
	if ($total<1){
		$array = array("info"=> "Tài khoản không tồn tại hoặc mật khẩu sai!","status" => "n" ,"url" => "index.php");
		echo json_encode($array);
		exit;
	}else{
		$_SESSION['accountName'] = $acc;
		$sql="update account set  logintime='".$logintime."',loginip='".$ip."' WHERE name='".$_SESSION['accountName']."'";
		$result=mysql_query($sql);
		$array = array("info"=> "Đăng nhập thành công, nhấn OK để tự động chuyển đến trung tâm thành viên!!","status" => "y" ,"url" => "/member.php");
		echo json_encode($array);
		exit;
	}
}
if($Action=='EditPass'){
	$Scode=$_POST['Scode'];
	$sql="SELECT * FROM account WHERE name='".$_SESSION['accountName']."' ";
	$result=mysql_query($sql);
	$row2=mysql_fetch_array($result);
	if($Scode==$row2['Scode']){
		$sql="update account set  password='".$passwd."' WHERE name='".$_SESSION['accountName']."'";
		$result=mysql_query($sql);
		$array = array("info"=> "Mật khẩu đã thay đổi thành công, vui lòng đăng nhập lại!!","status" => "y");
		echo json_encode($array);
		exit;
	}else{
		$array = array("info"=> "Mã bảo mật không chính xác và không thể thay đổi!!","status" => "n" ); 
		echo json_encode($array);
		exit;
	}
}
if($Action=='FindPass'){
	$Scode=$_POST['Scode'];
	$sql="SELECT * FROM account WHERE name='".$acc."' ";
	$result=mysql_query($sql);
	$row2=mysql_fetch_array($result);
	if($Scode==$row2['Scode']){
		$sql="update account set  password='".$passwd."' WHERE name='".$acc."'";
		$result=mysql_query($sql);
		$array = array("info"=> "Mật khẩu đã thay đổi thành công, vui lòng đăng nhập lại!!","status" => "y");
		echo json_encode($array);
		exit;
	}else{
		$array = array("info"=> "Mã bảo mật không chính xác và không thể thay đổi!!","status" => "n" ); 
		echo json_encode($array);
		exit;
	}	
}
if($Action=='Register'){
	$Scode=$_POST['Scode'];
	$sql="SELECT * FROM account WHERE name='".$acc."'";
	$result=mysql_query($sql);
	$total=mysql_num_rows($result);
	$ip = GetIP();
	$createtime = date("Y-m-d H:i:s");
	if($total>0){
		$array = array("info"=> "Tài khoản đã được đăng ký, vui lòng đổi sang người dùng khác!!","status" => "n" ); 
		echo json_encode($array);
		exit;
	}
	$sql="INSERT INTO account (name,password,Scode,createtime,logintime,createip,dj) VALUES ('".$acc."', '".$passwd."', '".$Scode."', '".$createtime."','".$createtime."', '".$ip."', '".$fuli."')";
	$result=mysql_query($sql);
	$_SESSION['accountName'] = $acc;
	if($result){
		$array = array("info"=> "Sau khi đăng ký thành công, nhấn OK để tự động chuyển đến trung tâm thành viên!!","status" => "y" ,"url" => "/member.php"); 
		echo json_encode($array);
		exit;
	}else{
		$array = array("info"=> "Máy chủ đang bận, vui lòng thử lại sau!!","status" => "n" ); 
		echo json_encode($array);
		exit;		
	}
}
function logout(){
	$_SESSION['accountName'] = '';
} 
?> 