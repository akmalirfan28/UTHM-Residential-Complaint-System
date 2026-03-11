<?php
	if(isset($_POST['login'])){
 
		session_start();
		include 'connection.php';   
 
		$staffId=$_POST['ID'];
		$staffPass=$_POST['password'];
 
		$query=mysqli_query($conn,"SELECT * FROM staff WHERE staff_id='$staffId' && staff_pass='$staffPass'");
 
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			header('location:Login.php');
		}
		else{
			$row=mysqli_fetch_array($query);
 
			if (isset($_POST['remember'])){
				//set up cookie
				setcookie("id", $row['ID'], time() + (86400 * 30)); 
				setcookie("pass", $row['password'], time() + (86400 * 30)); 
			}
            
            $_SESSION['ID'] = $staffId;
			header('location:DashboardStaff.php');
		}
	}
	else{
		header('location:Login.php');
		$_SESSION['message']="Please Login!";
	}
?>
