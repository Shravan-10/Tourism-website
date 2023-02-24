<?php
   require("connection.php");
//    if(!isset($_POST['LogOut'])){
//        header("location:Admin_loginForm.php");
//    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="Admin.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    /* font-family: 'Dancing Script', cursive; */
    /* font-family: 'Roboto Condensed', sans-serif; */
    text-decoration: none;
 }
 body{
     background-color: #f2f4f6;
 }
 div.login-form{
     width:470px;
     background-color:white;
     box-shadow :5px 5px 10px 0px lightgrey;
     margin: 150px auto;
     border-radius:10px 5px;
 }
 div.login-form h2{
     text-align: center;
     background-color:tomato;
     color:white;
     padding:13px 20px;
     font-family: 'Roboto Condensed', sans-serif;
 }
 div.login-form form{
     padding:30px 60px;
 }
 div.login-form form .input-field{
     display:flex;
     flex-direction:row;
     margin:15px 0px;
 }
 div.login-form form .input-field i{
     color:darkslategray;
     padding:10px 15px;
     background-color: #f2f4f6;
     margin-right:4px;
 }
 div.login-form form .input-field input{
     padding:10px;
     background-color: #f2f4f6;
     border:none;
     padding-left:15px;
     width:100%;
     font-family: 'Dancing Script', cursive;
 }
 div.login-form form button{
     width:100%;
     background-color:#5bd1d7;
     padding:8px;
     border:none;
     font-weight:500;
     font-size:16px;
     color:white;
     margin:15px 0;
     transition:background-color 0.4s;
 }
 div.login-form form button:hover{
     background-color:#2c6467;
     font-weight:bold;
 }
 div.login-form form .extra{
     width:100%;
     display: flex;
     flex-direction:row;
     justify-content:space-between;
     margin:10px 0px;
     font-family: 'Dancing Script', cursive;
 }
 div.login-form form .extra a:first-child{
     color:grey;
 }
 div.login-form form .extra a:nth-child(1):hover{
   color:blueviolet;
 }
 div.login-form form .extra a:last-child{
     color:rgba(61, 55, 55, 0.4);
 }
    </style>
</head>

<body>
    <div class="login-form">
        <h2>Admin Login Portal</h2>
        <form method="POST">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="AdminName" id="">
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="AdminPass" id="">
            </div>

            <button type="submit" name="Signin">Sign In</button>

            <div class="extra">
                <a href="#">Forgot Account ?</a>
                <a href="#">Create an Account </a>
            </div>
        </form>
    </div>
<?php
       if(isset($_POST['Signin']))
       {
          $sql = "SELECT * FROM login_info WHERE  Username = '$_POST[AdminName]' AND Password = '$_POST[AdminPass]'";
          $output = mysqli_query($conn,$sql);
          if(mysqli_num_rows($output) == 1)
          {
            session_start();
            $_SESSION['AdminLoginId'] = $_POST['AdminName'];
            header("location: Admin_pannel.php");
          }
          else
          {
             echo "<script>alert('Incorrect password or Username')</script>";
          }
       }
?>
</body>
</html>

