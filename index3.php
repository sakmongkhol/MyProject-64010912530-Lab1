<!DOCTYPE html>
<html lang="en">
<head>
<title>Ccat</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="index.php"><i class="fa fa-sign-in" aria-hidden="true"></i>ออกสู่ระบบ</a></li>
										<!-- <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>สมัคสมาชิก</a></li> -->
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">C<span>cat</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index2.php">หน้าแรก</a></li>
								<li><a href="Pellet food.php">อาหารเม็ด</a></li>
								<li><a href="Wet food.php">อาหารเปียก</a></li>
								<li><a href="contact.html">เกี่ยวกับเรา</a></li>							
							</ul>
							<ul class="navbar_user">
								<!-- <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li> -->
								<li class="checkout">
									<a href="basket.php">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<!-- <span id="checkout_items" class="checkout_items">2</span> -->
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>เข้าสู่ระบบ</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>สมัคสมาชิก</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="index.php">หน้าแรก</a></li>
				<li class="menu_item"><a href="categories.php">สินค้า</a></li>
				<li class="menu_item"><a href="contact.php">เกี่ยวกับเรา</a></li>
			</ul>
		</div>
	</div>

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(images/อาหารเปียก/1.png)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h1>Happy pets Day</h1>
						<div class="red_button shop_now_button"><a href="Pellet food.php">ซื้อเลย</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="banner_item align-items-center" style="background-image:url(images/1.png)">
							<div class="banner_category">
								<a href="Pellet food.php">อาหารเม็ด</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item align-items-center" style="background-image:url(images/21.png)">
							<div class="banner_category">
								<a href="Wet food.php">อาหารเปียก</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>สินค้าแนะนำ</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">อาหารเปียก</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">อาหารเม็ด</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
						<!-- Product 1 -->
						<?php 
						include("connectdb.php");
						@$kw = $_POST['kw'];
						$sql = "SELECT * FROM `all` WHERE (`p_name` LIKE'%{$kw}%' OR `p_detail` LIKE'%{$kw}%') AND `p_type` = 1";
						$rs = mysqli_query($conn, $sql);
						$count = 0; // เริ่มต้นนับจำนวนรายการ
while ($data = mysqli_fetch_array($rs)){
    if ($count < 5) { // ถ้ายังไม่ถึง 5 รายการ
?>
    <div class="product-item men">
        <div class="product discount product_filter">
            <div class="product_image">
                <img src="images/<?=$data['p_id'];?>.<?=$data['p_img'];?>" alt="">
            </div>
            <div class="favorite favorite_left"></div>
            <div class="product_info">
                <h6 class="product_name"><a href="pfood1.php?id=<?=$data['p_id']?>"><?=$data['p_name']?></a></h6>
                <div class="product_price"><?=$data['p_price']?>฿</div>
            </div>
        </div>
        <div class="red_button add_to_cart_button"><a href="basket.php?id=<?=$data['p_id'];?>">add to cart</a></div>
    </div>
<?php
        $count++; // เพิ่มจำนวนรายการที่แสดงแล้ว
    } else {
        break; // หยุดการวนลูปถ้าเลย 5 รายการ
    }
}
mysqli_close($conn);
?>


						<!-- Product 6 -->

						<?php 
						include("connectdb.php");
						@$kw = $_POST['kw'];
						$sql = "SELECT * FROM `all` WHERE (`p_name` LIKE'%{$kw}%' OR `p_detail` LIKE'%{$kw}%') AND `p_type` = 2";
						$rs = mysqli_query($conn, $sql);
						$count = 0; // เริ่มต้นนับจำนวนรายการ
while ($data = mysqli_fetch_array($rs)){
    if ($count < 5) { // ถ้ายังไม่ถึง 5 รายการ
?>
    <div class="product-item  women">
        <div class="product discount product_filter">
            <div class="product_image">
                <img src="images/<?=$data['p_id'];?>.<?=$data['p_img'];?>" alt="">
            </div>
            <div class="favorite favorite_left"></div>
            <div class="product_info">
                <h6 class="product_name"><a href="wfood1.php?id=<?=$data['p_id']?>"><?=$data['p_name']?></a></h6>
                <div class="product_price"><?=$data['p_price']?>฿</div>
            </div>
        </div>
        <div class="red_button add_to_cart_button"><a href="basket.php?id=<?=$data['p_id'];?>">add to cart</a></div>
    </div>
<?php
        $count++; // เพิ่มจำนวนรายการที่แสดงแล้ว
    } else {
        break; // หยุดการวนลูปถ้าเลย 5 รายการ
    }
}
mysqli_close($conn);
?>

					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Best Sellers -->

	<!-- <div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>สินค้าขายดี</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider"> -->

						
							<!-- Slide 1 -->

							<!-- <div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<img src="a/1.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="wfood1.php">Pramy เนื้อไก่หน้าฝักทองและแครอทในน้ำเกรวี่ 1 ซอง</a></h6>
											<div class="product_price">16฿</div>
										</div>
									</div>
								</div>
							</div> -->

							<!-- Slide 2 -->

							<!-- <div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="a/2.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="wfood2.html">Pramy เนื้อไก่ทูน่าในน้ำเกรวี่ 1 ซอง</a></h6>
											<div class="product_price">16฿</div>
										</div>
									</div>
								</div>
							</div>
 -->
						<!-- Slider Navigation -->

						<!-- <div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>ส่งฟรีทั่วไทย</h6>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>ชำระเงินปลายทาง</h6>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>คืนสินค้าได้ 7 วัน</h6>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>เปิดบริการทุกวันk</h6>
							<p>8AM - 07PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Footer -->

	

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
