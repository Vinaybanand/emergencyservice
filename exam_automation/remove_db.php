<?php
$connect=mysqli_connect("localhost","root",'',"exam_automation");
$sql= "DELETE FROM subject WHERE 1";
mysqli_query($connect, $sql);
echo "DATA FROM subject TABLE REMOVED SUCCESSFULLY!";
echo "<br>";
$sql= "DELETE FROM class WHERE 1";
mysqli_query($connect, $sql);
echo "DATA FROM class TABLE REMOVED SUCCESSFULLY!";
echo "<br>";
$sql= "DELETE FROM takes WHERE 1";
mysqli_query($connect, $sql);
echo "DATA FROM takes TABLE REMOVED SUCCESSFULLY!";
echo "<br>";
$sql= "DELETE FROM teaches WHERE 1";
mysqli_query($connect, $sql);
echo "DATA FROM teaches TABLE REMOVED SUCCESSFULLY!";
echo "<br>";
$sql= "DELETE FROM faculty WHERE 1";
mysqli_query($connect, $sql);
echo "DATA FROM faculty TABLE REMOVED SUCCESSFULLY!";
echo "<br>";
$sql= "DELETE FROM studentLogin WHERE 1";
mysqli_query($connect, $sql);
echo "DATA FROM studentLogin TABLE REMOVED SUCCESSFULLY!";
?>