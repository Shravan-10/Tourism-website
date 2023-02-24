<?php 
// Database Connection Query :

 $conn = mysqli_connect("localhost","root","","Tourism_Project");
 if(!$conn){
   die("Not connected".mysqli_connect_error());
 }
// echo "CONNECTED"."<br>";
// Create Database Query :

//  $sql = "CREATE DATABASE Tourism_Project";
//  if(mysqli_query($conn,$sql)){
//     echo "DATABASE CREATED"."<br>";
//  }
//  else{
//     echo "Database is not  Created"."<br>";
//  }


// USER Registration - LOGIN DB Structure ( TABLE 1st) : 

    // $sql = "CREATE TABLE User_Register(
    //         U_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //         Uname VARCHAR(30) NOT NULL,
    //         Uemail VARCHAR(30) NOT NULL,
    //         Upass VARCHAR(30) NOT NULL,
    //         Uage  VARCHAR(11) NOT NULL)";
    //         if(mysqli_query($conn,$sql)){
    //           echo "Created";
    //         }
    //         else{
    //           echo "NOT !";
    //         }


//  Customer Booking (USER) DB Structure (TABLE 2nd):
    
    //  $sql = "CREATE TABLE Book(
    //     Book_id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     Bname  VARCHAR(30) NOT NULL,
    //     Gender  VARCHAR(20) NOT NULL,
    //     Mobile_no  INT(30) NOT NULL,
    //     Category  VARCHAR(20) NOT NULL,
    //     No_of_Pass  INT(100) NOT NULL,
    //     Bfrom_Sta   VARCHAR(100) NOT NULL,
    //     Bto_Sta   VARCHAR(100) NOT NULL)";




    //Category & Subcategory DB Structure (TABLE 3rd ):

    // $sql = "CREATE TABLE Category(
    //     Cat_id  INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     Cat_name VARCHAR(200) NOT NULL,
    //     Subcat_id INT(100) NOT NULL,
    //     Subcat_name VARCHAR(100) NOT NULL,
    //     Pic VARCHAR(800) NOT NULL,
    //     Details VARCHAR(800) NOT NULL)";


    // Package Tour (admin) DB Structure (TABLE 4TH) :

    // $sql = "CREATE TABLE Package
    // ( Pack_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //   Pack_name VARCHAR(100) NOT NULL,
    //   Category VARCHAR(100) NOT NULL,
    //   Sub_category VARCHAR(100) NOT NULL,
    //   Pack_price VARCHAR(200) NOT NULL,
    //   Pic1 VARCHAR(100) NOT NULL,
    //   Pic2 VARCHAR(100)NOT NULL,
    //   Pic3 VARCHAR(100) NOT NULL)"; 


    // Enquiry (USER Package) DB Structure ( TABLE 5th) : 
      
    //    $sql = "CREATE TABLE Enquiry
    //    (   Enquiry_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //        Pack_id INT(6),
    //        Cname VARCHAR(200) NOT NULL,
    //        Gender VARCHAR(20)NOT NULL,
    //        Mobile_no INT(20) NOT NULL,
    //        Email VARCHAR(50) NOT NULL,
    //        NO_of_Days INT(50) NOT NULL,
    //        Child INT(50) NOT NULL,
    //        Adults INT(50) NOT NULL,
    //        Cmessage VARCHAR(200) NOT NULL)";

    //         if(mysqli_query($conn,$sql)){
    //             echo "Table is Created"."<br>";
    //         }else{
    //             echo "Table is not Created"."<br>";
    //         }
   
    // Feedback DB Structure (Table 6th) :

    // $sql = "CREATE TABLE Feedback(
    //        Cid  INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //        Cname VARCHAR(200) NOT NULL,
    //        Cmessage VARCHAR(500) NOT NULL,
    //        Cimg  VARCHAR(200) NOT NULL)";
    
    // if(mysqli_query($conn,$sql)){
    //   echo "created";
    // }
    // else{
    //   echo "not created !";
    // }



   




?>