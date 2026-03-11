<?php
// Initialize the session
session_start();
include 'connection.php';  
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        h2 {
            color: white;
        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }

        h3 {
            text-align: center;
        }

        h4 {
            text-align: center;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
            width: 900px;
            margin: auto;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }


        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }

    </style>
</head>

<body>
<?php 
    include 'connection.php'; 
    
    $staffId = $_SESSION['ID'];
    
    $bil = $_GET['id'];
    
    $records = mysqli_query($conn, "SELECT * FROM ".$staffId." WHERE bil='$bil'");
    while($data = mysqli_fetch_array($records))
    {
        $namaStaff = $data['nama_staff'];
        $namaPelajar = $data['nama_pelajar'];
        $blok = $data['blok'];
        $aras = $data['aras'];
        $no_bilik = $data['no_bilik'];
        $aduan = $data['aduan'];
        $no_tel = $data['no_tel'];
        $tarikh = $data['tarikh'];
    }
    
    $records = mysqli_query($conn, "SELECT * FROM staff WHERE staff_id='$staffId'");
    while($data = mysqli_fetch_array($records))
    {
        $staffPhone = $data['staff_phone'];
    }
?>
    <form action="datacomplaint.php">
        <div class="container">

            <img src="logo%20uthm.png" alt="Girl in a jacket" width="500" height="100">

            <h1>PEJABAT PENTADBIRAN KOLEJ KEDIAMN PAGOH</h1>
            <h3>BORANG ADUAN KEROSAKAN (AWAM)</h3>
            <br>

            <h2 style="background-color:Blue;">1. MAKUMAT PELAJAR</h2>
            <hr>

            <label for="nama pelajar"><b>NAMA PELAJAR : <?php echo $namaPelajar; ?></b></label>
            <hr>

            <label for="blok"><b>BLOK : <?php echo $blok; ?></b></label>
            <hr>

            <label for="aras"><b>ARAS : <?php echo $aras; ?></b></label>
            <hr>

            <label for="nombor bilik"><b>NOMBOR BILIK : <?php echo $no_bilik; ?></b></label>
            <hr>
            
            <label for="tel"><b>NOMBOR TELEFON : <?php echo $no_tel; ?></b></label>
            <hr>
            <br>

            <h2 style="background-color:Blue;">2. ADUAN KEROSAKAN (SILA NYATAKAN DENGAN JELAS)</h2>
            <hr>

            <label for="aduan kerosakan"><b>ADUAN KEROSAKAN : <?php echo $aduan; ?></b></label>
            <hr>

            <label for="tarikh aduan"><b>TARIKH ADUAN : <?php echo $tarikh; ?></b></label>
            <hr>
            <br>

            <h2 style="background-color:Blue;">3. MAKLUMAT FELO YANG MELAPORKAN</h2>
            <hr>

            <label for="nama felo"><b>NAMA FELO: <?php echo $namaStaff; ?></b></label>
            <hr>
            
            <label for="nombor telefon"><b>NOMBOR TELEFON : <?php echo $staffPhone; ?></b></label>
            <hr>
            
            <label for="tarikh selesai aduan"><b>TARIKH SELESAI ADUAN : </b></label>
            <input type="date" id="tarikh" name="tarikh" required>
            <hr>
<button onClick="window.print()">Print this page
</button>

        </div>
<div></div>
    </form>

</body>

</html>
