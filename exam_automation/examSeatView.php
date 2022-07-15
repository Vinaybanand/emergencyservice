<!DOCTYPE html>
<html>
<head>
<title>Exam Seat View</title>
<link rel="stylesheet" href="css/contentPage.css">
</head>

<?php
	
		$scode_arr = array();
		$sub_arr = array();
		
		$conn = mysqli_connect("localhost","root",'',"exam_automation");
		
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());	
		}
		
		$sql = "SELECT scode,name FROM subject WHERE scode IN (SELECT scode FROM timetable);";
		$res = mysqli_query($conn,$sql);
		while($arr=mysqli_fetch_assoc($res)){
			$t = $arr['scode'];
			array_push($scode_arr,$t);
			$l = $arr['name'];
			array_push($sub_arr,$l);
		}
		
?>

<body>
<a href="adminScreen.php" class="previous">Back</a>
<div class="register_box">
	<h1>Exam Seat View</h1>
</div>
    
<style>
	.btn {
		border-radius: 0%;
	}
	
	select {
		width: 30%
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
	
    <button class="btn" name="b1" id="b1" style="position:relative; left:460px;">Show</button>
	
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
		
		session_start();
		$_SESSION['tid'] = $tid;
		echo "<script> alert('".$_SESSION['tid']."'); </script>";
		header("Location: show301.php");
	}
?>

</body>
</html>

