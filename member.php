<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include_once "core/config.php";
	if(!$_SESSION['accountName']) exit("<script> alert('请登陆后使用！');location.href='index.php';</script>");
	$sql2="select * from account where name='".$_SESSION['accountName']."'";
	$result2=mysql_query($sql2); 
	$row2=mysql_fetch_array($result2);
	$SCDJ=$row2['dj'];
?>
<title>One Piece Offline</title>
<meta name="description" content="One Piece Offline" />
<meta name="keywords" content="One Piece Offline" />
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
					<strong class="text-white">Xin Chào! <strong class="text-dot"><?php echo $_SESSION['accountName']?>
					<strong class="float-right margin-big-right"> 
						<button class="button button-little bg-sub" onclick="OpenApp('%7B%22Url%22%3A%22%5C%2Fapp%5C%2Fsys%5C%2Feditpass.php%22%2C%22title%22%3A%22%C4%90%E1%BB%95i%20M%E1%BA%ADt%20Kh%E1%BA%A9u%22%2C%22Is_Max%22%3A%220%22%2C%22W_w%22%3A%22480%22%2C%22W_h%22%3A%22350%22%2C%22fn%22%3A%22%22%7D'); ">Đổi Mật Khẩu</button>
						<button class="button button-little bg-dot" onclick="Ajax_Action('','SignOut')">Đăng Xuất</button>
					</strong>
					<hr />
					<div class="media-inline">
						<div class="media text-center User_Login">
							<div class="txt bg-main" title="Số Kim Cương Của Người Dùng"><strong><?php echo $row2['dj']?></strong><br>Kim Cương</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<div id="Main_Content" class="bg border border-main">
			<div class="margin">
				<div class="container-layout">
					<br>
					<div class="tab" data-toggle="hover">
						<div class="tab-head">
							<ul class="tab-nav ">
								<li class="active"><a href="#tab-0">Ứng Dụng Trò Chơi</a></li></li>	
							</ul>
						</div>
						<div class="tab-body">
							<div class="tab-panel active" id="tab-0">
								<div class="line-small ">	
									<div class="x4">
										<div class="pro radius-big  border border-dashed border-small " >
											<div class="wait">
												<img src="/WebRes/img/gcds-dragon-512.png" />
												<div class="margin-big-top">
													<a onclick="OpenApp('%7B%22Url%22%3A%22%5C%2Fapp%5C%2FGame%5C%2Findex.php%22%2C%22title%22%3A%22B%E1%BA%AFt%20%C4%90%E1%BA%A7u%20Tr%C3%B2%20Ch%C6%A1i%22%2C%22Is_Max%22%3A%220%22%2C%22W_w%22%3A%22800%22%2C%22W_h%22%3A%22480%22%2C%22fn%22%3A%22%22%7D');" class="button button-block  button-big bg-main">Bắt Đầu Trò Chơi</a>
												</div>
											</div>
										</div>
									</div>
									<div class="x4">
										<div class="pro radius-big  border border-dashed border-small " >
											<div class="wait">
												<img src="/WebRes/img/gcds-red-envelope-512.png" />
												<div class="margin-big-top">
													<a onclick="OpenApp('%7B%22Url%22%3A%22%5C%2Fapp%5C%2Fdh%5C%2Findex.php%22%2C%22title%22%3A%22%C4%90%E1%BB%95i%20Ti%E1%BB%81n%20N%E1%BA%A1p%22%2C%22Is_Max%22%3A%220%22%2C%22W_w%22%3A%22600%22%2C%22W_h%22%3A%22600%22%2C%22fn%22%3A%22%22%7D');" class="button button-block  button-big bg-main">Đổi Tiền Nạp</a>
												</div>
											</div>
										</div>
									</div>
									<div class="x4">
										<div class="pro radius-big  border border-dashed border-small " >
											<div class="wait">
												<img src="/WebRes/img/pay.png" />
												<div class="margin-big-top">
													<a target="_blank" href="<?php echo $pay;?>" class="button button-block  button-big bg-main">Nạp Tiền</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-panel" id="tab-2"><div class="line-small "></div>
							</div>			
						</div>
						<p></p>
						<p></p>	
					</div>
				</div>	
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

