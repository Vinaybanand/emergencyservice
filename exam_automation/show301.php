<!DOCTYPE html>
<html>
<head>
<title>Room no. 101</title>
<link rel="stylesheet" href="css/contentPage.css">

<style>

.shape{
  text-align:center;
  background-color:rgba(3,78,136,0.7);
  width:200px;
  height:60px;
  line-height:60px;
  color:white;
}

.shaped{
  text-align:center;
  background-color:rgba(255,255,255,0.7);
  width:60px;
  height:60px;
  line-height:60px;
  color:black;
  border: 2px solid;
}

</style>

</head>

<?php

	session_start();
	$tid = $_SESSION['tid'];
	
	$usn = array();
	$usn = array_fill(0,30,'<?php echo $usn[0];?>');
	$q = 0;
	
	$conn = mysqli_connect("localhost","root",'',"exam_automation");
	$sql = "SELECT scode FROM timetable WHERE tid='".$tid."'";	
	$res = mysqli_query($conn,$sql);
	$arr=mysqli_fetch_assoc($res);
	$sub = $arr['scode'];
	
	$sql = "SELECT * FROM examseat WHERE tid='".$tid."' AND cid='101';";	
	$res = mysqli_query($conn,$sql);
	$arr=mysqli_fetch_assoc($res);
	$start_usn = $arr['start_usn'];
	$end_usn = $arr['end_usn'];

	$sql = "SELECT usn FROM takes WHERE scode='".$sub."' AND usn BETWEEN '".$start_usn."' AND '".$end_usn."' ORDER BY backlog_status asc;";	
	$res = mysqli_query($conn,$sql);
	while($arr=mysqli_fetch_assoc($res)){
		$usn[$q]=$arr['usn'];
		$q = $q+1;
	}

?>


