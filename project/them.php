<?php 
    require_once "db.php";
    //  if(!$conn){
    //         die("Kết nối thất bại".mysqli_connect_error());   
    //     }else{
    //         echo"Kết nối thành công";
    //     };
    if(isset($_POST['danhsach'])){
        header("location: products.php");
    }
?>

<?php

$error_name ='';
$error_img ='';
$error_gia ='';
$error_soluong ='';

if(isset($_POST['oke'])){
    if ($_POST['name'] == '' || empty($_POST['name'])) {
        $error_name =  '<div style="color:red;margin-left:205px;width:260px">Tên không được để trống</div>';
}
    if ($_POST['image'] == '' || empty($_POST['image'])) {
        $error_img =  '<div style="color:red;margin-left:205px;width:260px">Ảnh không được để trống</div>';
}
    if ($_POST['gia'] == '' || empty($_POST['gia'])) {
        $error_gia =  '<div style="color:red;margin-left:205px;width:260px">Giá không được để trống</div>';
}
    if ($_POST['soluong'] == '' || empty($_POST['soluong'])) {
        $error_soluong =  '<div style="color:red;margin-left:205px;width:260px">Số lượng không được để trống</div>';
}
}
?>

<?php
$thanhcong='';
$thatbai='';
$nhaplai = ''; 
if(isset($_POST['oke'])){
    $ID = $_POST['ID'];
    $name = $_POST['name'];
    $img = $_POST['image'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    $note = $_POST['note'];
    $brand_ID = $_POST['brand_ID'];
    
    
    if($name != '' && $img != '' && $gia != '' && $soluong != '' && $note != ''){
    $query="INSERT INTO products(ID,name_product,image_product,gia,soluong,note,brand_ID) values('$ID','$name','$img','$gia','$soluong','$note','$brand_ID')";
    //var_dump($query);

    if($conn->query($query)){
        $thanhcong = '<div style="color:green;margin-left:205px;margin-top:10px">Thêm thành công</div>';
    }else{
        $thatbai = '<div style="color:red;margin-left:205px;margin-top:10px">Thêm thất bại</div>';
    }
    }else{
        $nhaplai = '<div style="color:red;margin-left:205px;margin-top:10px">Yêu cầu nhập thông tin</div>';
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
    <style>
        label{margin: 5px 10px;width: 12%;display: inline-block;}
        input{margin:0px 5px;}
    </style>
</head>
<body>
    <from >
        <div style="height:100px;background:#ECF0FE;">
        <div style="margin-left:100px;line-height:100px;font-size:30px">Thêm sản phẩm</div>
        </div>
        <hr>
        <form method="post" action="">
        <label>ID</label><input type="number" name="ID">
        <br>
        <label>Tên sản phẩm: </label><input type="text" name="name" >
        <?php echo $error_name ?>
        <br>
        <label>Ảnh sản phẩm: </label><input type="file" name="image" >
        <?php echo $error_img ?>
        <br>
        <label>Giá: </label><input type="text" name="gia" >
        <?php echo $error_gia ?>
        <br>
        <label>Số Lượng: </label><input type="text" name="soluong" >
        <?php echo $error_soluong ?>
        <br>
        <label>note: </label><textarea name="note"></textarea>
        
        <br>
         <label>Brand_ID:</label><input type="number" name="brand_ID">
         <br>
         <?php echo $thanhcong ?>
        <?php echo $thatbai ?>
        <?php echo $nhaplai ?>
        <label>&nbsp;</label> <input type="submit" value="Thêm sản phẩm" name="oke" >
        <br>
        <input type="submit" value="Danh sách sản phẩm" name="danhsach">
        </form>
    </from>
</body>
</html>