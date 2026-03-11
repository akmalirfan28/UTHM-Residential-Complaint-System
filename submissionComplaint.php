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
  margin-top: 3px;
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
    margin-top: 50px;
  height: 1150px; /* Used in this example to enable scrolling */
}
    img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
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

        

        a {
            text-decoration: none;
            font-size: 22px;
            color: white;
        }

        .button {
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .add {
            background-color: white;
            color: black;
            border: 2px solid blue;
            margin-left: 150px;
        }

        .add:hover {
            background-color: blue;
            color: white;
        }

        body,
        html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("background.jpg");

            /* Full height */
            height: 5%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        

       

        .container {
            border-radius: 5px;
            margin: 25px;
            width: 1000px;
            height: 950px;
            position: static;
            padding: 20px;
            background-color: antiquewhite;
            margin: auto;
        }

        .col-25 {
            float: left;
            width: 400px;
            margin-top: 6px;
            margin-left: 150px;
        }

        .col-75 {
            float: left;
            width: 1000px;
            margin-top: 6px;
            margin-left: 150px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        h2 {
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            background-color: turquoise;
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
        <a  href="DashboardStaff.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
        <a href="acc.php"><i class="fa fa-fw fa-user"></i>Profile</a>
        <a class="active" href="submissionComplaint.php"><i class="fa fa-fw  fa-paper-plane"></i>Submit Complaint</a>
        <a href="datacomplaint.php"><i class="fa fa-fw fa-area-chart"></i>Data Complaint</a>
        <a href="Logout.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
    </div>
</div>
   
    <div class="main">
    <h1 style="margin-left: 130px;margin-top: 50px;margin-right: 130px;padding: 30px;"> COMPLAINT FORM </h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8">
                <form action="submit.php" method="get">
                    <div class="row">
                        <div class="col-25">
                            <label for="nama">STUDENT NAME</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="nama" name="nama" placeholder="eg: Ali Bin Abu" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="blok" class="form-label">BLOK</label>
                        </div>
                        <div class="col-75">
                            <select class="form-select form-select-lg" id="blok" name="blok">
                                <option>A1</option>
                                <option>A2</option>
                                <option>A5</option>
                                <option>A6</option>
                                <option>A10</option>
                                <option>A11</option>
                                <option>A12</option>
                                <option>A13</option>
                                <option>A14</option>
                                <option>A15</option>
                                <option>A16</option>
                                <option>A17</option>
                                <option>A18</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="aras" class="form-label">LEVEL</label>
                        </div>
                        <div class="col-75">
                            <select class="form-select form-select-lg" id="aras" name="aras">
                                <option value="1">1</option>
                                <option >2</option>
                                <option >3</option>
                                <option >4</option>
                                <option >5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="bilik" class="form-label">ROOM NUMBER</label>
                        </div>
                        <div class="col-75">
                            <select class="form-select form-select-lg" id="bilik" name="bilik">
                                    <option style="text-align: center;" disabled>----- LEVEL 1 -----</option>
                                <option>B101</option>
                                <option>B102</option>
                                <option>B103</option>
                                <option>B104</option>
                                <option>B105</option>
                                <option>B106</option>
                                <option>B107</option>
                                <option>B108</option>
                    
                                    <option style="text-align: center;" disabled>----- LEVEL 2 -----</option>
                                <option>B201</option>
                                <option>B202</option>
                                <option>B203</option>
                                <option>B204</option>
                                <option>B205</option>
                                <option>B206</option>
                                <option>B207</option>
                                <option>B208</option>
                                
                                <option style="text-align: center;" disabled>----- LEVEL 3 -----</option>
                                <option>B301</option>
                                <option>B302</option>
                                <option>B303</option>
                                <option>B304</option>
                                <option>B305</option>
                                <option>B306</option>
                                <option>B307</option>
                                <option>B308</option>
                                
                                <option style="text-align: center;" disabled>----- LEVEL 4 -----</option>
                                <option>B401</option>
                                <option>B402</option>
                                <option>B403</option>
                                <option>B404</option>
                                <option>B405</option>
                                <option>B406</option>
                                <option>B407</option>
                                <option>B408</option>
                               
                                <option style="text-align: center;" disabled>----- LEVEL 5 -----</option>
                                <option>B501</option>
                                <option>B502</option>
                                <option>B503</option>
                                <option>B504</option>
                                <option>B505</option>
                                <option>B506</option>
                                <option>B507</option>
                                <option>B508</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="aduan">COMPLAINT</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="aduan" name="aduan" placeholder="eg: Kipas rosak" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="telefon">PHONE NUMBER (+60)</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="telefon" name="telefon" placeholder="eg: 011-12458956" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="tarikh">DATE</label>
                        </div>
                        <div class="col-75">
                            <input type="date" id="tarikh" name="tarikh" placeholder="eg: 2022/1/20" required>
                        </div>
                    </div>

                    <br>

                    <button class="button add">SUBMIT</button>
                </form>
                
            </div>
        </div>
        </div>
         </div>
       
</body>

</html>