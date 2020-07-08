<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Event</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'connection.php';
$query="Select * from event";
$result=mysqli_query($conn,$query);
?>
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category Id</th>
        <th>Event Date</th>
        <th>Description</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while ($row=mysqli_fetch_array($result))
    {
      ?>
    <tr>
      <td><?php echo $row['Event_Id']?></td>
      <td><?php echo $row['Event_Name']?></td>
      <td><?php echo $row['Category_Id']?></td>
      <td><?php echo $row['Event_Date']?></td>
      <td><?php echo $row['Event_Description']?></td>
      <td><?php echo $row['Event_Image']?></td>
      <td><a href="<?php echo 'editevent.php?id='.$row['Event_Id'] ?>">Edit</a>&nbsp;<a href="<?php echo 'deleteevent.php?id='.$row['Event_Id'] ?>">Delete</a></td>
      </tr>
    <?php
    }
    ?>
          </tbody>
  </table>
</div>

</body>
</html>