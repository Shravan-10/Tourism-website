<?php
 include 'Project_DB_Query.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title> 
  <link rel="stylesheet" href="css/Reservation.css">
</head>
<body>
    <section id="header">
       <div class="container">
            <div class="header_logo">
              <img src="images/Logo_Final.jpg" alt="" srcset="">
            </div>
       </div>
    </section>
    <!-- Banner section starts -->
    <section id="banner">
      <div class="container">
        <div class="banner_box">
          <img src="./images/Maharajas-Express-Train.jpg" alt="">
          <div class="trainText">
            <h1 class="head">IRCTC TOUR PACKAGE</h1>
          </div>
        </div>
      </div>
    </section>
      <!-- Banner section ends -->
      <section id="form_section">
        <div class="container">
          <div class="form_box">
             <div class="inner_con">
              <h2>OUR EXPERTS WOULD LOVE TO CREATE <br> PACKAGE JUST FOR YOU</h2>
              <h1>PROVIDE YOUR DETAILS</h1>
              </div>
              <div class="form_con">
                 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

                   <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="Name" id="Name" placeholder="Type Your name">
                    <label for="Email">Email</label>
                    <input type="Email" name="Email" id="Email" placeholder="Type you email">
                    </div><br>

                   <div class="form-group">
                    <label for="Gender">Gender</label>
                     <input type="radio" name="gender" id="" value="male"><label>Male</label>
                     <input type="radio" name="gender" id="" value="female"><label>Female</label>
                      <label for="Monum">Mobile no.</label>
                    <input type="number" name="mobile_number" id="Monum" placeholder="Type your Contact no.">
                    </div><br>


                    <div class="form-group">
                    <h3>Passenger Details :</h3><br><br>
                    <label for="NumPass">Passenger</label>
                    <input type="number" name="NumberPassenger" id="NumPass" placeholder="Number of Passenger"><br>
                    <br><br>
                    <label for="Date">Journey Date</label>
                    <input type="date" name="Date" id="Date" >
                    </div><br>
                    
                    <div class="form-group">
                    <label for="Name">From </label>
                    <input type="text" name="Fstation" id="Name" placeholder="From Where">
                    <label for="Email">To</label>
                    <input type="text" name="Tstation" id="Email" placeholder="To Destination">
                    </div><br>
                    <button name="submit" type="submit" value="Submit" class="btn">Submit</button>
                 </form>
              </div>
          </div>
        </div>
      </section>
</body>
</html>



<!-- PHP SECTION  -->
<?php
$name = $email = $Gender = $mo_no =  $passenger = $date = $from = $to = '';
  if($_SERVER['REQUEST_METHOD']=="POST"){ 
     if(isset($_POST['submit'])){
         $name = $_POST['Name'];
         $email = $_POST['Email'];
         $Gender = $_POST['gender'];
         $mo_no = $_POST['mobile_number'];
         $passenger = $_POST['NumberPassenger'];
         $date = $_POST['Date'];
         $from = $_POST['Fstation'];
         $to = $_POST['Tstation'];

         $sql = "INSERT INTO book(Bname,Gender,Mobile_no,No_of_Pass,Date,Bfrom_Sta,Bto_Sta) VALUES('$name','$Gender','$mo_no','$passenger','$date','$from','$to')";
          if(mysqli_query($conn,$sql)){
             echo '<script> alert("Reservation Successfully");</script>';
            }
            else{
            echo '<script> alert("Invalid Operation");</script>';
          }
     }
    }
?>