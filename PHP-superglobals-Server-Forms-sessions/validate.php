<?php

    $myName =$_POST['name'];
    $myUser = $myName."@MimikaInterprise.com";
    $myPwd  ="1234";

    if($_POST['name'] == $myName && $_POST["user"] == $myUser && $_POST["pwd"] == $myPwd){
        
        session_start();
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['user'] = $_POST['user'];
        $_SESSION["pwd"]  = $_POST["pwd"];


        header("Location: ./panel.php");
     
    }else{
       header("location: ./index.php");
    }



    

?>