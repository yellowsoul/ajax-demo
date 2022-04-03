<?php
//后台查询逻辑-链接后台的一段代码
require_once('connect.php');

$last = $_GET['last'];//获取 隐藏域目前已经加载的条数
$amount = $_GET['amount']; //获取 追加评论条数

$query=mysql_query("select * from comment order by id desc limit $last,$amount"); //“limit”表示从第几条开始取，“$amount”是取多少条
$flag = false;

while ($row=mysql_fetch_array($query)){
  $flag = true;
  $sayList[] = array(
    'id'=>$row['id'],
    'nickname'=>$row['nickname'],
    'content'=>$row['content'],
    'imgpath'=>$row['imgpath'],
    'time'=>$row['time']
  );
}
if($flag){
  echo .json_encode($sayList);
}else{
  echo true; //没有数据返回,"ture"对于PHP来说就是1,"false":就是0
}
?>
?>