<!DOCTYPE html>
<html>
<head>
<title>Exam Seat Allocation</title>
<link rel="stylesheet" href="css/contentPage.css">
</head>

<?php
		$scode_arr = array();
		$sub_arr = array();
		
		$conn = mysqli_connect("localhost", "root", '', "exam_automation");
		
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
<a href="adminScreen.php" class="previous">&laquo; Back</a>
<div class="register_box">
    <h1>Exam Seat Allocation</h1>
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
	
	<label for="rob">Exam Type</label>
	<select name = "rob" style="width:15%">
		<option value="0">Select Type</option>
		<option value="R">Regular</option>
		<option value="B">Backlog</option>	
	</select>

	<label for="moe">Subject Type</label>
	<select name = "moe">
		<option value="0">Select Subject</option>
		<option value="M">Main Subject</option>
		<option value="E">Elective Subject</option>
	</select>	
	<br/>
	<br/>
	
    <button class="btn" name="b1" id="b1" style="position:relative; left:660px;">Allocate</button>
	<br/>
	<br/>
	<br/>

	</form>
</div>
 
<?php

	if(isset($_POST['b1'])){

		$sub = $_POST['sub'];
		$moe = $_POST['moe'];
		$rob = $_POST['rob'];
		$last = 0;
	
		$conn = mysqli_connect("localhost","root",'',"exam_automation");
		$sql = "SELECT tid FROM timetable WHERE scode='".$sub."';";	
		$res = mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($res);
		$tid = $arr['tid'];
		
		$sql = "SELECT count(*) AS count FROM examseat WHERE tid='".$tid."';";	
		$res = mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($res);
		$e = $arr['count'];	
		
		if(strcmp($e,"0") !== 0){
			echo "<script> alert('Already allocated');</script>";
		}
		else{
		
			if(strcmp($rob,"R") === 0){
			
				$sql = "SELECT count(*) AS count FROM takes WHERE scode = '".$sub."' AND backlog_status='0';";	
				$res = mysqli_query($conn,$sql);
				$arr=mysqli_fetch_assoc($res);
				$count = (int)$arr['count'];

				$n = (int)($count/30);
				if($count%30 != 0){
					$n = $n + 1;
					$last = $n;
				}
			
				$class = array();
			
				if(strcmp($moe, "M") === 0){
					$sql = "SELECT cid FROM class ORDER BY rand() limit ".$n.";";	
				}
				else{
					$g = substr($sub,0,6);
					$sql = "SELECT cid FROM class WHERE cid NOT IN (SELECT cid FROM examseat WHERE tid IN (SELECT tid FROM timetable WHERE scode LIKE '%".$g."%' AND tid != '".$tid."')) ORDER BY rand() LIMIT ".$n.";";
				}
				$res = mysqli_query($conn,$sql);
				while($arr=mysqli_fetch_assoc($res)){
					$q = $arr['cid'];
					array_push($class,$q);
				}
			
				$usn = array();
			
				$sql = "SELECT usn FROM takes WHERE scode='".$sub."' AND backlog_status='0';";	
				$res = mysqli_query($conn,$sql);
				while($arr=mysqli_fetch_assoc($res)){
					$q = $arr['usn'];
					array_push($usn,$q);
				}	

				for($i = 0; $i<$n; $i++){
					$x = $i * 30;
					if($last-1==$i){
						end($usn);
						$y = key($usn);
					}
					else{
						$y = (($i+1)*30)-1;
					}
					$sql = "INSERT INTO examseat(tid, class, usn) VALUES('".$tid."', '".$class[$i]."', '".$usn[$x]."', '".$usn[$y]."');";
					mysqli_query($conn,$sql);
					echo "<script> alert('Class no. ".($i+1)." for allocation is ".$class[$i]."');</script>";
				}
			
			}
			else{
				$sql = "SELECT tid FROM timetable WHERE date IN (SELECT date FROM timetable WHERE tid='".$tid."') AND tid!='".$tid."';";	
				$res = mysqli_query($conn,$sql);
				$arr=mysqli_fetch_assoc($res);
				$f = $arr['tid'];
				
				$sql = "SELECT count(*) AS count FROM takes WHERE scode = '".$sub."' AND backlog_status='1';";	
				$res = mysqli_query($conn,$sql);
				$arr=mysqli_fetch_assoc($res);
				$count = (int)$arr['count'];

				$n = (int)($count/30);
				if($count%30 != 0){
					$n = $n + 1;
					$last = $n;
				}
				
				$class = array();
			
				$sql = " select cid from class where cid not in(select cid from examseat where tid='".$f."') order by rand() limit ".$n.";";
				$res = mysqli_query($conn,$sql);
				while($arr=mysqli_fetch_assoc($res)){
					$q = $arr['cid'];
					array_push($class,$q);
				}
				
				$usn = array();
			
				$sql = "SELECT usn FROM takes WHERE scode='".$sub."' AND backlog_status='1';";	
				$res = mysqli_query($conn,$sql);
				while($arr=mysqli_fetch_assoc($res)){
					$q = $arr['usn'];
					array_push($usn,$q);
				}	

				for($i = 0; $i<$n; $i++){
					$x = $i * 30;
					if($last-1==$i){
						end($usn);
						$y = key($usn);
					}
					else{
						$y = (($i+1)*30)-1;
					}
					$sql = "INSERT INTO examseat(tid, class, usn) values('".$tid."', '".$class[$i]."', '".$usn[$x]."', '".$usn[$y]."');";
					mysqli_query($conn,$sql);
					echo "<script> alert('Class no. ".($i+1)." for allocation is ".$class[$i]."');</script>";
				}	
			}	
		}
		
	}
?>

</body>
</html>

