<?php
		$conn = mysqli_connect("localhost", "root", '', "exam_automation");
		
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());	
		}
        $usn = "418IS16001";
        $pass = "9060334417";
        $sql_username = "SELECT usn FROM studentLogin WHERE usn = ".$usn.";";
        $sql_password = "SELECT contactNumber FROM studentLogin WHERE contactNumber = ".$pass.";";
        $res_usn = mysqli_query($conn,$sql_username);
        $res_pass = mysqli_query($conn,$sql_password);
       // echo "$res_usn";
        //echo "$res_pass";
        if(strcmp("418IS16001", $usn) === 0 && strcmp("9060334417", $pass) === 0){
            echo "SUCCESSFUL LOGIN!";
        }
        else{
            echo "CREDENTIALS MISMATCH";
        }

		//while($arr=mysqli_fetch_assoc($res)){
		//	$t = $arr['scode'];
		//	array_push($scode_arr,$t);
		//	$l = $arr['name'];
		//	array_push($sub_arr,$l);
		//}
		
?>