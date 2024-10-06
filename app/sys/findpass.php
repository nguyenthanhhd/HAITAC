<?php
  include_once "../../core/config.php";
?>
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
<script src="/WebRes/Js/jquery.SuperSlide.2.1.1.js"></script>
<script src="/WebRes/Js/layer.min.js"></script>
<script src="/WebRes/Js/core.js"></script>
<script src="/WebRes/Js/cookie.js"></script>
<script src="/WebRes/Js/respond.js"></script></head>
<body>
<div class="container-layout margin-big-top">
    <div class="line form-x">
        <form id="FindPass">
        <div class="form-group">
            	<div class="label"><label for="Uname">Tên Đăng Nhập</label></div>
            <div class="field field-icon-right">
                <input type="text" class="input" id="Uname" name="Uname" placeholder="Tên Đăng Nhập" data-validate="required:Vui Lòng Điền Tên Đăng Nhập,username:Phải Bắt Đầu Bằng Một Chữ,length#>5:Độ Dài Tên Đăng Nhập Không Dưới 6 Ký Tự" />
                <span class="icon icon-user"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="label"><label for="password">Mã Bảo Mật</label></div>
            <div class="field field-icon-right">
                <input type="password" class="input" id="Scode" name="Scode" placeholder="Mã Bảo Mật" data-validate="required:Vui Lòng Điền Mã Bảo Mật,length#>5:Độ Dài Mã Bảo Mật Không Dưới 6 Ký Tự" />
                <span class="icon icon-key"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="label"><label for="Upass">Mật Khẩu Mới</label></div>
            <div class="field field-icon-right">
                <input type="password" class="input" id="Upass" name="Upass" placeholder="Mật Khẩu Mới" data-validate="required:Vui Lòng Điền Mật Khẩu Mới,length#>5:Độ Dài Mật Khẩu Mới Không Dưới 6 Ký Tự" />
                <span class="icon icon-key"></span>
            </div>
        </div>
        </form>
    <div class="margin-big-top text-center"><button class="button button-block bg-sub text-big" type="button" onclick="Ajax_Action('FindPass')"  >Lấy Lại Mật Khẩu</button></div>

</form>
    </div>
</div>
</body>
</html>