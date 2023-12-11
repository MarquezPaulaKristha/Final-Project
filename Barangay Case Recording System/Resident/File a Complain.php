<?php
session_start();
include 'Connect.php';
if (!isset($_SESSION['USER_ID'])) {  
    header("location:../Login.php");  
    die();  
}
if (isset($_POST['submit'])) {
    $comid = $_POST['comid'];
    $com = $_POST['com'];
    $dat = $_POST['dat'];
    $tim = $_POST['tim'];
    $loc = $_POST['loc'];
    $inc = $_POST['inc'];
    $nam = $_POST['nam'];
    $wnam = $_POST['wnam'];
    $wcon = $_POST['wcon'];
    $oth = $_POST['oth'];

    $sql = "insert into `cases` (ComplainantID,Complainant,Date,Time,Location,Incident,Individual,WitnessName,WitnessContact,Other,Respondent,Status,Action) values 
    ('$comid','$com','$dat','$tim','$loc','$inc','$nam','$wnam','$wcon','$oth','None','Pending','None')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $msg = "Data Inserted Successfully";
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File A Complain</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/r-style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="assets/Img/logoo.png">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-web-component"></ion-icon>
                        </span>
                        <span class="title">BCMS</span>
                    </a>
                </li>

                <li>
                    <a href="R-Dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a class="active" href="#">
                        <span class="icon">
                            <ion-icon name="pencil-outline"></ion-icon>
                        </span>
                        <span class="title">File A Complain</span>
                    </a>
                </li>

                <li>
                    <a href="Track Cases.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Track Cases</span>
                    </a>
                </li>
                <li>
                    <a href="Res-Logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>

                <div class="profile">
                    <a><?php echo $_SESSION['USER_NAME'] ?></a>
                    <img src="assets/img/logo_female.png" alt="">
                </div>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div>
        </div>

        <div class="fillup-container">
            <header>Incident Report Form</header>
            
    
            <form method="post">
                <div class="form first">
                    <div class="fillup-details">
                        <span class="ftitle">Personal Details</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>Complainant ID</label>
                                <input type="none" placeholder="" name="comid" value="<?php echo $_SESSION['USER_ID'] ?>" readonly>
                            </div>
                            <div class="input-field">
                                <label>Complainant</label>
                                <input type="text" placeholder="Enter Your Name" name="com" value="<?php echo $_SESSION['USER_NAME'] ?>" readonly>
                            </div>

                            <div class="input-field">
                                <label>Date</label>
                                <input type="date" placeholder="Enter Date of Incident" name="dat" required>
                            </div>
    
                            <div class="input-field">
                                <label>Time</label>
                                <input type="time" placeholder="Enter Exact Time of" name="tim" required>
                            </div>
    
                            <div class="input-field">
                                <label>Location</label>
                                <input type="text" placeholder="Enter Specific Location" name="loc" required>
                            </div>
    
                            <div class="input-field">
                                <label>Type of Incident</label>
                                <select type="text" id="type" name="inc">
                                    <option value="Blotter">Select Type of Incident</option>
                                    <option value="Blotter">Blotter</option>
                                    <option value="Burglary">Burglary</option>
                                    <option value="Assault">Assault</option>
                                    <option value="Family">Family Conflict</option>
                                    <option value="Debts">Non-Payment of Debts</option>
                                    <option value="Trespassing">Trespassing</option>
                                </select>
                            </div>  
                            
                            <div class="input-field">
                                <label>Name(s) of Individuals Involved</label>
                                <input type="text" placeholder="Specify the roles of individuals involved" name="nam" required>
                            </div>
    
                            <div class="input-field">
                                <label>Witness Name</label>
                                <input type="text" placeholder="Enter Name of Witness" name="wnam" required>
                            </div>

                            <div class="input-field">
                                <label>Witness Contact</label>
                                <input type="text" placeholder="Enter Contact of Witness" name="wcon" required>
                            </div>
                            
                            <div class="input-field">
                                <label>Other Specification</label>
                                <input type="text" placeholder="Enter other specification" name="oth" required>
                            </div>
                        </div>
    
                        <button class="SubBtn" name="submit">
                            <span class="btnSub">Submit</span>
                            <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>