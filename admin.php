<?php

include 'connection.php';

if(isset($_POST['login']))
{
    $Admin_Email=$_POST['email'];
    $Admin_Password=$_POST['pass'];
    $query="SELECT * FROM `admin` where Admin_Email='$Admin_Email' AND Admin_Password='$Admin_Password'";
    $result=mysqli_query($conn,$query);
    $row =mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if($count)
    {
          $_SESSION['admin']=$Admin_Email;
        header("Location:viewemployee.php");
    }else{
        echo mysqli_error($conn);
        echo "Invalid Credentials";
    }
}

?>