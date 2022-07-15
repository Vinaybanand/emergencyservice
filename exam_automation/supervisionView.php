<!DOCTYPE html>
<html>
<head>
<title>Supervision View</title>
<link rel="stylesheet" href="css/contentPage.css">
</head>

<?php
	
		$conn = mysqli_connect("localhost","root",'',"exam_automation");		
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());	
		}
		
		$tid = array();
		
		$sql = "SELECT DISTINCT tid FROM examseat;";
		$res = mysqli_query($conn,$sql);
		while($arr=mysqli_fetch_assoc($res)){
			$t = $arr['tid'];
			array_push($tid,$t);
			
		}
		
?>

<body>
<a href="adminScreen.php" class="previous">&laquo; Back</a>
<div class="register_box">
    <h1>Supervision Allocation</h1>
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
	for($i = 0; $i<count($tid); $i++){
		
		echo "<div class='container1'>";
		
		$sql = "SELECT * FROM timetable WHERE tid='".$tid[$i]."';";
		$res = mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($res);
		$date=$arr['date'];
		$start_time=$arr['start_time'];
		$end_time=$arr['end_time'];
		$scode = $arr['scode'];
		
		$sql = "SELECT name FROM subject WHERE scode='".$scode."';";
		$res = mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($res);
		$sname = $arr['name'];
		
		echo "<h2>".$sname."</h2>";
		$date = strtotime($date);
		$d = date('d/m/Y', $date );
		$start_time=strtotime($start_time);
		$st = date('g:i A',$start_time);	
		$end_time=strtotime($end_time);
		$et = date('g:i A',$end_time);	

		echo "<h3>".$d.", from ".$st." to ".$et."</h3>";
		
		$class = array();
		$sql = "SELECT cid FROM examseat WHERE tid='".$tid[$i]."';";
		$res = mysqli_query($conn,$sql);
		while($arr=mysqli_fetch_assoc($res)){
			$t = $arr['cid'];
			array_push($class,$t);
		}
		
		for($j=0; $j<count($class); $j++){
			$sql = "SELECT fid FROM supervisor WHERE tid='".$tid[$i]."' AND cid='".$class[$j]."';";
			$res = mysqli_query($conn,$sql);
			$arr=mysqli_fetch_assoc($res);
			$fid = $arr['fid'];
			
			$sql = "SELECT name FROM faculty WHERE fid='".$fid."';";
			$res = mysqli_query($conn,$sql);
			$arr=mysqli_fetch_assoc($res);
			$name = $arr['name'];
			
			echo "<h3>".$class[$j]." : ".$name."</h3>";
		}
		
		$sql = "SELECT fid FROM relieve WHERE tid='".$tid[$i]."';";
		$res = mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($res);
		$f = $arr['fid'];
		$sql = "SELECT name FROM faculty WHERE fid='".$f."';";
		$res = mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($res);
		$name = $arr['name'];
		echo "<h3>Relieving Supervisor : ".$name."</h3>";
		echo "</div><br/>";
	}
	
?>
</div>
</body>
</html>

