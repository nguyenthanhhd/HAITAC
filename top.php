<?php
	include_once "./core/config.php";
?>
<li><a class="button bg-main" href="/"><span class="icon-home"></span><br>Trang Chủ</a></li> 
<li><a target="blank" class="button bg-main" href="https://www.facebook.com/no.b.ta.73/"><span class="icon-gamepad"></span><br>Diễn Đàn</a></li> 
<?php
	if(!$_SESSION['accountName'] || $_SESSION['accountName']==''){
?>
<li><a class="button bg-main" onclick="OpenApp('%7B%22Url%22%3A%22%5C%2Fapp%5C%2Fsys%5C%2Flogin.php%22%2C%22title%22%3A%22%C4%90%C4%83ng%20Nh%E1%BA%ADp%22%2C%22Is_Max%22%3A%220%22%2C%22W_w%22%3A%22480%22%2C%22W_h%22%3A%22350%22%2C%22fn%22%3A%22%22%7D'); "><span class="icon-user"></span><br>Thành Viên</a></li> 
<?php
	}else{
?>
<li><a class="button bg-main" href="/member.php"><span class="icon-user"></span><br>Thành Viên</a></li> 
<?php }?>
<li><a class="button bg-main"  target="_blank" href="<?php echo $pay;?>"><span class="icon-money"></span><br>Nạp Tiền</a></li> 