<?php
    $editState = false;
    include("connect.php");
    if(isset($_GET["res-updateid"])){
        $editState = true;
        $id = $_GET['res-updateid'];

        $sql = "SELECT * FROM `resident` WHERE `ID`='$id'";

        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);

        $editfname = $row["Firstname"];
        $editmname = $row["Middlename"];
        $editlname = $row["Lastname"];
        $editalias = $row["Alias"];
        $editbp = $row["PlaceofBirth"];
        $editbd = $row["Birthdate"];
        $editage = $row["Age"];
        $editcivil = $row["CivilStatus"];
        $editgender = $row["Gender"];
        $editaddress = $row["Address"];
        $editeadd = $row["EmailAddress"];
        $editcontnum = $row["ContactNumber"];
        $editoccu = $row["Occupation"];
        $editcitizen = $row["Citizenship"];
    }

    if(isset($_POST['update']))
    {   
        $editState = true; 
        $id = $_GET['res-updateid'];
        
        $fname = $_POST['firstname'];
        $mname = $_POST['middlename'];
        $lname = $_POST['lastname'];
        $alias = $_POST['alias'];
        $bplace = $_POST['birthplace'];
        $bdate = $_POST['birthdate'];
        $age = $_POST['age'];
        $civil = $_POST['civilstatus'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $emailadd = $_POST['emailadd'];
        $contnum = $_POST['contactnumber'];
        $occu = $_POST['occupation'];
        $citizen = $_POST['citizenship'];

        $query = "update `resident` set Firstname='$fname', Middlename='$mname', Lastname='$lname', Alias='$alias', PlaceofBirth='$bplace', Birthdate='$bdate', Age='$age', CivilStatus='$civil', Gender='$gender', Address='$address', EmailAddress='$emailadd', ContactNumber='$contnum', Occupation='$occu', Citizenship='$citizen' where `ID`='$id'";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:Add Resident.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>