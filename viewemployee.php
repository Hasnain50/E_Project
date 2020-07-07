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
$query="Select * from employee";
$result=mysqli_query($conn,$query);
?>
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>DOB</th>
        <th>Contact</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while ($row=mysqli_fetch_array($result))
    {
      ?>
    <tr>
      <td><?php echo $row['Emp_Id']?></td>
      <td><?php echo $row['Emp_Name']?></td>
      <td><?php echo $row['Emp_Email']?></td>
      <td><?php echo $row['Emp_Password']?></td>
      <td><?php echo $row['Emp_DOB']?></td>
      <td><?php echo $row['Emp_Contact']?></td>
      <td><a href="<?php echo 'edit2emp.php?id='.$row['Emp_Id'] ?>">Edit</a>&nbsp;<a href="<?php echo 'deleteemployee.php?id='.$row['Emp_Id'] ?>">Delete</a></td>
      </tr>
    <?php
    }
    ?>
          </tbody>
  </table>
</div>

</body>
</html>