<!DOCTYPE html>
<html>
<head>
<title>Time Table Entry</title>
<link rel="stylesheet" href="css/contentPage.css">
</head>

<?php
	
		$scode_arr = array();
		$sub_arr = array();
		$sem_arr = array();
		
		$conn = mysqli_connect("localhost", "root", "exam_automation");			-	
		$sql = "SELECT * FROM subject;";
		$res = mysqli_query($conn,$sql);
		while($arr=mysqli_fetch_assoc($res)){
			$t = $arr['scode'];
			array_push($scode_arr,$t);
			$l = $arr['name'];
			array_push($sub_arr,$l);
			$n = $arr['sem'];
			array_push($sem_arr,$n);
		}
		
?>
<body>
</body>
</html>
