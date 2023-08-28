<?php
require_once 'db.php';
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
    <li class="list-group-item"><a href="admin.php"  style="color:white">Dasboard</a></li>
    <li class="list-group-item"><a href="users.php">Users</a></li>
    <li class="list-group-item"><a href="brands.php">Brands</a></li>
    <li class="list-group-item"><a href="products.php">products</a></li>
    <li class="list-group-item"><a href="order.php">Orders</a></li>

</div>
<div>
<img src="images/admin1.png" width="1200" height="735">
</div>
</body>
</html>