<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE from event_category where Category_Id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('location:vieweventcategory.php');
}else{
    echo "failed";
}
?>