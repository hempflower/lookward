<html>

<head>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>井-信息</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style>
body{ text-align:center;margin:0;}
#juzhong{margin:0 auto;width:200px;}</style>
</head>

<body bgcolor="#0099FF">
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>


<?php

if(is_array($_GET)&&count($_GET)>0){
	if(isset($_GET["name"])){
	
	



include("setting/system.php");
$con = mysql_connect(mysql_ip,mysql_uname,mysql_pw);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db(mysql_name, $con);
$result = mysql_query("SELECT * FROM ".Sys_first."welldata WHERE name='".$_GET['name']."'");
$row = mysql_fetch_array($result);
if(!$row){
	header("Location: index.php");
}
if($row['run']==0)
{
$well_run='<td class="danger">停止</td>';
}else{
$well_run='<td  class="success">运行</td>';
}
$well_type=$row['type'];

echo '<div class="page-header">';
echo "\n";
echo    '<h1>'.$_GET['name'];
echo "\n";
echo '<small>井的信息</small>';
echo "\n";
echo    '</h1>';
echo "\n";
echo '<a href="/index.php"  class="btn btn-default">返回</a>';
echo "\n";
echo '</div>';





echo "<p></p>";

echo "\n";
echo "<p></p>";
echo '<table class="table table-striped">';
echo "\n";
   echo	"<tr>";
echo "\n";
	 	echo '<td>井号：</td>';
echo "\n";
	echo '<td>'.$_GET['name'].'</td>';
echo "\n";
		echo "</tr>";
echo "\n";
	echo "<tr>";
echo "\n";	
	echo '<td>状态：</td>';
echo "\n";	   
	   echo	$well_run;
echo "\n";   
   echo	"</tr>";
echo "\n";   
   echo	"<tr>";
		echo "\n";
		echo '<td>井别：</td>';
		echo "\n";
		echo '<td>'.$well_type.'</td>';
	echo "\n";
	echo "</tr>";

echo "</table>";
session_start();
if(isset($_SESSION['login'])) {
 if($_SESSION['login']==1){
		echo '<a href="/edit.php?name='.$_GET['name'].'"  class="btn btn-default">修改数据</a>';
}
}
echo "\n";





















	}else{
	 	header("Location: index.php");
	}
}
?>
<p></p>
<iframe id="ifrPage" name="ifrPage" src="<?php echo "data/".$_GET['name']."/".$_GET['name'].".htm"; ?>
"></iframe>
	
