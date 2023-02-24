<?php
 include 'Project_DB_Query.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give Feedback & Suggestion</title>
    <style>
        body{
            overflow: hidden;
            background-image:url('https://cdn.pixabay.com/photo/2016/06/02/02/38/mesh-1430108__340.png');
            background-repeat:no-repeat;
            background-size:100% 100%;
        }
        h1{
            text-align:center;
            margin:20px 0px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color:cornflowerblue;
            text-shadow: 0px 0px 15px black;
        }
        form{
            width:50%;
            display: block;
            margin: 30px auto;
        }
        input[type="text"]{
            border:none;
            outline:none;
            width:90%;
            background:none;
            padding:10px 15px;
            color:wheat;
            font-size:15px;
        }
        input::placeholder{
            font-size:15px;
            color:white;
        }
        fieldset{
            box-shadow:0px 0px 5px whitesmoke;
        }
        legend{
            text-align: center;
            font-size:20px;
            padding:5px 15px;
            font-family: Arial, Helvetica, sans-serif;
            color:white;
            text-shadow: 0px 0px 15px black;
        }
        textarea{
            display: block;
            margin: 10px auto;
            padding:10px 15px;
            background:none;
            box-shadow:0px 0px 5px whitesmoke;
        }
        textarea:hover{
            background-color:beige;
        }
        input[type="submit"]{
            width:95%;
            display: block;
            margin: 10px auto;
            padding:15px 0px;
            background:none;
            background-image: linear-gradient(to right,rgba(80, 35, 226, 0.8),rgb(220, 20, 60));
            border:1px solid white;
            transition: all 2s ease .1s;
        }
        input[type="submit"]:hover{
           font-weight: bold;
           color:white;
           font-size:15px;
         }
    </style>
</head>
<body>
    <div>
        <hr>
        <h1>You can give Your Feedback & Guideline </h1>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
         <div class="form_data">
            <fieldset>
                <legend>Name/Profession</legend>
                <input type="text" name="Cname" placeholder="Name with profession                       Ex. SK/Programmer">
            </fieldset>
         </div><br><br>
         <div class="form_data">
            <fieldset>
                <legend>Your Image</legend>
                 <input type="file" name="Cimg" id="">
            </fieldset>
         </div><br>
         <div class="form_data">
            <fieldset>
                <legend>Your Message</legend>
                 <textarea name="Cmessage" id="" cols="90" rows="10"></textarea>
            </fieldset>
         </div><br>
         <div class="form_data">
            <fieldset>
                <legend>Submit</legend>
                 <input type="submit" value="submit" name="submit">
            </fieldset>
         </div>
       </form>
    </div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['submit'])){
    $Cname = $_POST['Cname'];
    $Cmessage = $_POST['Cmessage'];
    $Cimg = $_FILES['Cimg'];

    if(isset($Cimg)){
       $imgname = $Cimg['name'];
       $imgsize= $Cimg['size'];
       $imgerror = $Cimg['error'];
       $imgtmp = $Cimg['tmp_name'];
     
       $imgext = explode('.',$imgname);
       $imgextcheck = strtolower(end($imgext));
       $imgstored = array('jpeg','png','jpg');

       if(in_array($imgextcheck,$imgstored)){
         $destination = 'images/'.$imgname;
         if(move_uploaded_file($imgtmp,$destination)){
            $sql = "INSERT INTO Feedback(Cname,Cmessage,Cimg) VALUES ('$Cname','$Cmessage','$destination')";
            if(mysqli_query($conn,$sql)){
            echo '<script>alert("Data is Uploaded");</script>';
            }
          else{
             echo '<script>alert("Data is Not Uploaded");</script>';
        }
       }
    }
  }
}
}
?>