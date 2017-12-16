<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>LOOKWARD-地图</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }

        html,
        body {
            height: 100%;
            margin: 0px;
            padding: 0px;
        }
        #container {
            width: 100%;
            height: 100%
        }

    </style>
<script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=X3FBZ-LO536-L7ASO-EB4NG-AVFA6-ZKFYO"></script>
<script>
<?php

if(!file_exists("setting/system.php")){
 		header("Location: setup");

}


include("setting/center.php");
include("setting/system.php");
echo "window.onload = function(){";
echo "\n";
    
   echo "function init(){";
   echo "\n";
       echo "//定义map变量 调用 qq.maps.Map() 构造函数   获取地图显示容器";
       echo "\n";
        echo "var map = new qq.maps.Map(document.getElementById(";echo '"container"'; echo "), {";
        echo "\n";
           echo "center: new qq.maps.LatLng(".well_xxx.",".well_yyy."),      // 地图的中心地理坐标.";
           echo "\n";
           echo "zoom:16,";
           echo "\n";
           echo "mapTypeId: qq.maps.MapTypeId.SATELLITE";
           echo "\n";                                                 
           echo "});";
           echo "\n";
        
       

	
	echo "\n";

   echo "//调用初始化函数地图";
   echo "\n";
    
           







session_start();
if(isset($_SESSION['login'])){
     
       	if($_SESSION['login']==1){
       	$n=0;
       	$con = mysql_connect(mysql_ip,mysql_uname,mysql_pw);
       	if(!$con){
       	die("error!!!");
       	}
        mysql_select_db(mysql_name, $con);
        $result = mysql_query("SELECT * FROM ".Sys_first."welldata");

       	while($row = mysql_fetch_array($result)){
       	
          echo "\n";
          echo "var nxy".$n."= new qq.maps.LatLng(".$row['xx'].",".$row['yy'].");";
               echo "\n";
          echo "var label".$n." = new qq.maps.Label({";
          echo "\n";
          
               echo "position: nxy".$n.",";
               echo "\n";
               echo "map: map,";
               echo "\n";
               echo "content: '".$row['name']."'";
				echo "\n";
				echo "});";
				echo "\n";

		echo "var marker".$n."=new qq.maps.Marker({";
            	echo "position:nxy".$n.",";
		
         	  echo "map:map";
      		 echo "});";
echo "\n";
				echo "qq.maps.event.addListener(marker".$n.", 'click', function() {";
                echo 'window.location.href="info.php?name='; 
                echo "$row[name]"; 
   					echo '";});'; 
   					echo "\n";
				echo "qq.maps.event.addListener(label".$n.", 'click', function() {";
                echo 'window.location.href="info.php?name='; 
                echo "$row[name]"; 
   					echo '";});'; 
   					echo "\n";
   					echo "qq.maps.event.addListener(label".$n.", 'rightclick', function() {";
    			    echo 'if(confirm("你真的要删除这口井吗？") )';
    			   echo "{";
        			echo 'window.location.href="system.php?del='.$row['name'].'&url=index.php"';
        			echo "}";
        
   					echo "});";

   	
    	

    	
    $n=$n+1;
    }
       				echo "qq.maps.event.addListener(map, 'dblclick', function(event) {";
       				 echo "\n";
					 echo 'if(confirm("设置此处为场地吗？"))';
					  echo "\n";
					 echo "{";
 					 echo "\n";
 					echo 'window.location.href="system.php?set=&xx="+event.latLng.getLat()+"&yy="+event.latLng.getLng()+"&url=index.php";';
					 echo "\n";
 					echo "}";
				 	 echo "\n";
				 	echo "});";
				 	 echo "\n";
				 	echo "qq.maps.event.addListener(map, 'rightclick', function(event) {";
					  echo "\n";
					 echo 'var name=window.prompt("请填写名称！","例如17-44")';
					  echo "\n";
					 echo 'if(name!=null)';
					  echo "\n";
					 echo "{";
 					 echo "\n";
 					echo 'window.location.href="system.php?name="+name+"&run=0&xx="+event.latLng.getLat()+"&yy="+event.latLng.getLng();';
					 echo "\n";
 					echo "}";
				 	 echo "\n";
				 	 echo "\n";
				 	echo "});";
					 echo "\n";
				 	echo "}";
				 	 echo "\n";
				 	    	   echo "init();";
   echo "\n";
    
   echo "}";
   echo "\n";
    }else{
        $n=0;
        $con = mysql_connect(mysql_ip,mysql_uname,mysql_pw);
        mysql_select_db(mysql_name, $con);
        $result = mysql_query("SELECT * FROM ".Sys_first."welldata");
        while($row = mysql_fetch_array($result)){
            
            echo "\n";
            
            
            
            
            
            echo "var nxy".$n."= new qq.maps.LatLng(".$row['xx'].",".$row['yy'].");";
            echo "\n";
            echo "var label".$n." = new qq.maps.Label({";
            
            echo "\n";
            echo "position: nxy".$n.",";
            echo "\n";
            echo "map: map,";
            echo "\n";
            echo "content: '".$row['name']."'";
            echo "\n";
            echo "});";
            echo "\n";
            
            echo "var marker".$n."=new qq.maps.Marker({";
            echo "position:nxy".$n.",";
            
            echo "map:map";
            echo "});";
            
            echo "\n";
            echo "qq.maps.event.addListener(marker".$n.", 'click', function() {";
            echo 'window.location.href="info.php?name=';
            echo "$row[name]";
            echo '";});';
            echo "\n";
            echo "qq.maps.event.addListener(label".$n.", 'click', function() {";
            echo "\n";
            echo 'window.location.href="info.php?name=';
            echo $row['name'].'";';
            echo "\n";
            echo "});";
            echo "\n";
            
            
            
            
            
            
            
            $n=$n+1;
            
        }
        
        
        
        
        echo "}";
        echo "\n";
        echo "init();";
        echo "\n";
        
        echo "}";
        echo "\n";
    }
    }
else{
     $n=0;
       	$con = mysql_connect(mysql_ip,mysql_uname,mysql_pw);
        mysql_select_db(mysql_name, $con);
        $result = mysql_query("SELECT * FROM ".Sys_first."welldata");
        while($row = mysql_fetch_array($result)){
       	
          echo "\n";




                    
          echo "var nxy".$n."= new qq.maps.LatLng(".$row['xx'].",".$row['yy'].");";
          echo "\n"; 
          echo "var label".$n." = new qq.maps.Label({";

               echo "\n";
               echo "position: nxy".$n.",";
               echo "\n";
               echo "map: map,";
               echo "\n";
               echo "content: '".$row['name']."'";
echo "\n";
echo "});";
echo "\n";

		echo "var marker".$n."=new qq.maps.Marker({";
            	echo "position:nxy".$n.",";
		
         	  echo "map:map";
      		 echo "});";

echo "\n";
				echo "qq.maps.event.addListener(marker".$n.", 'click', function() {";
                echo 'window.location.href="info.php?name='; 
                echo "$row[name]"; 
   					echo '";});'; 
   					echo "\n";
								echo "qq.maps.event.addListener(label".$n.", 'click', function() {";
								echo "\n";
                echo 'window.location.href="info.php?name='; 
                echo $row['name'].'";';
                echo "\n"; 
   					echo "});"; 
				echo "\n";





				 

$n=$n+1;

}




   				echo "}";
				echo "\n";
   echo "init();";
   echo "\n";
    
   echo "}";
   echo "\n";
}
?>
</script>
</head>
<body bgcolor="#0099FF">



<!--   定义地图显示容器   -->
<div id="container">

</div>



</body>
</html>














