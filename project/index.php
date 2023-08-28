<?php    
 include 'db.php';
 
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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
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
          <?php 
          session_start();
         if(isset($_SESSION["username"])){
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
      <p>
      <a href="giohang.php"><button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button></a></p>
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
   <main>
<!-- ---------------Slider------------------ -->
   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner3.jpg" class="d-block w-100" href="sale.php" style="width:100%;height:600px">
    </div>
    <div class="carousel-item">
      <img src="images/banner2.jpg" class="d-block w-100" href="sale.php"style="width:100%;height:600px">
    </div>
    <div class="carousel-item">
      <img src="images/banner5.jpg" class="d-block w-100" href="sale.php"style="width:100%;height:600px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- -----------Gioi thieu------------------ -->
<div>
          <div class="content-box-column col-lg-4 col-md-4 col-sm-4">
            <div class="heading">
              <div class="image-box">
                <img src="images/imagemini1.png">
              </div>
              <h2 class="content-box-heading" style="font-size:16px; line-height: 21px;">MẪU MÃ ĐA DẠNG</h2>
            </div>
            <div class="content-container" style="color: #575757;">
            <p><span style="font-weight: 400;">
              Thấu hiểu thị hiếu khách hàng, mẫu mã của Eye Plus đa dạng, phù hợp với nhiều yêu cầu khác nhau.
            </span></p>
            </div>
          </div>
          <div class="content-box-column col-lg-4 col-md-4 col-sm-4">
            <div class="heading">
              <div class="image-box">
                <img src="images/imagemini2.png">
              </div>
              <h2 class="content-box-heading" style="font-size:16px; line-height: 21px;">MẪU MÃ ĐA DẠNG</h2>
            </div>
            <div class="content-container" style="color: #575757;">
            <p><span style="font-weight: 400;">
              Các sản phẩm được chọn lựa kỹ lưỡng, độ tinh xảo cao đi cùng chuyên viên kinh nghiệm và máy móc tiên tiến, hiện đại.            </span></p>
            </div>
          </div><div class="content-box-column col-lg-4 col-md-4 col-sm-4">
            <div class="heading">
              <div class="image-box">
                <img src="images/imagemini3.png">
              </div>
              <h2 class="content-box-heading" style="font-size:16px; line-height: 21px;">MẪU MÃ ĐA DẠNG</h2>
            </div>
            <div class="content-container" style="color: #575757;">
            <p><span style="font-weight: 400;">
              Mức giá cạnh tranh tương xứng với chất lượng, nhiều chương trình ưu đãi và chế độ bảo hành hậu mãi .            </span></p>
            </div>
          </div>
<!-- -----------Products-------------- -->
<div>
<section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h2>Sản Phẩm Nổi Bật</h2>

								</div>
						</div>
				</div>
				<div class="row">
								<!-- Single Product -->
                <?php  
                $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:6;
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
					<div class="col-md-6 col-lg-4 col-xl-4">
						<div  class="single-product">
							<div class="part-1">
								<a href="trangphu3.php?ID=<?=$row['ID']?>"><br>
                               <img src=
                       "images/<?=$row["image_product"] ?>" style="width: 100%;
    height: 280px">
							</a>
                </div>
								<div class="part-2">
									<a href="trangphu3.php?ID=<?=$row['ID']?>"><h3 class="product-title"><?=$row["name_product"] ?></h3></a>
									<h4 class="product-price"><?= number_format($row["gia"],0,',','.') ?>  Đ</h4>
							    </div>
						</div>
					</div>
					<?php  }  ?>
				</div>
		</div>
</section>
</div>
<nav aria-label="Page navigation example" style="margin-left:43%;margin-bottom:30px">
             <?php
                include "pagination.php";
              ?>
 
</nav>

