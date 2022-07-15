<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Screen</title>
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
  
  .previous{
  background-color: #126322;
  opacity: 0.8;
  color: white;
  text-decoration: none;
  font-size: 25px;
}
  
  </style>
</head>
<body background="images/bg.jpg">
<a href="adminLogin.php" class="previous">&laquo; Back</a>

<div class="card text-center cardCustom">
  <div class="card-header">
    <h1>ADMIN'S PAGE</h1>
  </div>
  <div class="card-body">
    <div class="row">
    <div class="col">
      <button class="btn btn-info btn-main" onclick="window.open('examSeatAllocation.php','_self');">Exam Seat Allocation</button>
    </div>
	</div>
	<br>
    <div class="row">
    <div class="col">
      <button class="btn btn-info btn-main" onclick="window.open('examSeatView.php','_self');">Exam Seat View</button>
    </div>
	</div>
	<br>
	<div class="row">
    <div class="col">
      <button class="btn btn-info btn-main" onclick="window.open('supervisionAllocation.php','_self');">Supervision Allocation</button>
    </div>
	</div>
	<br>
	<div class="row">
    <div class="col">
      <button class="btn btn-info btn-main" onclick="window.open('supervisionView.php','_self');">Supervision View</button>
    </div>
	</div>
	<br>
    <div class="row">
    <div class="col">
      <button class="btn btn-info btn-main" onclick="window.open('timetableEntry1.php','_self');">Timetable Entry</button>
    </div>
	</div>
   	<br>
    <div class="row">
    <div class="col">
      <button class="btn btn-info btn-main" onclick="window.open('timetableView.php','_self');">Timetable View</button>
    </div>
	</div>
  </div>
  </div>
</div>
</body>
</html>
