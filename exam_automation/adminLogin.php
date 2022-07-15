<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/w3.css">

<head>
	<title>Admin Login</title>
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

  <img class="mySlides" src="images/IMG_001.jpg" style="width:1535px;height:753px;">
  <img class="mySlides" src="images/IMG_002.jpg" style="width:1535px;height:753px;">
  <img class="mySlides" src="images/IMG_003.jpg" style="width:1535px;height:753px;">
  <img class="mySlides" src="images/IMG_004.jpg" style="width:1535px;height:753px;">
  <img class="mySlides" src="images/IMG_005.jpg" style="width:1535px;height:753px;">

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
	<h1>Admin Login</h1>

    <label for="id"><b>ID</b></label>
    <input type="text" placeholder="Enter ID" name="id" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn" name="btn">Login</button>
  </form>
</div>

<?php

	if(isset($_POST['btn'])){
		
		$id = $_POST['id'];
		$psw = $_POST['psw'];
		
		if(strcmp($id, "jss_admin") === 0 && strcmp($psw, "admin123") === 0){
			header("Location: adminScreen.php");
		} 
		else {
			echo "<script> alert('Wrong ID or Password'); </script>";
		}
	}
?>


</body>
</html>