<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE from event where Event_Id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('location:viewevent.php');
}else{
    echo "failed";
}
?>