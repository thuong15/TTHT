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
    <li class="list-group-item"><a href="brands.php" style="color:white">Brands</a></li>
    <li class="list-group-item"><a href="products.php">products</a></li>
    <li class="list-group-item"><a href="order.php">Orders</a></li>

</div>

<div style="width:1200px;margin-left:315px">
    <div style="height:56px;line-height:55px;margin:5px"><h3>Danh Sách Người Dùng</h3>
</div><hr>
    <table border="1" style="margin:auto;width: 1200px;
    text-align: center;">
        <thead>
            
            <tr>
                <th>ID_user</th>
                <th>Fullname</th>
                <th>Phone</th>
                <th>Sửa</th>
                <th>xóa</th>

            </tr>
        </thead>
        <tbody>
            <?php
 $sql="select * from brands"; 
             $result = $conn->query($sql);
             if ($result->num_rows > 0){    
    while($row = $result->fetch_assoc()) {
?>
        <tr>
            <td><?=$row["brand_ID"] ?></td>
            <td><?=$row["name_brand"] ?></td>           
            <td><?=$row["soluong"] ?></td>
            <td><a>Sửa</a></td>
            <td><a>xóa</a></td> 
    <?php
    }
}
    ?>
    
</tr>
        </tbody> 
    </table>
    <div>
    </div>
</div>
</form>
</body>


</html>    