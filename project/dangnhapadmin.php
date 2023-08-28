<?php
require_once 'db.php'; ?>

<?php
$check ='';

if (isset($_POST["login"])) {
    // check validate
    $username = $_POST['username'];
    $password = $_POST['password'];
        $sql = sprintf("SELECT * FROM admin WHERE adminname = '%s' AND password = '%s'", mysqli_real_escape_string($conn, $username), mysqli_real_escape_string($conn, $password));
        $result = $conn->query($sql);
        //var_dump($result);
        if($result->num_rows > 0){
            
            header('Location: admin.php');
          //var_dump($_SESSION['username']);
        }else{
            $check = '<p style="color:red;margin-left:35px">Tài khoản hoặc Mật khẩu ADMIN không đúng</p>';
        }
        
    
    }

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
          
        </div>
        <br><br><br>

        <div style="background-image: url(images/background_dangki.jpg);background-size:full;height:700px;width:full;"> 
            
        
        <div style="width: 45% ;height:100%;background-size: cover;background-repeat: no-repeat;background-position: center;float:left">   
           <img style="margin-top:170px;margin-left:50px" src="images/291979376_EX.gif">
        <div style="float:left;display:flex;justify-content:flex-end;padding-top: 100px;margin: -250px 550px;padding-bottom:70px;max-width:6000px;width: 800px !important;min-width: 600px;">
            <div style="background:white;width: 440px;float:left; border:#222 thin solid;margin-top: -50px;" > 
            <from>    
           
            <p style="font-size: 25px;margin: 20px 15px"><B>Đăng Nhập ADMIN</B></p>
            <input type="text" name="username" placeholder="Tài Khoản" required>
            
        <br>
            <input type="password" name="password" placeholder="Mật Khẩu" required>
            <?php echo $check ?>
           
            <label>&nbsp;</label><input type="submit" style="cursor:pointer;background:#4872fa;font-size:25px;color:white" value="Đăng nhập" name="login"><br>
        <hr color: #818078; width="100%">
           
            <br>
        </from>
        </div>
        </form>
    </form>
</body>
</html>

