<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta charset="UTF-8">
	<title>Tierra</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./includes/css/mycss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="./includes/javascript//pbjquery.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<script src="./includes/javascript/jquery1.js" type="text/javascript"></script>
	<script src="./includes/javascript/jquery2.js" type="text/javascript"></script>
</head>
<body>
	<div id="da_w2">
		<div id="header2">
			<div id="top">
				<div>
					<div class="right">
						<ul class="menu">
							<li>
								<a href="manage_order.php"><i class="fa fa-pencil-square-o"></i> Đơn hàng của tôi</a>
							</li>
							<li>
								<a href="cart.php"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
							</li>
							<li>
								<a href="infor_account.php"><i class="fa fa-sign-in"></i>  <?php echo $_SESSION['user']['email'];?></a>
							</li>
							<li>
								<a href="logout.php"><i class="fa fa-key"></i>  Đăng xuất</a>
							</li>
						</ul>
					</div>
					<div class="left">
						<div  class="wrd_frst">
							<i class="fa fa-phone">
								Hotline:0944641969
							</i>
						</div>
					</div>
					
				</div>
			</div>
			<div id="mid">
				<div class="md_search">
					<input id="all" type="text" name="all" value="" placeholder="Tìm kiếm..." style="padding-left: 1%;">
					<button type="button" value="search" onclick="searchItem(1);">
						<i class="fa fa-search">
						</i>
					</button>
				</div>
				<div class="md_banner">
					<a href="index.php" title="VIE Food">
						<img src="includes/img/logo_2.jpg	">
					</a>
				</div>
			</div>
			<div id="lst_menu">
				<ul class="lst_menu_ul">
					<li class="addclass1" onclick="addclass();">
						<a href="index.php" title="TRANG CHỦ">
							<span>TRANG CHỦ</span>
						</a>
						<div></div>
					</li>
					<li class="s">/</li>
					<li class="addclass1">
						<a href="product.php" title="SẢN PHẨM">
							<span>SẢN PHẨM</span>
						</a>
					</li>
					<li class="s">/</li>
					<li>
						<a href="news.php" title="TIN TỨC">TIN TỨC</a>
					</li>
					<li class="s">/</li>
					<li>
						<a href="introduce.php" title="GIỚI THIỆU">GIỚI THIỆU</a>
					</li>
					<li class="s">/</li>
					<li>
						<a href="contact.php" title="LIÊN HỆ">LIÊN HỆ</a>
					</li>
					<li class="s">/</li>
				</ul>
			</div>
		</div>
		<div style="clear: both;border-bottom: solid #dddddd 1px;"></div>
</body>
</html>