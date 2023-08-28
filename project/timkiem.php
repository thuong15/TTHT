<?php     require_once 'db.php';
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
  <li class="list-group-item"><a href="">GUCCI</a></li>
  <li class="list-group-item"><a href="">Dior</a></li>
  <li class="list-group-item"><a href="LV.php">Louis Vuitton</a></li>
</ul>
              </li>
        <li class="nav-item"><a href="sale.php" class="nav-link link-dark px-2">Sale</a>
              </li>
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="dangnhap.php" class="nav-link link-dark px-2">Login</a></li>
        <li class="nav-item"><a href="dangki.php" class="nav-link link-dark px-2">Sign up</a></li>
      </ul>
    </div>
  </nav><header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4" style="color: grey;letter-spacing:2px"><span style="font-weight: bold;color:black;">TTHT</span>EYES</span>
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0" action="timkiem.php?timkiem=timkiem" method="POST">
        <input type="text" class="form-control" placeholder="Search..." name="tukhoa" >
        <input type="submit" name="timkiem"value="Search">
      </form>
    </div>
  </header>
   </div>
   <form style="background: #d5dbe9;height:50px;width:100%">
        <div style="line-height:50px;margin-left:200px;font-size:14px; "><a href="index.php">Home </a> › <a> Search</a></div>
   <main style="width:90%;margin:auto">


<!-- -----------Products-------------- -->
<?php 
                if(isset($_POST['timkiem'])) {
                    $tukhoa= $_POST['tukhoa'];
                }
                $sql="SELECT*from products where name_product like '%".$tukhoa."%'";
                   $result = $conn->query($sql);
                  if ($result->num_rows > 0){   ?> 
<div>
<section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h2 style="margin-left:0;">Từ khóa tìm kiếm: <?php echo "\"$tukhoa\""; ?></h2>

								</div>
						</div>
				</div>
                
       

				<div class="row">
				<?php  
                     while($row = $result->fetch_assoc()) { ?>
					<div class="col-md-6 col-lg-4 col-xl-4">
						<div  class="single-product">
							<div class="part-1">
								<a href="trangphu3.php?ID=<?=$row['ID']?>">
                               <img src=
                       "images/<?=$row["image_product"] ?>" style="width: -webkit-fill-available;">
							</a>
                </div>
								<div class="part-2">
									<a href="trangphu3.php?ID=<?=$row['ID']?>"><h3 class="product-title"><?=$row["name_product"] ?></h3></a>
									<h4 class="product-price"><?= number_format($row["gia"],0,',','.') ?>  Đ</h4>
							    </div>
						</div>
					</div>
					<?php  }
          }else{?>
            <div class="header">
            <h2 style="margin-left:0;">Từ khóa tìm kiếm: <?php echo "\"$tukhoa\""; ?></h2>
             </div>
          <?php
                         echo 'Không tìm thấy kết quả!!';
           }?>
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