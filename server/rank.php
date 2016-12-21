<?php
	$link=mysqli_connect('localhost','root','','user');
	$sql="select nickname,score from info inner join ranking on info.dno=ranking.uid order by score desc limit 0,10";
	$result=mysqli_query($link,$sql);
	$user_array=[];
	while($row=mysqli_fetch_row($result)){
		$user=array("nickname"=>$row[0],"score"=>$row[1]);
		array_push($user_array,$user);
	}
	echo json_encode($user_array);
?>