<?php 
require_once 'db.php';
$soluong = 1;
?>

<?php
    session_start();
    if(isset($_POST['mua'])){
      header("location: mua.php");
    }
//     $id=$_GET['ID'];
//     $sql = "select ID,name_product,image_product,gia,soluong,note from products  where ID =" . $id;
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();
   ?>

  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    a{cursor:pointer;text-decoration: none}
    body{
        background-image: url(images/giohang.jpg)  ;
         }
</style>
<body><form style="background: white;height:100px">
<div style="height: 10%;width:100%; background-color: white; display:block" >
<a href="index.php"><div style="margin:26px 150px;color:grey;font-size:40px;cursor:pointer;width:21%;float:left">
<span style="font-weight: bold;color:black;font-size:40px">TTHT</span>EYES</div></a>
<div style="font-size:32px;float:left;margin: 32px -203px;color:black">| Giỏ Hàng</div>
</div><br>
</form>
<form method="POST" action=""> 
<div style="height:1000px;padding-top:100px">

<table border="1" style="margin:50px auto;background:white;text-align:center">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Ảnh</th>
            <th>Số lương</th>
            <th>Giá</th>
            <th>Hủy</th>
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
                      <td><a href="xoagiohang.php?ID=<?php echo $row["ID"]; ?>">XÓA</a></td>
                      <?php //var_dump($_POST('soluong1')); ?>
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
                    <td><input style="font-size:17px;margin:auto" type="submit" value="Mua" name="mua"></td>
                  </tr>
                <?php
                }
                ?>
              

                
               
    </tbody>
                
</body>
</html>    
