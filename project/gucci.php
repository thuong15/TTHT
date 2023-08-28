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

<div><h1 style="font-weight:bold;margin:auto;width:35%">Kính Mắt GUCCI</h1>
</div>
<!-- ----------------Danh muc trai------------------ -->

<div style="float:left;width:18%;margin-top: 10.5rem;
    margin-left: 25px">
<div>
<div>
<h4>Thương Hiệu</h4>
</div>
<ul>
	<li><a>Gucci</a></li>
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
		<li>Mỹ</li>
		<li>Ý</li>
	</ul>
</div>
<div>
	<div>
		<h4>Phân Loại</h4>
	</div>
<ul>
	<li>Sunglasses</li>
	<li>Kính mắt cận</li>
</ul>
</div>
<br>
<div>
<b>Mắt kính Gucci chính hãng</b> nam nữ 2022. Kính mắt Gucci Ý thời trang chống nắng, chống tia UV hiệu quả, bảo vệ mắt. Đầy đủ Size, màu sắc cho mọi lứa tuổi. Gọng bền đẹp, logo GG tinh tế.</div>

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
                        <?php  $sql="select*from products,brands where products.brand_ID=brands.brand_ID and brands.name_brand='GUCCI'";
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

Thương hiệu The House of Gucci hay được biết đến ngắn gọn là Gucci, là một biểu tượng thời trang sở hữu bởi Ý và Pháp, một nhãn hiệu đồ da nổi tiếng. Các dòng sản phẩm của hãng bao gồm túi xách, đồ may sẵn, giày dép phụ kiện, đồ trang điểm, nước hoa và đồ trang trí nhà cửa. 

<h3>Về thương hiệu Gucci đến từ nước Ý</h3>
The House of Gucci được sáng lập bởi Guccio Gucci vào năm 1921 tại Florence, thành phố được xem là biểu tượng thời trang của Ý ngày nay.  Với kinh nghiệm nhiều năm làm việc tại London, chàng trai trẻ Guccio Gucci sở hữu tầm nhìn sâu sắc đối với thời trang cao cấp của giới quý tộc Anh và Pháp. Gucci đã áp dụng những kỹ thuật thủ công bậc thầy của các nghệ nhân vùng Tuscan, cho ra đời những sản phẩm chất lượng cao và thẩm mỹ tinh tế, được ưa chuộng bởi khách hàng quốc tế lẫn  quý tộc Ý.
Giới thiệu Về thương hiệu Gucci đến từ nước Ý<br>
 <img src="images/gucciblog1.jpg" style="display:block;margin:auto">
<br>
Chỉ trong vòng vài năm, nhãn hiệu sản phẩm của Gucci đã có những thành công lớn, được nhiều khách hàng khó tính để ý. Các sản phẩm của Gucci tung ra thị trường gồm có túi, vali, găng tay, giày và thắt lưng và dần trở thành những biểu tượng trong ngành thời trang, được đánh giá cao về tính thẩm mỹ và sự sáng tạo.
Sau đó hãng tiếp tục ra mắt với các dòng sản phẩm nổi bật khác như nước hoa, mỹ phẩm chăm sóc da, mỹ phẩm trang điểm, các phụ kiện thời trang cao cấp khác. Tất cả đều trở thành những sản phẩm mang chất lượng cao và được yêu thích trên toàn thế giới. 
<br>
<img src="images/gucciblog2.jpg" style="display:block;margin:auto">
Họa tiết mang tên Gucci ra đời năm 1963. Những đường vân đan hình kim cương, hình quả trám… được đăng ký bản quyền, để các vị khách quý có thể chắc chắn, hãnh diện với thế giới rằng họ đang cầm theo một chiếc túi Gucci. 

Các di sản thiết kế mang tính biểu tượng của hãng Gucci, mang cảm hứng chủ đạo từ những thú tiêu khiển thượng lưu lúc bấy giờ như cưỡi ngựa và du lịch. Trong đó, "Block" màu sắc xanh lá – đỏ – xanh lá lấy ý tưởng từ đai yên ngựa, hay khóa kim loại Horsebit (hàm thiếc ngựa), đặc trưng trang trí trên những đôi Moccasin của hãng và ứng dụng trên thắt lưng, túi xách, trang sức; kết hợp với một chiếc móc hình 2 chữ G (tượng trưng cho chữ Guchio Gucci) cách điệu lồng vào nhau đã ra đời, không chỉ làm điệu cho những sản phẩm như túi, ví, giày, thắt lưng… của Gucci, mà còn trở thành biểu tượng bất biến của hãng này.
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