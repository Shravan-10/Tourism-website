<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location :Admin_Index.php");
}
// $Session = $_SESSION['AdminLoginId'];
// if($Session = ""){
//     header("location.Admin_Index.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Pannel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="Admin_pannel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!-- Header Starts-->
<section id="header">
<div class="container">
    <div class="header">
        <h1>SK <span>The Group of Invention <?php echo $_SESSION['AdminLoginId']; ?></span></h1>
        <form method="POST">
            <button name="LogOut">Log Out</button>
        </form>
    </div>
    <?php
         if(isset($_POST['LogOut'])){
             session_destroy();
             header("location:Admin_index.php");
        }
    ?>
</div>
</section>
<!-- Header Section Ends-->
<!-- link section Starts -->
<section id="link_box">
  <div class="container">
     <h1>LINKS :)</h1>
    <div class="link_container">
        <ul>
            <li><a href="http://localhost/incredible%20tourism/Show RegisterUser.php"><i class="fa-solid fa-arrow-right"></i>Register User List</a></li><br>
            <li><a href="http://localhost/incredible%20tourism/Show Reservation.php"><i class="fa-solid fa-arrow-right"></i>Reservation of Users List</a></li><br>
            <li><a href="http://localhost/incredible%20tourism/Add_slider.php"><i class="fa-solid fa-arrow-right"></i>Add Heritage Slider</a></li><br>
            <li><a href="http://localhost/incredible%20tourism/Update_account.php"><i class="fa-solid fa-arrow-right"></i>Change A/c Status</a></li><br>
            <li><a href="http://localhost/incredible%20tourism/Showfeedback.php"><i class="fa-solid fa-arrow-right"></i>Customer Feedback List</a></li>
            <!-- <li><a href=""></a></li> -->
            <!-- <li><a href=""></a></li> -->
        </ul>
    </div>
  </div>
</section>
<!-- link section Ends -->
</body>

</html>