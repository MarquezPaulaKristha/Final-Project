<?php   
 session_start();
include("Connect.php");
 $editState = false;
 include("resident-update.php");
 if (isset($_SESSION['RES_ID'])) {  
    header("location:../Login.php");  
    die();  
}
if(isset($_POST['submit'])){
    $fname=$_POST['firstname'];
    $mname=$_POST['middlename'];
    $lname=$_POST['lastname'];
    $alias=$_POST['alias'];
    $bplace=$_POST['birthplace'];
    $bdate=$_POST['birthdate'];
    $age=$_POST['age'];
    $cstatus=$_POST['civilstatus'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $emailadd=$_POST['emailadd'];
    $contnum=$_POST['contactnumber'];
    $occu=$_POST['occupation'];
    $citizen=$_POST['citizenship'];


    $insert="insert into `resident` (Firstname,Middlename,Lastname,Alias,PlaceofBirth,Birthdate,Age,CivilStatus,Gender,Address,EmailAddress,ContactNumber,Occupation,Citizenship) values 
    ('$fname','$mname','$lname','$alias','$bplace','$bdate','$age','$cstatus','$gender','$address','$emailadd','$contnum','$occu','$citizen')";
    $result = mysqli_query($con,$insert);

    if($result){
        header("location:Add Resident.php");
    }else{
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
    <title>Resident</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/a-style.css?v=<?php echo time(); ?>">
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
                    <a class="active">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Add Resident</span>
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
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="sync-outline"></ion-icon>
                        </span>
                        <span class="title">Backup and Restore</span>
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
        </div>

            <!-- ================ Add Resident ================= -->
            <div class="fillup-container">
                <div class="cases-details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Residents</h2>
                            <a href="Add Resident.php?add">
                        <div class="add-res">
                            <div>
                                <span class="las la-plus"></span>
                                <h3>Add Resident</h3>
                            </div>
                        </div>
                    </a>
                        </div>

                    <table>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Full Name</td>
                                <td>Address</td>
                                <td>Contact Number</td>     
                                <td>Gender</td>
                                <td>Operations</td>               

                            </tr>
                        </thead>
                        <tbody>
                        <?php

                        $select = "Select * from `resident`";
                        $result = mysqli_query($con,$select);

                        if($result) {
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['ID'];
                                $fname = $row['Firstname'];
                                $radd = $row['Address'];
                                $rcon = $row['ContactNumber'];
                                $rgender = $row['Gender'];

                                ?>
                                
                            <tr>
                                <td class="res_id"><?php echo $id ?></td>
                                <td><?php echo $fname ?></td>
                                <td><?php echo $radd ?></td>
                                <td><?php echo $rcon ?></td>
                                <td><?php echo $rgender ?></td>

                                <td>
                                    <a href="" view_data><ion-icon name="eye-outline"></ion-icon></a>
                                    <a href="Add Resident.php?res-updateid=<?php echo $id ?>" id="update"><ion-icon name="pencil-outline"></ion-icon></a>
                                    <a href="delete.php?res-deleteid=<?php echo $id ?>"><ion-icon name="trash-outline"></ion-icon></a>
                                </td>   
                            </tr>
                            <?php   }  
                            }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<div id="modalbox" class="modal">
    <div class="modal-content">
        <div class="modal-container">
            <header>Add Resident
            <a href="Add Resident.php" class="modalclose"><ion-icon name="close-circle-outline"></ion-icon></a>
            </header>
            <form method="POST">
                <div class="form first">
                    <div class="fdetails">
                        <span class="ftitle">Personal Details</span>
                        <div class="fields">
                            <div class="modal-input-field">
                                <label>Firstname</label>
                                <input type="text" name="firstname" placeholder="Enter First Name" required value="<?php echo ($editState == true ? $editfname:'')
                                ?>">
                            </div>
    
                            <div class="modal-input-field">
                                <label>Middlename</label>
                                <input type="text" name="middlename" placeholder="Enter Middle Name" required value="<?php echo ($editState == true ? $editmname:'')
                                ?>">
                            </div>
    
                            <div class="modal-input-field">
                                <label>Lastname</label>
                                <input type="text" name="lastname" placeholder="Enter Last Name" required value="<?php echo ($editState == true ? $editlname:'')
                                ?>">
                            </div>
    
                            <div class="modal-input-field">
                                <label>Alias</label>
                                <input type="text" name="alias" placeholder="Enter Alias" required value="<?php echo ($editState == true ? $editalias:'')
                                ?>">
                            </div>
    
                            <div class="modal-input-field">
                                <label>Place of Birth</label>
                                <input type="text" name="birthplace" placeholder="Enter Birthplace" required value="<?php echo ($editState == true ? $editbp:'')
                                ?>">
                            </div>
    
                            <div class="modal-input-field">
                                <label>Birthdate</label>
                                <input type="date" name="birthdate" placeholder="Enter Birthplace" required value="<?php echo ($editState == true ? $editbd:'')
                                ?>">
                            </div>

                            <div class="modal-input-field">
                                <label>Age</label>
                                <input type="text" name="age" placeholder="Enter Age" required value="<?php echo ($editState == true ? $editage:'')
                                ?>">
                            </div>

                            <div class="modal-input-field">
                                <label>Civil Status</label>
                                    <select type="text" id="type" name="civilstatus" required value="<?php echo ($editState == true ? $editcivil:'')
                                ?>">
                                        <option value="#">Select Civil Status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Windowed">Windowed</option>
                                </select>                            
                            </div>

                            <div class="modal-input-field">
                                <label>Gender</label>
                                    <select type="text" id="type" name="gender" required value="<?php echo ($editState == true ? $editgender:'')
                                ?>">
                                        <option value="#">Select Gender</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>      
                            </div>

                            <div class="modal-input-field">
                                <label>Address</label>
                                <input type="text" name="address" placeholder="Enter Lot, Block, and Street" required value="<?php echo ($editState == true ? $editaddress:'')
                                ?>">
                            </div>

                            <div class="modal-input-field">
                                <label>Email Address</label>
                                <input type="text" name="emailadd" placeholder="Enter Email" required value="<?php echo ($editState == true ? $editeadd:'')
                                ?>">
                            </div>

                            <div class="modal-input-field">
                                <label>Contact Number </label>
                                <input type="number" name="contactnumber" placeholder="Enter Contact Number" required value="<?php echo ($editState == true ? $editcontnum:'')
                                ?>">
                            </div>

                            <div class="modal-input-field">
                                <label>Occupation</label>
                                <input type="text" name="occupation" placeholder="Enter Occupation" required value="<?php echo ($editState == true ? $editoccu:'')
                                ?>">
                            </div>

                            <div class="modal-input-field">
                                <label>Citizenship</label>
                                <input type="text" name="citizenship" placeholder="Enter Citizenship" required value="<?php echo ($editState == true ? $editcitizen:'')
                                ?>">
                            </div>
                        </div>
                    </div>
     
                    <button type="submit" class="btn" name="res-add" id="res-add">Add
                    </button>
                    <button type="submit" class="btn" name="res-update" id="res-update">Update
                    </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const modalbox = document.getElementById("modalbox");
    const updateBtn = document.getElementById("res-update");
    const addBtn = document.getElementById("res-add");

    if (window.location.href.includes(".php?add")) {
        modalbox.style.display = "flex";
        updateBtn.style.display = "none";
        addBtn.style.display = "flex";
    }

    if (window.location.href.includes(".php?res-updateid")) {
        modalbox.style.display = "flex";
        updateBtn.style.display = "inline-block";
        addBtn.style.display = "none";
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
</body>
</html>