<?php
include 'connect.php';
if (isset($_POST['submit'])){
$fn= $_POST['fn'];
$ln= $_POST['ln'];
$addr= $_POST['address'];
$p= $_POST['phone'];
$sql="insert into emp(firstname,lastname,address,phone)values('$fn','$ln','$addr','$p')";
$result= mysqli_query($con,$sql);

if ($result){
    echo "<script>alert('Added Succesfully')</script>";
    header('location:display.php');
}else{

    die(mysqli_error($con));
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CRUD OPERATION</title>
  </head>
  <body>
    <div class="container my-5">
 <form method="POST">
  <div class="form-group">
    <label>Firstname</label>
    <input type="text" class="form-control" name="fn" placeholder="Enter firstname">
  </div>
  <div class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control" name="ln" placeholder="Enter lastname">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter address">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="Enter phone">
  </div>
  <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
</form>
    </div>

    
  </body>
</html>