<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<div class="d-flex justify-content-center">
<div class="card m-5 w-25">
  <div class="card-header">
    <strong>Register</strong> an account.
  </div>
  <div class="card-body">
  <form action="signup.inc.php" method="POST">
  <div class="form-group">
    <label for="inputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
  </div>
  <div class="form-group">
    <label for="inputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == 'taken') {
    echo '<p class="text-danger">User already exists!</p>';
    } 
        } 
?>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
  <label class="my-1 mr-2" for="phone">Phone Number</label>
  <input type="tel" name="phone" class="form-control" id="exampleInputNumber1" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
       required>
  <small>Format: 123-456-7890</small>

  </div>
  <button name="signup" type="submit" class="btn btn-primary">Register</button>
</form>
<small class="">Already registered? <a href="signin.php">Sign in</a>
</div>
</div>
