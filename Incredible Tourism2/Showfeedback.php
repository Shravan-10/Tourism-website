<?php
include 'Project_DB_Query.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Feedback & Suggestion</title>
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
    <h2 class="text-center text-white bg-dark my-2 p-3">PEOPLE SAYS </h2>
        <br>
        <table class="table table-striped table-bordered table-hover text-center">
            <thead class="bg-dark text-white">
                <th>Id</th>
                <th>Name</th>
                <th>Message</th>
                <th>Image</th>
            </thead>
            <tbody>
                <?php 
                  $displayquery = "SELECT * FROM  Feedback";
                  $querydisplay = mysqli_query($conn,$displayquery);
                  while($result = mysqli_fetch_array($querydisplay)){
                    ?>
                <td><?php echo $result['Cid']; ?> </td>
                <td><?php echo $result['Cname']; ?></td>
                <td><?php echo $result['Cmessage']; ?></td>
                <td><img src="<?php echo $result['Cimg']; ?>" alt=""height="200px"; width="200px";></td>
            </tbody>
            <?php 
                  }
                  ?>
        </table>
    </div>
</body>
</html>