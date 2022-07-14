<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql = "select * from emp WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result); 
$f = $row['firstname'];
$l = $row['lastname'];
$a = $row['address'];
$p = $row['phone'];

if (isset($_POST['submit'])){
    $fn= $_POST['fn'];
    $ln= $_POST['ln'];
    $addr= $_POST['address'];
    $p= $_POST['phone'];

$sql="UPDATE emp SET firstname='$fn',lastname='$ln',address='$addr',phone='$p' WHERE id=$id";
$result= mysqli_query($con,$sql);

if ($result){
    echo "<script>alert('Updated Succesfully')</script>";
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
    <input type="text" class="form-control" name="fn" value="<?php echo $f; ?>" placeholder="Enter firstname">
  </div>
  <div class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control" name="ln" value="<?php echo $l; ?>" placeholder="Enter lastname">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" value="<?php echo $a; ?>" placeholder="Enter address">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="text" class="form-control" name="phone" value="<?php echo $p; ?>" placeholder="Enter phone">
  </div>
  <button type="submit" class="btn btn-primary" name='submit'>UPDATE</button>
</form>
    </div> 
  </body>
</html>