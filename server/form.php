<?php
	$uname=$_REQUEST["uname"];
	$pwd=$_REQUEST["pwd"];
	$nickname=$_REQUEST["nickname"];
	$conn=mysqli_connect('127.0.0.1','root','','user');
	$sql="INSERT INTO info(uname,pwd,nickname) VALUES('$uname','$pwd','$nickname');";
	$result=mysqli_query($conn,$sql);
	$affectedRows=mysqli_affected_rows($conn);
	if($affectedRows>0){
		$uid=mysqli_insert_id($conn);
		$json_array=array("uid"=>$uid,"nickname"=>$nickname);
		echo json_encode($json_array);
	}else{
		echo "注册失败";
	}
?>