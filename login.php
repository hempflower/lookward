<?php
session_start();
include("/setting/system.php");

$password= $_POST['password'];

if(password==$password){
 $_SESSION['login']=1;
}
header("Location: index.php");
?>
