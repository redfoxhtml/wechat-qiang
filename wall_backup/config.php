<?php
error_reporting(0);
@header("Content-type: text/html; charset=utf-8");

define("TOKEN", "xiaobai"); //配置API
define("Web_ROOT",'127.0.0.1'); //你的域名地址，最后不要带/
$weixin_name='缺你运动';//这里可以配置你的微信公众账号名字，你也可以改下面的源码天各一方k天各一方k
$xiaobai_wxh = 'quenisport';//微信帐号（wall前台显示）
	/***采集微信公众平台密码配置***/
define("USER", "820358115@qq.com");//公众平台账号 不能带空格
define("PASS", "221527ly");//公众平台密码  不能带空格
$screenpaw = "admin";//进入微信大屏幕的密码


define("UR", Web_ROOT);
//$url=Web_ROOT.'/1.php';//不用修改、这个填写你的1.php这个文件的地址
$weixin_wxq=Web_ROOT.'/wall/';//不用修改、这里填写你的微信墙的地址
/*链接数据库*/
$dbname = 'wall';//数据库的名称

/*从环境变量里取出数据库连接需要的参数*/
$host = '127.0.0.1';
$port = '3306';
$user = 'root';
$pwd = 'dl2983252';

/*接着调用mysql_connect()连接服务器*/
$link = @mysql_connect("$host:$port",$user,$pwd,true);
 
if(!$link) {
   die("Connect Server Failed: " . mysql_error($link));
}
 
/*连接成功后立即调用mysql_select_db()选中需要连接的数据库*/
if(!mysql_select_db($dbname,$link)) {
	   die("Select Database Failed: " . mysql_error($link));
	  }
mysql_query("SET NAMES UTF8");
//以上连接数据库

$xuanze="SELECT * FROM  `weixin_wall_config`";
$chaxun=mysql_query($xuanze) or die(mysql_error());
$xuanzezu=mysql_fetch_row($chaxun);
$huati=$xuanzezu[0];//话题内容不用修改
$huanying1=$xuanzezu[1];
$huanying2=$xuanzezu[2];


?>