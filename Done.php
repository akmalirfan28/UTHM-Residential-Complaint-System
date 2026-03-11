<?php
include 'connection.php';   

	
$bil = $_GET['bil'];

$sql = "UPDATE datacomplaint SET status='selesai' WHERE bil='$bil'";
    
if(mysqli_query($conn, $sql)){
    $records = mysqli_query($conn, "SELECT id_staff, nama_pelajar, aduan, tarikh FROM datacomplaint WHERE bil='$bil'");
    while($data = mysqli_fetch_array($records))
    {
        $idStaff = $data['id_staff'];
        $namaPelajar = $data['nama_pelajar'];
        $aduan = $data['aduan'];
        $tarikh = $data['tarikh'];
    }

    $sql = "UPDATE ".$idStaff." SET status='selesai' WHERE nama_pelajar='$namaPelajar' AND aduan='$aduan' AND tarikh='$tarikh'";
    
    if(mysqli_query($conn, $sql)){
        header("location: DataComplaintHigherups.php"); 
        exit(); // use exit. It's a good practice
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);


?>

