<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/w3.css">

<head>
	<title>Student Login</title>
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

  <img class="mySlides" src="images/IMG_006.jpg" style="width:1535px;height:753px;">
  <img class="mySlides" src="images/IMG_007.jpg" style="width:1535px;height:753px;">
  <img class="mySlides" src="images/IMG_008.jpg" style="width:1535px;height:753px;">
  <img class="mySlides" src="images/IMG_009.jpg" style="width:1535px;height:753px;">
  <img class="mySlides" src="images/IMG_010.jpg" style="width:1535px;height:753px;">

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
    <h1>Student Login</h1>

    <label for="usn"><b>USN</b></label>
    <input type="text" placeholder="Enter USN" name="usn" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn" name="btn">Login</button>
  </form>
</div>

<?php
	
  if(isset($_POST['btn'])){
		
	$usn = $_POST['usn'];
	$psw = $_POST['psw'];
		
	if(strcmp($psw, "user123") === 0){
		session_start();
		$_SESSION['usn']=$usn;
		header("Location: studentDisplay.php");
	} 
	else {
		echo "<script> alert('Wrong ID or Password'); </script>";
	}
  }
?>

</body>
</html>