<?php
include 'connection.php';   

	
    $id = $_GET['id'];

    
$delete = mysqli_query($conn, "DELETE FROM staff where staff_id = '$id'");
    
if($delete)
{
    mysqli_close($conn);
    header("location:ListStaff.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}

?>
