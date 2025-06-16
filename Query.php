<?php

include_once 'Connection.php';

if(isset($_REQUEST['btnregister'])){

    $name =  $_REQUEST['names'];
    $email =  $_REQUEST['email'];
    $password =$_REQUEST['passwords'];
    $role  = $_REQUEST['rolessystem'];


    $savequery = "INSERT INTO `registeration`(`Name`, `Email`, `Passowrd`, `Role_ID_FK`) VALUES ('$name','$email','$password',$role)";
    $result  = mysqli_query($connection,$savequery);
    if(!empty($result)){
        header("location: index.php?successregistration= Registration Successfully..!");
    }
    else{
        header("location: index.php?errormsg= Please Try Again");
    }
   
}





?>