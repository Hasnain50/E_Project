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
<?php
include 'connection.php';
$id=$_GET['id'];
$query1="SELECT * FROM event_category where Category_Id=".$id;
$result1=mysqli_query($conn,$query1); 
$row1=mysqli_fetch_array($result1);  
if(isset($_POST['btnSubmit']))
{
  $Category_Name=$_POST['Category_Name'];
  $query="UPDATE event_category set Category_Name = '$Category_Name' where Category_Id=".$id;
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

<div class="container">
<form method="POST">
  <div class="form-group">
    <label for="Category_Name">Category </label>
    <input type="text" class="form-control" value="<?php echo $row1['Category_Name'];?>"name="Category_Name" placeholder="Enter Category">
  </div>
  <button type="submit" class="btn btn-primary"name="btnSubmit">Submit</button>
</form>
</div>


</body>
</html>