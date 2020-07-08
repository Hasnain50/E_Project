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
$query1="select * from event_category";
$result1=mysqli_query($conn,$query1);

?>

    <form method="POST" enctype="multipart/form-data">
        <label>Enter Event Name : </label>
        <input type="text" name="eventname"/>    
        <br>
        <br>
        <label>Enter Event Category</label>

        <select name="ddeventcategory">
            <?php
            if($result1)
            {
                while($row=mysqli_fetch_array($result1))
                {
                   ?>
                <option value="<?php echo $row['Category_Id'];?>"><?php echo $row['Category_Name']?></option>
            <?php
                }
            }
            ?>
        </select>
        <br>
        <br>
        <label>Enter Event Date</label>
        <input type="Date" name="eventdate"/>
        <br>
        <br>
        <label>Enter Description</label>
        <input type="text" name="eventdescription"/>
        <br>
        <input type="file" name="Image"/>
        <br>
        <input type="submit" name="btnSubmit" value="Add Event"/>
    </form>

    <?php
    // include 'connection.php';
    if(isset($_POST['btnSubmit']))
    {
        $eventname=$_POST['eventname'];
        $ddeventcategory=$_POST['ddeventcategory'];
        $eventdate=$_POST['eventdate'];
        $eventdescription=$_POST['eventdescription'];
        
        if(count($_FILES)>0)
        {
            if(is_uploaded_file($_FILES['Image']['tmp_name']))
            {
                $img=addslashes(file_get_contents($_FILES['Image']['tmp_name']));
            

        $query="INSERT INTO event (Event_Name,Category_Id,Event_Date,Event_Description,Event_Image) 
        values('$eventname','$ddeventcategory','$eventdate','$eventdescription','$img')";

        $result=mysqli_query($conn,$query);
        if($result)
        {

           header('Location:viewevent.php');
        }else{
            echo "Failed ! ".mysqli_error($conn);
        }
    }
}
}

    ?>
</body>
