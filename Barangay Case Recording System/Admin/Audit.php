<?php
session_start();
include 'Connect.php';
if (!isset($_SESSION['USER_ID'])) {  
    header("location:../Login.php");  
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit Trail</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/a-style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="assets/imgs/logoo.png">
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
                    <a href="A-Dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="Users.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>

                <li>
                    <a href="Cases.php">
                        <span class="icon">
                            <ion-icon name="clipboard"></ion-icon>                        
                        </span>
                        <span class="title">Cases</span>
                    </a>
                </li>

                <li>
                    <a href="Reports.php">
                        <span class="icon">
                            <ion-icon name="pencil-outline"></ion-icon>
                        </span>
                        <span class="title">Reports</span>
                    </a>
                </li>

                <li>
                    <a class="active">
                        <span class="icon">
                            <ion-icon name="shield-outline"></ion-icon>
                        </span>
                        <span class="title">Audit Trail</span>
                    </a>
                </li>

                <li>
                    <a href="Ad-Logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
                <div class="profile">
                    <a><?php echo $_SESSION['USER_NAME'] ?></a>
                    <img src="assets/imgs/logo_female.png" alt="">
                </div>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>
        </div>

        <div class="fillup-container">
            <div class="cases-details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Activity Logs</h2>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>User ID</td>
                                <td>Name Of User</td>
                                <td>User Added</td>
                                <td>Date</td>               
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                        $select = "Select * from `users`";
                        $result = mysqli_query($con,$select);

                        if($result) {
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['WorkerID'];
                                $wid = $row['WorkerName'];
                                $name = $row['Name'];
                                $date = $row['Date'];
                                ?>
                                
                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $wid ?></td>
                                <td><?php echo $name ?></td>
                                <td><?php echo $date ?></td>
                            </tr>
                            <?php   }  
                            }?>
                        </tbody>
                    </table>
        </div>


    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>