<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE from employee where Emp_Id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('location:viewemployee.php');
}else{
    echo "failed";
}
?>