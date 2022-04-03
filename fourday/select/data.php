<?php
//后台查询逻辑-链接后台的一段代码
require_once('connect.php');

$code = $_GET['citycode'];//获取 省市区其中一个的编码
$callback = $_GET['callback'];
$flag = $_GET['flag'];//标志位：用来区分是省市区哪一个
//查询省市区对应的列表数据：1、省：2、市、3、区
if($flag == 1){
  $query=mysql_query("select * from province order by id");
}else if($flag == 2){
  $query=mysql_query("select * from city where provincecode = '".$code."' order by id");
}else if($flag == 3){
  $query=mysql_query("select * from area where citycode = '".$code."' order by id");
}
$sayList =[];
while ($row=mysql_fetch_array($query)){
  $sayList[] = array(
    'code'=>$row['code'],
    'name'=>$row['name']
  );
}
if($sayList){
  echo $callback.'('.json_encode($sayList).')';
}else{
  echo $callback.'('.'[]'.')';
}
?>