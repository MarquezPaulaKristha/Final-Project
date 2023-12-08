<?php
session_start();
include 'Connect.php';
if (!isset($_SESSION['USER_ID'])) {  
    header("location:../Login.php");  
    die(); 
}

$pending = mysqli_query($con,"select * from cases where Status='Pending'");
$pendingNum = mysqli_num_rows($pending);

$ongoing = mysqli_query($con,"select * from cases where Status='Ongoing'");
$ongoingNum = mysqli_num_rows($ongoing);

$solved = mysqli_query($con,"select * from cases where Status='Solved'");
$solvedNum = mysqli_num_rows($solved);

$totalcases = mysqli_query($con,"select * from cases");
$casesNum = mysqli_num_rows($totalcases);

$totalres = mysqli_query($con,"select * from users");
$resNum = mysqli_num_rows($totalres);

$fgender = mysqli_query($con,"select * from users where Gender='Female'");
$fgenderNum = mysqli_num_rows($fgender);

$mgender = mysqli_query($con,"select * from users where Gender='Male'");
$mgenderNum = mysqli_num_rows($mgender);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/r-style.css?v=<?php echo time(); ?>">
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
                        <span class="icon-title">BCMS</span>
                    </a>
                </li>

                <li>
                    <a class="active" href="#">
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

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $pendingNum ?></div>
                        <div class="cardName">Pending</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $ongoingNum ?></div>
                        <div class="cardName">Ongoing</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="hourglass-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $solvedNum ?></div>
                        <div class="cardName">Solved</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $casesNum ?></div>
                        <div class="cardName">Total Cases</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="briefcase-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $resNum ?></div>
                        <div class="cardName">Total Resident</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $fgenderNum ?></div>
                        <div class="cardName">Female</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="briefcase-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $mgenderNum ?></div>
                        <div class="cardName">Male</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="briefcase-outline"></ion-icon>
                    </div>
                </div>
            </div>
            
            <div class="graphBox">
                <div class="box">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="box">
                    <canvas id="cases"></canvas>
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