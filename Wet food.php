<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/categories_styles.css">
<link rel="stylesheet" type="text/css" href="styles/categories_respon	sive.css">
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
							<a href="#">C<span>CAT</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index2.php">หน้าแรก</a></li>
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

	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index2.php">หน้าแรก</a></li>
						<li class="active"><a href="Wet food.php"><i class="fa fa-angle-right" aria-hidden="true"></i>อาหารเปียก</a></li>
					</ul>
				</div>

				<!-- Sidebar -->

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>รายการสินค้า</h5>
						</div>
						<ul class="sidebar_categories">
							<li><a href="Pellet food.php">อาหารเม็ด</a></li>
							<li class="active"><a href="Wet food.php"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>อาหารเปียก</a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
						</ul>
					</div>

					<!-- Price Range Filtering -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5></h5>
						</div>
						
					</div>


					<!-- Color -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5></h5>
						</div>
						
						
					</div>

				</div>

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Default Sorting</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
											</ul>
											</ul>
										</li>
									</ul>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="Wet food.html">1</a></li>
												<!-- <li><a href="Wet food 1.html">2</a></li> -->
											</ul>
										</div>
										<!-- <div class="page_total"><span>of</span> 2</div> -->
										<!-- <div id="next_page" class="page_next"><a href="Wet food 1.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div> -->
									</div>

								</div>

								<!-- Product Grid -->

								<div class="product-grid">
									<?php 
									include("connectdb.php");
									@$kw = $_POST['kw'];
									$sql = "SELECT * FROM `all` WHERE (`p_name` LIKE'%{$kw}%' OR `p_detail` LIKE'%{$kw}%') AND `p_type` = 2";
									$rs = mysqli_query($conn, $sql);
									while ($data = mysqli_fetch_array($rs)){
									?>
										<div class="product-item men">
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
									}
									mysqli_close($conn);
									?>
								</div>
								
								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_bottom clearfix">

										
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="Wet food.html">1</a></li>
												<!-- <li><a href="Wet food 1.html">2</a></li> -->
											</ul>
										</div>
										<!-- <div class="page_total"><span>of</span> 2</div> -->
										<!-- <div id="next_page_1" class="page_next"><a href="Wet food 1.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div> -->
									</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
							<h6>เปิดบริการทุกวัน</h6>
							<p>8AM - 07PM</p>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->


	<!-- Footer -->

	

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/categories_custom.js"></script>
</body>

</html>
