<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);

session_start();
if(!is_array($_SESSION)||!isset($_SESSION['login'])||!$_SESSION['login']==1){

	header("Location: index.php");
}
if(is_array($_GET)&&count($_GET)>0){
	if(!isset($_GET["file"])){
	header("Location: index.php");
	}

}else{
	header("Location: index.php");
}



$myfile = fopen($_POST['file'], "w") or die("Unable to open file!");
$data=$_POST['data'];

$data=str_replace('<html>',"",$data);
$data=str_replace('</html>',"",$data);
fwrite($myfile,$data);
fclose(myfile);
$myfileb = fopen($_POST['fileb'], "w") or die("Unable to open file!");
fwrite($myfileb,$_POST['datab']);
fclose(myfileb);

?>