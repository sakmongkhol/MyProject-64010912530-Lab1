<!DOCTYPE html>
<html lang="en">
<head>
<title>รายละเอียด</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/single_styles.css">
<link rel="stylesheet" type="text/css" href="styles/single_responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->


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
								<li><a href="index2.php"> หน้าแรก</a></li>
								<li><a href="Pellet food.php">อาหารเม็ด</a></li>
								<li><a href="Wet food.php">อาหารเปียก</a></li>
								<li><a href="contact.html">เกี่ยวกับเรา</a></li>
							</ul>
							<ul class="navbar_user">
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

	<!-- Hamburger Menu -->

	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item"><a href="index2.php">หน้าแรก</a></li>
				<li class="menu_item"><a href="Pellet food.php">อาหารเม็ด</a></li>
				<li class="menu_item"><a href="Wet food.php">อาหารเปียก</a></li>
			</ul>
		</div>
	</div>

	<div class="container single_product_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">หน้าแรก</a></li>
						<li><a href="Wet food.php"><i class="fa fa-angle-right" aria-hidden="true"></i>อาหารเปียก</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>รายละเอียด</a></li>
					</ul>
				</div>

			</div>
		</div>
		<?php
include("connectdb.php");
@$kw = $_POST['kw'];
$sql = "SELECT * FROM `all` WHERE  `p_id`='{$_GET['id']}' ";
$rs = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($rs); // Fetch only one row

?>  

		<div class="row">
			<div class="col-lg-7 center-content">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
							<div class="single_product_image_background" style="background-image:url(images/<?=$data['p_id'];?>.<?=$data['p_img'];?>)"></div>

							</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-5 center">
				<div class="product_details">
					<div class="product_details_title">
						<h2><?=$data['p_name']?></h2>
						<p><?=$data['p_detail']?></p>
					</div>
					<br>
					</div>
					<div class="product_price"><?=$data['p_price']?>฿ </div>
					<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
						<span>Quantity:</span>
						<div class="quantity_selector">
							<span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
							<span id="quantity_value">1</span>
							<span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
						</div>
						<div class="red_button add_to_cart_button"><a href="basket.php?id=<?=$data['p_id'];?>">add to cart</a></div>
						<div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- Tabs -->


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

	<!-- Newsletter -->
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">

					</div>
				</div>
				<div class="col-lg-6">

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/single_custom.js"></script>
</body>

</html>
