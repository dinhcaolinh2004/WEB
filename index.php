<?php
session_start();
if (isset($_SESSION['user'])) {
	include "headeruser.php";
} else {
	include "header.php";
}
?>
<html>
<script type="text/javascript">
	var Tawk_API = Tawk_API || {},
		Tawk_LoadStart = new Date();
	(function() {
		var s1 = document.createElement("script"),
			s0 = document.getElementsByTagName("script")[0];
		s1.async = true;
		s1.src = 'https://embed.tawk.to/67444e882480f5b4f5a38864/1idhd5i1k';
		s1.charset = 'UTF-8';
		s1.setAttribute('crossorigin', '*');
		s0.parentNode.insertBefore(s1, s0);
	})();
</script>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		* {
			box-sizing: border-box
		}

		.my-slide-haha {
			font-family: Verdana, sans-serif;
			margin: 0
		}

		.mySlides-slide {
			display: none
		}

		img {
			vertical-align: middle;
		}

		/* Slideshow container */
		.slideshow-container-slide {
			max-width: 1143px;
			position: relative;
			margin: auto;
			margin-top: 40px;
			height: 372px;
		}



		/* Caption text */
		.text-slide {
			color: #f2f2f2;
			font-size: 15px;
			padding: 8px 12px;
			position: absolute;
			bottom: 8px;
			width: 100%;
			text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext-slide {
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
		}

		/* The dots/bullets/indicators */
		.dot-slide {
			cursor: pointer;
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 0.6s ease;
		}

		.active-slide,
		.dot-slide:hover {
			background-color: #717171;
		}

		/* Fading animation */
		.fade-slide {
			animation-name: fade;
			animation-duration: 1.5s;
		}

		@keyframes fade-slide {
			from {
				opacity: .4
			}

			to {
				opacity: 1
			}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {

			.prev-slide,
			.next-slide,
			.text-slide {
				font-size: 11px
			}
		}
	</style>
</head>
<div class="my-slide-haha">

	<div class="slideshow-container-slide">

		<div class="mySlides-slide fade-slide">
			<div class="numbertext-slide"></div>
			<img src="./img/1.jpg" style="width:100%">
		</div>

		<div class="mySlides-slide fade-slide">
			<div class="numbertext-slide"></div>
			<img src="./img/2.jpg" style="width:100%">
		</div>

	</div>
</div>
<br>

<div style="text-align:center">
	<span class="dot-slide" onclick="currentSlide(1)"></span>
	<span class="dot-slide" onclick="currentSlide(2)"></span>
	<span class="dot-slide" onclick="currentSlide(3)"></span>
</div>

<script>
	let slideIndex = 0;
	showSlides();

	function showSlides() {
		let i;
		let slides = document.getElementsByClassName("mySlides-slide");
		let dots = document.getElementsByClassName("dot-slide");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > slides.length) {
			slideIndex = 1
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active-slide", "");
		}
		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].className += " active-slide";
		setTimeout(showSlides, 3000);
	}
</script>


