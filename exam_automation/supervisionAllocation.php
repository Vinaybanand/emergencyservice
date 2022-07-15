<!DOCTYPE html>
<html>
<head>
<title>Supervision Allocation</title>
<link rel="stylesheet" href="css/contentPage.css">
</head>

<?php
	
		$scode_arr = array();
		$sub_arr = array();
		
		$conn = mysqli_connect("localhost","root",'',"exam_automation");
		
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());	
		}
		
		$sql = "SELECT scode,name FROM subject where scode in (SELECT scode FROM timetable);";
		$res = mysqli_query($conn,$sql);
		while($arr=mysqli_fetch_assoc($res)){
			$t = $arr['scode'];
			array_push($scode_arr,$t);
			$l = $arr['name'];
			array_push($sub_arr,$l);
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
	
</style>
	
<br>

<div class="contact_box">
    <form method="POST" action="#">

	<label for="sub">Subject</label>
	<select name = "sub">
		<option value="0">Select Subject</option>
		<?php
			for($i=0; $i<count($scode_arr); $i++){
				echo "<option value='".$scode_arr[$i]."'>".$scode_arr[$i]." - ".$sub_arr[$i]."</option>";
			}
		?>
	</select>

    <button class="btn" name="b1" id="b1" style="position:relative; left:140px;">Allocate</button>
    
	</form>
</div>
 
<?php

	if(isset($_POST['b1'])){
	
		$sub = $_POST['sub'];
	
		$conn = mysqli_connect("localhost","root",'',"exam_automation");
		$sql = "SELECT tid FROM timetable WHERE scode='".$sub."';";	
		$res = mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($res);
		$tid = $arr['tid'];
		
		$class = array();
		
		$sql = "SELECT cid FROM examseat WHERE tid='".$tid."';";	
		$res = mysqli_query($conn,$sql);
		while($arr=mysqli_fetch_assoc($res)){
			$q = $arr['cid'];
			array_push($class,$q);
		}	
		
		$sql = "SELECT count(cid) as count FROM examseat WHERE tid='".$tid."';";	
		$res = mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($res);
		$n = $arr['count'];
		$n = (int)$n;
		$n = $n + 1;
	
		$fid = array();
		
		$sql = "SELECT DISTINCT fid FROM teaches WHERE fid NOT IN(SELECT fid FROM teaches WHERE scode='".$sub."') ORDER BY rand() limit ".($n+1).";";	
	
		$res = mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($res);
		while($arr=mysqli_fetch_assoc($res)){
			$g = $arr['fid'];
			array_push($fid,$g);
		}	
		
		for($i = 0; $i<($n-1); $i++){
			$sql = "INSERT INTO supervisor(tid, class, fid) VALUES('".$tid."', '".$class[$i]."', '".$fid[$i]."');";
			mysqli_query($conn,$sql);
			$sql = "SELECT name FROM faculty WHERE fid='".$fid[$i]."';";	
			$res = mysqli_query($conn,$sql);
			$arr=mysqli_fetch_assoc($res);
			$l = $arr['name'];
			echo "<script> alert('Class Room No. ".$class[$i]." : ".$l."'); </script>";
		}
		
		$sql = "INSERT INTO relieve(tid, fid) VALUES('".$tid."', '".$fid[$i]."');";
		mysqli_query($conn,$sql);
		$sql = "SELECT name FROM faculty WHERE fid='".$fid[$i]."';";	
		$res = mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($res);
		$l = $arr['name'];
		echo "<script> alert('Relieving Supervisor : ".$l."'); </script>";
	}
	
?>

</body>
</html>

