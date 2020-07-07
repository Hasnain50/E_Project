<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'connection.php';
$query="Select * from department";
$result=mysqli_query($conn,$query);
?>
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while ($row=mysqli_fetch_array($result))
    {
      ?>
    <tr>
      <td><?php echo $row['Dep_Id']?></td>
      <td><?php echo $row['Dep_Name']?></td>
      <td><a href="<?php echo 'editdepartment.php?id='.$row['Dep_Id'] ?>">Edit</a>&nbsp;<a href="<?php echo 'deletedepartment.php?id='.$row['Dep_Id'] ?>">Delete</a></td>
      </tr>
    <?php
    }
    ?>
          </tbody>
  </table>
</div>

</body>
</html>