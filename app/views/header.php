<!DOCTYPE HTML>
<html>
<head>
<title>SmartStore</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php echo BASE_URL?>public/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL?>public/css/menu.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo BASE_URL?>public/js/jquery.min.js"></script>
<script src="<?php echo BASE_URL?>public/js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>public/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>public/js/easing.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">

<style>

	body{
		font-weight: 600 !important;
		
	}
	.search_box{
		width: 65% !important;
	}
	.link-ProductType{
		font-weight: 600 !important;
	}
	.link-ProductType:hover{
		color: #6e379a !important; 
		
	}
	.nag-mother-list{
		top: 15px !important;
	}
	.grid_1_of_4{
		height: 384px;
	}
	.images_1_of_4 >a {
		width: 220px !important;
		height: 220px !important;
		overflow: hidden !important;
	}
	.images_1_of_4 >a img{
		width: 220px !important;
		height: 220px !important;
		overflow: hidden !important;
	}
	.images_1_of_4 .button:hover span a{
			background-color: rgb(106,62,144) !important;
			color: white !important;
		}

	.main .section .grid_1_of_4:hover >a>img{
		width: 100% !important;
		transform: scale(0.8, 0.8);
		overflow: hidden !important;
		z-index: -1 !important;
		transition: all 0.2s ease-in;
	}
	.Pagination{
			display: flex !important;
			height: 30px !important;
			justify-content: center;
			margin-bottom: 10px !important;
			margin-top: 20px;
	}
	.Pagination .page-item {
		height: 30px !important;
		width: 30px !important;
		margin-right: 25px;
		
	}
	.Pagination .page-item a{
		display: inline-block;
		line-height: 30px;
		width: 100%;
		height: 100%;
		background-color: rgb(115,115,115);
		color: #ffff;
		padding-left: 20px;
	}
	.Pagination .page-item:hover a{
		background-color: rgb(108,53,152);
		color: #ffff;
	}
	.current-page{
		display: inline-block;
		line-height: 30px;
		width: 30px !important;
		height: 100% !important;
		background-color: rgb(108,53,152);
		color: #ffff;
		padding-left: 20px;
		margin-right: 5px;
	}
	@media only screen and (min-width: 700px){
		.list_2_of_1{
			max-width: 270px !important;
			max-height: 150px !important;
		}
		.images_1_of_2 img{
			width: 120px !important;
			height:  120px !important;
		}
		.list_2_of_1 h2+p{
			width: 100% !important;
			height: 50px !important;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
		}
		.listview_1_of_2 {
  		  margin: 1.4% 0 0% 4px !important;
  		}
		  
	}
	a:hover,button:hover{
		cursor: pointer;
	}
button {
  border: 0 none;
  outline: 0 none;
}

button {
  background-color: #666;
  color: #fff;
}

button:hover,
button:focus {
  background-color: #555;
}

.basket-module,
.basket-labels,
.basket-product {
  width: 100%;
}

input,
button,
.basket,
.basket-module,
.basket-labels,
.item,
.prices,
.quantity,
.subtotal,
.basket-product,
.product-image,
.product-details {
  float: left;
}
.hide {
  display: none;
}

main {
  clear: both;
  margin: 0 auto;
  overflow: hidden;
  padding: 1rem 0;
  width: 960px;
}

