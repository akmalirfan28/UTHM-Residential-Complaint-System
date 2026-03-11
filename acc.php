<?php
// Initialize the session
session_start();
include 'connection.php';  
?>
<!DOCTYPE html>
<html>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Lato", sans-serif;
            margin: auto;
            background-image: url("backgroundProfile.jpg");
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
            color: black;
            font-size: 30px;
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
            width: 900px;
            height: 100%;
            position: static;
            padding: 20px;
            background-color: darkgoldenrod;
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

    <h2 style="text-align:center;color:white;">FELLOW PROFILE CARD</h2>

<div class="card">
    <?php

include 'connection.php';   

$staffId = $_SESSION['ID'];

$records = mysqli_query($conn, "SELECT * FROM staff WHERE staff_id='$staffId'");
    
while($data = mysqli_fetch_array($records))
{
?>
  <br>
  <h1><?php echo $data['staff_name']; ?></h1>
  <br>
  <p class="title"><?php echo $data['staff_phone']; ?></p>
  <br>
  <p style="font-size: 30px;"><?php echo $data['staff_email']; ?></p>
  <br>
  <p><a href="reset.php?id=<?php echo $data['staff_id']; ?>" class="btn btn-success">RESET PASSWORD</a></p>
<?php
}
?>
</div>
 </div>
</div>
</body>

</html>
