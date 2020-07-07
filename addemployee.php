<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'connection.php';
$query1="select * from department";
$result1=mysqli_query($conn,$query1);

?>

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

    <?php
    // include 'connection.php';
    if(isset($_POST['btnSubmit']))
    {
        $empName=$_POST['empName'];
        $empdepartment=$_POST['dddepartment'];
        $empemail=$_POST['empemail'];
        $emppass=$_POST['emppass'];
        $empdob=$_POST['empdob'];
        $empcontact=$_POST['empcontact'];

        $query="INSERT INTO employee (Emp_Name,Emp_Dept,Emp_Email,Emp_Password,Emp_DOB,Emp_Contact) 
        values('$empName','$empdepartment','$empemail','$emppass','$empdob','$empcontact')";

        $result=mysqli_query($conn,$query);
        if($result)
        {
           header('Location:viewemployee.php');
        }else{
            echo "Failed ! ".mysqli_error($conn);
        }
    }

    ?>
</body>
</html>