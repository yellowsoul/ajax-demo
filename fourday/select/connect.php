<?php
//这些代码是数据库链接的，比较固定；
$host="localhost";
$db_user="root";
$db_pass="";
$db_name="mydb";
$timezone="Asiz/Shanghai";

$link=mysql_connect($host,$db_user,$db_pass);
mysql_select_db($db_name,$link);
mysql_query("SET names UTF8");

HEADER("Content-Type: text/html; charset-utf-8");
date_default_timezone_set($timezone);//北京时间
?>