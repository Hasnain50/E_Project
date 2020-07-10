<!DOCTYPE html>
<html lang="en">
<head>
  <title>View employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'connection.php';
$query="Select * from competitions";
$result=mysqli_query($conn,$query);
?>
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Competition Name</th>
        <th>Competition Description</th>
        <th>Registration Date</th>
        <th>Starting Date</th>
        <th>End Date</th>
        <th>Winner</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while ($row=mysqli_fetch_array($result))
    {
      ?>
    <tr>
      <td><?php echo $row['Competition_Id']?></td>
      <td><?php echo $row['Competition_Name']?></td>
      <td><?php echo $row['Competition_Description']?></td>
      <td><?php echo $row['Registration_Date']?></td>
      <td><?php echo $row['Starting_Date']?></td>
      <td><?php echo $row['End_Date']?></td>
      <td><?php echo $row['Winner']?></td>
      <td><a href="<?php echo 'editcompetition.php?id='.$row['Competition_Id'] ?>">Edit</a>&nbsp;<a href="<?php echo 'deletecompetition.php?id='.$row['Competition_Id'] ?>">Delete</a></td>
      </tr>
    <?php
    }
    ?>
          </tbody>
  </table>
</div>

</body>
</html>