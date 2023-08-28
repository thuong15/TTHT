<?php 
    require_once 'db.php';
?> 
<?php 
    if(isset($_POST['add'])){
        header("location: them.php");
    }
?>
<?php
    // if(isset($_POST["xoa"])){ 
    //     $id = $_POST['ID'];
    //     var_dump($id);
    //     $sql = "DELETE FROM student WHERE ID = $id";
    //     //if(confirm("ban co chac chan muon xoa sinh vien nay khong?")){
    //      //header("location:xoa.php");
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

</head>
<style>
    a{ color:blue}
  .list-group-item{margin:5px;list-style: none;padding: 10px;border-bottom:1px solid grey}
</style>
<body>
    <form method="Post" action="">
<div class="menu" style="width:280px;background:#212529;color:white;float:left;height:735px;">
    <p><h2 style="text-align: center;
    color: #691919;padding:20px">Admin</h2></p>
    <hr>
    <li class="list-group-item"><a href="index.php">Home</a></li>
    <li class="list-group-item"><a href="admin.php">Dasboard</a></li>
    <li class="list-group-item"><a href="users.php" >Users</a></li>
    <li class="list-group-item"><a href="brands.php">Brands</a></li>
    <li class="list-group-item"><a href="products.php">products</a></li>
    <li class="list-group-item"><a href="order.php" style="color:white">Orders</a></li>

</div>

<div style="width:1200px;margin-left:315px">
    <div style="height:56px;line-height:55px;margin:5px"><h3>Danh Sách Người Dùng</h3>
</div><hr>
    <table border="1" style="margin:auto;width: 1200px;
    text-align: center;">
        <thead>
            
            <tr>
                <th>ID_Order</th>
                <th>ID_user</th>
                <th>fullname</th>
                <th>address</th>
                <th>phone</th>
            </tr>
        </thead>
        <tbody>
            <?php
 $sql="select * from orders"; 
             $result = $conn->query($sql);
             if ($result->num_rows > 0){    
    while($row = $result->fetch_assoc()) {
?>
        <tr>
            <td><?=$row["ID_order"] ?></td>
            <td><?=$row["ID_user"] ?></td>
            <td><?=$row["fullname"] ?></td>
            <td><?=$row["address"] ?></td>
            <td><?=$row["phone"] ?></td>
     <?php
    }
}
    ?>

        </tbody> 
    </table>
    <div>
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
                }//var_dump($_SESSION['mycart']);
                ?>
                 <?php 
 
 
                ?>
    </tbody>
        </table>
    </div>
</div>
</form>
</body>


</html>    