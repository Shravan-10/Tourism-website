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
        <h2 class="text-center text-white bg-dark">RESERVATION OF USERES</h2>
        <br>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover text-center">
            <thead class="bg-dark text-white">
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Mobile number</th>
                <th>Passenger</th>
                <th>Date</th>
                <th>From</th>
                <th>To</th>
            </thead>
            <tbody>
                <?php 
                  $displayquery = "SELECT * FROM Book";
                  $querydisplay = mysqli_query($conn,$displayquery);
                  while($result = mysqli_fetch_array($querydisplay)){
                    ?>
                <td><?php echo $result['Book_id']; ?> </td>
                <td><?php echo $result['Bname']; ?></td>
                <td><?php echo $result['Gender']; ?></td>
                <td><?php echo $result['Mobile_no']; ?></td>
                <td><?php echo $result['No_of_Pass']; ?></td>
                <td><?php echo $result['Date']; ?></td>
                <td><?php echo $result['Bfrom_Sta']; ?></td>
                <td><?php echo $result['Bto_Sta']; ?></td>
            </tbody>
            <?php 
                  }
                  ?>
        </table>
        </div>
    </div>
</body>
</html>