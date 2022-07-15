<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/w3.css">

<head>
	<title>Faculty Login</title>
</head>
<style>

.overlay{
	
		height: 753px;
}

.container{
	
		left: 600px;
}

</style>
<body>

  <div class="centered">
    <!-- Slide Show -->

  <img class="mySlides" src="images/IMG_011.jpg" style="width:1535px;height:753px;">
  <img class="mySlides" src="images/IMG_012.jpg" style="width:1535px;height:753px;">
  <img class="mySlides" src="images/IMG_013.jpg" style="width:1535px;height:753px;">
  <img class="mySlides" src="images/IMG_014.jpg" style="width:1535px;height:753px;">
  <img class="mySlides" src="images/IMG_015.jpg" style="width:1535px;height:753px;">

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>
  </div>
<div class="overlay">
	
</div>
 <div class="bg-img">
  <form class="container" action="#" method="POST">
	<a href="homeScreen.php" class="previous">&laquo; Back</a>
    <h1>Faculty Login</h1>

    <label for="fid"><b>Faculty ID</b></label>
    <input type="text" placeholder="Enter Faculty ID" name="fid" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn" name="btn">Login</button>
	</form>
</div>

<?php
if(isset($_POST['btn'])){
		
	$fid = $_POST['fid'];
	$psw = $_POST['psw'];
		
	if(strcmp($psw, "12345") === 0){
		session_start();
		$_SESSION['fid']=$fid;
		header("Location: facultyDisplay.php");
	} 
	else {
		echo "<script> alert('Wrong ID or Password'); </script>";
	}
  }
?>
</body>
</html>
