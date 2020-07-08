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
$query1="SELECT * FROM employee where Emp_Id=".$id;
$result1=mysqli_query($conn,$query1); 
$row1=mysqli_fetch_array($result1);  
if(isset($_POST['btnSubmit']))
{
  $Emp_Name=$_POST['Emp_Name'];
  $Emp_Email=$_POST['Emp_Email'];
  $Emp_Password=$_POST['Emp_Password'];
  $Emp_DOB=$_POST['Emp_DOB'];
  $Emp_Contact=$_POST['Emp_Contact'];
  $query="UPDATE employee set ('Emp_Name','Emp_Email','Emp_Password','Emp_DOB','Emp_Contact') = ('$Emp_Name','$Emp_Email','$Emp_Password','$Emp_DOB','$Emp_Contact') where Emp_Id=".$id;
  $result=mysqli_query($conn,$query);
  if($result)
  {
    //echo "Successfull";
    header('location:viewemployee.php');
  }else{
    echo "Failed ";
  }
}

?>

<div class="container">
<form method="POST">
<label>Enter Employee Name : </label>
        <input type="text" name="empName"/>    
        <br>
        <label>Enter Department</label>

        <select name="dddepartment">
            <?php
            if($result1)
            {
                while($row=mysqli_fetch_array($result1))
                {
                   ?>
                <option value="<?php echo $row['Dep_Id'];?>"><?php echo $row['Dep_Name']?></option>
            <?php
                }
            }
            ?>
        </select>
        <br>
        <label>Enter Email</label>
        <input type="text" name="empemail"/>
        <br>
        <label>Enter Password</label>
        <input type="text" name="emppass"/>
        <br>
        <label>Enter DOB</label>
        <input type="Date" name="empdob"/>
        <br>
        <label>Enter Conatct Number</label>
        <input type="text" name="empcontact"/>
        <br>
        <input type="submit" name="btnSubmit" value="Add Employee"/>
    </form>
</div>


</body>
</html>