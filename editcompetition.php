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
$query1="SELECT * FROM competitions where Competition_Id=".$id;
$result1=mysqli_query($conn,$query1); 
$row1=mysqli_fetch_array($result1);  
if(isset($_POST['btnSubmit']))
{
    $compname=$_POST['compname'];
    $compdescription=$_POST['compdescription'];
    $compregsdate=$_POST['compregsdate'];
    $compstartdate=$_POST['compstartdate'];
    $compenddate=$_POST['compenddate'];
    $compwinner=$_POST['compwinnerprize'];
    $query="UPDATE INTO competitions (Competition_Name,Competition_Description,Registration_Date,Starting_Date,End_Date,Winner) 
    values('$compname','$compdescription','$compregsdate','$compstartdate','$compenddate','$compwinner')";
  $result=mysqli_query($conn,$query);
  if($result)
  {
    //echo "Successfull";
    header('location:viewcompetition.php');
  }else{
    echo "Failed ";
  }
}

?>

<div class="container">
<form method="POST">
        <label>Enter Competition Name : </label>
        <input type="text" name="compname" value="<?php echo $row1['Comp_'];?>"/>    
        <br>
        <label>Enter Competition Description</label>
        <input type="text" name="compdescription" value="<?php echo $row1[''];?>"/>
        <br>
        <label>Enter Registration Date</label>
        <input type="Date" name="compregsdate" value="<?php echo $row1[''];?>"/>
        <br>
        <label>Enter Start Date</label>
        <input type="Date" name="compstartdate" value="<?php echo $row1[''];?>"/>
        <br>
        <label>Enter End Date </label>
        <input type="Date" name="compenddate" value="<?php echo $row1[''];?>"/>
        <br>
        <label>Enter Winner Prize </label>
        <input type="text" name="compwinnerprize" value="<?php echo $row1[''];?>"/>
        <br>
        <input type="submit" name="btnSubmit" value="Add Competition"/>
    </form>
</div>


</body>
</html>