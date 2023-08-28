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
        <li class="nav-item"><a class="nav-link link-dark px-2">Kính Chính Hãng&#9660;</a>
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
          <a href="giohang.php"><button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button></a>
      </ul>
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
   <main style="width:80%;margin:auto">

   <header class="woocommerce-products-header">
		<h1 class="woocommerce-products-header__title page-title">Tròng Kính</h1>
	<div id="pdes">
		<div class="term-description"><h1 style="text-align: justify"><span style="font-weight: 400">TTHT EYES &#8211; Chuyên phân phối tròng kính cận, tròng kính viễn chất lượng, giá tốt</span></h1>
<p style="text-align: justify"><i><span style="font-weight: 400">TTHT EYES tự hào là đơn vị hàng đầu trong lĩnh vực kính mắt tại Việt Nam. Chúng tôi hiện đang phân phối ra thị trường các sản phẩm tròng <a href="https://kinhmateyeplus.com/danh-muc/gong-kinh-can/">kính cận</a>, tròng kính viễn đa dạng thể loại (kính cận đổi màu, kính cận siêu mỏng, kính cận chống ánh sáng xanh, kính viễn đa tròng,..) đáp ứng nhu cầu của người tiêu dùng.</span></i></p>
<p style="text-align: justify"><span style="font-weight: 400">TTHT EYES cam kết các sản phẩm tròng kính, gọng kính, </span><a href="https://en.wikipedia.org/wiki/Glasses" rel="nofollow"><span style="font-weight: 400">kính mắt</span></a><span style="font-weight: 400">,&#8230; bán tại hệ thống cửa hàng của chúng tôi có nguồn gốc rõ ràng, chất lượng đảm bảo với giá thành cạnh tranh nhất thị trường.</span></p>
<p style="text-align:center"><img class="size-full wp-image-16665" src="https://kinhmateyeplus.com/wp-content/uploads/2021/04/1.jpg" alt="Tăng độ cận" width="600" height="600"  /></p>
<!-- ----------------Danh muc trai------------------ -->
<aside id="sidebar" class="sidebar fusion-widget-area fusion-content-widget-area fusion-sidebar-left fusion-categoriessidebar" style="float: left;width:20%;margin-top:85px;color:black;list-style:none;" >
											
					<div id="custom_html-2" class="widget_text widget widget_custom_html" style="border-style: solid;border-color:transparent;border-width:0px;">
                    <div class="textwidget custom-html-widget">
                        <div class="heading">
                            <h3 class="widget-title">Danh mục sản phẩm</h3>
                        </div><ul class="subcategories-list" Style="list-style:none">
                            <li class="gong-kinh-reeman"><a href=""><input onchange="window.location.href=''" class="sub_cat_checkbox" type="checkbox" />Tròng Kính Đa Tròng</a></li>
                            <li class="gong-kinh-ca-vanh"><a href=""><input onchange="window.location.href=''" class="sub_cat_checkbox" type="checkbox" />Tròng Đổi Màu</a></li>
                            <li class="gong-kinh-nua-vanh"><a href=""><input onchange="window.location.href=''" class="sub_cat_checkbox" type="checkbox" />Tròng Cận Thị</a></li>
                            <li class="gong-kinh-khoan"><a href=""><input onchange="window.location.href=''"class="sub_cat_checkbox" type="checkbox" />Tròng Viễn Thị</a></li>
                          

</div>			</aside>

        

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
							<?php  $sql="select*from products,brands where products.brand_ID=brands.brand_ID and brands.name_brand='Tròng Kính'";
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