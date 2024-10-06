<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml11.dtd">
<html lang="vi-VN" charset="UTF-8">
<head>
<?php
  include_once "core/config.php";
if($_REQUEST['tid'])
{
$_SESSION['tgid']=$_REQUEST['tid'];
}
?>
<title>Kỷ nguyên hải tặc</title>
	<meta name="description" content="Vua hải tặc, hải tặc, vua hai tac, hai tac" />
	<meta name="keywords" content="Vua hải tặc, one piece game, vua hải tặc lậu, hải tặc lậu" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="/WebRes/Css/pintuer.css">
<link rel="stylesheet" href="/WebRes/Css/my.css">
<script src="/WebRes/Js/jquery.js"></script>
<script src="/WebRes/Js/layer.min.js"></script>
<script src="/WebRes/Js/pintuer.js"></script>
<script src="/WebRes/Js/jquery.SuperSlide.2.1.1.js"></script>
<script src="/WebRes/Js/core.js"></script>
<script src="/WebRes/Js/cookie.js"></script>
<script src="/WebRes/Js/respond.js"></script></head>

<body class="body_2" >
	<div class="main_bj">
		<div class="Cx_Nav">
			<div class="DH_Panel float-left">
				<?php
					require 'top.php';
				?>
			</div>
			<div class="User_Panel bg-main float-right">
				<img src="/WebRes/img/logo1.png" class="margin" width="80" height="80" />
				<div class="margin float-right User_Xx">
					<strong class="text-white">Chào Mừng Các Bạn! </strong>
					<strong class="float-right margin-big-right">
						<button class="button button-little bg-yellow" onclick="OpenApp('%7B%22Url%22%3A%22%5C%2Fapp%5C%2Fsys%5C%2Flogin.php%22%2C%22title%22%3A%22%C4%90%C4%83ng%20Nh%E1%BA%ADp%22%2C%22Is_Max%22%3A%220%22%2C%22W_w%22%3A%22480%22%2C%22W_h%22%3A%22350%22%2C%22fn%22%3A%22%22%7D'); ">Đăng Nhập</button>
						<button class="button button-little bg-dot" onclick="OpenApp('%7B%22Url%22%3A%22%5C%2Fapp%5C%2Fsys%5C%2Freg.php%22%2C%22title%22%3A%22%C4%90%C4%83ng%20K%C3%BD%22%2C%22Is_Max%22%3A%220%22%2C%22W_w%22%3A%22480%22%2C%22W_h%22%3A%22410%22%2C%22fn%22%3A%22%22%7D'); ">Đăng Ký</button>
					</strong>
					<hr />
					<div class="media-inline">
						<div class="media text-center User_Login">
							<p class="text-white">【Vua Hải Tặc Offline】 Mời Bạn Tham Gia!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="Main_Content" class="bg border border-main">
            <div class="margin">
				<p style="TEXT-ALIGN: center; PADDING-BOTTOM: 6px; PADDING-LEFT: 6px; PADDING-RIGHT: 6px; MARGIN-BOTTOM: 5px; BACKGROUND: #da434e; COLOR: #ffffff; FONT-SIZE: 17px; FONT-WEIGHT: bold; PADDING-TOP: 6px">Chào Mừng Bạn Đến Với Thế Giới Hải Tặc</p>
				<p></p>
				<blockquote class="border-main">
					<strong>
						Mô Tả Trò Chơi:<br>
                        Vua Hải Tặc – Siêu phẩm game chuyển thể từ bộ Manga số một thế giới.<br><br>
						Hãy bước vào thế giới game chiến thuật Vua Hải Tặc – Đi tìm kho báu One Piece.<br><br>
						Bước vào trong game, người chơi sẽ gặp lại những gương mặt quen thuộc trong bộ truyện tranh One Piece như Monkey D. Luffy, Roronoa Zoro, Nami, Usopp,... <br><br>
						Hệ thống thiết kế nhân vật - cảnh vật trong Vua Hải Tặc mặc dù khá quen thuộc với fan hâm mộ One Piece nhưng vẫn mang được những nét riêng tương đối đặc sắc.
						<br>
						<br>
						Facebook：
						<a target="blank" href="https://www.facebook.com/loulxgame/" title="Facebook LouLx Game" class="logocmn"><font color="0000FF">LouLx Game</font></a>
						<br>
						<br>
						Youtube：
						<a target="blank" href="https://www.youtube.com/channel/UCzaJn2KEqqbp4Nvc9Hj3PjQ?view_as=subscriber?sub_confirmation=1" title="Kênh Youtube LouLx Game" class="logocmn"><font color="FF0000">LouLx Game</font></a>
					</strong>
				</blockquote>
				<p></p>
				<blockquote class="border-dot"><strong>
					Chơi Game Điều Độ - Giữ Gìn Sức Khỏe -
                </strong></p>
				</blockquote>
			</div>
		</div>
	</div>
	<div class="bg-inverse" id="footer">
		<div class="navbar">
			<div class="navbar-body nav-navicon" id="navbar-footer">
				<div class="navbar-text">【Vua Hải Tặc Offline】 Mời Bạn Tham Gia!</div>
			</div>
		</div>
	</div>
</body>
</html>
