<html>

<head>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>井-修改信息</title>
<style>
body{ text-align:center;margin:0;}
#juzhong{margin:0 auto;width:200px;}</style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>


<?php
session_start();
if(!is_array($_SESSION)||!isset($_SESSION['login'])||!$_SESSION['login']==1){

	header("Location: index.php");
}





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
if($row['run']==0)
{
$well_run="停止";
}else{
$well_run="运行";
}
$well_type=$row['type'];
echo '<div class="page-header">';
echo "\n";
echo    '<h1>'.$_GET['name'];
echo "\n";
echo '<small>的信息</small>';
echo "\n";
echo    '</h1>';
echo "\n";
echo '</div>';


echo "\n";
echo '<form method="POST" action="basic_data.php" enctype="utf-8">';
echo "\n";
echo '<input type="hidden" name="name" value="'.$_GET['name'].'">';
echo '<p>井号：<input type="text" name="nname"  size="20" value="'.$_GET['name'].'"></p>';
echo "\n";
if($row['run']==0){
	echo '<p>状态：<input type="radio" value="1" name="run">运行<input type="radio" name="run"  checked value="0"> 停止</p>';
}else{
	echo '<p>状态：<input type="radio" value="1" checked name="run">运行<input type="radio" name="run" value="0">停止</p>';
}

	
	echo "\n";

	echo '<p>井别：<input type="text" name="type" size="20" value="'.$row['type'].'"></p>';
echo "\n";
echo	'<p><input type="submit" class="btn btn-default" value="提交" name="up"></p>';
echo "\n";
echo '</form>';
echo "\n";























	}else{
	 	header("Location: index.php");
	}
}
?>

<a href="/editor.php?file=<?php echo $_GET['name']; ?>" class="btn btn-default">编辑井的详细信息</a>
</body>
</html>	
