<?php
 session_start();
 include("Connect.php");
 include("cases-delete.php");
  $editState = false;
  include("cases-update.php");
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
    <title>Cases</title>
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
                    <a class="active">
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
                                <td>Witness Name</td> 
                                <td>Respondent</td>            
                                <td>Status</td>
                                <td>Operations</td>


                            </tr>
                        </thead>
                        <tbody>
                        <?php

                        $select = "Select * from `cases`";
                        $result = mysqli_query($con,$select);

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
                                <td><?php echo $id ?></td>
                                <td><?php echo $com ?></td>
                                <td><?php echo $ind ?></td>
                                <td><?php echo $inc ?></td>
                                <td><?php echo $wnam ?></td>
                                <td><?php echo $res ?></td>
                                <td><?php echo $sta ?></td>
                                <td>
                                    <a href="Cases.php?cases-updateid=<?php echo $id ?>"><ion-icon name="pencil-outline"></ion-icon></a>
                                    <a href="cases-delete.php?deleteid=<?php echo $id ?>"><ion-icon name="trash-outline"></ion-icon></a>
                                </td>
                            </tr>
                            <?php   }  
                            }?>
                        </tbody>
                    </table>
                </div>
            </div>

<div id="modalbox" class="modal">
    <div class="modal-content">
        <div class="pop-container">
        <header>Cases
        <a href="Cases.php" class="modalclose"><ion-icon name="close-circle-outline"></ion-icon></a>
        </header>
    
    <form method="post">
        <div class="form-first">
            <div class="lodetails">
                <span class="lotitle">Personal Details</span>
                <div class="fields">
                <div class="loinput-field">
                        <label>Respondent</label>
                        <input type="text" placeholder="Enter Full Name" name="res" required value="<?php echo ($editState == true ? $editres:'')
                        ?>">
                    </div>
                <div class="loinput-field">
                        <label>Status</label>
                            <select type="text" id="type" name="sta" required>
                                <option></option>
                                <option <?php echo($editstatus == "Pending") ? "selected" : "";?>>Pending</option>
                                <option <?php echo($editstatus == "Ongoing") ? "selected" : "";?>>Ongoing</option>
                                <option <?php echo($editstatus == "Solved") ? "selected" : "";?>>Solved</option>
                            </select>
                    </div>
                <div class="loinput-field">
                        <label>Action</label>
                        <input type="text" placeholder="Enter Full Name" name="act" required value="<?php echo ($editState == true ? $editact:'')
                        ?>">
                </div>
            </div>
        </div>
                <button type="submit" class="btn" name="update" id="update">
                Update
                </button>
            </div>
        </form>
        </div>
    </div>
</div>

<script>
    const modalbox = document.getElementById("modalbox");
    const updateBtn = document.getElementById("update");

    if (window.location.href.includes(".php?cases-updateid")) {
        modalbox.style.display = "flex";
        updateBtn.style.display = "inline-block";
    }

    function closeAddForm() {
        modalbox.style.display = "none";
    }


    function closeUpdateForm() {
        modalbox.style.display = "none";
    }
</script>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>