<body>
	<div class="shape" style="position:absolute; left: 680px; top: 20px;">101</div>
	<br/>
	<br/>
	
		<div class="shaped" style="position:absolute; left: 300px; top: 150px;">1L</div>
		<p style="position:absolute; left: 290px; top: 210px;"><?php echo $usn[0];?></p>
		<div class="shaped" style="position:absolute; left: 400px; top: 150px;">1R</div>
		<p style="position:absolute; left: 390px; top: 210px;"><?php echo $usn[15];?></p>
		<div class="shaped" style="position:absolute; left: 700px; top: 150px;">10L</div>
		<p style="position:absolute; left: 690px; top: 210px;"><?php echo $usn[9];?></p>
		<div class="shaped" style="position:absolute; left: 800px; top: 150px;">10R</div>
		<p style="position:absolute; left: 790px; top: 210px;"><?php echo $usn[24];?></p>
		<div class="shaped" style="position:absolute; left: 1100px; top: 150px;">11L</div>
		<p style="position:absolute; left: 1090px; top: 210px;"><?php echo $usn[10];?></p>
		<div class="shaped" style="position:absolute; left: 1200px; top: 150px;">11R</div>
		<p style="position:absolute; left: 1190px; top: 210px;"><?php echo $usn[25];?></p>
		
		<div class="shaped" style="position:absolute; left: 300px; top: 270px;">2L</div>
		<p style="position:absolute; left: 290px; top: 330px;"><?php echo $usn[1];?></p>
		<div class="shaped" style="position:absolute; left: 400px; top: 270px;">2R</div>
		<p style="position:absolute; left: 390px; top: 330px;"><?php echo $usn[16];?></p>
		<div class="shaped" style="position:absolute; left: 700px; top: 270px;">9L</div>
		<p style="position:absolute; left: 690px; top: 330px;"><?php echo $usn[8];?></p>
		<div class="shaped" style="position:absolute; left: 800px; top: 270px;">9R</div>
		<p style="position:absolute; left: 790px; top: 330px;"><?php echo $usn[23];?></p>
		<div class="shaped" style="position:absolute; left: 1100px; top: 270px;">12L</div>
		<p style="position:absolute; left: 1090px; top: 330px;"><?php echo $usn[11];?></p>
		<div class="shaped" style="position:absolute; left: 1200px; top: 270px;">12R</div>
		<p style="position:absolute; left: 1190px; top: 330px;"><?php echo $usn[26];?></p>
		
		<div class="shaped" style="position:absolute; left: 300px; top: 390px;">3L</div>
		<p style="position:absolute; left: 290px; top: 450px;"><?php echo $usn[2];?></p>
		<div class="shaped" style="position:absolute; left: 400px; top: 390px;">3R</div>
		<p style="position:absolute; left: 390px; top: 450px;"><?php echo $usn[17];?></p>
		<div class="shaped" style="position:absolute; left: 700px; top: 390px;">8L</div>
		<p style="position:absolute; left: 690px; top: 450px;"><?php echo $usn[7];?></p>
		<div class="shaped" style="position:absolute; left: 800px; top: 390px;">8R</div>
		<p style="position:absolute; left: 790px; top: 450px;"><?php echo $usn[22];?></p>
		<div class="shaped" style="position:absolute; left: 1100px; top: 390px;">13L</div>
		<p style="position:absolute; left: 1090px; top: 450px;"><?php echo $usn[12];?></p>
		<div class="shaped" style="position:absolute; left: 1200px; top: 390px;">13R</div>
		<p style="position:absolute; left: 1190px; top: 450px;"><?php echo $usn[27];?></p>

		<div class="shaped" style="position:absolute; left: 300px; top: 510px;">4L</div>
		<p style="position:absolute; left: 290px; top: 570px;"><?php echo $usn[3];?></p>
		<div class="shaped" style="position:absolute; left: 400px; top: 510px;">4R</div>
		<p style="position:absolute; left: 390px; top: 570px;"><?php echo $usn[18];?></p>
		<div class="shaped" style="position:absolute; left: 700px; top: 510px;">7L</div>
		<p style="position:absolute; left: 690px; top: 570px;"><?php echo $usn[6];?></p>
		<div class="shaped" style="position:absolute; left: 800px; top: 510px;">7R</div>
		<p style="position:absolute; left: 790px; top: 570px;"><?php echo $usn[21];?></p>
		<div class="shaped" style="position:absolute; left: 1100px; top: 510px;">14L</div>
		<p style="position:absolute; left: 1090px; top: 570px;"><?php echo $usn[13];?></p>
		<div class="shaped" style="position:absolute; left: 1200px; top: 510px;">14R</div>
		<p style="position:absolute; left: 1190px; top: 570px;"><?php echo $usn[28];?></p>
		
		<div class="shaped" style="position:absolute; left: 300px; top: 630px;">5L</div>
		<p style="position:absolute; left: 290px; top: 690px;"><?php echo $usn[4];?></p>
		<div class="shaped" style="position:absolute; left: 400px; top: 630px;">5R</div>
		<p style="position:absolute; left: 390px; top: 690px;"><?php echo $usn[19];?></p>
		<div class="shaped" style="position:absolute; left: 700px; top: 630px;">6L</div>
		<p style="position:absolute; left: 690px; top: 690px;"><?php echo $usn[5];?></p>
		<div class="shaped" style="position:absolute; left: 800px; top: 630px;">6R</div>
		<p style="position:absolute; left: 790px; top: 690px;"><?php echo $usn[20];?></p>
		<div class="shaped" style="position:absolute; left: 1100px; top: 630px;">15L</div>
		<p style="position:absolute; left: 1090px; top: 690px;"><?php echo $usn[14];?></p>
		<div class="shaped" style="position:absolute; left: 1200px; top: 630px;">15R</div>
		<p style="position:absolute; left: 1190px; top: 690px;"><?php echo $usn[29];?></p>

	</div>
	<a href="examSeatView.php" class="previous">Back</a>
	<a href="show302.php" class="previous" style="position:absolute; left: 1400px; top: 690px;">Next</a>
</body>
</html>

