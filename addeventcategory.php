<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
<form method="POST">
  <div class="form-group">
    <label for="Category_Name">Event Category Name</label>
    <input type="text" class="form-control" name="Category_Name" placeholder="Enter Category">
  </div>
  <button type="submit" class="btn btn-primary"name="btnSubmit">Submit</button>
</form>
</div>

<?php
include 'connection.php';
if(isset($_POST['btnSubmit']))
{
  $Cat_Name=$_POST['Category_Name'];
  $query="INSERT into event_category (Category_Name)values('$Cat_Name')";
  $result=mysqli_query($conn,$query);
  if($result)
  {
    //echo "Successfull";
    header('location:vieweventcategory.php');
  }else{
    echo "Failed ";
  }
}

?>

</body>
</html>