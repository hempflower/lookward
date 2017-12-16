<?php
$a=$_GET["dbip"];
$b=$_GET["dbname"];
$c=$_GET["dbuname"];
$d=$_GET["dbpw"];
$e=$_GET["dbfir"];
$f=$_GET["adminname"];
$g=$_GET["adminpw"];

$con = mysql_connect($a,$c,$d);
if (!$con)
{
include("error.htm");
}else{

mysql_select_db($b, $con);
$sql = "CREATE TABLE {$e}user 
(
adminname varchar(20),
adminpw varchar(20)
)character set = utf8";
mysql_query($sql,$con);
$sql = "CREATE TABLE {$e}welldata 
(
name varchar(20),
run int,
xx varchar(40),
yy varchar(40),
type varchar(10)
)character set = utf8";
mysql_query($sql,$con);
$sql = "CREATE TABLE {$e}well_data_0 
(
name varchar(20),
richanye varchar(60),
richanyou varchar(60),
hanshui varchar(60),
hansha varchar(60),
chongci varchar(60),
chongcheng varchar(60),
chouyoujileixing varchar(60),
dianjidianya varchar(60),
dianjidianliu varchar(60),
dianjigonglu varchar(60),
dongyemian varchar(60),
leijichanye varchar(60),
leijichanyou varchar(60),
shuoming varchar(60),
beizhu varchar(60),
date date
)character set = utf8";
mysql_query($sql,$con);


$sql = "CREATE TABLE {$e}well_data_1 
(
name varchar(20),
num varchar(20),
xiujingneirong varchar(20),
xiujingshijian varchar(60),
xiujingriqi varchar(60),
wanjingshuju varchar(60),
bengguagaodu varchar(60),
guanjingriqi varchar(60),
guanjingshijian varchar(60),
jiaojingren varchar(60),
yanshouren varchar(60),
jiaojingriqi varchar(60),
jiaojingshijian varchar(60),
date date
)character set = utf8";
mysql_query($sql,$con);





$sql = "CREATE TABLE {$e}well_data_2 
(
num varchar(20),
name varchar(20),
xuhao varchar(20),
xiaochenghao varchar(60),
jieshichenghao varchar(60),
dingjie varchar(60),
dijie varchar(60),
chenghou varchar(60),
shekaidingjie varchar(60),
shekaidijie varchar(60),
shehou varchar(60)
)character set = utf8";
mysql_query($sql,$con);





$sql = "CREATE TABLE {$e}super_ip 
(
ip varchar(40),
time datetime,
num int(4)
)character set = utf8";
mysql_query($sql,$con);
mysql_query("INSERT INTO {$e}user (adminname, adminpw) VALUES ('$f','$g')");
$myfile = fopen("{$_SERVER['DOCUMENT_ROOT']}\setting\system.php", "w");
fwrite($myfile,'<?php define("mysql_ip","'.$a.'");define("mysql_name","'.$b.'");define("mysql_uname","'.$c.'");define("mysql_pw","'.$d.'");define("Sys_first","'.$e.'");?>');
include("set_3.htm");
}
//if (true){
//setup();
//include("set_3.htm")
//else{
//die("setup error");
//}
//function setup(){
//$con = mysql_connect($a,$c,$d);
//if (!$con)
//{
//return 0
//}
//mysql_select_db($b, $con);
//$sql = "CREATE TABLE {$e}user 
//(
//adminname varchar(20),
//adminpw varchar(20)
//)";
//mysql_query($sql,$con);
//$sql = "CREATE TABLE {$e}welldata 
//(
//name varchar(20),
//run int,
//xx varchar(40),
//yy varchar(40),
//data longtext,
//date date
//)";
//return 1;
//}

//function upcheck() {

   //}else{
   //return 1;
   //}
  
  //}
?>

