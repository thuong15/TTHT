<?php    
 include 'db.php';
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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
<title></title>
<style>
  h5{font-weight:bold;}
</style>
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
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Sale</a>
              </li>
      </ul>

      <ul class="nav">
          <?php 
          
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
      
      <a href="giohang.php"><p><button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button></p></a>
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
   <!-- body -->
   <form style="background: #d5dbe9;height:50px;width:100%">
        <div style="line-height:50px;margin-left:200px;font-size:14px; "><a href="index.php">Home </a> › <a href="sale.php"> SALE</a></div>
   <main style="width:90%;margin:auto">
<div><h1 style="font-weight:bold;margin:auto;width:35%">SALE</h1>
</div>
<div style="width: 1200px; margin: auto; height: 2000px;">
<div style="width: 70%; float: left;">
    <h4>Chương trình khuyến mãi</h4>
    <h3>SIÊU SALE TRÒNG GỌNG – OFF 40%</h3>
    <p>“𝑷𝒆𝒓𝒇𝒆𝒄𝒕𝒊𝒐𝒏 𝒊𝒔 𝒏𝒐𝒕 𝒂 𝒅𝒆𝒔𝒕𝒊𝒏𝒂𝒕𝒊𝒐𝒏, 𝒊𝒕’𝒔 𝒂 𝒄𝒐𝒏𝒕𝒊𝒏𝒖𝒐𝒖𝒔 𝒋𝒐𝒖𝒓𝒏𝒆𝒚 𝒕𝒉𝒂𝒕 𝒏𝒆𝒗𝒆𝒓 𝒆𝒏𝒅𝒔”
        Cảm ơn những khách hàng đã cùng đồng hành với <b>TTHT EYES</b> trên con đường bảo vệ đôi mắt cộng động trong suốt thời gian 08 năm qua. Chúng tôi luôn trân trọng từng trải nghiệm của khách hàng và cố gắng cải thiện và phát triển hơn mỗi ngày.
        Như một món quà tri ân sâu sắc, <b>TTHT EYES</b> thân gửi đến mọi khách hàng chương trình khuyến mãi  <span style="color:red">SALE 40%</span></p>
    <img  src="images/banner2.jpg" width="700px" height="400px"    > 
    <h3>I. NỘI DUNG CHƯƠNG TRÌNH KHUYẾN MÃI</h3>
    <h5>Chương trình ưu đãi tháng 7 <span style="color:red">SALE 40%</span> cho khách hàng chi tiết như sau :</h5>
     <ul style="font-weight:bold">
       <li>Khi mua gọng kính <= 650.000 VNĐ : SALE 30%</li>
       <li>Khi mua gọng kính > 650.000 VNĐ: SALE 20%  </li>
       <li>Tròng kính đổi màu: SALE 10%    </li>
       <li>Tròng kính siêu mỏng 1.67: SALE 10%</li>
       <li>Các mã kính râm sale 30%    </li> 
       <li>Chương trình thẻ VIP khách hàng vẫn áp dụng cộng dồn 7-10%    </li>
       <li>Áp dụng từ 11/07 – 31/07/2022    </li>
     </ul>
     <p>Ngoài ra đừng quên ưu đãi <span style="color:red">FREESHIP</span> toàn quốc cho hóa đơn online chỉ từ 400K (với đvvc Giao hàng nhanh)</p>

     <h3>II. CHƯƠNG TRÌNH DÀNH RIÊNG CHO CƠ SỞ MỚI</h3>
        <h5>Thời gian áp dụng: 01/07 – 31/07</h5>
        
        <h5>Địa điểm áp dụng: </h5>
          <ul>
            <li style="color:red">285 Đội Cấn - Ba Đình - HN</li>
            <li style="color:red">213 Trần Đại Nghĩa – Quận Hai Bà Trưng – HCM</li>
          </ul>

        <h5>Nội dung chi tiết chương trình:</h5>
           <ul>
            <li style="color:red">SALE 10% TẤT CẢ CÁC LOẠI TRÒNG KÍNH</li> 
            <li>Các chương trình khuyến mãi gọng áp dụng độc lập</li>
           </ul>
           <img src="images/banner3.jpg"  width="700px"   height="400px"  >
     <h3>V. ĐỐI TƯỢNG ÁP DỤNG</h3>
        <p>Tất cả khách hàng qua trực tiếp tại hệ thống 8 cửa hàng của <b>TTHT EYES</b> và online.   </p>   
 



    
</div>
<div style="width: 30%; float: right;">
   <h3>DANH MỤC SẢN PHẨM</h3> 
   <ul style="color:blue">
       <li> <a> Chưa phân loại </a> </li>
       <li> <a href="gongkinhcan.php">Gọng Kính Cận </a> </li>
       <li> <a href="gucci.php">Kính Chính Hãng</a> </li>
       <li> <a href="rayban.php">Kính RayBan</a> </li>
       <li> <a href="gucci.php">Gucci</a>  </li>
       <li> <a href="gucci.php">Louis Vuitton</a>  </li>
       <li> <a href="trongkinh.php">Tròng Kính</a>  </li>

   </ul>
</div>
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