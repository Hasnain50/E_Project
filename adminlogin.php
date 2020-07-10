<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Login / Registration start -->
    <section class="banner login-registration">
      <div class="vector-img">
        <img src="images/vector.png" alt="">
      </div>
<div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="content-box">
              <h2>Admin Login Account</h2>
              <p>I am Rider service provider</p>
            </div>
<form method="POST" class="sl-form" action="admin.php">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="example@gmail.com" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" placeholder="Password" required>
              </div>
              <button type="submit" name="login" class="btn btn-filled btn-round"><span class="bh"></span> <span>Login</span></button>
              <p class="notice">Don’t have an account? <a href="#">Signup Now</a></p>
            </form>  
</body>
</html>