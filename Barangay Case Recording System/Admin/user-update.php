<?php
    $editState = false;
    include("connect.php");
    if(isset($_GET["updateid"])){
        $editState = true;
        $id = $_GET['updateid'];

        $sql = "SELECT * FROM `users` WHERE `ID`='$id'";

        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);

        $editname = $row["Name"];
        $editadd = $row["Address"];
        $editcon = $row["ContactNumber"];
        $editgen = $row["Gender"];
        $editusername = $row["Username"];
        $editpassword = $row["Password"];
        $editstatusop = $row["Type"];
    }

    if(isset($_POST['update']))
    {   
        $editState = true; 
        $id = $_GET['updateid'];
        
        $name = $_POST['name'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $type = $_POST['type'];
        $worid = $_POST['worid'];
        $wname = $_POST['worname'];
        $date = $_POST['date'];

        $query = "update `users` set Name='$name', Address='$address', ContactNumber='$contact', Gender='$gender', Username='$username', Password='$password', Type='$type', WorkerID='$worid', WorkerName='$wname', Date='$date' where `ID`='$id'";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:Users.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>

