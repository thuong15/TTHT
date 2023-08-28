<?php
require_once 'db.php';
session_start();
// if(!$conn){
//     die("Kết nối thất bại".mysqli_connect_error());   
// }else{
//     echo"Kết nối thành công";
// };
?>
<?php

$error_ten = "";
$error_address = "";
$error_phone = "";
$check_validate = true;
if (isset($_POST["gui"])) :
    if ($_POST['fullname'] == '' || empty($_POST['fullname'])) {
        $error_ten =  '<div style="color:red;margin-left:210px;width:260px;font-weight:bold">Tên không được để trống</div>';
        $check_validate = false;
    }
    if (($_POST['address']) == '' || empty($_POST['address'])) {
        $error_address =  '<div style="color:red;margin-left:210px;width:260px;font-weight:bold">Địa chỉ không được để trống</div>';
        $check_validate = false;
    }
    if (($_POST['phone']) == '' || empty($_POST['phone'])) {
        $error_phone =  '<div style="color:red;margin-left:210px;width:260px;font-weight:bold">Số điện thoại không được để trống</div>';
        $check_validate = false;
    }
endif;
?>

<?php
// $sql = "select ID,name_product,image_product,gia,soluong,note from products  where ID =" . $id;
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();
$soluong = '1';
$name = $gia =  '';
if (isset($_POST['giohang'])) {
  $id = $_GET['ID'];
  // echo '<pre>';
  // var_dump($row);
  // echo '</pre>';
  $name = $row['name_product'];
  $image = $row['image_product'];
  //var_dump($row['name_product']);
  $gia = number_format($row["gia"], 0, ',', '.');
  //$soluong = $_POST['soluong1'];
  //var_dump($soluong);    

  $product_add = [$id, $name, $gia, $soluong];
  
   array_push($_SESSION['mycart'], $row);

  // array_push($_SESSION['giohang'], $product_add);
  // header('Location: giohang.php');
}

?>

<?php
$thanhcong='';
$thatbai='';
$nhaplai='';
if(isset($_POST['gui'])){
    $name = $_POST['fullname'];
    $address= $_POST['address'];
    $phone=$_POST['phone'];
   if($name != '' && $address != '' && $phone != ''){
    $query="INSERT INTO users(fullname,phone,address) values('$name','$phone','$address')";
    //$id = sprintf("SELECT b.ID_user,fullname,phone,address FROM signup a join users b on a.ID = b.ID_user where 1");

     //$query="INSERT INTO orders(ID_user,fullname,phone,address) values('','$name','$phone','$address')";
    //var_dump($query);

    if($conn->query($query)){
        $thanhcong = '<div style="color:green;margin-left:297px;margin-top:10px"> Thành công</div>';
    }else{
        $thatbai = '<div style="color:red;margin-left:297px;margin-top:10px">Thất bại</div>';
    }
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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css.css">
    <style>
    a {
        cursor: pointer;
        color: #575757;
        text-decoration: none
    }

    p {
        color: #1e2022;
        font-size: 17px
    }

    /* input {
        cursor: pointer;
    } */

   
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script type="text/javascript" src="jquery/js"></script>


</head>

<body>

    <div id="codinh">
        <nav class="py-2 bg-light border-bottom">
            <div class="container d-flex flex-wrap">
                <ul class="nav me-auto" style="background: white;width:62% ">
                    <li class="nav-item"><a href="index.php" class="nav-link link-dark px-2 active"
                            aria-current="page">Trang Chủ</a></li>
                    <li class="nav-item"><a href="gongkinhcan.php" class="nav-link link-dark px-2">Gọng Kính Cận
                            </a>

                       
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Tròng Kính</a>
                      
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Kính Chính Hãng&#9660;</a>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="rayban.php">RayBan</a></li>
                            <li class="list-group-item"><a href="gucci.php">GUCCI</a></li>
                            <li class="list-group-item"><a href="LV.php">Louis Vuitton</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="sale.php" class="nav-link link-dark px-2">Sale</a></li>
                </ul>
                <ul class="nav" style="background: white;width:15%;float:left;line-height:53px">
                <?php if(isset($_SESSION["username"])){
            ?>
        <li style="line-height:67px" class="nav-item"><?php echo $_SESSION["username"] ?></li>
        <li class="nav-item"><a href="logout.php" class="nav-link link-dark px-2">Logout</a></li>

              <?php //var_dump($_SESSION["username"]) ?>
            <?php
          }else{
        ?>
        <li class="nav-item"><a href="dangnhap.php" class="nav-link link-dark px-2">Login</a></li>
        <li class="nav-item"><a href="dangki.php" class="nav-link link-dark px-2">Sign up</a></li>
          <?php } ?>
                </ul>
            </div>
        </nav>
       
        <header class="py-3  border-bottom" style="background-color: white;">
            <div class="container d-flex flex-wrap justify-content-center">
                <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-4" style="color: grey;letter-spacing:2px"><span
                            style="font-weight: bold;color:black;">TTHT</span>EYES</span>
                </a>
               
            </div>
        </header>
        
    </div>
  


   <div class="input">
    <form class="text" method="POST" action="">
        <div class="form-group">
          <label for="tên" class="b">Tên người nhận hàng:</label>
          <input type="text" class="form-control a " name="fullname" placeholder="Nhập tên người nhận hàng" style=" width: 40%;  ">
          <?php echo  $error_ten ?>
        </div>
        <div class="form-group">
          <label for="dia chi" class="b">Địa chỉ nhận hàng:</label>
          <input type="text" class="form-control a" name="address" placeholder="Nhập địa chỉ"  style=" width: 40%;  "  >
          <?php echo  $error_address ?>

        </div>
        <div class="form-group">
            <label for="SĐT" class="b">Số điện thoại :</label>
            <input type="number" class="form-control  a" name="phone" placeholder="Nhập số điện thoại" style=" width: 40%;  ">
          <?php echo  $error_phone ?>

        </div>
       
        <button type="submit" class="a" name="gui" >Gửi yêu cầu</button>
        <?php echo  $thanhcong ?>
        <?php echo  $thatbai ?>
        

    </form>       
</div>   
        </from>
        <table border="1" style="margin:50px auto;background:white;text-align:center">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Ảnh</th>
            <th>Số lương</th>
            <th>Giá</th>
            
        </tr>
    </thead>
    <tbody>
    <?php
                if (isset($_SESSION['mycart'])) {
                  $i = 1;
                  $sum = 0;
                  $tong=0;
                  foreach ($_SESSION['mycart'] as $row) {
                    // var_dump($cart);
                    // exit;
                    $image =  $row['image_product'];
                    
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['name_product']; ?></td>
                      <td><img src="images/<?php echo $image; ?>" width="100px" height="100px" alt=""></td>
                      <td><?php echo $soluong; ?></td>
                      <td><?php echo number_format($row["gia"], 0, ',', '.'); ?> Đ</td>
                      
                    </tr>
                  <?php
                    $i++;
                    $sum = $row['gia']*$soluong;
                    $tong +=$sum;
                    //var_dump($sum);
                  
                }
                  ?>
                  <tr>
                    <td colspan="4" class="text-center" style="font-weight: bold; font-size: 18px">Tổng đơn hàng</td>
                    <td><?php echo number_format($tong, 0, ',', '.') ?> Đ</td>
                    
                  </tr>
                <?php
                }var_dump($_SESSION['mycart']);
                ?>
                 <?php 
 
 
                ?>
    </tbody>
        </table>

</body>

</html>
