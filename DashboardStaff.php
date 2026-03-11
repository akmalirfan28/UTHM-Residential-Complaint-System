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
            background-image: url("background1.jpeg");
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
            display: block;
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
            height: 100%; /* Used in this example to enable scrolling */
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }

            .sidebar a {
                font-size: 18px;
            }
        }

            {
            box-sizing: border-box;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: skyblue;
            color: white;
        }
        
        .fa-facebook:hover {
            opacity: 0.7;
        }
        
        .fa-instagram:hover {
            opacity: 0.7;
        }
        
        .fa-facebook {
            padding: 20px;
            font-size: 30px;
            width: 70px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
            background: #3B5998;
            color: white;
        }
        
        .fa-instagram {
            padding: 20px;
            font-size: 30px;
            width: 70px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        background: #125688;
            color: white;
        }
    </style>
</head>

<body>
    <div class="topnav" style="z-index:10">

        <a class="active" href="Logout.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>


        <span style="font-size:28px;cursor:pointer;color:White;margin-left: 20px;" onclick="openNav()">&#9776; UTHM RESIDENTIAL COMPLAINT SYSTEM </span>

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

    <div class="main">
        <div class="about-section" style="width:100%;">
            <h1>UTHM RESIDENTIAL COMPLAINT SYSTEM</h1>
            <p>UTHM - Kampus Cawangan Pagoh
                Hab Pendidikan Tinggi Pagoh,
                KM1 Jalan Panchor,
                84600 Pagoh Muar,
                Johor Darul Takzim</p>
            <p>Call: 06-9742048</p>
            <a href="https://m.facebook.com/kolejkediamankampuspagoh/" class="fa fa-fw fa-facebook"></a>
            <a href="https://instagram.com/kkkpagoh?igshid=YmMyMTA2M2Y=" class="fa fa-fw fa-instagram"></a>
        </div>

        <div class="container mt-5" style="z-index:5">
           
            
            <h1 style="color: white;text-align: center;">KOLEJ KEDIAMAN PAGOH (KKP)</h1>
            <br>
            <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel" style="width:70%;margin: auto;">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="gambar1.jpg" alt="gambar1" class="d-block img-fluid" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="gambar2.jpg" alt="gambar2" class="d-block img-fluid" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="gambar3.jpg" alt="gambar3" class="d-block img-fluid" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="gambar4.jpg" alt="gambar4" class="d-block img-fluid" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="gambar5.jpg" alt="gambar5" class="d-block img-fluid" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="gambar6.jpg" alt="gambar6" class="d-block img-fluid" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
    
</div>
   <br>
                        <h4 style="color: white;">Untuk menyokong Hab Pendidikan Pagoh dalam menawarkan persekitaran pembelajaran yang kondusif dengan menyediakan kolej kediaman dan kemudahan berkongsi untuk pelajarnya. Ia dijangka menjadi lokasi berpusat di mana pelajar Hab Pendidikan Pagoh boleh berkumpul, membuat semakan, berehat dan melibatkan diri dalam aktiviti sosial serta rekreasi untuk pengalaman pembelajaran yang bermanfaat secara keseluruhan.</h4>
            <br>
        
            </div>
    </div>
   

</body>

</html>
