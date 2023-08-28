<?php

require_once 'db.php';
if(isset($_GET["id"]) && $_GET["id"] != ''){
    $id = $_GET["id"];
    $sql = "DELETE FROM products WHERE ID = $id";
    $result = $conn->query($sql);
    if($result){
        header('location:products.php?deleted_success');
    }else{
        echo "<p style=\"color:red;\">xoa that bai co loi xay ra</p>";
    }
}?>