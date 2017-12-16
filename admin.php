<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
    <title>Bootstrap 管理授权</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="page-header">
    <h1>管理员授权
        <small>login-system</small>
    </h1>
</div>


<form class="form-horizontal" role="form" action="login.php" method="POST" enctype="utf-8">
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">名字</label>
		<div class="col-lg-4">
			<input type="text" class="form-control" id="password" name="password"
				   placeholder="密码">
		</div>
	</div>
	

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">登录</button>
		</div>
	</div>
</form>

</body>
</html>


</body>
</html>