<?php
	$uid=$_REQUEST["uid"];
	$score=$_REQUEST["score"];

	$link=mysqli_connect("127.0.0.1","root","","user");
	$sql="INSERT INTO ranking(uid,score) VALUES('$uid','$score');";
	$result=mysqli_query($link,$sql);
	$result_count=mysqli_affected_rows($link);
	if($result){
		if($result_count>0)
			echo "ok";
		else
			echo "error";
	}
?>