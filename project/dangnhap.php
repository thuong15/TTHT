<?php
require_once 'db.php'; ?>

<?php

$error_usn = "";
$error_psw = "";
$check="";
$check_validate = true;
if (isset($_POST["login"])) :
    // check validate
    if ($_POST['username'] == '' || empty($_POST['username'])) {
        //var_dump($_POST['username']);
        $error_usn =  '<p style="color:red;margin-left:35px">Tài khoản không được để trống</p>';
        $check_validate = false;
    }
    if (($_POST['password']) == '' || empty($_POST['password'])) {
        $error_psw =  "<p style=\"color:red;margin-left:35px\">Mật khẩu không được để trống</p>";
        $check_validate = false;
    }
    // check validate
    if ($check_validate == true) {
        $username =$_POST['username'];
        $password =$_POST['password'];
    
        $sql = sprintf("SELECT * FROM signup WHERE username = '%s' AND password = '%s'", mysqli_real_escape_string($conn, $username), mysqli_real_escape_string($conn, $password));
        $result = $conn->query($sql);
        //var_dump($result);
        if($result->num_rows > 0):
            //echo 'run here';
            session_start();
             $_SESSION['username'] = $username;

            header('Location: index.php');
          //var_dump($_SESSION['username']);
        else:
            $check = '<p style="color:red;margin-left:35px">Tài khoản hoặc Mật khẩu không đúng</p>';
        endif;
        
    }
endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- <link rel="stylesheet" type="text/css" href="kienket.css"> -->


<style>
         a{cursor:pointer;text-decoration: none}
        div{box-sizing: border-box;float: left;}
        input{height:40px;width: 84%;margin: 12px 40px;}
    </style>
</head>
<body style="background: white;">
<form method="POST" action="">
    <form style="width:100%">
        <div style="height: 10%;width:100%; background-color: white; display:block" >
           <a href="index.php"><div style="margin:26px 150px;color:grey;font-size:40px;cursor:pointer"><span style="font-weight: bold;color:black;font-size:40px">TTHT</span>EYES</div></a>
            <a style="float: right; margin: 30px 100px;font-size:16px;color:red;cursor:pointer">Bạn cần giúp đỡ?</a>    
        </div>
        <br><br><br>

        <div style="background-image: url(images/login.jpg);background-size:full;height:700px;width:full;"> 
            
        
        <div style="width: 45% ;height:100%;background-size: cover;background-repeat: no-repeat;background-position: center;float:left">   
           <img style="margin-top:170px;margin-left:50px" src="images/anh1.webp">
        <div style="float:left;display:flex;justify-content:flex-end;padding-top: 100px;margin: -250px 550px;padding-bottom:70px;max-width:6000px;width: 800px !important;min-width: 600px;">
            <div style="background:white;width: 440px;float:left; border:#222 thin solid;margin-top: -315px;" > 
            <from>    
           
            <p style="font-size: 25px;margin: 20px 15px"><B>Đăng Nhập</B></p>
            <input type="text" name="username" placeholder="Tài Khoản" required>
            <?php echo $error_usn; ?>
        <br>
            <input type="password" name="password" placeholder="Mật Khẩu" required>
            
            <?php echo $error_psw; ?>
            <?php echo $check?>
            <label>&nbsp;</label><input type="submit" style="cursor:pointer;background:#4872fa;font-size:25px;color:white" value="Đăng nhập" name="login"><br>
        <hr color: #818078; width="100%">
            <!-- <a class="btn btn-icon btn-facebook" style="margin-left:70px" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
            <a class="btn btn-icon btn-googleplus" href="#"><i class="fa fa-google-plus"></i><span>Google+</span></a> -->
            <br><br>
            <span style="font-size: 13px; text-align:center;color:#222;margin:5px 67px">Bằng việc đăng nhập,bạn đã đồng ý với chung tôi về</span>
            <p style="font-size: 11px;text-align:center;color:#222"><a style="color: red;cursor:pointer">Điều khoản và dịch vụ</a> & <a style="color: red">Chính sách bảo mật</a></p>
            <p style="font-size: 14px;text-align:center;color:#222;margin-top:60px;">Bạn chưa có tài khoản?<a href="dangki.php" style="color: red" >Đăng kí</a></p>
        </from>
        </div>
        </form>
    </form>
</body>
</html>

