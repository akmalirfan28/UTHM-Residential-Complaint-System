<?php
	if(isset($_POST['login'])){
 
		session_start();
		include 'connection.php';   
 
		$highId=$_POST['ID'];
		$highPass=$_POST['password'];
 
		$query=mysqli_query($conn,"SELECT * FROM higherups WHERE highId='$highId' && highPass='$highPass'");
 
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			header('location:LoginHigherups.php');
		}
		else{
			$row=mysqli_fetch_array($query);
 
			if (isset($_POST['remember'])){
				//set up cookie
				setcookie("id", $row['ID'], time() + (86400 * 30)); 
				setcookie("pass", $row['password'], time() + (86400 * 30)); 
			}
 
			header('location:DashboardHigherups.php');
		}
	}
	else{
		header('LoginHigherups.php');
		$_SESSION['message']="Please Login!";
	}
?>
