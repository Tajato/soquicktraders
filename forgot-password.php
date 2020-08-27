<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<div class="d-flex justify-content-center">
<div class="card m-5 w-25">
  <div class="card-header">
    <strong>Reset</strong> your password
  </div>
  <div class="card-body">
  <form action="reset-password.inc.php" method="POST">
  <p>Instructions will be sent to your email on how to reset your password<p>
  <div class="form-group">
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your email">
  </div>
  
  <button name="reset" type="submit" class="btn btn-success">Reset</button>
</form>
</div>
</div>
<?php include('templates/footer.php'); ?>