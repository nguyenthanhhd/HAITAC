<?php
session_start();
error_reporting(E_ALL^E_NOTICE);
//Thông số kết nối database
$db_type='mysql';
$db_charset='utf8';
$db_host='192.168.127.142';
$db_username='root';
$db_password='';
$database='t9-rxhzw-web';
//网站配置信息
$WebTitle='Kỷ nguyên hải tặc';
$qq='';
$fuli=0;    //Số kim cương khi đăng ký
$bili=10000;
$tgurl="";
if(empty($tgurl)) $url_this = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
else $url_this =$tgurl;
$conn = @mysql_connect("$db_host","$db_username","$db_password") or die ("Kết nối không thành công, vui lòng kiểm tra lại IP。");
@mysql_select_db("$database",$conn) or die ("Bảng cơ sở dữ liệu không tồn tại hoặc không được kết nối. Vui lòng liên hệ với quản trị viên。");
mysql_query("set names UTF8"); //使用文件编码，防止出错
function getIP()
{
if(!empty($_SERVER["HTTP_CLIENT_IP"]))
   $ip = $_SERVER["HTTP_CLIENT_IP"];
else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
   $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
else if(!empty($_SERVER["REMOTE_ADDR"]))
   $ip = $_SERVER["REMOTE_ADDR"];
else
   $ip = "Không tồn tại！";
return $ip;
}
?>
