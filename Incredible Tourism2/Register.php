<?php 
 include 'Project_DB_Query.php';
 $NameErr = $EmailErr = $AgeErr = $PassErr ='';
 $Uname = $Email = $Pass =  $Age = '';
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['Submit'])) { 
      $Pass =$_POST['Password'];

    // String Validation : 
    if(empty($_POST['Name'])){
      $NameErr = "Name is required";  
   }
    else{
     $Uname = $_POST['Name'];
     // check if name only contains letters and whitespace 
     if(!preg_match("/^[a-zA-Z]*$/",$Uname)){
       $NameErr = "Only alphabets and white space are allowed";    
     }
    }
    //Password Validation :
    if(empty($_POST['Password'])){
       $PassErr = "Password is Required";
    }
    else{
      $Pass = $_POST['Password'];
      if(strlen($Pass)!= 8){
        $PassErr = "Password must contain 8 characters !";
      }
    }
    //Email Validation : 
    if(empty($_POST['email'])){
      $EmailErr = "Email is required";  
   }
   else{
     $Email = $_POST['email'];
     // check that the e-mail address is well-formed
     if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
      $EmailErr = "Invalid email format"; 
     }  
    }
    // Number Validatation :
    if(empty($_POST['Age'])){
      $AgeErr = "Age no is required";  
    }
    else{
     $Age =$_POST['Age'];
     if(!preg_match("/^[0-9]*$/",$Age)){
      $AgeErr = "Only numeric value is allowed.";  
    }
} 
    if($NameErr == ""&& $EmailErr =="" && $AgeErr==""){
      $sql = "INSERT INTO User_Register(Uname,Uemail,Upass,Uage) VALUES('$Uname','$Email','$Pass','$Age')";
      if(mysqli_query($conn,$sql)){
        echo '<script>';
        echo 'alert("Data Inserted Successfully !")';
        echo '</script>';
      }
    }
} 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="CSS/Register.css">
</head>
<body>
    <div class="container">
        <div class="USerBox">
           <div class="RegisterBox">
              <div class="user_img">
                <img src="" alt="" srcset="">
              </div>
              <div class="SignUp_Box">
                   <h1 class="Register_Heading">Sign Up</h1>
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                       <div class="form1">
                         <label for="Name">Name</label>
                         <input type="text" name="Name" id="Name" placeholder="Name...">
                         <span class="error">* <?php echo $NameErr; ?> </span> 
                       </div>
                       <div class="form1">
                         <label for="email">Email</label>
                         <input type="email" name="email" id="Email" placeholder="Email address..." >
                         <span class="error">* <?php echo $EmailErr; ?> </span>  
                       </div>
                       <div class="form1">
                         <label for="Password">Password</label>
                         <input type="Password" name="Password" id="Password" placeholder="*******" >
                         <span class="error">* <?php echo $PassErr; ?> </span>  
                       </div>
                       <div class="form1">
                         <label for="Age">Age</label>
                         <input type="number" name="Age" id="Age" placeholder="" >
                         <span class="error">* <?php echo $AgeErr; ?> </span>  
                       </div>
                       <input type="submit" value="Submit" name="Submit">
                       <input type="button" value="Sign Up" onclick="hrefFunction()">
                       <input type="button" value="Sign in &rarr;"onclick="hrefFunction2()">

                       <script>
                              function hrefFunction(){
                                // alert("Hello Sk");
                                window.location.href = "http://localhost/incredible%20tourism/Register.php";
                                
                              }
                              function hrefFunction2(){
                                window.location.href = "http://localhost/incredible%20tourism/login.php";
                              }
                      </script>         
    </form>
              </div>
           </div>
        </div>
    </div>
</body>
</html>