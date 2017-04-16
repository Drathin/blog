<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Drathin Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
    <link rel="stylesheet" href="style.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!-- 菜单 -->

<nav class="navbar navbar-default navbar-inverse" role="navigation">
		<div class="container"><div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 

				
	<a class="navbar-brand" style="text-decoration:none;" href="http://www.drathin.com/">Drathin</a>


	</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<ul class="nav navbar-nav navbar-right">
						<li>
							 <a href="admin" target="view_window">登录</a>
						</li>
						<li class="dropdown">
							 <a class="dropdown-toggle" data-toggle="dropdown">社交<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									 <a href="http://weibo.com/401360940" target="view_window">微博</a>
								</li>
								<li>
									 <a href="https://my.oschina.net/drathin" target="view_window">博客</a>
								</li>
								<li>
									 <a href="https://github.com/Drathin" target="view_window">Github</a>
								</li>
							</ul>
						</li>
					</ul>				
				</div></div>
			</nav>
<!-- 菜单结束 -->



         
<div class="nav2">

    <div class="container">

    <?php include("about.html");?>
          
    </div>

</div>


<!-- 页脚 -->
<div id="footer" class="container">
<nav class="navbar navbar-brand">
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