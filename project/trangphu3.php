<?php
require_once 'db.php';
?>


<?php
session_start();
if(empty($_SESSION['mycart'])){
  $_SESSION['mycart'] = array();
}
//var_dump();
$id = $_GET['ID'] ?? '1';
if(isset($_POST['giohang'])){
   // header("location: giohang.php");
}
if (isset($_POST['buy'])) {
  header("location: mua.php");
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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

    input {
      cursor: pointer;
    }

    /* .input-qty {
    background-color:#fff;
    height:20px;
    text-align:center;
    display:inline-block;
    border-top:1px solid #ddd;
    border-bottom:1px solid #ddd;
    border-left:0;
    border-right:0;
    padding:0; 
    width: 25px;
}
.input-qty::-webkit-outer-spin-button,.input-qty::-webkit-inner-spin-button {
    -webkit-appearance:none;
    margin:0;} */
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
  <script type="text/javascript" src="jquery/js"></script>


</head>

<body>


  <div style="position: relative;
    z-index: 1;">
    <nav class="py-2 bg-light border-bottom">
      <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
          <li class="nav-item"><a href="index.php" class="nav-link link-dark px-2 active" aria-current="page">Trang Chủ</a></li>
          <li class="nav-item"><a href="gongkinhcan.php" class="nav-link link-dark px-2">Gọng Kính Cận</a></li>
          <li class="nav-item"><a href="trongkinh.php" class="nav-link link-dark px-2">Tròng Kính</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Kính Chính Hãng&#9660;</a>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a href="rayban.php">RayBan</a></li>
              <li class="list-group-item"><a href="gucci.php">GUCCI</a></li>
              <li class="list-group-item"><a href="LV.php">Louis Vuitton</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="sale.php" class="nav-link link-dark px-2">Sale</a>
          </li>
        </ul>
        <ul class="nav">
        <?php if(isset($_SESSION["username"])){
            ?>
        <li style="line-height:40px" class="nav-item"><?php echo $_SESSION["username"] ?></li>
        <li class="nav-item"><a href="logout.php" class="nav-link link-dark px-2">Logout</a></li>

              <?php //var_dump($_SESSION["username"]) ?>
            <?php
          }else{
        ?>
        <li class="nav-item"><a href="dangnhap.php" class="nav-link link-dark px-2">Login</a></li>
        <li class="nav-item"><a href="dangki.php" class="nav-link link-dark px-2">Sign up</a></li>
        
          <?php } ?>
        </ul>
        <a href="giohang.php"><button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button></a>
      </div>
    </nav>
    <header class="py-3 mb-4 border-bottom">
      <div class="container d-flex flex-wrap justify-content-center">
        <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
          </svg>
          <span class="fs-4" style="color: grey;letter-spacing:2px"><span style="font-weight: bold;color:black;">TTHT</span>EYES</span>
        </a>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0" action="timkiem.php?timkiem=timkiem" method="POST">
            <input type="text" name="tukhoa" placeholder="Tìm kiếm sản phẩm..." />
             <button type="submit" name="timkiem"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
      </div>
    </header>
  </div>
  <form method="POST" action="">
    <?php
    //$cart = 1;
    //$id = $_GET['ID'];
    $sql = "select ID,name_product,image_product,gia,a.soluong,note,name_brand from products a join brands b on a.brand_ID=b.brand_ID where a.ID =" . $id;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <div style="height:50px;width:100%;background-color: #d5dbe9;">
          <div style="line-height:50px;margin-left:200px;font-size:14px; "><a href="index.php">Home </a> › <?php echo $row['name_brand'] ?>
            › <span> <?php echo $row['name_product'] ?></span></div>
            <!-- <a href="<?php //$row['name_brand'] ?>.php"> </a> -->
        </div>

        <div class="container">

          <div class="row">
            <div class="col-sm-"></div>
            <div class="col-sm-7">
              <div class=" col-sm-12">
                <img src="images/<?php echo $row['image_product'] ?>" width="80%" height="550px">
                <!--     SESSION         -->
                <?php //$session['mycard'][$cart]=[$cart['image_product'] =>  $row['image_product'], ]; 
                ?>

              </div>
            </div>
            <div class="col-sm-5">
              <B style="font-size: 25px;"><?php echo $row['name_product'] ?></B>
              <!--     SESSION         -->
              <?php //$session['mycard'][$cart]=[$cart['name_product'] =>  $row['name_product'],]; 
              ?>

              <p style="color:#1e2022; font-size:17px"><?php echo $row['note'] ?></p>
              <p>Tình trạng: <b>Còn Hàng</b></p>
              <p>Giá:</p>
              <p style="font-size: 30px;"><?= number_format($row["gia"], 0, ',', '.') ?> Đ</p>
              <!--     SESSION         -->
              <?php //$session['mycard'][$cart]=[$cart['gia'] =>  $row['gia'],]; 
              ?>


              <div style="width:30%;float:left">
                <input class="form-control text-center" style="height: 49px; font-size:15px" min="1" max="10" value="1" type="number" title="số lượng" name="soluong">
                <!--     SESSION         -->
                <?php //$session['mycard'][$cart]=[$cart['soluong'] =>  $row['soluong'],]; 
                ?>
              </div>

              <div><input style="float: left;background:#4872fa;height:50px;color:#fff;border-color:#fff;font-size:20px;margin-left:20px" type="submit" value="THÊM VÀO GIỎ HÀNG" name="giohang"></div>
              <div><a href="mua.php"><input style="width:70%;height:50px;background:#fd6e1d;color:#fff;border-color:#fff;font-size:24px" type="submit" name="buy" value="MUA NGAY"></a></div>
              <br>
              <a href="hdmh.php"> <strong style="color:red ;">Hướng dẫn mua hàng</strong></a>




            </div>
          </div>

      <?php
       // $cart++;
      }
    } ?>

      </from>
      <!-- -----------------Footer----------------------------- -->
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>

          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
              <use xlink:href="#bootstrap" />
            </svg>
          </a>

          <!-- ------------Map---------------------- -->
          <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.924403452778!2d105.81902919999999!3d21.035710599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab145bf89bd7%3A0xd94a869b494c04b6!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAw!5e0!3m2!1svi!2s!4v1657635191197!5m2!1svi!2s" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div style="margin: auto">
            <p>Hotline: 0963931519</p>
            <p>Facebook: <a style="color:blue" target="_blank" href=https://www.facebook.com/thuong.vuong.566790>https://www.facebook.com/thuong.vuong.566790</a></p>
          </div>
        </footer>
      </div>
      </from>
