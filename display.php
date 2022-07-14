<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <button class="btn btn-primary my-5"><a href="index.php" class="text-light">ADD</a></button>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Address</th>
          <th scope="col">phone</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "select * from emp";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $f = $row['firstname'];
            $l = $row['lastname'];
            $a = $row['address'];
            $p = $row['phone'];
            echo '
    <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $f . '</td>
      <td>' . $l . '</td>
      <td>' . $a . '</td>
      <td>' . $p . '</td>
      <td><button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">UPDATE</a></button></td>
      <td><button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">DELETE</a></button></td>
    </tr>';
          }
        }
        ?>
        <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
      </tbody>
    </table>
  </div>

</body>

</html>