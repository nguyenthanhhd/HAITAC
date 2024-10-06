<?php
include_once "../../core/config.php";
//
//Rid:4506898162254646   获取的角色ID
$U_DH_Num=$_POST['U_DH_Num'];
if($U_DH_Num<0){
	$array = array("info"=>"Vàng không thể nhỏ hơn 0！","status"=>"n");    
	echo json_encode($array);
	exit;
}
$Action=$_GET['Action'];
$serverid=$_POST['FQ'];

if($Action=='Get_GameUser'){
	$array = array("status"=>"y","html"=>"<label class=\"button margin-top\"><input name=\"Rid\" value=\"4506898162254646\"  type=\"radio\" data-validate=\"radio:Vui lòng chọn một nhân vật trò chơi\"> ".$_SESSION['accountName']."</label>");   
	echo json_encode($array);
exit;
}

if($Action=='GoShop'){
	$array = array("status"=>"y","html"=>"<label class=\"button margin-top\"><input name=\"Rid\" value=\"4506898162254646\"  type=\"radio\" data-validate=\"radio:Vui lòng chọn một nhân vật trò chơi\"> ".$_SESSION['accountName']."</label>");   
	echo json_encode($array);
exit;
}


if($Action=='DHYB'){
	$sql2="select * from account where name='".$_SESSION['accountName']."'";
	$result2=mysql_query($sql2); 
	$row2=mysql_fetch_array($result2);		
	if($U_DH_Num<=0){
		$array = array("info"=> "Số đầu vào không chính xác!!","status" => "n" ,"url" => "member.php");   
		echo json_encode($array);
		exit;			
	}
	if($row2['dj']< $U_DH_Num){
		$array = array("info"=> "Kim cương không đủ. Chuyển đổi thất bại!!","status" => "n" ,"url" => "member.php");   
		echo json_encode($array);
		exit;			
	}

	$yuanbao = $U_DH_Num*$bili;
	$money	=	$yuanbao;
	$url = "http://192.168.127.142:10001/hzw_recharge.php?uid=".$row2['id']."&gold=".$money."";
	$recharge_result = trim(file_get_contents($url));
	if($recharge_result){
		mysql_query("update account set dj=dj-".$U_DH_Num." where name='".$_SESSION['accountName']."'");
		$array = array("info"=> " Chuyển đổi thành công！","status" => "y" ,"url" => "/member.php");
		echo json_encode($array);
		exit;
	}else{
		$array = array("info"=> "Máy chủ bận！","status" => "n" ,"url" => "member.php");   
		echo json_encode($array);
		exit;			
	}	
}
?>