.basket,
aside {
  padding: 0 1rem;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.basket {
  width: 70%;
}

.basket-module {
  color: #111;
}

label {
  display: block;
  margin-bottom: 0.3125rem;
}

.promo-code-field {
  border: 1px solid #ccc;
  padding: 0.5rem;
  text-transform: uppercase;
  transition: all 0.2s linear;
  width: 48%;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -o-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}

.promo-code-field:hover,
.promo-code-field:focus {
  border: 1px solid #999;
}

.promo-code-cta {
  border-radius: 4px;

  margin-left: 0.625rem;
  padding: 0.6875rem 1.25rem 0.625rem;
}

.basket-labels {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  margin-top: 1.625rem;
}


li.prices:before,
li.subtotal:before {
  content: '';
}

.item {
  width: 55%;
}

.prices,
.quantity,
.subtotal {
  width: 15%;
}

.subtotal {
  text-align: right;
}

.remove {
  bottom: 1.125rem;
  float: right;
  position: absolute;
  right: 0;
  text-align: right;
  width: 45%;
}

.remove button {
  background-color: transparent;
  color: #777;
  float: none;
  text-decoration: underline;
  text-transform: uppercase;
}

.item-heading {
  padding-left: 4.375rem;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.basket-product {
  border-bottom: 1px solid #ccc;
  padding: 1rem 0;
  position: relative;
}

.product-image {
  width: 35%;
}

.product-details {
  width: 65%;
}

.product-frame {
  border: 1px solid #aaa;
}

.product-details {
  padding: 0 1.5rem;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.quantity-field {
  background-color: #ccc;
  border: 1px solid #aaa;
  border-radius: 4px;
  padding: 2px;
  width: 3.75rem;
}

aside {
  float: right;
  position: relative;
  width: 30%;
}

.summary {
  background-color: #eee;
  border: 1px solid #aaa;
  padding: 1rem;
  position: absolute;
  width: 250px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.summary-total-items {
  color: #666;
  text-align: center;
}

.summary-subtotal,
.summary-total {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  clear: both;
  margin: 1rem 0;
  overflow: hidden;
  padding: 0.5rem 0;
}

.subtotal-title,
.subtotal-value,
.total-title,
.total-value,
.promo-title,
.promo-value {
  color: #111;
  float: left;
  width: 50%;
}

.summary-promo {
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

.promo-title {
  float: left;
  width: 70%;
}

.promo-value {
  color: #8B0000;
  float: left;
  text-align: right;
  width: 30%;
}

.summary-delivery {
  padding-bottom: 3rem;
}

.subtotal-value,
.total-value {
  text-align: right;
}

.total-title {
  font-weight: bold;
  text-transform: uppercase;
}

.summary-checkout {
  display: block;
}

.checkout-cta {
  display: block;
  float: none;
  text-align: center;
  text-transform: uppercase;
  padding: 0.625rem 0;
  width: 100%;
}

.summary-delivery-selection {
  background-color: #ccc;
  border: 1px solid #aaa;
  border-radius: 4px;
  display: block;
  height: 34px;
  width: 100%;
}

@media screen and (max-width: 640px) {
  aside,
  .basket,
  .summary,
  .item,
  .remove {
    width: 100%;
  }
  .basket-labels {
    display: none;
  }
  .basket-module {
    margin-bottom: 1rem;
  }
  .item {
    margin-bottom: 1rem;
  }
  .product-image {
    width: 40%;
  }
  .product-details {
    width: 60%;
  }
  .prices,
  .subtotal {
    width: 33%;
  }
  .quantity {
    text-align: center;
    width: 34%;
  }
  .quantity-field {
    float: none;
  }
  .remove {
    bottom: 0;
    text-align: left;
    margin-top: 0.75rem;
    position: relative;
  }
  .remove button {
    padding: 0;
  }
  .summary {
    margin-top: 1.25rem;
    position: relative;
  }
}

@media screen and (min-width: 641px) and (max-width: 960px) {
  aside {
    padding: 0 1rem 0 0;
  }
  .summary {
    width: 28%;
  }
}

@media screen and (max-width: 960px) {
  main {
    width: 100%;
  }
  .product-details {
    padding: 0 1rem;
  }
}
.wapperNew{
  margin-top: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-bottom: 1px dotted black;
  margin-bottom: 10px;
}
.imgNew{
  height: 350px;
  width: 35%;
  background-color: red;
}
.imgNew img{
  width: 100%;
  height: 100%;
}
.wapperNew .content{
  width: 65%;
  padding-left: 50px;
  padding-right: 50px;
  height: 350px;
}
.wapperNew .content h2{
  width: 100%;
  font-weight: 800;
  color: #111;
}.wapperNew .content p{
  display: block;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
  display: -webkit-box;
}
.wapperNew .content button{
  margin-top: 20px;
  background-color: #6e379a;
  color: #fff;
}
.wapperNew .content a{
  width: 100px;
  height: 20px;
  display: inline-block;
  color: #fff;
  padding: 10px;
  font-weight: 800;
}
.wapperNew .content button:hover{
  background-color: black;
  color: #fff;
}
.wapperNew:nth-child(even){
  flex-direction: row-reverse;
}
/* product detial */
</style>
</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="header_top">
			<div class="logo">
				<a href="<?php echo BASE_URL;?>home/index"><img src="<?=BASE_URL?>public/imgs/logo.png" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
							<strong class="opencart"> </strong>
								<span class="cart_title">Cart</span>
									<span class="no_product">(empty)</span>
							</a>
						</div>
			      </div>
		   <div class="login">
		   	   <span><a href="<?= LOGIN_URL_DEFAULT ;?>"><img src="<?=BASE_URL?>public/imgs/login.png" alt="" title="login"/></a></span>
		   </div>
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
	<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="<?php echo BASE_URL;?>home/index">HOME</a></li>
			<li class="activate"><a href="<?php echo BASE_URL;?>product/index">Products</a>
				<ul class="sub-menu list-unstyled">
				 <div class="nag-mother-list">
				   <div class="navg-drop-main">
					<?php foreach ($header_data_array as $key => $value) { ?>
					<div class="nav-drop" style="width: 30%;"> 
						<li><a class ="link-ProductType"href="<?= BASE_URL."product/ProductType/".$value['idloaisp'];?>"><?=$value['tenloaisp']?></a></li>
						</li>
					</div>
					<?php }?>
					<div class="clear"> </div>
				</div>
				</ul>
			</li>
			<li><a href="<?php echo BASE_URL."/brands/index/1"?>">Brands</a>
			<ul class="sub-menu list-unstyled">
				 <div class="nag-mother-list">
				   <div class="navg-drop-main">
					<?php foreach ($HomeBrands_array as $key => $value) { ?>
					<div class="nav-drop" style="width: 30%;"> 
						<li><a class ="link-ProductType"href="<?= BASE_URL."brands/index/".$value['idhieusp'];?>"><?=$value['tenhieusp']?></a></li>
						</li>
					</div>
					<?php }?>
					<div class="clear"> </div>
				</div>
				</ul>
			</li>
			<li><a href="<?php echo BASE_URL."/news/index"?>">News</a></li>
			<li><a href="<?php echo BASE_URL."/cart/index"?>">Cart</a></li>
			<li><a href="about.html">About</a></li>
			<div class="clear"> </div>
		</ul>
		</nav> 
		<script src="../public/js/menu.js" type="text/javascript"></script>
		<script>
	var promoCode;
var promoPrice;
var fadeTime = 300;

/* Assign actions */
$('.quantity input').change(function() {
  updateQuantity(this);
});

$('.remove button').click(function() {
  removeItem(this);
});

$(document).ready(function() {
  updateSumItems();
});

$('.promo-code-cta').click(function() {

  promoCode = $('#promo-code').val();

  if (promoCode == '10off' || promoCode == '10OFF') {
    //If promoPrice has no value, set it as 10 for the 10OFF promocode
    if (!promoPrice) {
      promoPrice = 10;
    } else if (promoCode) {
      promoPrice = promoPrice * 1;
    }
  } else if (promoCode != '') {
    alert("Invalid Promo Code");
    promoPrice = 0;
  }
  //If there is a promoPrice that has been set (it means there is a valid promoCode input) show promo
  if (promoPrice) {
    $('.summary-promo').removeClass('hide');
    $('.promo-value').text(promoPrice.toFixed(2));
    recalculateCart(true);
  }
});

/* Recalculate cart */
function recalculateCart(onlyTotal) {
  var subtotal = 0;

  /* Sum up row totals */
  $('.basket-product').each(function() {
    subtotal += parseFloat($(this).children('.subtotal').text());
  });

  /* Calculate totals */
  var total = subtotal;

  //If there is a valid promoCode, and subtotal < 10 subtract from total
  var promoPrice = parseFloat($('.promo-value').text());
  if (promoPrice) {
    if (subtotal >= 10) {
      total -= promoPrice;
    } else {
      alert('Order must be more than £10 for Promo code to apply.');
      $('.summary-promo').addClass('hide');
    }
  }

  /*If switch for update only total, update only total display*/
  if (onlyTotal) {
    /* Update total display */
    $('.total-value').fadeOut(fadeTime, function() {
      $('#basket-total').html(total.toFixed(2));
      $('.total-value').fadeIn(fadeTime);
    });
  } else {
    /* Update summary display. */
    $('.final-value').fadeOut(fadeTime, function() {
      $('#basket-subtotal').html(subtotal.toFixed(2));
      $('#basket-total').html(total.toFixed(2));
      if (total == 0) {
        $('.checkout-cta').fadeOut(fadeTime);
      } else {
        $('.checkout-cta').fadeIn(fadeTime);
      }
      $('.final-value').fadeIn(fadeTime);
    });
  }
}

/* Update quantity */
function updateQuantity(quantityInput) {
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.prices').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;

  /* Update line price display and recalc cart totals */
  productRow.children('.subtotal').each(function() {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });

  productRow.find('.item-quantity').text(quantity);
  updateSumItems();
}

function updateSumItems() {
  var sumItems = 0;
  $('.quantity input').each(function() {
    sumItems += parseInt($(this).val());
  });
  $('.total-items').text(sumItems);
}

/* Remove item from cart */
function removeItem(removeButton) {
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
    updateSumItems();
  });
}
		</script>
		</div>