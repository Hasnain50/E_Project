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
$query1="select * from competions";
$result1=mysqli_query($conn,$query1);

?>

    <form method="POST">
        <label>Enter Competition Name : </label>
        <input type="text" name="compname"/>    
        <br>
        <label>Enter Competition Description</label>
        <input type="text" name="compdescription"/>
        <br>
        <label>Enter Registration Date</label>
        <input type="Date" name="compregsdate"/>
        <br>
        <label>Enter Start Date</label>
        <input type="Date" name="compstartdate"/>
        <br>
        <label>Enter End Date </label>
        <input type="Date" name="compenddate"/>
        <br>
        <label>Enter Winner Prize </label>
        <input type="text" name="compwinnerprize"/>
        <br>
        <input type="submit" name="btnSubmit" value="Add Competition"/>
    </form>

    <?php
    // include 'connection.php';
    if(isset($_POST['btnSubmit']))
    {
        $compname=$_POST['compname'];
        $compdescription=$_POST['compdescription'];
        $compregsdate=$_POST['compregsdate'];
        $compstartdate=$_POST['compstartdate'];
        $compenddate=$_POST['compenddate'];
        $compwinner=$_POST['compwinnerprize'];

        $query="INSERT INTO competitions (Competition_Name,Competition_Description,Registration_Date,Starting_Date,End_Date,Winner) 
        values('$compname','$compdescription','$compregsdate','$compstartdate','$compenddate','$compwinner')";

        $result=mysqli_query($conn,$query);
        if($result)
        {
           header('Location:viewcompetition.php');
        }else{
            echo "Failed ! ".mysqli_error($conn);
        }
    }

    ?>
</body>
</html>