<?php
    $editState = false;
    include("connect.php");
    if(isset($_GET["cases-updateid"])){
        $editState = true;
        $id = $_GET['cases-updateid'];

        $sql = "SELECT * FROM `cases` WHERE `ID`='$id'";

        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);


        $editres = $row['Respondent'];
        $editstatus = $row['Status'];
        $editact = $row['Action'];
    }

    if(isset($_POST['update']))
    {   
        $editState = true; 
        $id = $_GET['cases-updateid'];
        $res = $_POST['res'];
        $sta = $_POST['sta'];
        $act = $_POST['act'];

        $query = "update `cases` set Respondent='$res', Status='$sta', Action='$act' where `ID`='$id'";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:Cases.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>

