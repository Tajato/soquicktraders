<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>So-Quick</title>
    <script src="https://kit.fontawesome.com/0d4c0a0b4d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/css/style.css?v=0.001">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">

</head>
<body>
<?php if (isset($_SESSION['email'])) {
  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="index.php">So-Quick Traders Academy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="courses.php">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Refund Policy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">Contact</a>
      </li>
  </ul>
     
     <span class="navbar-text">
      
        <a class="btn btn-outline-white mr-3 text-white" href="logout.php">Logout</a>

     
    </span>
  </div>
</nav>';
 } else {
  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="index.php">So-Quick Traders Academy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="courses.php">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Refund Policy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">Contact</a>
      </li>
  </ul>
     
     <span class="navbar-text">
      
        <a class="btn btn-outline-primary mr-3 text-white" href="signup.php">Register</a>
        <a class="btn btn-outline-success mr-3 text-white" href="login.php">Signin</a>

     
    </span>
  </div>
</nav>';
}

?>