</body>
<?php
$sql = "select ID,name_product,image_product,gia,soluong,note from products  where ID =" . $id;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name = $gia = $soluong = '';
if (isset($_POST['giohang'])) {
  $id = $_GET['ID'] ?? 1;
  // echo '<pre>';
  // var_dump($row);
  // echo '</pre>';
  $name = $row['name_product'];
  $image = $row['image_product'];
  //var_dump($row['name_product']);
  $gia = number_format($row["gia"], 0, ',', '.');
  $soluong = $_POST['soluong'];
  //var_dump($soluong);    

  $product_add = [$id, $name, $gia, $soluong];
  
   array_push($_SESSION['mycart'], $row);

  // array_push($_SESSION['giohang'], $product_add);
  // header('Location: giohang.php');
}
if (isset($_POST['buy'])) {
  $id = $_GET['ID'];
  // echo '<pre>';
  // var_dump($row);
  // echo '</pre>';
  $name = $row['name_product'];
  $image = $row['image_product'];
  //var_dump($row['name_product']);
  $gia = number_format($row["gia"], 0, ',', '.');
  $soluong = $_POST['soluong'];
  //var_dump($soluong);    

  $product_add = [$id, $name, $gia, $soluong];
  
   array_push($_SESSION['mycart'], $row);

  // array_push($_SESSION['giohang'], $product_add);
  // header('Location: giohang.php');
}
//var_dump($_SESSION['mycart']);

?>


</html>