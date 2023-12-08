<?php
    $viewState = false;
    include("connect.php");
    if(isset($_GET["viewid"])){
        $viewState = true;
        $id = $_GET['viewid'];

        $sql = "SELECT * FROM `users` WHERE `ID`='$id'";

        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);

        $viewname = $row["Name"];
        $viewaddress = $row["Address"];
        $viewuser = $row["Username"];
        $viewtype = $row["Type"];
    }
?>

