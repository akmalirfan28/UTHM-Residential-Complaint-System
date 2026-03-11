<?php
// Initialize the session
session_start();
 
// Include config file
require_once "connection.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE staff SET staff_pass = ? WHERE staff_id = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_password, $param_id);
            
            // Set parameters
            $param_password = $new_password;
            $param_id = $_SESSION['ID'];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                
                header("location: acc.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ 
            font-family: "Lato", sans-serif;
            margin: auto;
            background-image: url("");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            overflow: auto;
        }
        
        .topnav {
            overflow: hidden;
            background-color: darkgoldenrod;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .topnav a {
            float: right;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
        
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 5;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 50px;
            margin-top: 53px;
        }

        .sidebar a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 23px;
            color: #818181;
            display: block;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 240px; /* Same as the width of the sidenav */
            padding: 0px 10px;
            margin-top: 30px;
            height: 100%; /* Used in this example to enable scrolling */
        }

        @media screen and (max-height: 450px) {
            .sidebar {padding-top: 15px;}
            .sidebar a {font-size: 18px;}
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        font-family: Arial;
        }

        * {
            box-sizing: border-box;
        }

        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
        }

        form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: grey;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        form.example button:hover {
            background: #0b7dda;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 100%;
            height: 100%;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: white;
        }

        th {
            text-align: center;
        }

        td {
            text-align: center;
        }
        
        tr:hover {background-color: coral;}

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
        
        .button1 {
            background-color: white;
            color: black;
            border: 2px solid mediumpurple;
        }

        .button1:hover {
            background-color: mediumpurple;
            color: white;
        }
        
        .container {
            border-radius: 5px;
            margin: 25px;
            width: 400px;
            height: 100%;
            position: static;
            padding: 20px;
            background-color: khaki;
            margin: auto;
        }
        .wrapper{ 
            width: 360px; 
            padding: 20px; 
            margin: auto;
        }
    </style>
</head>
<body>
<div class="topnav">
        
        <a class="active" href="Logout.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
            
    
  <span style="font-size:28px;cursor:pointer;color:White;margin-left: 20px;" onclick="openNav()">&#9776;  UTHM RESIDENTIAL COMPLAINT SYSTEM </span>
  
    
</div>
     <div class="sidebar">
    <div class="sidenav">
        <img src="logokkp.jpg" alt="logo" style="width:50%" ;>
            <br>

            <a class="active" href="DashboardStaff.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
            <a href="acc.php"><i class="fa fa-fw fa-user"></i>Profile</a>
            <a href="submissionComplaint.php"><i class="fa fa-fw  fa-paper-plane"></i>Submit Complaint</a>
            <a href="datacomplaint.php"><i class="fa fa-fw fa-area-chart"></i>Data Complaint</a>
            <a href="Logout.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="main">
    <div class="container mt-5">
    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="acc.php">Cancel</a>
            </div>
        </form>
    </div>  
        </div>
    </div>
</body>
</html>