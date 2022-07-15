<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style1.css">
  
  <style>
  
  body{
	background-size: 100%;
	background-repeat: no-repeat;
  }
  
  .btn-main{
	border-radius: 50%;
	font-size: 26px;
  }
  
  </style>
</head>
<body background="images/bg.jpg">

<div class="card text-center cardCustom">
  <div class="card-header">
    <h1>EXAM MANAGEMENT WEB PAGE</h1>
  </div>
  <div class="card-body">
    <div class="row">
    <div class="col">
      <button class="btn btn-info btn-main" onclick="window.open('studentLogin.php','_self');">Student</button>
    </div>
	</div>
	<br>
    <div class="row">
    <div class="col">
      <button class="btn btn-info btn-main" onclick="window.open('facultyLogin.php','_self');">Faculty</button>
    </div>
	</div>
	<br>
    <div class="row">
    <div class="col">
      <button class="btn btn-info btn-main" onclick="window.open('adminLogin.php','_self');">Admin</button>
    </div>
	</div>
    
  </div>
  </div>
</div>
</body>
</html>
