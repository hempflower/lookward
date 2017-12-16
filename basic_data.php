<?php
session_start();
if(is_array($_SESSION)){
	if(isset($_SESSION['login'])){
		if (!$_SESSION['login']!=1){
	header("Location: edit.php?name=".$_POST['name']);
	}
	}else{
		header("Location: edit.php?name=".$_POST['name']);
		
	}
	
	
}else{
	header("Location: edit.php?name=".$_POST['name']);
}



include("setting/system.php");
$con = mysql_connect(mysql_ip,mysql_uname,mysql_pw);
		if (!$con)
 		 {
 		 die('Could not connect: ' . mysql_error());
 		 }
		echo $_POST['run'];
		if($_POST['run']=="0"){
		$run=0;
		}else{
		$run=1;
		}
echo $run;
   		mysql_select_db(mysql_name, $con);
		mysql_query("UPDATE ".Sys_first."welldata SET run='".$run."',name='".$_POST['nname']."',type='".$_POST['type']."' where name='".$_POST['name']."'");	


header("Location: info.php?name=".$_POST['nname']);
?>








