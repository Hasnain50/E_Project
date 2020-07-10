<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE from competiotions where Emp_Id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('location:viewcompetition.php');
}else{
    echo "failed";
}
?>