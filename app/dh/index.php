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
<body >
<div class="container margin-top">
	<form class="form" id="DHYB">
		<p class="text-yellow text-center"><strong>Hướng dẫn quy đổi (tỷ lệ cơ bản: 1 kim cương = 3000 vàng tích lũy)</strong><br><strong class="text-main">Gửi qua thư sau khi yêu cầu đổi tiền. Đăng nhập lại để nhận đồ trong thư</strong></p>
		<div class="form-group">
            <div class="label text-main"><label for="FQ">Chọn Máy Chủ</label>
			</div>
            <div class="field padding-left">
            	<div class="button-group border-main radio">
					<?php  
						include_once "../../core/config.php";
						$sql="select * from server order by fqid desc limit 0,1000";
						$result=mysql_query($sql); 
						while($row=mysql_fetch_array($result))
						{
					?>
					<label class="button margin-top" ><input name="FQ" onclick="Ajax_Get_GameUser('<?php echo $row['fqid']?>');" value="<?php echo $row['fqid']?>"  type="radio" data-validate="radio:Vui lòng chọn một máy chủ"> <?php echo $row['name']?></label><?php }?>	
				</div>
            </div>
        </div>
        <div class="form-group">
            <div class="label text-main"><label for="Rid">Chọn Nhân Vật</label></div>
            <div class="field padding-left">
            	<div class="button-group border-main radio" id="S_GameUser">
            	</div>
            </div>
        </div>
		<div class="form-group">
            <div class="label"><label for="U_DH_Num">Số Tiền Chuyển Đổi</label>
			</div>
            <div class="field padding-left">
            	<input type="text" class="input  text-center " id="U_DH_Num" name="U_DH_Num" size="20" data-validate="required:Vui lòng nhập số tiền chuyển đổi!,plusinteger:Vui lòng nhập một số nguyên dương!,compare#>0:Giá trị phải lớn hơn 0,compare#<=10000000:Giá trị phải nhỏ hơn hoặc bằng số dư tài khoản"/>
            </div>
        </div>	   
		<br/>
        <button class="button bg-main margin-bottom button-block" disabled="disabled" type="button" ID="THTj" onclick="Ajax_DHYB('#DHYB')">Xác Nhận Chuyển Đổi</button>
	</form>
</div>
<script type="text/javascript">
	function Ajax_DHYB(FormID) {
		if (FormYz(FormID)){
			Tjdata=$(FormID).serialize();
			DoAjax("ajax.php?Action=DHYB",Tjdata,function (data) {
				if(data.status == 'y'){
					layer.alert(data.info, 1, function(){
					   window.location.reload();
					});	
				}else{
					layer.alert(data.info, 5, 'Mẹo!'); // 温馨提示
				}
			});
		}
	}
	function Ajax_Get_GameUser(FQ) {
		Tjdata={FQ:FQ};
		var loadi = layer.load(0); 
		$("#S_GameUser").empty(); 
		DoAjax("ajax.php?Action=Get_GameUser",Tjdata,function (data) {
			
			if(data.status == 'y'){
				$("#S_GameUser").html(data.html);
				$("#THTj").attr("disabled",false); 
				$.getScript("/WebRes/Js/pintuer.js");
			}else{
				$("#S_GameUser").html(data.html);
				$("#THTj").attr("disabled",true);  
			}
			layer.close(loadi);
		});
		
	}
</script>
</body>
</html>