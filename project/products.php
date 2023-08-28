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
    <li class="list-group-item"><a href="users.php">Users</a></li>
    <li class="list-group-item"><a href="brands.php">Brands</a></li>
    <li class="list-group-item"><a href="products.php" style="color:white">products</a></li>
    <li class="list-group-item"><a href="order.php">Orders</a></li>

</div>

<div style="width:1200px;margin-left:315px">
    <div style="height:56px;line-height:55px;margin:5px"><h3>Sản Phẩm Nổi Bật</3>
    <input type="submit" value="Thêm sản phẩm" name="add" style="float:right;width: 10%;
    height: 45px;">
</div><hr>
    <table border="1">
        <thead>
            
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng sản phẩm</th>
                <th>Mô tả</th>
                <th>Brand_ID</th>
                <th>sửa</th>
                <th>xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
//  $sql="select ID,name_product,image_product,gia,soluong,note,brand_ID from products"; 
//              $result = $conn->query($sql);
//              if ($result->num_rows > 0){    
//     while($row = $result->fetch_assoc()) {
?>
 <?php  
                $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:10;
                $current_page=!empty($_GET['page'])?$_GET['page']:1;
                $offset = ($current_page -1) * $item_per_page; 
                $products = mysqli_query($conn,"SELECT * FROM `products` ORDER BY `ID` ASC LIMIT ".$item_per_page." OFFSET ".$offset);
                  //  $result = $conn->query($sql);
                  $totalRecords = mysqli_query($conn,"select*from `products`");
                  $totalRecords = $totalRecords-> num_rows;
                  // $totalPages = ceil($sql/$item_per_page);
                  $totalPages = ceil($totalRecords/$item_per_page);
                  //  if ($result->num_rows > 0){    
                     while($row = mysqli_fetch_array($products)) { 
                      ?>
        <tr>
            <td><?=$row["ID"] ?></td>
            <td><?=$row["name_product"] ?></td>
            <td>
                <img style="width:98px;height:50px" src=
                "images/<?=$row["image_product"] ?>"
                >
            </td>
            <td><?=$row["gia"] ?></td>
            <td><?=$row["soluong"] ?></td>
            <td><?=$row["note"] ?></td>
            <td><?=$row["brand_ID"] ?></td>
            
            <td><a href="sua.php?id=<?php echo $row["ID"]; ?>">Sửa</a></td>
            <td><a href="xoa.php?id=<?php echo $row["ID"]; ?>">Xóa</a></td>
    <?php
    }
    ?>
 
        </tbody> 
    </table>
    <div>
    <nav aria-label="Page navigation example" style="margin-left:43%;margin-bottom:30px;margin-top:15px">
             <?php
                include "pagination.php";
              ?>
</nav>
    </div>
</div>
</form>
</body>


</html>    