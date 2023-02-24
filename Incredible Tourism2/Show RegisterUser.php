<?php
 include 'Project_DB_Query.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Reservation</title>
    <!-- jQuery library -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
        <br>
        <h2 class="text-center text-white bg-dark">REGISTERED USERES OF THIS SITE</h2>
        <br>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover text-center">
            <thead class="bg-dark text-white">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </thead>
            <tbody>
                <?php 
                  $displayquery = "SELECT * FROM  user_register";
                  $querydisplay = mysqli_query($conn,$displayquery);
                  while($result = mysqli_fetch_array($querydisplay)){
                    ?>
                <td><?php echo $result['U_id']; ?> </td>
                <td><?php echo $result['Uname']; ?></td>
                <td><?php echo $result['Uemail']; ?></td>
                <td><?php echo $result['Uage']; ?></td>
            </tbody>
            <?php 
                  }
                  ?>
        </table>
        </div>
    </div>
</body>
</html>