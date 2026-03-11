<!DOCTYPE html>
<html>
    <head>
    
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
            background-image: url("");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            overflow: auto;
    }

    * {
        box-sizing: border-box;
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
    
    /* Set a style for all buttons */
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity: 1;
    }

    /* Float cancel and delete buttons and add an equal width */
    .cancelbtn,
    .deletebtn {
        float: left;
        width: 50%;
    }

    /* Add a color to the cancel button */
    .cancelbtn {
        background-color: #ccc;
        color: black;
    }

    /* Add a color to the delete button */
    .deletebtn {
        background-color: powderblue;
    }

    /* Add padding and center-align text to the container */
    .container {
        padding: 16px;
        text-align: center;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 50%;
        /* Full width */
        height: 50%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: #474e5d;
        padding-top: 50px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 10% 25% 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 30%;
        /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* The Modal Close Button (x) */
    .close {
        position: absolute;
        right: 35px;
        top: 15px;
        font-size: 40px;
        font-weight: bold;
        color: #f1f1f1;
    }

    .close:hover,
    .close:focus {
        color: #f44336;
        cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    .main {
            margin-left: 240px; /* Same as the width of the sidenav */
            padding: 0px 10px;
            margin-top: 30px;
            height: 100%; /* Used in this example to enable scrolling */
        }
    /* Change styles for cancel button and delete button on extra small screens */
    @media screen and (max-height: 450px) {

        .cancelbtn,
        .deletebtn {width: 100%;}
        .sidebar {padding-top: 15px;}
        .sidebar a {font-size: 18px;}
    }

    img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    
    h2 {
        text-align: center;
    }

</style>
</head>
<body>
 <div class="topnav">
        
        <a class="active" href="LogoutHigherups.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
            
    
  <span style="font-size:28px;cursor:pointer;color:White;margin-left: 20px;" onclick="openNav()">&#9776;  UTHM RESIDENTIAL COMPLAINT SYSTEM </span>
  
    
</div>  
    <div class="sidebar">
    <div class="sidenav">
        <img src="logokkp.jpg" alt="logo" style="width:50%" ;>
        <br>
        <a href="DashboardHigherups.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
        <a href="ProfileHigherups.php"><i class="fa fa-fw fa-user"></i>Profile</a>
        <a class="active" href="DataComplaintHigherups.php"><i class="fa fa-fw fa-area-chart"></i>Data Complaint</a>
        <a href="ListStaff.php"><i class="fa fa-solid fa-list-ul"></i> List Fellow</a>
        <a href="LogoutHigherups.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
    </div>
</div>
    <br>
    <br>
    <br>

    


    <form class="modal-content" action="/action_page.php" method="post">
        <div class="container">
            <?php
            include 'connection.php';   
            $bil = $_GET['bil'];
            ?>
            
            <h1>UPDATE STATUS</h1>
            <p>HAS THE MAINTENANCE BEEN COMPLETED?</p>

            <div class="clearfix">
                <button type="button" class="cancelbtn" name = "cancel" value = "cancel"><a href="DataComplaintHigherups.php" class="btn">NO</a></button>
                <button type="button" class="deletebtn" name = "delete" value = "delete"><a href="Done.php?bil=<?php echo $bil; ?>" class="btn">YES</a></button>
            </div>
        </div>
    </form>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script>

</body>

<style>
    body {
        background-image: url('background.jpeg');
    }

</style>

</html>

