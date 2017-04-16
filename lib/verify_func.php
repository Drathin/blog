<?php
/**
 * 生成验证码的函数
 *
 */
function verify_func()
{
	//随机生成四位数验证码
	$check=rand(1000,9999);
	//将生成的验证码写入session
	Session_start();  
	$_SESSION["check"] = $check;  
 
	$img = imagecreate(80,30); //创建画布
	imagefill($img,0,0,ImageColorAllocate($img,255,255,255)); //填充 白色背景
	
	//使用imageline随机绘制两条实线
	$y1=rand(0,30);  
	$y2=rand(0,30);  
	$y3=rand(0,30);  
	$y4=rand(0,30);  
	imageline($img,0,$y1,70, $y3,ImageColorAllocate($img,55,255,25));  
	imageline($img,0,$y2,70, $y4,ImageColorAllocate($img,55,55,255));  
	
	//在随机位置绘制文字
	$strx=rand(3,15);  
	$stry=rand(2,15);  
	imagestring($img,5,$strx,$stry,substr($check,0,1),ImageColorAllocate($img,34,87,100));  
	$strx+=rand(15,20);
	 
	$stry=rand(2,15);  
	imagestring($img,5,$strx,$stry,substr($check,1,1),ImageColorAllocate($img,781,117,78));  
	$strx+=rand(15,20);
	 
	$stry=rand(2,15);  
	imagestring($img,5,$strx,$stry,substr($check,2,1),ImageColorAllocate($img,160,40,40));  
	$strx+=rand(15,20);
	 
	$stry=rand(2,15);  
	imagestring($img,5,$strx,$stry,substr($check,3,1),ImageColorAllocate($img,25,55,10));  
	 
	Header("Content-type: image/PNG");  
	ImagePNG($img);
}
verify_func();