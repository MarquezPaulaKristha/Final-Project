<?php
    session_start();
    include("connect.php");
     if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql= "delete from users where ID=$id";
        $result=mysqli_query($con,$sql);

        if($result){    
            header("location:Users.php");
        }
        else{
            die(mysqli_error($con));
        }
     }

     if (isset($_SESSION['ID'])) {  
        header("location:../Login.php");  
        die();  
     }
?>