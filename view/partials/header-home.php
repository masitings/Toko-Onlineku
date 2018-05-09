<!DOCTYPE html>
<html xml:lang="en" lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="view/assets/home/css/style-main-home-04.css"/>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
<title>MELLO</title>
</head>
<body class="home home-04">
<!--begin header-->
<div id="box-header"> 
	<div class="header-container">
		<div class="header"> 

			<div class="box-header-01">
				<div class="container">
					<div class="row">
					<div class="logo">
					<a href="home-01.html"><img src="images/logo-home-04.png" alt=""/></a>
					</div>
					<div class="menu">
						<div class="box-main-menu">
							<div class="main-menu">
								<ul>
									<li class="item1 first"><a href="home-01.html">Home</a></li>
									<li class="item4"><a href="grid.html">laptops </a></li>
									<li class="item5"><a href="grid.html">Desktops</a></li>
									<li class="item6"><a href="#">Computer Accessories</a></li>
									<li class="item7 last"><a href="grid.html">Cameras & Photo</a></li>
								</ul>
							</div>
								</div>
							<div>
						</div>
					</div>
					<div class="account-and-cart">
					<div class="box-cart">
						<div class="cart-mini">
							<div class="title">
							<span class="item"><?php
								if (isset($_SESSION['items'])) {
									echo count($_SESSION['items']);
								} else {
									echo '0';
								}
							;?></span>
							</div>
							<div class="block-content">
							   <div class="inner">
								  <p class="block-subtitle">Recently added item(s)</p>
								  <ol id="cart-sidebar" class="mini-products-list">
									 <?php sessionCart();?>
								  </ol>
								  <div class="summary">
									 <p class="subtotal">
										<span class="label">Subtotal:</span> <span class="price">Rp.<?php cart_total();?></span>                                                                        
									 </p>
								  </div>
								  <div class="actions">
									 <div class="a-inner">
										<a href="" title="Checkout" class="btn-checkout">Checkout</a>
									 </div>
								  </div>
							   </div>
							</div>
						</div>
					</div>
					</div>
				</div>	
			</div>
			<div class="bgr-menu">
				</div>
			</div>
		</div>
	</div>
</div>