<!-- -----------Blog------------ -->
<div class="blog">
<h2 style="text-align: justify"><span style="font-weight: 400">Phân loại và công dụng của từng loại kính mắt</span></h2>
<p style="text-align: justify"><span style="font-weight: 400">Trên thị trường hiện nay có rất nhiều loại </span><a href="https://vi.wikipedia.org/wiki/K%C3%ADnh_m%E1%BA%AFt" rel="nofollow"><span style="font-weight: 400">kính mắt</span></a><span style="font-weight: 400"> khác nhau, mỗi loại cũng sẽ mang đến công dụng tương ứng. Tuy nhiên, loại kính mắt được sử dụng phổ biến nhất là: kính thuốc, kính an toàn, kính râm và kính bảo vệ chống loá.</span></p>
<h3 style="text-align: justify"><span style="font-weight: 400">Kính thuốc</span></h3>
<p><img class="lazyload aligncenter size-full wp-image-15484" src="images/kinhthuoc.jpg" alt="kính mắt" width="2048" height="2048" /></p>
<p style="text-align: center"><b><i>Kính thuốc tròng trong suốt</i></b></p>
<p style="text-align: justify"><span style="font-weight: 400">Kính thuốc là loại kính được sử dụng để làm giảm bớt ảnh hưởng của các </span><a href="https://www.nei.nih.gov/learn-about-eye-health/eye-conditions-and-diseases/refractive-errors" rel="nofollow"><span style="font-weight: 400">tật khúc xạ</span></a><span style="font-weight: 400"> như </span><a href="https://tuoitre.vn/can-thi-nguyen-nhan-va-dieu-tri-20181206164009881.htm" rel="nofollow"><span style="font-weight: 400">cận thị</span></a><span style="font-weight: 400">, </span><a href="https://www.webmd.com/eye-health/farsightedness#1" rel="nofollow"><span style="font-weight: 400">viễn thị</span></a><span style="font-weight: 400">, </span><a href="https://www.nhs.uk/conditions/astigmatism/" rel="nofollow"><span style="font-weight: 400">loạn thị</span></a><span style="font-weight: 400"> bằng cách sử dụng các thấu kính hiệu chỉnh có khả năng bẻ cong ánh sáng vào mắt. </span><a href="https://www.allaboutvision.com/conditions/myopia-faq/lenses-to-correct-nearsightedness.htm" rel="nofollow"><span style="font-weight: 400">Kính mắt cận</span></a> (hay còn được gọi là <a href="https://kinhmateyeplus.com/danh-muc/gong-kinh-can/">kính cận</a>)<span style="font-weight: 400"> được sử dụng bởi rất nhiều đối tượng, nhưng phổ biến nhất là thanh thiếu niên. Trong khi đó, kính mắt viễn thị phổ biến ở những người cao tuổi.</span></p>
<h3 style="text-align: justify"><span style="font-weight: 400">Kính mắt an toàn</span></h3>
<p><img class="lazyload aligncenter size-full wp-image-15482" src="images/kinhantoan.jpg" width="2048" height="2048" /></p>
<p style="text-align: center"><b><i>Kính mắt an toàn bảo vệ cả trước và hai bên mắt</i></b></p>
<p style="text-align: justify"><span style="font-weight: 400">Kính mắt an toàn được sử dụng cho công nhân xây dựng hoặc kỹ thuật viên phòng thí nghiệm nhằm bảo vệ mắt khỏi các mảnh vụn. Loại kính này có thiết kế ôm sát vào mặt do đó không chỉ giúp bảo vệ phía trước mắt mà còn bảo vệ mắt từ cả hai bên.</span></p>
<p style="text-align: justify"><span style="font-weight: 400">Một số loại kính mắt an toàn được sử dụng để chống lại ánh sáng thông thường hoặc </span><a href="https://vnexpress.net/phong-xa-anh-huong-nhu-the-nao-den-suc-khoe-3183550.html" rel="nofollow"><span style="font-weight: 400">phóng xạ</span></a><span style="font-weight: 400">. Một số loại khác lại được sử dụng để bảo vệ mắt trong một số môn thể thao như bơi lội. Để tránh làm rơi mất kính, người sử dụng có thể sử dụng dây buộc kính và đeo vào sau cổ.</span></p>
<h3 style="text-align: justify"><span style="font-weight: 400">Kính râm</span></h3>
<p><img class="lazyload aligncenter size-full wp-image-15487" src="images/kinhdam.jpg" alt="kính mắt đẹp " width="2048" height="2048" /></p>
<p style="text-align: center"><b><i>Kính râm tròng màu</i></b></p>
<p style="text-align: justify"><span style="font-weight: 400"><a href="https://kinhmateyeplus.com/danh-muc/kinh-ram/">Kính râm</a> là một trong những loại kính mắt rất phổ biến, nó cho phép người sử dụng nhìn tốt hơn trong điều kiện ánh sáng chói vào ban ngày. Đồng thời, loại kính này cũng có thể bảo vệ đôi mắt, chống lại các nguy hiểm của tia cực tím. Loại kính râm đặc trưng nhất là loại sử dụng tròng kính tối màu. Một số loại kính chuyên dụng cho phép nhìn rõ trong điều kiện tối hoặc trong nhà, nhưng khi đi ra nắng sẽ chuyển thành kính râm. <em>(<a href="https://kinhmateyeplus.com/huong-dan-cach-chon-kinh-ram">Hướng dẫn chọn mua kính râm</a>)</em></span></p>
<p style="text-align: justify"><span style="font-weight: 400">Hầu hết kính râm bán sẵn trên thị trường không có công dụng hỗ trợ điều trị các tật về mắt; tuy nhiên, bạn có thể đặt mua kính râm cận/ kính râm viễn theo đơn đặc biệt.</span></p>
<h3 style="text-align: justify"><span style="font-weight: 400">Kính bảo vệ chống lóa</span></h3>
<p><img class="lazyload aligncenter size-full wp-image-15485" src="images/kinhchongloa.jpg" alt="kính mắt hà nội " width="2048" height="2048" /></p>
<p style="text-align: center"><b><i>Kính chống loá</i></b></p>
<p style="text-align: justify"><span style="font-weight: 400">Kính bảo vệ chống lóa hoặc <a href="https://kinhmateyeplus.com/danh-muc/trong-kinh/kinh-chong-anh-sang-xanh/">kính ánh sáng xanh</a>, có thể làm giảm sự phản xạ ánh sáng đi vào mắt. Các ống kính được phủ một lớp chống chói để ngăn phản xạ ánh sáng trong các điều kiện ánh sáng khác nhau. Bằng cách giảm lượng ánh sáng chói trên mắt, thị lực có thể được cải thiện. </span></p>
<h2 style="text-align: justify"><span style="font-weight: 400">Cấu tạo kính mắt</span></h2>
<p style="text-align: justify"><span style="font-weight: 400">Kính mắt gồm 2 phần chính: gọng kính và tròng kính (hay còn được gọi là mắt kính).</span></p>
<p><img class="lazyload aligncenter size-full wp-image-15477" src="images/cautao.jpg" width="2048" height="2048" /></p>
<p style="text-align: center"><b><i>Kính mắt được tạo thành từ gọng kính và tròng kính</i></b></p>
<h3 style="text-align: justify"><span style="font-weight: 400">Gọng kính</span></h3>
<p style="text-align: justify"><span style="font-weight: 400">Gọng là phần khung cho kính và là bộ phận nâng đỡ tròng kính thường được làm bằng kim loại chống gỉ hoặc chất dẻo (cứng hoặc dẻo) (</span><a href="https://www.aao.org/eye-health/glasses-contacts/eyeglass-frame-materials" rel="nofollow"><span style="font-weight: 400">aao.org</span></a><span style="font-weight: 400">). Gọng kính cũng gồm hai phần được nối với nhau bởi một khớp sắt nhỏ. Phần sau giúp gài kính vào vành tai. Phần trước đỡ lấy tròng kính và giúp tròng kính nằm vững trước mắt. Phần cuối được uốn cong để đặt lên vành tai.Giữa hai phần khung mắt có một khớp nối nhỏ là giá đỡ. Giá đỡ có hai miếng đệm cao su, để gác lên sống mũi, giữ cho kính không bị rơi, trượt xuống.<em> (Xem thêm về <a href="https://kinhmateyeplus.com/chat-lieu-gong-kinh/">Chất liệu gọng kính</a>)</em></span></p>
<p><img class="lazyload aligncenter size-full wp-image-15478" src="images/gongkinh.jpg" alt="kính mắt hcm" width="2048" height="2048" /></p>
<h3 style="text-align: justify"><span style="font-weight: 400">Tròng kính</span></h3>
<p style="text-align: justify"><span style="font-weight: 400">Trong quá khứ, tròng kính thường được làm từ thuỷ tinh, tuy nhiên, loại <a href="https://kinhmateyeplus.com/danh-muc/trong-kinh/">tròng kính</a> này rất dễ bị vỡ. Chính vì thế, ngày nay, người ta thường sản xuất tròng kính bằng chất dẻo cứng. Chất liệu này có khả năng tránh nguy hiểm do các ảnh vỡ, xác định được độ chính xác hơn (cho các tật khúc xạ), nhẹ hơn và mỏng hơn tròng thuỷ tinh (</span><a href="https://www.zeiss.com/vision-care/int/better-vision/understanding-vision/plastic-or-glass-lenses-.html" rel="nofollow"><span style="font-weight: 400">zeiss.com</span></a><span style="font-weight: 400">).</span></p>
<p style="text-align: justify"><span style="font-weight: 400">Ngoài đặc tính thông thường, một số loại tròng kính còn được bổ sung tính năng chống trầy xước, chống tia UV,… Loại </span><a href="https://hipages.com.au/article/guide_to_uv_protective_glass" rel="nofollow"><span style="font-weight: 400">kính chống tia UV</span></a><span style="font-weight: 400"> thường được tráng một lớp chất đặc biệt có ánh sáng xanh, tốt hơn so với loại kính chỉ có plastic.</span></p>
<p style="text-align: justify"><span style="font-weight: 400">Tròng kính được gắn vào gọng nhờ một sợi dây cước trắng và gọng được siết chặt giữ hai tròng kính nhờ hai đinh vít.</span></p></div>



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