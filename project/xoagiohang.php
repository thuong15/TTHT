<?php 
    require_once 'db.php';
?>
<?php
session_start();
$id = $_GET['ID'];
$sql = "select ID,name_product,image_product,gia,soluong,note from products  where ID =" . $id;
$result = $conn->query($sql);
$row = $result->fetch_assoc();



if (isset($_GET['ID'])) {
    $id = (int)$_GET['ID'];
    //var_dump($_SESSION['mycart']);
    if (is_array($_SESSION['mycart'])) {
        foreach ($_SESSION['mycart'] as $key => $row) {
            echo '<pre>';
            var_dump($row);
            echo '</pre>';
             if ($row["ID"] == $id) {
                unset($_SESSION['mycart'][$key]);
                //   $id--;
            }
         }
    }
    
} 

header('Location: giohang.php' );
?>