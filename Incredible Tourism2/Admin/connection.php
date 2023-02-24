<?php
define("Server","localhost");
define("User","root");
define("Pass","");
define("Database","tourism_project");
$conn = mysqli_connect(Server,User,Pass,Database);
if(!$conn)
{
    die("Not connected".mysqli_connect_error());
}
// echo "Connected";

// Table :-


// $sql = "CREATE TABLE login_info(
//             Username varchar(22) not null,
//             Password varchar(22) not null)";
// if(!mysqli_query($conn,$sql))
// {
//     echo "Not Created Table";
// }


// INSERT :-


// $sql = "INSERT INTO login_info(Username,Password) VALUES ('Sk_Admin','Shivsk@321')";
// if(mysqli_query($conn,$sql)){
//     echo "Inserted";
// }
// else{
//     echo "Not Inserted"."<br>";
// }
?>