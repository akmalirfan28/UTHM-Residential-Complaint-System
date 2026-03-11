<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Lato", sans-serif;
            margin: auto;
            background-image: url("backgroundProfile.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            overflow-x: hidden;
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
            margin-top: 23px;
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
            height: 100%;
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
            max-width: 400px;
            margin: auto;
            text-align: center;
            font-family: arial;
            background-color: #FFFFFF;
            position: inherit;
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

        <meta name="viewport"content="width=device-width, initial-scale=1"><style>body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }
        
        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
            object-position: right;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
            object-position: right;
            height: 700px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: midnightblue;
            color: white;
        }

        .container {
            padding: 0 16px;
            text-align: center;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
            text-align: right;

        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
                text-align: right;
            }
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
        <a href="DashboardStaff.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
        <a class="active" href="profile.php"><i class="fa fa-fw fa-user"></i>Profile</a>
        <a href="submissionComplaint.php"><i class="fa fa-fw  fa-paper-plane"></i>Submit Complaint</a>
        <a href="datacomplaint.php"><i class="fa fa-fw fa-area-chart"></i>Data Complaint</a>
        <a href="Logout.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
    </div>
</div>
    <div class="main">

    <div class="about-section">
        <h1>PROFILE</h1>
        <h1>KOLEJ KEDIAMAN KAMPUS PAGOH</h1>
        <p1>DENGAN HIKMAH KAMI MENEROKA</p1>
    </div>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="pengetua1.jpg" alt="pengetua" style="width:100%;height:370px">
                <div class="container">
                    <h2>TS. HJ. SUHAIRI BIN ISMAIL</h2>
                    <p class="title">PENGETUA KOLEJ KEDIAMAN KAMPUS PAGOH</p>
                    <p>STAFF ID: F5332</p>
                    <p>EMAIL: suhariIsmail@gmail.com</p>
                    <p>NO TEL: 0134580432</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="timbalan1.jpg" alt="timbalan1" style="width:100%">
                <div class="container">
                    <h2>DR. MOHD FAISAL BIN HUSHIM</h2>
                    <p class="title">TIMBALAN PENGETUA 1 KOLEJ KEDIAMAN KAMPUS PAGOH</p>
                    <p>STAFF ID : F7742</p>
                    <p>EMAIL: faisalhushim@gmail.com</p>
                    <p>NO TEL: 0159285341</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="timbalan2.jpg" alt="timbalan2" style="width:100%;height:370px">
                <div class="container">
                    <h2>TS. DR. NORRIZAM MOHMAD JAAT@MOHD NOH</h2>
                    <p class="title">TIMBALAN PENGETUA 2 KOLEJ KEDIAMAN KAMPUS PAGOH</p>
                    <p>STAFF ID: F6642</p>
                    <p>EMAIL: norrizamJaat@gmail.com</p>
                    <p>NO TEL: 0192289898</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

