<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tierra</title>
    <link rel="stylesheet" type="text/css" href="includes/css/style.css">
</head>

<?php
	session_start();
	if(isset($_SESSION['user']['uid']))
	{
		include("includes/header_user.php");
	}
	else
	{
		include("includes/html/header.php");
	}
	include("includes/connect_db.php");
	include("includes/check_errors.php");
?>

<body>
    <!-- <div id="header">
        <img id="header-logo" src="https://www.tierra.vn/files/logo-header-CAYxzy8F6Z.jpg" alt="logo">
    </div> -->

    <!-- nav pc -->
    <!-- <div id="header-menu">
        <ul id="header-ul">
            <li>
                <a href="facebook.com">Home page</a>
            </li>
            <li>
                <a href="facebook.com">Nhẫn cầu hôn</a>
            </li>
            <li>
                <a href="facebook.com">Nhẫn cưới</a>
            </li>
            <li>
                <a href="facebook.com">Kim cương GIẢ</a>
            </li>
            <li>
                <a href="facebook.com">Trang sức kim cương</a>
            </li>
            <li>
                <a href="facebook.com">Men's collection</a>
            </li>
            <li>
                <a href="facebook.com" style="color: red;">Khuyến mãi</a>
            </li>
            <li>
                <a href="facebook.com">Tierra và bạn</a>
            </li>
        </ul>
    </div> -->

    <label id="nav-bar-btn" for="nav-mobile-input">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
        </svg>
    </label>


    <input type="checkbox" name="" hidden class="nav-input" id="nav-mobile-input">

    <label for="nav-mobile-input" class="nav-overlay"></label>
    <!-- nav mobile -->
    <div id="nav-mobile">
        <label for="nav-mobile-input" class="nav-mobile-close">
            <svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
            </svg>
        </label>
        <ul id="nav-mobile-list">
            <li>
                <a href="facebook.com" class="nav-mobile-link">Home page</a>
            </li>
            <li>
                <a href="facebook.com" class="nav-mobile-link">Nhẫn cầu hôn</a>
            </li>
            <li>
                <a href="facebook.com" class="nav-mobile-link">Nhẫn cưới</a>
            </li>
            <li>
                <a href="facebook.com" class="nav-mobile-link">Kim cương GIẢ</a>
            </li>
            <li>
                <a href="facebook.com" class="nav-mobile-link">Trang sức kim cương</a>
            </li>
            <li>
                <a href="facebook.com" class="nav-mobile-link">Men's collection</a>
            </li>
            <li>
                <a href="facebook.com" class="nav-mobile-link" style="color: red;">Khuyến mãi</a>
            </li>
            <li>
                <a href="facebook.com" class="nav-mobile-link">Tierra và bạn</a>
            </li>
        </ul>
    </div>

    <div id="header-banner">
        <img src="includes/img/banner-web-homepage-1-nMErTkbSNu.jpg" alt="header banner">
    </div>

    <div id="intro">
        <h3 class="text-heading">Lựa chọn lý tưởng của cặp đôi trẻ hiện đại</h3>

        <div id="intro-div">
            <ul id="intro-ul" style="list-style-type:none;">
                <li>

                    <img src="includes/img/thanh-lich-jsW4ozPWXh.jpg" alt="">
                </li>
                <li>

                    <img src="includes/img/thanh-lich-jsW4ozPWXh.jpg" alt="">
                </li>
                <li>

                    <img src="includes/img/thanh-lich-jsW4ozPWXh.jpg" alt="">
                </li>
                <li>

                    <img src="includes/img/thanh-lich-jsW4ozPWXh.jpg" alt="">
                </li>
            </ul>
            <div id="intro-image">
                <img src="includes/img/group-232-8H9ypsf84k.png" alt="">
            </div>

        </div>
    </div>

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="includes/img/banner-website-2-k10d8jl94r-yOjYTNy0kp.jpg" style="width:100%">
            <!-- <div class="text">Caption Text</div> -->
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="includes/img/banner-website-2-k10d8jl94r-yOjYTNy0kp.jpg" style="width:100%">
            <!-- <div class="text">Caption Two</div> -->
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="includes/img/banner-website-WR3pJEJ3PQ.webp" style="width:100%">
            <!-- <div class="text">Caption Three</div> -->
        </div>
    </div>
    <!-- Next and previous buttons -->
    <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
    <!-- The dots/circles -->
    <!-- <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div> -->

    <br>

    <h3 class="text-heading">Sản phẩm nổi bật</h3>
    <div id="product-detail">

        <div id="product-row">
            <div class="product-col">
                <div class="product-img">
                    <img src="includes/img/ring1.jpg" alt="product 1">
                </div>

                <h3> Nhẫn cầu hôn kim cương Solitaire Pavé 6 chấu viền bi NCH1204 </h3>
                <p>17.110.000đ</p>
            </div>

            <div class="product-col">
                <div class="product-img">
                    <img src="includes/img/ring2.jpg" alt="">
                </div>

                <h3>Nhẫn cầu hôn kim cương Trellis 4 chấu xoắn NCH1402</h3>
                <p>9.960.000 đ</p>
            </div>

            <div class="product-col">
                <div class="product-img">
                    <img src="includes/img/ring3.jpg" alt="">
                </div>

                <h3>Nhẫn cầu hôn kim cương Twist 1 đai tấm NCH1701</h3>
                <p>19.490.000 đ</p>
            </div>

            <div class="product-col">
                <div class="product-img">
                    <img src="includes/img/ring4.jpg" alt="">
                </div>

                <h3>Nhẫn cầu hôn kim cương Fivestone dạng trellis NCH3302</h3>
                <p>35.560.000 đ</p>
            </div>

        </div>
    </div>

    <div id="banner-slideshow">
        <img src="includes/img/danh-muc-nhan-cau-hon-kim-cuong-GBk6BLPuq0.webp" alt="ảnh intro">

        <img src="includes/img/3-danh-m-c-ncc-60HZxd9nsl.jpg" alt="">

        <img src="includes/img/tskc-0X0CJ0KUaK.webp" alt="">

        <img src="includes/img/kc-Q65UOrHNUj.webp" alt="">
    </div>

    <h3 class="text-heading">Tierra và bạn</h3>

    <div id="new-home">

        <div id="box-img">

            <div class="box-img-content">
                <div class="box-img-img">
                    <img src="includes/img/cac-mau-nhan-cuoi-dep-2023-ncc2047-lyYj6jHa2V.webp" alt="product 1">
                </div>

                <h3> Các mẫu nhẫn cưới đẹp 2023 được ưa chuộng nhiều nhất </h3>
                <p>Từ lâu, nhẫn cưới được biết đến là tín vật gắn kết hai trái tim, đánh dấu thời khắc đôi uyên ương</p>
            </div>

            <div class="box-img-content">
                <div class="box-img-img">
                    <img src="includes/img/sweet-ladies-2-cover4-TUjoV4G9Ow.webp" alt="product 1">
                </div>

                <h3> Sweet Ladies - Trang sức thời trang cho các nàng kẹo ngọt</h3>
                <p>Thuộc series Tierra's Sweet Factory, dựa trên cảm hứng từ chocolate và thanh kẹo ngọt, bộ sưu tập</p>
            </div>

            <div class="box-img-content">
                <div class="box-img-img">
                    <img src="includes/img/vang-trang-fwpgpnoooq-OxokwT1QPr.webp" alt="product 1">
                </div>

                <h3> Cách giữ nhẫn cưới vàng trắng luôn sáng bóng như mới </h3>
                <p>Nhẫn cưới vàng trắng với vẻ đẹp thanh lịch, tinh tế nhưng không kém phần sang trọng đã trở</p>
            </div>
        </div>
    </div>

    <div id="contact">
        <div id="contact-left">
            <img src="includes/img/hcm1-zcbvsg9hor-1-1u1pj0zerd-nCorWQqba4.jpg" alt="">
        </div>
        <div id="contact-right">
            <h3 class="text-heading">chon tierra gần nhất</h3>
            <span>Ghé thăm cửa hàng Tierra gần nhất - Thế giới trang sức và không gian mua sắm thú vị đang chờ bạn khám
                phá.</span>

            <span class="title">Cửa hàng Quận 3</span>
            <span>Lầu 3, 168 Võ Thị Sáu, Phường 8, Quận 3.</span>

            <span class="title">Cửa hàng TP. Thủ Đức</span>
            <span>Lầu 1, Vincom Thảo Điền, 159 Xa Lộ Hà Nội, TP. Thủ Đức</span>

            <span class="title">Cửa hàng Hà Nội</span>
            <span>5 Trúc Bạch, Ba Đình, Hà Nội</span>

            <span class="title">Cửa hàng Hà Nội</span>
            <span>5 Trúc Bạch, Ba Đình, Hà Nội</span>

            <button>Book lịch</button>
        </div>
    </div>

    <br>
    <hr style="margin-top: 1cm;">
    <!-- <a id="back-to-homepage" href="" style="color: black;
        font-size: 26px;
        text-align: center;
        text-decoration: none;"> Home page </a> -->
        <button onclick="topFunction()" id="topBtn" title="Go to top">Home Page</button>
    <hr>
    <!-- <div id="footer">
        <div id="footer-container">

            <div id="footer-row">

                <div class="footer-col" style="width: 20%;">
                    <img src="includes/img/logo_2.jpg" alt="logo">
                </div>

                <div class="footer-col">
                    <h5>About us</h5>
                    <a href="facebook.com/tudeptrai260504" target="_blank">
                        <img src="includes/img/facebook-1.jpg" alt="facebook">
                    </a>

                    <a href="https://www.instagram.com/hoanganhtu26_/" target="_blank">
                        <img src="includes/img/instagram-1.jpg" alt="instagram">
                    </a>
                </div>

                <div class="footer-col">
                    <h5 style="text-align: center;">Contact</h5>
                    <a href="facebook.com/tudeptrai260504" target="_blank">
                        <img src="includes/img/facebook-1.jpg" alt="facebook">
                    </a>

                    <a href="https://www.instagram.com/hoanganhtu26_/" target="_blank">
                        <img src="includes/img/instagram-1.jpg" alt="instagram">
                    </a>
                </div>

                <div class="footer-col">
                    <ul style="list-style-type: none;">
                        <!-- <li> -->
                        <!-- <h5>Support</h5>
                        <!-- </li> -->
                        <!-- <li>
                            <span>Chính sách mua hàng</span>
                        </li>
                        <li>
                            <span>Chính sách thu đổi</span>
                        </li>
                        <li>
                            <span>Bảo mật thông tin</span>
                        </li>
                        <li>
                            <span>Giá vàng hôm nay</span>
                        </li>
                    </ul> -->
                <!-- </div>
            </div>
        </div>
    </div>  -->
    <script src="includes/javascript/main.js"></script>
</body>
<?php  include("includes/footer.php");?>
</html>