<?php
   session_start();
   include 'connection.php';   

    $idStaff = $_SESSION['ID'];
    
    $records = mysqli_query($conn, "SELECT * FROM staff WHERE staff_id='$idStaff'");
    while($data = mysqli_fetch_array($records))
    {
        $namaStaff = $data['staff_name'];
    }
    
    $namaPelajar = mysqli_real_escape_string($conn, $_REQUEST['nama']);
    $blok = mysqli_real_escape_string($conn, $_REQUEST['blok']);
    $aras = mysqli_real_escape_string($conn, $_REQUEST['aras']);
    $bilik = mysqli_real_escape_string($conn, $_REQUEST['bilik']);
    $aduan = mysqli_real_escape_string($conn, $_REQUEST['aduan']);
    $telefon = mysqli_real_escape_string($conn, $_REQUEST['telefon']);
    $tarikh = mysqli_real_escape_string($conn, $_REQUEST['tarikh']);
    
    $sql = "INSERT INTO datacomplaint (bil, id_staff, nama_staff, nama_pelajar, blok, aras, no_bilik, aduan, no_tel, tarikh, status)
VALUES ('','$idStaff','$namaStaff','$namaPelajar','$blok','$aras','$bilik','$aduan','$telefon','$tarikh','progress')";
    
if(mysqli_query($conn, $sql)){
    $sql = "INSERT INTO ".$idStaff." (bil, id_staff, nama_staff, nama_pelajar, blok, aras, no_bilik, aduan, no_tel, tarikh, status)
    VALUES ('','$idStaff','$namaStaff','$namaPelajar','$blok','$aras','$bilik','$aduan','$telefon','$tarikh','progress')";
    
    if(mysqli_query($conn, $sql)){
        header("location: datacomplaint.php"); 
        exit(); // use exit. It's a good practice
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);

  
?>
        