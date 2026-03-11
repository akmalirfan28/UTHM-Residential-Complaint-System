<?php
session_start();
include 'connection.php';   

$bil = $_GET['id'];

$records = mysqli_query($conn, "SELECT id_staff, nama_pelajar, aduan, tarikh FROM datacomplaint WHERE bil='$bil'");
    while($data = mysqli_fetch_array($records))
    {
        $idStaff = $data['id_staff'];
        $namaPelajar = $data['nama_pelajar'];
        $aduan = $data['aduan'];
        $tarikh = $data['tarikh'];
    }
    
$delete = mysqli_query($conn, "DELETE FROM datacomplaint WHERE bil = '$bil'");
    
if($delete)
{
    $delete = mysqli_query($conn, "DELETE FROM ".$idStaff." WHERE nama_pelajar='$namaPelajar' AND aduan='$aduan' AND tarikh='$tarikh'");
    
    if($delete)
    {
        mysqli_close($conn);
        header("location:DataComplaintHigherups.php"); 
        exit;
    }
    else
    {
        echo "Error deleting record"; 
    }
    	
}
else
{
    echo "Error deleting record"; 
}

?>
