<?php
$connect=mysqli_connect("localhost","root",'',"exam_automation");
$html="<table border='1'>";
$handle = fopen("./DB_ENTRIES/subject1.csv", "r");
   while($data = fgetcsv($handle))
    {
        $html.="<tr>";
        $scode = mysqli_real_escape_string($connect, $data[0]);
        $sem = mysqli_real_escape_string($connect, $data[1]);
        $name = mysqli_real_escape_string($connect, $data[2]);
        $sql ="INSERT INTO subject(scode, name, sem) VALUES ('$scode','$name','$sem')";
        mysqli_query($connect, $sql);
        $html.='<td>'.$scode.'</td>';
        $html.='<td>'.$name.'</td>';
        $html.='<td>'.$sem.'</td>';
        $html.="</tr>";
    }
    fclose($handle);
    $handle = fopen("./DB_ENTRIES/class.csv", "r");
   while($data = fgetcsv($handle))
    {
        $html.="<tr>";
        $cid = mysqli_real_escape_string($connect, $data[0]);
        $sql ="INSERT INTO class(cid) VALUES ('$cid')";
        mysqli_query($connect, $sql);
        $html.='<td>'.$cid.'</td>';
        $html.="</tr>";
    }
    fclose($handle);
    $handle = fopen("./DB_ENTRIES/takes.csv", "r");
   while($data = fgetcsv($handle))
    {
        $html.="<tr>";
        $usn = mysqli_real_escape_string($connect, $data[0]);
        $backlog_status = mysqli_real_escape_string($connect, $data[1]);
        $scode = mysqli_real_escape_string($connect, $data[2]);
        $sql ="INSERT INTO takes(usn, backlog_status, scode) VALUES ('$usn','$backlog_status','$scode')";
        mysqli_query($connect, $sql);
        $html.='<td>'.$usn.'</td>';
        $html.='<td>'.$backlog_status.'</td>';
        $html.='<td>'.$scode.'</td>';
        $html.="</tr>";
    }
    fclose($handle);
    $handle = fopen("./DB_ENTRIES/teaches.csv", "r");
   while($data = fgetcsv($handle))
    {
        $html.="<tr>";
        $fid = mysqli_real_escape_string($connect, $data[0]);
        $scode = mysqli_real_escape_string($connect, $data[1]);
        $sql ="INSERT INTO teaches(fid, scode) VALUES ('$fid','$scode')";
        mysqli_query($connect, $sql);
        $html.='<td>'.$fid.'</td>';
        $html.='<td>'.$scode.'</td>';
        $html.="</tr>";
    }
    fclose($handle);
    $handle = fopen("./DB_ENTRIES/faculty.csv", "r");
   while($data = fgetcsv($handle))
    {
        $html.="<tr>";
        $fid = mysqli_real_escape_string($connect, $data[0]);
        $name = mysqli_real_escape_string($connect, $data[1]);
        $sql ="INSERT INTO faculty(fid, name) VALUES ('$fid','$name')";
        mysqli_query($connect, $sql);
        $html.='<td>'.$fid.'</td>';
        $html.='<td>'.$name.'</td>';
        $html.="</tr>";
    }
    fclose($handle);
    $handle = fopen("./DB_ENTRIES/studentLogin.csv", "r");
   while($data = fgetcsv($handle))
    {
        $html.="<tr>";
        $usn = mysqli_real_escape_string($connect, $data[0]);
        $name = mysqli_real_escape_string($connect, $data[1]);
        $contactNumber = mysqli_real_escape_string($connect, $data[2]);
        $sql ="INSERT INTO studentLogin(usn, name, contactNumber) VALUES ('$usn','$name','$contactNumber')";
        mysqli_query($connect, $sql);
        $html.='<td>'.$usn.'</td>';
        $html.='<td>'.$name.'</td>';
        $html.='<td>'.$contactNumber.'</td>';
        $html.="</tr>";
    }
    fclose($handle);
$html .='</table>';
echo $html;
echo '<br/>Data Inserted';

?>