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
    <title>Resident</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/a-style.css?v=<?php echo time(); ?>">
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
                    <a class="active">
                        <span class="icon">
                            <ion-icon name="pencil-outline"></ion-icon>
                        </span>
                        <span class="title">Reports</span>
                    </a>
                </li>

                <li>
                    <a href="Audit.php">
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

        <!-- ========================= Main ==================== -->
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

            <div class="graph">
                <div class="piegraph">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="bargraph">
                    <canvas id="cases"></canvas>
                </div>
                <div class="gendergraph">
                    <canvas id="month"></canvas>
                </div>
                </div>
            </div>
        </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script src="assets/js/mychart.js"></script>

</body>
</html>