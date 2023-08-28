<?php 
    require_once "db.php";
    //  if(!$conn){
    //         die("Kết nối thất bại".mysqli_connect_error());   
    //     }else{
    //         echo"Kết nối thành công";
    //     };
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
    if(isset($_POST['danhsach'])){
        header("location: products.php");
    }
?>

<?php
$thanhcong = '';
$thatbai = '';

    if (isset($_POST['oke'])) {
        $id = (int)htmlspecialchars($_POST['ID']);
        $name = htmlspecialchars($_POST['name']);
        $img = htmlspecialchars($_POST['image']);
        $gia = htmlspecialchars($_POST['gia']);
        $soluong = $_POST['soluong'];
        $node = $_POST['node'];
        $sql = sprintf("update products set name_product = '%s', image_product = '%s', gia = %d, soluong = %d , note ='%s' where ID = %d",$name,$img,$gia,$soluong,$node,$id);
        
        $result = $conn->query($sql);
        if($id != '' && $name != '' && $img !='' && $gia !='' && $soluong != ''){
        if($result == true){

            $thanhcong= "<p style='color:green;margin-left:149px'>Cập nhập thành công !</p>";
        }
        // else{
        //     $thatbai="<p style='color:red;margin-left:149px'>Cập nhập thất bại !</p>";
        // }
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
        <div style="margin-left:100px;line-height:100px;font-size:30px">Sửa sản phẩm</div>
        </div>
        <hr>
        <form method="post" action="">
        <?php
            //  if (isset($_GET['ID'])) {
            //     $id = $_GET['ID'];
            //     $sql = "SELECT DISTINCT * FROM products WHERE ID = {$_GET['id']}";
            //     $result = $conn->query($sql, MYSQLI_USE_RESULT);
            //     $row = $result->fetch_assoc();

?>
        <label>ID</label><input type="number" name="ID" value="">
        <br>
        <label>Tên sản phẩm: </label><input type="text" name="name" value="" >
        <?php echo $error_name ?>
        <br>
        <label>Ảnh sản phẩm: </label><input type="file" name="image" value="" >
        <?php echo $error_img ?>
        <br>
        <label>Giá: </label><input type="text" name="gia" value="" >
        <?php echo $error_gia ?>
        <br>
        <label>Số Lượng: </label><input type="text" name="soluong" value="">
        <?php echo $error_soluong ?>
        <br>
        <label>note: </label><input type="text" name="node" value="">
        <label>&nbsp;</label><?php echo $thanhcong?>
        <label>&nbsp;</label><?php echo $thatbai?>
        <br>

        <label>&nbsp;</label> <input type="submit" value="Sửa sản phẩm" name="oke" >
        <br>
        <label>&nbsp;</label> <input type="submit" value="Danh sách" name="danhsach">
        </form>
    </from>
    
</body>
</html>