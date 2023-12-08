<?php
    include("Connect.php");
     if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql= "delete from cases where ID=$id";
        $result=mysqli_query($con,$sql);

        if($result){    
            header("location:Cases.php");
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