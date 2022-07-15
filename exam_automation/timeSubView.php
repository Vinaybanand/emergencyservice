<!DOCTYPE html>
<html>
<head>
<title>Time Table - Subject View</title>
<link rel="stylesheet" href="css/contentPage.css">
</head>

<?php
		session_start();
		$dt = $_SESSION['dt'];
	
		$conn = mysqli_connect("localhost","root",'',"exam_automation");		
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());	
		}
		
		$tid = array();
				
		$sql = "SELECT tid FROM timetable WHERE date='".$dt."';";
		$res = mysqli_query($conn,$sql);
		while($arr=mysqli_fetch_assoc($res)){
			$t = $arr['tid'];
			array_push($tid,$t);
			
		}
		
?>

<body>
<a href="timetableView.php" class="previous">&laquo; Back</a>
<div class="register_box">
    <h1>Time Table - Subject View</h1>
</div>
    
<style>
	.btn {
		border-radius: 0%;
	}
	
	select {
		width: 50%
	}
	.container1 {
		padding: 2px 16px;
		background-color: #ffffff;
		border: 2px solid;
	}
	
</style>
	
<br>

<?php
	echo "<h1>Exams to be conducted on ".$dt."</h1>";

	for($i = 0; $i<count($tid); $i++){
		
		echo "<div class='container1'>";
		
		$sql = "SELECT * FROM timetable WHERE tid='".$tid[$i]."';";
		$res = mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($res);
		$start_time=$arr['start_time'];
		$end_time=$arr['end_time'];
		$scode = $arr['scode'];
		$sem = $arr['sem'];
		
		$sql = "SELECT name FROM subject WHERE scode='".$scode."';";
		$res = mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($res);
		$sname = $arr['name'];
		
		echo "<h2>".$sname."</h2>";
		echo "<h3>Semester : ".$sem."</h3>";
		$start_time=strtotime($start_time);
		$st = date('g:i A',$start_time);	
		$end_time=strtotime($end_time);
		$et = date('g:i A',$end_time);	
		echo "<h3>From ".$st." to ".$et."</h3>";
		
		echo "</div><br/>";
		
	}
	
?>
</div>
</body>
</html>

