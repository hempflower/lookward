<?php
include("/setting/system.php");
session_start();
if(is_array($_GET)&&count($_GET)>0)//先判断是否通过get传值了
    {
        if(isset($_GET["login"]))//是否存在"id"的参数
        {
            if(isset($_SESSION['login'])){
            	
            	if($_SESSION['login']==1){
            	echo "true";
            	}
            }else{
            	echo "false";
            }
        }
    }
if(is_array($_GET)&&count($_GET)>0)//先判断是否通过get传值了
    {
        if(isset($_GET['del'])&&$_GET['url'])//是否存在"id"的参数
        {
            if(isset($_SESSION['login'])){
            	
            	if($_SESSION['login']==1){
            		
       	$con = mysql_connect(mysql_ip,mysql_uname,mysql_pw);
        mysql_select_db(mysql_name, $con);
        		

            		mysql_query("DELETE FROM ".Sys_first."welldata WHERE name='".$_GET['del']."'");
            		header("Location: ".$_GET['url']);
            	}
            }else{
            	header("Location: ".$_GET['url']);
            }
        }
    }
if(is_array($_GET)&&count($_GET)>0)//先判断是否通过get传值了
    {
        if(isset($_GET["set"]))//是否存在"id"的参数
        {	
			if(isset($_SESSION['login'])){
				if($_SESSION['login']==1){

        	
        	$myfile = fopen("{$_SERVER['DOCUMENT_ROOT']}\setting\center.php", "w");
        	fwrite($myfile,'<?php define("well_xxx","'.$_GET['xx'].'");define("well_yyy","'.$_GET['yy'].'");?>');
        	
        		}


          } 
          header("Location: ".$_GET['url']);          
         }
}
if(is_array($_GET)&&count($_GET)>0)//先判断是否通过get传值了
    {
        if(isset($_GET["name"]))//是否存在"id"的参数
        {	
			if(isset($_SESSION['login'])){
				if($_SESSION['login']==1){
					$con = mysql_connect(mysql_ip,mysql_uname,mysql_pw);
					if (!$con)
						{
					die("error");
					}else{
					$a1=$_GET['name'];
					$a2=$_GET['run'];
					$a3=$_GET['xx'];
					$a4=$_GET['yy'];
					mysql_select_db(mysql_name, $con);
					mysql_query("INSERT INTO ".Sys_first."welldata (name,run,xx,yy) VALUES ('$a1','$a2','$a3','$a4')");
        			
        	        	
        		}


          } 
          header("Location: index.php");          
         }
}

}


?>