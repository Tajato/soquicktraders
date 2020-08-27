<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<div class="d-flex justify-content-center">
<div class="card m-5 w-25">
  <div class="card-header">
    <strong>Enter</strong> your new password
  </div>
  <div class="card-body">
  <form action="signup.inc.php" method="POST">
  <p>Instructions will be sent to your email on how to reset your password<p>
  <div class="form-group">
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="New password">
  </div>
  
  <button name="signup" type="submit" class="btn btn-success">Good to go</button>
</form>
</div>
</div>
<?php include('templates/footer.php'); ?>