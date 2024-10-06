<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="/WebRes/Css/pintuer.css">
<link rel="stylesheet" href="/WebRes/Css/my.css">
<script src="/WebRes/Js/jquery.js"></script>
<script src="/WebRes/Js/pintuer.js"></script>
<!--[if lt IE 9]><script src="/WebRes/Js/html5.js"></script><![endif]-->
<!--[if IE 6]><script src="/WebRes/Js/DD_belatedPNG.js"></script><![endif]-->
<script src="/WebRes/Js/jquery.SuperSlide.2.1.1.js"></script>
<script src="/WebRes/Js/layer.min.js"></script>
<script src="/WebRes/Js/core.js"></script>
<script src="/WebRes/Js/cookie.js"></script>
<script src="/WebRes/Js/respond.js"></script></head>
<body>
<div class="container-layout margin-big-top">
    <div class="line form-x">
		<form id="Login">
			<div class="form-group">
				<div class="label"><label for="Uname">Tên Đăng Nhập</label></div>
				<div class="field field-icon-right">
					<div class="input-group">
						<input type="text" class="input" id="Uname" name="Uname" placeholder="Tên Đăng Nhập" />
						<span class="addbtn"><button class="button bg-sub" onclick="window.parent.OpenApp('%7B%22Url%22%3A%22%5C%2Fapp%5C%2Fsys%5C%2Ffindpass.php%22%2C%22title%22%3A%22L%E1%BA%A5y%20L%E1%BA%A1i%20M%E1%BA%ADt%20Kh%E1%BA%A9u%22%2C%22Is_Max%22%3A%220%22%2C%22W_w%22%3A%22480%22%2C%22W_h%22%3A%22410%22%2C%22fn%22%3A%22%22%7D');" >Lấy Lại Mật Khẩu</button></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="label"><label for="Upass">Mật Khẩu</label></div>
				<div class="field field-icon-right">
					<input type="password" class="input" id="Upass" name="Upass" placeholder="Mật Khẩu" data-validate="required:Vui Lòng Điền Mật Khẩu,length#>5:Độ Dài Mật Khẩu Không Dưới 6 Ký Tự" />
					<span class="icon icon-key"></span>
				</div>
			</div>
			<div class="margin-big-top  text-center"><button class="button button-block bg-sub text-big" type="button" onclick="Ajax_Action('Login')"  >Đăng Nhập Ngay</button></div>
		</form>
	</div>
</div>
</body>
</html>