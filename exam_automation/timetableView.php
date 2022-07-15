<!DOCTYPE html>
<html>
<head>
<title>Time Table View</title>
<link rel="stylesheet" href="css/contentPage.css">
</head>

<?php
	
		$date_array = array();
		
		$conn = mysqli_connect("localhost","root",'',"exam_automation");
		
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());	
		}
		
		$sql = "SELECT distinct date FROM timetable;";
		$res = mysqli_query($conn,$sql);
		while($arr=mysqli_fetch_assoc($res)){
			$t = $arr['date'];
			array_push($date_array,$t);
		}
		
?>

<body>
<a href="adminScreen.php" class="previous">Back</a>
<div class="register_box">
	<h1>Time Table View</h1>
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

	<label for="d">Date of Examination</label>
	<select name = "d">
		<option value="0">Select Date</option>
		<?php
			for($i=0; $i<count($date_array); $i++){
				echo "<option value='".$date_array[$i]."'>".$date_array[$i]."</option>";
			}
		?>
	</select>	
	
    <button class="btn" name="b1" id="b1" style="position:relative; left:460px;">Show</button>
	
	</form>
</div>
 
<?php
	
	if(isset($_POST['b1'])){
		
		$dt = $_POST['d'];
		
		session_start();
		$_SESSION['dt'] = $dt;
		header("Location: timeSubView.php");
	}
?>

</body>
</html>

