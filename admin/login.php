<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>登录页面</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
    <link rel="stylesheet" href="admin.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="headerbox"><div class="titlebox">
	<h3 class="text-center">欢迎登录！</h3></div>
</div>



<div class="loginBox">
	<div class="loginBox1">
        <form class="form-signin" role="form">
        	
        	<p>用户名
            <input type="text" class="form-control" placeholder="用户名" required autofocus /></p>
            <p>密码
            <input type="password" class="form-control" placeholder="密码" required /></p>
            <p>验证码<br/>
            <input type="text" name="verify" required autofocus /><img src="../lib/verify_func.php"></p>
            <button class="btn btn-lg btn-success btn-block" type="submit">登录</button>
        </form>

	</div>
​</div>

<!-- 页脚 -->
<div id="footer" class="container">
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="navbar-inner navbar-content-center">
        <p class="text-muted credit" style="padding: 10px;">
            2015-2017@Drathin版权所有 &nbsp;&nbsp;ICP备案号：粤ICP备15011123号
        </p>
    </div>
</nav>
</div>
<!-- 页脚结束 -->
</body>
</html>