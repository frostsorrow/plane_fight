<?php
	$nickname=$_REQUEST["nickname"];
	//$pwd=$_REQUEST["pwd"];
	//$nickname=$_REQUEST["nickname"];
	//把接收到的数据提交到数据库
	//连接到RDBMS
	$conn= mysqli_connect('127.0.0.1','root','','user');
	//选择特定的数据库
	//mysqli_select_db($conn,'user')
	//发送SQL
	//执行sql
	$sql="SELECT nickname FROM info WHERE nickname='$nickname'";
	$link=mysqli_query($conn,$sql);
	//读取sql语句的执行结果
	if($link){
		//echo "h"
		$affectedRows=mysqli_affected_rows($conn);
		if($affectedRows==1){
			echo "用户名已经存在";
			$result=mysqli_query($conn,$sql);
		}else{
			echo "此昵称可以注册！";
		}
	}
?>