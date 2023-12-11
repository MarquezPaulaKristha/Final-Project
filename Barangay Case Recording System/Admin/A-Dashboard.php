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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
                    <a class="active">
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
                            <ion-icon name="pencil-outline"></ion-icon>
                        </span>
                        <span class="title">Cases</span>
                    </a>
                </li>

                <li>
                    <a href="Reports.php">
                        <span class="icon">
                            <ion-icon name="clipboard"></ion-icon>                        
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
        <!-- ========================= Cards ==================== -->

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
            </div>
            <!-- =================== Chart Js =================== -->

                <div class="graphBox">
                    <div class="box">
                    <canvas id="myChart"></canvas>
                    </div>
                    <div class="box">
                    <canvas id="cases"></canvas>
                    </div>
                </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Cases</h2>
                        <a href="Cases.php" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                            <td>ID</td>
                                <td>Complainant</td>
                                <td>Involved</td> 
                                <td>Incident</td>  
                                <td>Respondent</td>              
                                <td>Status</td>

                            </tr>
                        </thead>

                        <tbody>

                        <?php
                        $sql="Select * from `cases`";
                        $result=mysqli_query($con,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $id=$row['ComplainantID'];
                                $com=$row['Complainant'];
                                $inv=$row['Individual'];
                                $inc=$row['Incident'];
                                $res=$row['Respondent'];
                                $sta=$row['Status'];
                                echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$com.'</td>
                                <td>'.$inv.'</td>
                                <td>'.$inc.'</td>   
                                <td>'.$res.'</td>                      
                                <td>'.$sta.'</td>
                                </td>
                            </tr>';
                            }
                        }
                        ?>

                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Audit Trail</h2>
                    </div>

                    <table>
                    <thead>
                            <tr>
                                <td>ID</td>
                                <td>Users</td>
                            </tr>
                        </thead>
                      <tbody>

                        <?php
                        $sql="Select * from `users`";
                        $result=mysqli_query($con,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $id=$row['ID'];
                                $name=$row['Name'];
                                echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                            </tr>';
                            }
                        }
                        ?>

                        </tbody>
                    </table>
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