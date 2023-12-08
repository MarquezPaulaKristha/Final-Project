<?php   
session_start();
include("Connect.php");
$viewState = false;
include("View_Users.php");
$editState = false;
include("user-update.php");
 if (!isset($_SESSION['USER_ID'])) {  
    header("location:../Login.php");  
    die();  
}
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $user=$_POST['username'];
    $password=$_POST['password'];
    $type=$_POST['type'];
    $worid=$_POST['worid'];
    $wname=$_POST['worname'];
    $date=$_POST['date'];

    $insert="insert into `users` (Name,Address,ContactNumber,Gender,Username,Password,Type,WorkerID,WorkerName,Date) values 
    ('$name','$address','$contact','$gender','$user','$password','$type','$worid','$wname','$date')";
    $result = mysqli_query($con,$insert);

    if($result){
        header("location:Users.php");
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
    <title>Users</title>
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
                    <a class="active">
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
                    <a href="#">
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
        </div>

            <!-- ================ Add Resident ================= -->
            <div class="fillup-container">
                <div class="cases-details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Users</h2>
                            <a href="Users.php?add">
                        <div class="add-user">
                            <div>
                                <span class="las la-plus"></span>
                                <h3>Add User</h3>
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
                                <td>Username</td>
                                <td>Type of Users</td>
                                <td>Operations</td>     
                            </tr>
                        </thead>

                        <tbody>
                        <?php

                        $select = "Select * from `users`";
                        $result = mysqli_query($con,$select);

                        if($result) {
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['ID'];
                                $name = $row['Name'];
                                $add = $row['Address'];
                                $user = $row['Username'];
                                $type = $row['Type'];
                                ?>
                                
                            <tr>
                                <td class="user_id"><?php echo $id ?></td>
                                <td><?php echo $name ?></td>
                                <td><?php echo $add ?></td>
                                <td><?php echo $user ?></td>
                                <td><?php echo $type ?></td>

                                <td>
                                    <a href="Users.php?viewid=<?php echo $id ?>"><ion-icon name="eye-outline"></ion-icon></a>
                                    <a href="Users.php?updateid=<?php echo $id ?>"><ion-icon name="pencil-outline"></ion-icon></a>
                                    <a href="delete.php?deleteid=<?php echo $id ?>"><ion-icon name="trash-outline"></ion-icon></a>
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

<div id="user_details" class="modal">
    <div class="modal-content">
        <div class="pop-container">
            <header>
            <a href="Users.php" class="modalclose"><ion-icon name="close-circle-outline"></ion-icon></a>
            </header>
        <form method="post">
        <div class="profile-card">
        <div class="profile-header">
            <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__480.png">
            <h3><?php echo ($viewState == true ? $viewname:'') ?></h3>
            <p><?php echo ($viewState == true ? $viewtype:'') ?></p>
        </div>
        <div class="profile-body">
            <ul>
                <li>
                    <h3><?php echo ($viewState == true ? $viewaddress:'') ?></h3>
                    <p><?php echo ($viewState == true ? $viewuser:'') ?></p>
                    <i class="fas fa-mobile-alt" ></i>
                </li>
            </ul>
        </div>
            </form>
        </div>
    </div>
</div>

<div id="modalbox" class="modal">
    <div class="modal-content">
        <div class="pop-container">
        <header>Add Users
        <a href="Users.php" class="modalclose"><ion-icon name="close-circle-outline"></ion-icon></a>
        </header>
    
    <form method="post">
        <div class="form-first">
            <div class="lodetails">
                <span class="lotitle">Personal Details</span>
                <div class="fields">
                    <div class="loinput-field">
                        <label>Full Name</label>
                        <input type="text" placeholder="Enter Full Name" name="name" required value="<?php echo ($editState == true ? $editname:'')
                        ?>">
                    </div>

                    <div class="loinput-field">
                        <label>Address</label>
                        <input type="text" placeholder="Enter Address" name="address" required value="<?php echo ($editState == true ? $editadd:'')
                        ?>">
                    </div>

                    <div class="loinput-field">
                        <label>Contact Number</label>
                        <input type="number" placeholder="Enter Address" name="contact" required value="<?php echo ($editState == true ? $editcon:'')
                        ?>">
                    </div>

                    <div class="loinput-field">
                        <label>Gender</label>
                        <input type="text" placeholder="Enter Address" name="gender" required value="<?php echo ($editState == true ? $editgen:'')
                        ?>">
                    </div>

                    <div class="loinput-field">
                        <label>Username</label>
                        <input type="text" placeholder="Enter Username" name="username" required value="<?php echo ($editState == true ? $editusername:'')
                        ?>">
                    </div>

                    <div class="loinput-field">
                        <label>Password</label>
                        <input type="password" placeholder="Enter Password" name="password" required value="<?php echo ($editState == true ? $editpassword:'')
                        ?>">
                    </div>

                    <div class="loinput-field">
                        <label>User Type</label>
                            <select type="text" id="type" name="type">
                                <option></option>
                                <option value="Worker">Worker</option>
                                <option value="Resident">Resident</option>
                                <option value="Officer">Officer</option>
                            </select>
                    </div>

                    <div class="loinput-field">
                        <label>Worker ID</label>
                        <input type="text" name="worid" readonly value="<?php echo $_SESSION['USER_ID'] ?>">
                    </div>

                    <div class="loinput-field">
                        <label>Worker Name</label>
                        <input type="text" name="worname" readonly value="<?php echo $_SESSION['USER_NAME'] ?>">
                    </div>
                    
                    <div class="loinput-field">
                    <label for="currentDateTime">Current Date:</label>
                    <input type="datetime-local" id="currentDateTime" name="date" readonly>
                    </div>

                </div>
            </div>
                <button type="submit" class="btn" name="add" id="add">Add
                </button>
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
    const userdetails = document.getElementById("user_details");
    const updateBtn = document.getElementById("update");
    const addBtn = document.getElementById("add");

    if (window.location.href.includes(".php?add")) {
        addBtn.style.display = "flex";
        modalbox.style.display = "flex";
        updateBtn.style.display = "none";
        userdetails.style.display = "flex";
    }

    if (window.location.href.includes(".php?updateid")) {
        userdetails.style.display = "flex";
        modalbox.style.display = "flex";
        updateBtn.style.display = "inline-block";
        addBtn.style.display = "none";
    }

    if (window.location.href.includes(".php?viewid")) {
        userdetails.style.display = "flex";
    }

    function closeAddForm() {
        modalbox.style.display = "none";
    }


    function closeUpdateForm() {
        modalbox.style.display = "none";
    }

    const currentDateTime = new Date().toISOString().slice(0, 16);
    document.getElementById('currentDateTime').value = currentDateTime;
</script>

<script>
	$(function(){
	    $.ajax({
	        url:'./Actions.php?a=save_log',
	        method:'POST',
	        data:{action_made:" viewed the data of <?php echo "[id={$id}]". $firstname.' '.$lastname ?>"},
	        dataType:'json',
	        error:err=>{
	            console.log(err)
	        },
	        succuess:function(resp){
	            if(resp == 1){
	                console.log("Log successfully saved")
	            }else{
	                console.log("Log has failed to save.")
	            }
	        }
	    })
	})
	</script>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

</body>
</html>