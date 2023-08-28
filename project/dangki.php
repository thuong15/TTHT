<?php
require_once 'db.php';
// if(!$conn){
//     die("Kết nối thất bại".mysqli_connect_error());   
// }else{
//     echo"Kết nối thành công";
// };
?>
<?php
$error_usn = "";
$error_psw = "";
// $error_email="";
$error_phone="";
$check_validate = true;
if (isset($_POST["signup"])) :
    if ($_POST['username'] == '' || empty($_POST['username'])) {
        $error_usn =  '<div style="color:red;margin-left:160px;width:260px">Tài khoản không được để trống</div>';
        $check_validate = false;
    }
    if (($_POST['password']) == '' || empty($_POST['password'])) {
        $error_psw =  '<div style="color:red;margin-left:160px;width:260px">Mật khẩu không được để trống</div>';
        $check_validate = false;
    }
    // if (($_POST['email']) == '' || empty($_POST['email'])) {
    //     $error_email =  '<div style="color:red;margin-left:160px;width:260px">email không được để trống</div>';
    //     $check_validate = false;
    // }
    if (($_POST['phone']) == '' || empty($_POST['phone'])) {
        $error_phone =  '<div style="color:red;margin-left:160px;width:260px">Số điện thoại không được để trống</div>';
        $check_validate = false;
    }
endif;
?>

<?php
$thanhcong='';
$thatbai='';
$nhaplai='';
if(isset($_POST['signup'])){
    $name = $_POST['username'];
    $pass= $_POST['password'];
    $email= $_POST['email'];
    $phone=$_POST['phone'];
   if($name != '' && $pass != '' && $phone != ''){
    $query="INSERT INTO signup(username,password,email,phone) values('$name','$pass','$email','$phone')";
    //var_dump($query);

    if($conn->query($query)){
        $thanhcong = '<div style="color:red;margin-left:160px;margin-top:10px">Đăng kí thành công</div>';
    }else{
        $thatbai = '<div style="color:red;margin-left:160px;margin-top:10px">Đăng kí thất bại</div>';
    }
}
}
// else{
//     $thatbai ='<div style="color:red;margin-left:165px;">Yêu cầu nhập dữ liệu</div>';
//  }

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
        /* H2{margin: 20px 15px} */
        label{margin: 10px 15px;width: 30%;float: left;text-align: left;}
        input{margin: 10px 5px;float: left;}
        textarea{margin: 10px 5px;float: left;}
        /* .fa {
  padding: 13px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 360%;
}
.fa-facebook {
  background: #3B5998;
  color: white;
} */
    </style>
</head>
<body style="background: white;">
    <form method="post" action="" style="width:100%">
        <div style="height: 10%;width:100%; background-color: white; display:block" >
           <a href="index.php"><div style="margin:26px 150px;color:grey;font-size:40px;cursor:pointer"><span style="font-weight: bold;color:black;font-size:40px">TTHT</span>EYES</div></a>
            <a style="float: right; margin: 30px 100px;font-size:16px;color:red;cursor:pointer">Bạn cần giúp đỡ?</a>    
        </div>
        <br><br><br>

        <div style="background-image: url(images/login.jpg);background-size:full;height:700px;width:full;"> <!-- margin: 0 auto; height: 80%;display:flex;text-align:center;float:left ;justify-content:center -->
            
        
        <div style="width: 45% ;height:100%;background-size: cover;background-repeat: no-repeat;background-position: center;float:left">   
            <!-- <label style="height:500px;margin:250px ;display:flex"> Web bán hàng uy tín hàng đầu</label> -->
           <img style="margin-top:170px;margin-left:50px" src="images/anh1.webp">
        <div style="float:left;display:flex;justify-content:flex-end;padding-top: 100px;margin: -250px 550px;padding-bottom:70px;max-width:6000px;width: 800px !important;min-width: 600px;">
            <div style="background:white;width: 440px;float:left; border:#222 thin solid;margin-top: -315px;" > <!--- margin: 0px 190px; 565px -178px -->
            <from>    
            <!-- <H2>Đăng Kí:<H2> -->
            <p style="font-size: 25px;margin: 20px 15px"><B>Đăng kí</B></p>
            <label style="font-size: 17px;">Tài Khoản(<span style="color: red;">*</span>) </label><input type="text" name="username" placeholder="Tài Khoản">
            <?php echo $error_usn?>
        <br>
            <label style="font-size: 17px;">Mật Khẩu(<span style="color: red;">*</span>): </label><input type="password" name="password" placeholder="Mật Khẩu">
            <?php echo $error_psw?>
        <br>
            <label style="font-size: 17px;">email: </label><input type="mail" name="email" placeholder="abc.@gmail.com">
            <!-- <?php echo $error_email?> -->
        <br>
            <label style="font-size: 17px;">Số Điện Thoại(<span style="color: red;">*</span>): </label><input type="tell" name="phone" placeholder="Nhập Số điện thoại">
            <?php echo $error_phone?>
            <?php echo $thanhcong?>
            <?php echo $thatbai?>
            <?php echo $nhaplai?>
        
            <!-- <label>&nbsp;</label> -->
            <input type="submit" style="cursor:pointer;margin-left:160px" value="Đăng kí" name="signup"><br>
        <hr color: #818078; width="100%">
            
                <!-- <span class="fa fa-facebook"></span> -->
            
            <!-- <a class="btn btn-icon btn-facebook" style="margin-left:70px" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
            <a class="btn btn-icon btn-googleplus" href="#"><i class="fa fa-google-plus"></i><span>Google+</span></a> -->
            <br>
            <span style="font-size: 13px; text-align:center;color:#222;margin:5px 67px">Bằng việc đăng kí,bạn đã đồng ý với chung tôi về</span>
            <p style="font-size: 11px;text-align:center;color:#222"><a style="color: red;cursor:pointer">Điều khoản và dịch vụ</a> & <a style="color: red">Chính sách bảo mật</a></p>
            <p style="font-size: 14px;text-align:center;color:#222;margin-top:60px;">Bạn đã có tài khoản?<a href="dangnhap.php" style="color: red" >Đăng Nhập</a></p>
        </from>
        </div>

    </form>
</body>
</html>

