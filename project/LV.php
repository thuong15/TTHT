<?php   
    require_once 'db.php';
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title></title>
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
        //var_dump($_SESSION);
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
  </nav><header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4" style="color: grey;letter-spacing:2px"><span style="font-weight: bold;color:black;">TTHT</span>EYES</span>
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0" action="timkiem.php?timkiem=timkiem" method="POST">
            <input type="text" name="tukhoa" placeholder="Tìm kiếm sản phẩm..." />
             <button type="submit" name="timkiem"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
    </div>
  </header>
   </div>
   <main style="width:90%;margin:auto">

<div><h1 style="font-weight:bold;margin:auto;width:35%">Kính Mắt Louis Vuitton</h1>
</div>
<!-- ----------------Danh muc trai------------------ -->

<div style="float:left;width:18%;margin-top: 10.5rem;
    margin-left: 25px">
<div>
<div>
<h4>Thương Hiệu</h4>
</div>
<ul>
	<li><a>Louis Vuitton</a></li>
</ul>
</div>
<div>
	<div>
		<h4>Chúc Năng</h4>
	</div>
<ul>
	<li>Chống UV</li>
	<li>Chống UV và phân cực</li>
</ul>
</div>
<div>
	<div>
		<h4>Xuất Xứ</h4>
	</div>
	<ul>
		<li>Pháp</li>
	</ul>
</div>
<div>
	<div>
		<h4>Phân Loại</h4>
	</div>
<ul>
	<li>Sunglasses</li>
</ul>
</div>
<br>
<div>
<b>Kính mắt Louis Vuitton</b> chính hãng, sản phẩm cao cấp nhâp khẩu uy tín, cam kết giá tốt nhất tại Vua Hàng Hiệu.</div>

</div>
     
        

<!-- -----------Products-------------- -->
<div>
<section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-md-8 col-lg-6">
						<div class="header">
							<h2 style="margin-left:0;">Sản Phẩm Nổi Bật</h2>

					</div>
				</div>
		</div>
				<div class="row">
						<!-- Single Product -->
                        <?php  $sql="select*from products,brands where products.brand_ID=brands.brand_ID and brands.name_brand='Louis Vuitton'";
                   $result = $conn->query($sql);
                  if ($result->num_rows > 0){    
                     while($row = $result->fetch_assoc()) { ?>
					<div class="col-md-6 col-lg-4 col-xl-4">
						<div  class="single-product">
							<div class="part-1">
								<a href="trangphu3.php?ID=<?=$row['ID']?>"><br>
                               <img src=
                       "images/<?=$row["image_product"] ?>" style="width: -webkit-fill-available;"
>
							</a>
                                  </div>
								<div class="part-2">
									<a href="trangphu3.php?ID=<?=$row['ID']?>"><h3 class="product-title"><?=$row["name_product"] ?></h3></a>
									<h4 class="product-price"><?= number_format($row["gia"],0,',','.') ?>  Đ</h4>
							    </div>
						</div>
					</div>
					<?php  } } ?>
				</div>
		</div>
</section>

</div>
<hr>
<div style="margin:auto;width:90%">
<b>Louis Vuitton</b> hay <b>LV</b> là một thương hiệu <b>thời trang cao cấp</b>, xa xỉ nổi tiếng bậc nhất trên toàn thế giới của Pháp, đã có tuổi đời hơn 165 năm từ 1854. <b>LV </b>được thành lập bởi <b>Louis Vuitton</b> và duy trì dẫn dắt bởi các thế hệ nhà Vuitton. Thuở ban đầu thương hiệu chỉ chuyên về các sản phẩm đồ da: vali, túi xách và các phụ kiện liên quan đến du lịch.

Ít ai biết tên đầy đủ của thương hiệu Louis Vuitton là <b>Louis Vuitton Malletier.</b>

Tất cả sản phẩm <b>Louis Vuitton</b> nổi bật với họa tiết chữ<b> LV </b>lồng vào nhau và hoa bốn thùy cộp mác thương hiệu trên nền da hoặc vải canvas thượng hạng. (Tìm hiểu thêm về Louis Vuitton trên Wiki).

 </div>


<!-- -----------------Footer----------------------------- -->
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

<!-- ------------Map---------------------- -->
	<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.924403452778!2d105.81902919999999!3d21.035710599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab145bf89bd7%3A0xd94a869b494c04b6!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAw!5e0!3m2!1svi!2s!4v1657635191197!5m2!1svi!2s" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div style="margin: auto">
<p>Hotline: 0963931519</p>
<p>Facebook: <a style="color:blue" target="_blank"
 href=https://www.facebook.com/thuong.vuong.566790>https://www.facebook.com/thuong.vuong.566790</a></p>
</div>
  </footer>
</div>
  </body>
</html>