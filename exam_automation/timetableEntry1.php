<!DOCTYPE html>
<html>
<head>
<title>Time Table Entry</title>
<link rel="stylesheet" href="css/contentPage.css">
</head>

<?php
		ini_set("display_errors",0);
		$scode_arr = array();
		$sub_arr = array();
		//$sem_arr = array();
		
		$conn = mysqli_connect("localhost","root",'',"exam_automation");			-	
		
		$sql = "SELECT scode,name,sem FROM subject;";
		
		
		$res = mysqli_query($conn,$sql);
		while($arr=mysqli_fetch_assoc($res)){
			$t = $arr['scode'];
			array_push($scode_arr,$t);
			$l = $arr['name'];
			array_push($sub_arr,$l);
			//$n = $arr['sem'];
			//array_push($sem_arr,$n);
		}
		
?>

<body>
<a href="adminScreen.php" class="previous">&laquo; Back</a>
<div class="register_box">
    <h1>Time Table Entry</h1>
</div>
    
<style>
	.btn {
		border-radius: 0%;
	}
	
	select {
		width: 40%
	}
	
</style>
	
<br>

<div class="contact_box">
    <form method="POST" action="#">

    <label for="date">Date</label>
	<br/>
    <input type="date" id="date" name="date">
	<br/>

    <label for="start_time">Start Time</label>
	<br/>
    <input type="time" id="start_time" name="start_time" placeholder="Enter the start time here...">
	<br/>
	
    <label for="end_time">End Time</label>
	<br/>
    <input type="time" id="end_time" name="end_time" placeholder="Enter the end time here...">
	<br/>

	<label for="sem">Semester</label>
	<select name = "sem" style="width:15%">
		<option value="0">Select Semester</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>		
	</select>

	<label for="sub">Subject</label>
	<select name = "sub">
		<option value="0">Select Subject</option>
		<?php
			for($i=0; $i<count($scode_arr); $i++){
				echo "<option value='".$scode_arr[$i]."'>".$scode_arr[$i]." - ".$sub_arr[$i]."</option>";
			}
		?>
	</select>	
	<br/>
	
	<label for="sem2">Semester</label>
	<select name = "sem2" style="width:15%">
		<option value="0">Select Semester</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>		
	</select>

	<label for="sub2">Subject</label>
	<select name = "sub2">
		<option value="0">Select Subject</option>
		<?php
			for($i=0; $i<count($scode_arr); $i++){
				echo "<option value='".$scode_arr[$i]."'>".$scode_arr[$i]." - ".$sub_arr[$i]."</option>";
			}
		?>
	</select>	
	<br/>
	
    <button class="btn" name="b1" id="b1">Submit</button>
    <button class="btn" onclick="clearFields()" type="reset" value="Reset">Clear</button>
	
	</form>
</div>

<script>

  function clearFields(){
		document.getElementById('date').value='';
		document.getElementById('start_time').value='';
		document.getElementById('end_time').value='';
		document.getElementById('sem').value='0';
		document.getElementById('sub').value='0';
		document.getElementById('sem2').value='0';
		document.getElementById('sub2').value='0';
  }
  
</script>
 
<?php

	if(isset($_POST['b1'])){

	$date = $_POST['date'];
	$start_time = $_POST['start_time'];
	$end_time = $_POST['end_time'];
	$sem = $_POST['sem'];
	$sub = $_POST['sub'];
	$sem2 = $_POST['sem2'];
	$sub2 = $_POST['sub2'];

	$conn = mysqli_connect("localhost","root",'',"exam_automation");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());	
	}
	
	$sql = "INSERT INTO timetable(tid,date,start_time,end_time,sem,scode) VALUES(NULL, '".$date."', '".$start_time."', '".$end_time."', '".$sem."', '".$sub."');";
	
	if (mysqli_query($conn, $sql)) {
		echo "<script> alert('Timetable updated'); </script>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	if (strcmp($sem2, "0") === 0){
		echo "<script> alert('No more subjects on this day'); </script>";
	}
	else{
		$sql = "INSERT INTO timetable(tid,date,start_time,end_time,sem,scode) VALUES( NULL,'".$date."', '".$start_time."', '".$end_time."', '".$sem2."', '".$sub2."');";
	
		if (mysqli_query($conn, $sql)) {
			echo "<script> alert('Timetable updated'); </script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

	}
	
?>

</body>
</html>

