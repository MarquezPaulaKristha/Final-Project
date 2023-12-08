<?php   
session_start();  
include("Connect.php");
 if (isset($_POST['submit'])) {  
      //echo "<pre>";  
      //print_r($_POST);  
      $username=mysqli_real_escape_string($con,$_POST['username']);  
      $password=mysqli_real_escape_string($con,$_POST['password']);  
      $sql=mysqli_query($con,"select * from `users` where Username='$username' && Password='$password'");

      $row=mysqli_fetch_array($sql);

      if($row['Type']=="Worker"){
        $_SESSION['USER_ID']=$row['ID'];  
        $_SESSION['USER_NAME']=$row['Name'];
        $_SESSION['USER_TYPE']=$row['Type'];  
        header('location:Admin/A-Dashboard.php');
      }
      elseif($row['Type']=="Resident"){
        $_SESSION['USER_ID']=$row['ID'];  
        $_SESSION['USER_NAME']=$row['Name'];
        $_SESSION['USER_TYPE']=$row['Type'];  
        header('location:Resident/R-Dashboard.php');
      }
      elseif($row["Type"]=="Officer"){
        $_SESSION['USER_ID']=$row['ID'];  
        $_SESSION['USER_NAME']=$row['Name'];
        $_SESSION['USER_TYPE']=$row['Type'];  
        header('location:Admin/A-Dashboard.php');
      }else{
        $msg="Please Enter Valid details !"; 
      } 
 }  
 ?> 
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="assets/css/Login.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="assets/Img/logoo.png">
</head>

<body>

    <div class="section_login">
        <!--<div class="back">
    <a href="Index.html"><i class="uil uil-arrow-left"></i></a>
    </div>-->
        <img src="assets/Img/loginbg.png">
        <div class="card-back">
            <div class="center-wrap">
                <div class="section text-center">
                    <form method="post" action="">
                        <h4 class="mb-4 pb-3">LOGIN</h4>
                        <div class="form-group">
                            <input type="text" name="username" class="form-style" placeholder="Your Username" required>
                            <i class="input-icon uil uil-at"></i>
                        </div>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-style" placeholder="Your Password" required>
                    <i class="input-icon uil uil-lock-alt"></i>
                </div>
                <div class="btn-box">
                    <input type="submit" name="submit" value="Login" class="btn_submit mt-4">
                </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>