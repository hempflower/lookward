<?php
session_start();
if(!is_array($_SESSION)||!isset($_SESSION['login'])||!$_SESSION['login']==1){

	header("Location: edit.php?name=".$_POST['name']);
}


include("setting/system.php");
if(is_array($_POST)&&count($_POST)>0){
	if(isset($_POST["name"])){
		$con = mysql_connect(mysql_ip,mysql_uname,mysql_pw);
		if (!$con)
 		 {
 		 die('Could not connect: ' . mysql_error());
 		 }

		mysql_select_db(mysql_name, $con);
		mysql_query("DELETE FROM ".Sys_first."well_data_2 WHERE name='".$_POST['name']."' and xuhao='".$_POST['xuhao']."'");
		header("Location: edit.php?name=".$_POST['name']);
	}
}































?>
