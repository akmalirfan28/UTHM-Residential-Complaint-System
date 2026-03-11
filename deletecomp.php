<?php
session_start();
include 'connection.php';   

$staffId = $_SESSION['ID'];
$bil = $_GET['id'];

$records = mysqli_query($conn, "SELECT nama_pelajar, aduan, tarikh FROM ".$staffId." WHERE bil='$bil'");
    while($data = mysqli_fetch_array($records))
    {
        $namaPelajar = $data['nama_pelajar'];
        $aduan = $data['aduan'];
        $tarikh = $data['tarikh'];
    }
    
$delete = mysqli_query($conn, "DELETE FROM ".$staffId." WHERE bil = '$bil'");
    
if($delete)
{
    $delete = mysqli_query($conn, "DELETE FROM datacomplaint WHERE id_staff = '$staffId' AND nama_pelajar='$namaPelajar' AND aduan='$aduan' AND tarikh='$tarikh'");
    
    if($delete)
    {
        mysqli_close($conn);
        header("location:datacomplaint.php"); 
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
