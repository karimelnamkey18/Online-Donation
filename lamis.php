<?php
$firstname=$_REQUEST['firstname'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];


if(isset($_post['btnphp']))

{

    $host="localhost";
    $user="root";
    $password="";
    $db="kareem_company";




    $conn = mysqli_connect($host,$user,$passwoard,$db);

    $insert= "insert into xamppone values('$firstname','$email','$phone','$address')";

    mysqli_query($conn,$insert);

    if($conn){

        
        echo("<h1 style='color:green;'>your information ala bikoo!</h1>");
    }
    else{

        echo("<h1 style='color:red;'>your information fethh!</h1>");
   
    }





}




?>