<?php
session_start();
include 'Connect.php';
if (!isset($_SESSION['USER_ID'])) {  
    header("location:../Login.php");  
    die();
}else{
    $name=$_SESSION['USER_NAME'];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Cases</title>
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
                    <a href="File a Complain.php">
                        <span class="icon">
                            <ion-icon name="pencil-outline"></ion-icon>
                        </span>
                        <span class="title">File A Complain</span>
                    </a>
                </li>

                <li>
                    <a class="active" href="#">
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
            <div class="cases-details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Cases</h2>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Complainant</td>
                                <td>Involved</td>
                                <td>Incident</td> 
                                <td>WitnessName</td>     
                                <td>Respondent</td>            
                                <td>Status</td>

                            </tr>

                            <?php

                        $sql = "select * from cases where Complainant='$name'";
                        $result = mysqli_query($con,$sql);

                        if($result) {
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['ID'];
                                $com = $row['Complainant'];
                                $ind = $row['Individual'];
                                $inc = $row['Incident'];
                                $wnam = $row['WitnessName'];
                                $res = $row['Respondent'];
                                $sta = $row['Status'];
                                ?>
                                
                            <tr>
                                <td class="user_id"><?php echo $id ?></td>
                                <td><?php echo $com ?></td>
                                <td><?php echo $ind ?></td>
                                <td><?php echo $inc ?></td>
                                <td><?php echo $wnam ?></td>
                                <td><?php echo $res ?></td>
                                <td><?php echo $sta ?></td>
                            </tr>
                            <?php   }  
                            }?>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
        </div>
    </div>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>