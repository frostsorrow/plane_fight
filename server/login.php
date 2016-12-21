<?php
	$userName=$_REQUEST["userName"];
	$userPwd=$_REQUEST["userPwd"];
	$conn=mysqli_connect('127.0.0.1','root','','user');
	$sql="SELECT nickname,dno FROM info WHERE uname='$userName' and pwd='$userPwd'";
	$result=mysqli_query($conn,$sql);
	if($result){
		$affectedRows=mysqli_affected_rows($conn);
		if($affectedRows>0){
			if($row=mysqli_fetch_row($result)){
				$nickname=$row[0];
				$id=$row[1];
				$json_array=array("id"=>$id,"nickname"=>$nickname);
				echo json_encode($json_array);
			}
		}else{
			echo "用户名与密码不匹配";
		}
	}
?>