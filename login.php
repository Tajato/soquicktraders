<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<div class="d-flex justify-content-center">
<div class="card m-5 w-25">
  <div class="card-header">
    <strong>Log in</strong> into your account
  </div>
  <div class="card-body">
  <form action="login.inc.php" method="POST">
  <div class="form-group">
<?php
                  if (isset($_GET['error'])) {
                  if ($_GET['error'] == 'incorrect') {
              echo '<p class="text-danger"> Incorrect email or password. Try again</p>';
              } 
            }
              else {
                    echo "<p class='text-success'>Please login</p>";
                  }
                
?>
    <label for="inputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    <small><a href="forgot-password.php">Forgot password?</a></small>
  </div>
  
  <button name="login" type="submit" class="btn btn-success">Login</button>
</form>
<small class="">Don't have an account as yet? <a href="signup.php">Sign up</a>
</div>
</div>

