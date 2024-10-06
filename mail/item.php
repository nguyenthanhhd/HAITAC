<?php
	include_once "../core/config.php";
	if(!$_SESSION['accountName']) exit("<script> alert('Vui lòng đăng nhập để sử dụng！');location.href='index.php';</script>");
	$sql2="select * from account where name='".$_SESSION['accountName']."'";
	$result2=mysql_query($sql2); 
	$row2=mysql_fetch_array($result2);
?>
<?php
	if (@$_REQUEST["act2"]=="") {
?>	
<form id="form2" name="form2" method="post" action="?act2=send"
<strong>ID Vật Phẩm</strong>
<input type="text" value="0" name="UID" id="UID" style="width:100px;height:20px"/>  <br><br>
<input class="btn btn-primary btn2" type="submit" name="button" id="button" value="Gửi">
</form>

<?php
	}else {	
	$uid=$_REQUEST["UID"];
	$url = "http://192.168.127.142:10001/hzw_mail.php?itemid={$uid}&uid={$row2['id']}"; 
	$ch = curl_init(); 
	curl_setopt ($ch, CURLOPT_URL, $url); 
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,10); 
	$recharge_result = curl_exec($ch); 
	if($recharge_result='ok') {
		echo "<script>alert('Gửi Thành Công');history.go(-1)</script>";
		die;
	} else {
		echo "<script>alert('Gửi Thất Bại');history.go(-1)</script>";
		die;
	}
	}
?>