</body>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <style>
        .contact-buttons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .contact-buttons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background-color: #0078FF;
            color: white;
            text-decoration: none;
            border-radius: 50%;
            font-size: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .contact-buttons a.facebook { background-color: #4267B2; }
        .contact-buttons a.zalo { background-color: #0084FF; }
        .contact-buttons a.phone { background-color: #34C759; }
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <style>
        .contact-buttons {
            position: fixed;
            bottom: 20px; /* Cách đáy trang 20px */
            left: 20px;   /* Cách trái trang 20px */
            display: flex;
            flex-direction: column;
            gap: 10px; /* Khoảng cách giữa các nút */
        }
        .contact-buttons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background-color: #0078FF;
            color: white;
            text-decoration: none;
            border-radius: 50%; /* Bo tròn nút */
            font-size: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .contact-buttons a.facebook { background-color: #4267B2; }
        .contact-buttons a.zalo { background-color: #0084FF; }
        .contact-buttons a.phone { background-color: #34C759; }
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <style>
        .contact-buttons {
            position: fixed;
            bottom: 20px; /* Cách đáy trang 20px */
            left: 20px;   /* Cách trái trang 20px */
            display: flex;
            flex-direction: column;
            gap: 10px; /* Khoảng cách giữa các nút */
        }
        .contact-buttons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background-color: white;
            color: white;
            text-decoration: none;
            border-radius: 50%; /* Bo tròn nút */
            font-size: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .contact-buttons a img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%; /* Đảm bảo hình ảnh bo tròn */
        }
        .contact-buttons a.phone { background-color: #34C759; color: white; font-size: 30px; }
    </style>
</head>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <style>
        .contact-buttons {
            position: fixed;
            bottom: 20px; /* Cách đáy trang 20px */
            left: 20px;   /* Cách trái trang 20px */
            display: flex;
            flex-direction: column;
            gap: 10px; /* Khoảng cách giữa các nút */
        }
        .contact-buttons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            text-decoration: none;
            border-radius: 15%; /* Hình dạng bo góc nhẹ để phù hợp hình ảnh mới */
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .contact-buttons a img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Đảm bảo hình ảnh phủ đầy khung */
        }
    </style>
</head>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <style>
        /* Kiểu cho danh sách nút liên hệ */
        .contact-buttons {
            position: fixed;
            bottom: 20px; /* Cách đáy trang 20px */
            left: 20px;   /* Cách trái trang 20px */
            display: flex;
            flex-direction: column; /* Hiển thị nút theo chiều dọc */
            gap: 15px; /* Khoảng cách giữa các nút */
        }
        .contact-buttons a {
            width: 60px;
            height: 60px;
            background-color: white;
            border-radius: 50%; /* Tạo hình tròn */
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-decoration: none; /* Xóa gạch chân */
        }
        .contact-buttons a img {
            width: 50%;
            height: 50%;
        }
        .contact-buttons a.facebook { background-color: #4267B2; }
        .contact-buttons a.zalo { background-color: #0084FF; }
        .contact-buttons a.phone { background-color: #FF4B4B; }
    </style>
</head>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <style>
        .contact-buttons {
            position: fixed;
            bottom: 20px; /* Cách đáy trang 20px */
            left: 20px;   /* Cách trái trang 20px */
            display: flex;
            flex-direction: column;
            gap: 10px; /* Khoảng cách giữa các nút */
        }
        .contact-buttons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            text-decoration: none;
            border-radius: 15%; /* Hình dạng bo góc nhẹ để phù hợp hình ảnh mới */
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .contact-buttons a img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Đảm bảo hình ảnh phủ đầy khung */
        }
    </style>
</head>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <style>
        .contact-buttons {
            position: fixed;
            bottom: 20px; /* Cách đáy trang 20px */
            left: 20px;   /* Cách trái trang 20px */
            display: flex;
            flex-direction: column;
            gap: 10px; /* Khoảng cách giữa các nút */
        }
        .contact-buttons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background-color: #0078FF;
            color: white;
            text-decoration: none;
            border-radius: 50%; /* Bo tròn nút */
            font-size: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .contact-buttons a.facebook { background-color: #4267B2; }
        .contact-buttons a.zalo { background-color: #0084FF; }
        .contact-buttons a.phone { background-color: #34C759; }
    </style>
</head>
<body>
    <div class="contact-buttons">
        <!-- Nút gọi điện -->
        <a href="tel:+84932341847" class="phone" title="Gọi điện">
            📞
        </a>
        <!-- Nút Facebook -->
        <a href="https://www.facebook.com/" class="facebook" target="_blank" title="Liên hệ Facebook">
            f
        </a>
        <!-- Nút Zalo -->
        <a href="https://zalo.me/0932341847" class="zalo" target="_blank" title="Liên hệ Zalo">
            Z
        </a>
    </div>
</body>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/67444e882480f5b4f5a38864/1idhd5i1k';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

</html>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbook</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

</html>


</body>
</html>

</html>


</html>



<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/banh ss.jpg" alt="">
					</div>
					<div class="shop-body">
						<h3>Bánh ngọt</h3>
						<a href="./products.php?type_id=2" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/nhap-khau-trai-cay-3.jpg" alt="">
					</div>
					<div class="shop-body">
						<h3>Trái cây tươi</h3>
						<a href="./products.php?type_id=1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/rau sach.jpg" alt="">
					</div>
					<div class="shop-body">
						<h3>Rau tươi sạch</h3>
						<a href="./products.php?type_id=3" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Sản phẩm tươi mới mỗi ngày</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#tab1">Trái cây</a></li>
							<li><a data-toggle="tab" href="#tab2">Bánh ngọt</a></li>
							<li><a data-toggle="tab" href="#tab3">Rau tươi</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<?php
								$type_id = 1;
								$get3NewProductsByID = $product->get3NewProductsByID($type_id); ?>
								<?php foreach ($get3NewProductsByID as $value) : ?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img style="width=100px" src="./img/<?php echo $value['pro_image'] ?>" alt="">
											<div class="product-label">
												<span class="new">MỚI</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Quick view</span></button>
											</div>
										</div>
										<a href="addcart.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>">
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</a>
									</div>
									<!-- /product -->
								<?php endforeach ?>
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="tab2" class="tab-pane ">
							<div class="products-slick">
								<?php
								$type_id = 2;
								$get3NewProductsByID = $product->get3NewProductsByID($type_id); ?>
								<?php foreach ($get3NewProductsByID as $value) : ?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
											<div class="product-label">
												<span class="new">MỚI</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Quick view</span></button>
											</div>
										</div>
										<a href="addcart.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>">
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</a>
									</div>
									<!-- /product -->

								<?php endforeach ?>
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="tab3" class="tab-pane ">
							<div class="products-slick">
								<?php
								$type_id = 3;
								$get3NewProductsByID = $product->get3NewProductsByID($type_id); ?>
								<?php foreach ($get3NewProductsByID as $value) : ?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
											<div class="product-label">
												<span class="new">MỚI</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Quick view</span></button>
											</div>
										</div>
										<a href="addcart.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>">
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
											</div>
										</a>
									</div>
									<!-- /product -->

								<?php endforeach ?>
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div class="social-icons">
							<!-- /tab -->
						</div>

					</div>

				</div>
				<!-- Products tab & slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->		
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOT DEAL SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Sản phẩm bán chạy</h3>
						<div class="section-nav">
							<ul class="section-tab-nav tab-nav">
								<li class="active"><a data-toggle="tab" href="#pap1">Trái cây</a></li>
								<li><a data-toggle="tab" href="#pap2">Bánh ngọt</a></li>
								<li><a data-toggle="tab" href="#pap3">Rau tươi</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /section title -->

				<!-- Products tab & slick -->
				<div class="col-md-12">
					<div class="row">
						<div class="products-tabs">
							<!-- tab -->
							<div id="pap1" class="tab-pane active">
								<div class="products-slick" data-nav="#slick-nav-1">
									<?php
									$type_id = 1;
									$getProductsTopSellingByType1 = $product->getProductsTopSellingByType1($type_id); ?>
									<?php foreach ($getProductsTopSellingByType1 as $value) : ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img style="width=100px" src="./img/<?php echo $value['pro_image'] ?>" alt="">
												<div class="product-label">
													<span class="new">BÁN CHẠY</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"></p>
												<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Quick view</span></button>
												</div>
											</div>
											<a href="addcart.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>">
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
												</div>
											</a>
										</div>
										<!-- /product -->
									<?php endforeach ?>
								</div>
								<div id="slick-nav-1" class="products-slick-nav"></div>
							</div>
							<!-- /tab -->

							<!-- tab -->
							<div id="pap2" class="tab-pane ">
								<div class="products-slick">
									<?php
									$type_id = 2;
									$getProductsTopSellingByType1 = $product->getProductsTopSellingByType1($type_id); ?>
									<?php foreach ($getProductsTopSellingByType1 as $value) : ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
												<div class="product-label">
													<span class="new">BÁN CHẠY</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"></p>
												<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Quick view</span></button>
												</div>
											</div>
											<a href="addcart.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>">
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> thêm vào giỏ</button>
												</div>
											</a>
										</div>
										<!-- /product -->
									<?php endforeach ?>
								</div>
								<div id="slick-nav-1" class="products-slick-nav"></div>
							</div>
							<!-- /tab -->

							<!-- tab -->
							<div id="pap3" class="tab-pane ">
								<div class="products-slick">
									<?php
									$type_id = 3;
									$getProductsTopSellingByType1 = $product->getProductsTopSellingByType1($type_id); ?>
									<?php foreach ($getProductsTopSellingByType1 as $value) : ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
												<div class="product-label">
													<span class="new">BÁN CHẠY</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"></p>
												<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Quick view</span></button>
												</div>
											</div>
											<a href="addcart.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>">
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ</button>
												</div>
											</a>
										</div>
										<!-- /product -->
									<?php endforeach ?>
								</div>
								<div id="slick-nav-1" class="products-slick-nav"></div>
							</div>

						</div>
					</div>
				</div>
				<!-- Products tab & slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-4 col-xs-6">
					<div class="section-title">
						<h4 class="title">TRÁI CÂY NỔI BẬT</h4>
						<div class="section-nav">
							<div id="slick-nav-3" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-3">
						<div>
							<?php $getFeaturedFruit = $product->getFeaturedFruit();
							foreach ($getFeaturedFruit as $value) :
							?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"></p>
										<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
									</div>
								</div>
								<!-- /product widget -->
							<?php endforeach ?>
						</div>

						<div>
							<?php $getFeaturedFruitPlus = $product->getFeaturedFruitPlus();
							foreach ($getFeaturedFruitPlus as $value) :
							?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"></p>
										<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
									</div>
								</div>
								<!-- /product widget -->
							<?php endforeach ?>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-xs-6">
					<div class="section-title">
						<h4 class="title">BÁNH NGỌT NỔI BẬT</h4>
						<div class="section-nav">
							<div id="slick-nav-4" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-4">
						<div>
							<?php $getAllFeaturedCake = $product->getAllFeaturedCake();
							foreach ($getAllFeaturedCake as $value) :
							?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"></p>
										<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
									</div>
								</div>
								<!-- /product widget -->
							<?php endforeach ?>
						</div>


					</div>

				</div>

				<div class="clearfix visible-sm visible-xs"></div>

				<div class="col-md-4 col-xs-6">
					<div class="section-title">
						<h4 class="title">RAU CỦ NỔI BẬT</h4>
						<div class="section-nav">
							<div id="slick-nav-5" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-5">
						<div>
							<?php $getAllFeaturedVegetable = $product->getAllFeaturedVegetable();
							foreach ($getAllFeaturedVegetable as $value) :
							?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"></p>
										<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
									</div>
								</div>
								<!-- /product widget -->
							<?php endforeach ?>
						</div>
						<div class="social-icons">
							<div>
								<?php $getAllFeaturedVegetablePlus = $product->getAllFeaturedVegetablePlus();
								foreach ($getAllFeaturedVegetablePlus as $value) :
								?>
									<!-- product widget -->
									<div class="product-widget">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
										</div>
									</div>
									<!-- /product widget -->
								<?php endforeach; ?>
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<?php include "footer.php"; ?>