<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
<meta charset="UTF-8" />
<title>Electricos de la Villa</title>
<meta name="description" content="A Clean and fully responsive theme, elegant design for a beautiful eCommerce online store." />
<link href="http://demo.harnishdesign.net/opencart/bigshop/image/data/cart.png" rel="icon" />
<meta name="HandheldFriendly" content="True" /><meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="stylesheet/slideshow.css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheet/jquery-ui-1.8.16.custom.css" />
<script type="text/javascript" src="jquery/jquery.cookie.js"></script>
<script type="text/javascript" src="jquery/jquery.colorbox.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheet/colorbox.css" media="screen" />
<script type="text/javascript" src="jquery/tabs.js"></script>
<script type="text/javascript" src="jquery/common.js"></script>
<script type="text/javascript" src="jquery/custom.js"></script>
<script src="jquery.autocomplete.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.autocomplete.css" />

<script type="text/javascript">
$(document).ready(function() {  
  $("#filter_name").autocomplete("getdata.php?lan=en", {
    width: 260,
    matchContains: true,
    selectFirst: true
  }); 
});
</script>
<script type="text/javascript" src="jquery/jquery.nivo.slider.pack.js"></script>
<link href='//fonts.googleapis.com/css?family=&v1' rel='stylesheet' type='text/css'>
  <style type="text/css">
body {    background-color: #F6F6F4;
   background-image: url("imagenes/10.png");
 }
a.button, input.button, .box-product > div .cart a.button:hover, .box-product > div .cart input.button:hover, .product-grid > div .cart a.button:hover, .product-grid > div .cart input.button:hover, .product-list > div .cart a.button:hover, .product-info .price-tag, .product-list > div .cart input.button:hover, #header #cart .heading h4, .pagination .links b, #button-cart{
 background-color: #F15A23;
}
#header #welcome a:hover, #header .links:hover, #currency:hover, #language:hover, .box-product .price, .box-category > ul > li ul li a:hover, .list-item a:hover, .box-category > ul > li > ul > li a.active, .box-product .name a:hover, .product-list .name a:hover, .product-list .price, .product-grid .wishlist a:hover, .product-grid .compare a:hover, .product-list .wishlist a:hover, .product-list .compare a:hover, .pagination .links a:hover, .product-grid .price, .product-grid .name a:hover, .product-info .price, a.wishlist:hover, .product-info .review a:hover, .sitemap li a:hover, .breadcrumb a:hover{
color: #F15A23;
}
.pagination .links b, .box .box-heading span{
border-color: #F15A23;
}
  #menu{
 background-color: #444444;
}
#menu > ul > li:hover > a, #menu > ul > li > div{
 background-color: #F15A23;
}
#menu > ul > li > a, #menu > span {
 color: #FFFFFF;
}
 
    body, p { font-family:Helvetica; }

    
    .welcome, h1, h2, h3, .box .box-heading, .checkout-heading, .manufacturer-heading{
      font-family:Trebuchet MS;
    }
    </style>

</head>
<body>
<div class="main-wrapper">
<div id="header"><div id="welcome">

 
        <a onClick="Buscador.fSession();">Inicia sesión</a> <a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=account/register">Crear cuenta</a>        
  </div>
 <div id="logo"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=common/home"><img src="imagenes/logo_.png" title="Bigshop" alt="Bigshop" /></a></div>
  <div id="search">
    <div class="button-search"></div>
     
      </div>
  
  <div id="cart">
  <div class="heading">
      <div >
          
       </div>
      </div>
</div>  
</div>
<div id="menu">
<span>Menu</span>
  <ul>
  <li class="home"><a  title="Home" href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=common/home"><span>Home</span></a></li>
        <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/category&amp;path=25">Electricos de la Villa</a>
            <div>
                 <!--<ul>
                                       <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/category&amp;path=25_30">Cameras</a></li>
                                        <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/category&amp;path=25_29">Phones</a></li>
                                        <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/category&amp;path=25_28">Tablets</a></li>
                            </ul> -->
              </div>
          </li>
        <li><a href="conocemos.php">Quienes somos</a>
          </li>
             <li><a href="index.php">Nuestros Productos</a>
          </li>
        <li><a href="sucursales.php">Sucursales</a>
          </li>
        <li><a href="contacto.php">Contactanos</a>
           
                </ul>
</div>
<div id="container">
<div id="notification"></div><div id="column-left">
        <script type="text/javascript" src="http://demo.harnishdesign.net/opencart/bigshop/catalog/view/theme/bigshop/js/jquery.dcjqaccordion.js"></script> 


<div class="box">

  <div class="box-heading">Busqueda Avanzada</div>

  <div class="box-content box-category">
	<ul id="cat_accordion">
		<li class="custom_id25">
		</li>
			
	</ul>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
  $('#cat_accordion').cutomAccordion({
    classExpand : 'custom_id0',
    menuClose: false,
    autoClose: true,
    saveState: false,
    disableLink: false,   
    autoExpand: true
  });
});
</script>
    <div class="box">
  <div class="box-heading">Novedades</div>
  <div class="box-content">
    <div class="box-product">
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=49"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/samsung_tab_1-60x60.jpg" alt="Chair Swing" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=49">Chair Swing</a></div>
                <div class="price">
                    $236.99                  </div>
            
            
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-3.png" alt="Based on 1 reviews." /></div>
                <div class="cart"><input type="button" value="Detalle" onclick="addToCart('49');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=48"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/ipod_classic_1-60x60.jpg" alt="iPad Classic" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=48">iPad Classic</a></div>
                <div class="price">
                    $119.50                  </div>
            
                <div class="cart"><input type="button" value="Detalle" onclick="addToCart('48');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=47"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/hp_1-60x60.jpg" alt="Casual Saddle Shoes" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=47">Casual Saddle Shoes</a></div>
                <div class="price">
                    $119.50                  </div>
            
                <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('47');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=46"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/sony_vaio_1-60x60.jpg" alt="Silver Cuff Bracelet" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=46">Silver Cuff Bracelet</a></div>
                <div class="price">
                    $1,177.00                  </div>
            
                <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('46');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=45"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/macbook_pro_1-60x60.jpg" alt="MacBook Pro" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=45">MacBook Pro</a></div>
                <div class="price">
                    $2,000.00                  </div>
            
                <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('45');" class="button" /></div>
      </div>
          </div>
  </div>
</div>
    <div class="box">
  <div class="box-heading">Descuentos</div>
  <div class="box-content">
    <div class="box-product">
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=42"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/apple_cinema_30-60x60.jpg" alt="Apple iPad Retina" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=42">Apple iPad Retina</a></div>
                <div class="price">
                    <span class="price-old">$119.50</span> <span class="price-new">$107.75</span>
                  </div>
                        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('42');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=30"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/canon_eos_5d_1-60x60.jpg" alt="Canon Digital Camera" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=30">Canon Digital Camera</a></div>
                <div class="price">
                    <span class="price-old">$119.50</span> <span class="price-new">$96.00</span>
                  </div>
                        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('30');" class="button" /></div>
      </div>
          </div>
  </div>
</div>
  </div>
 
<div id="content"><!--<div class="welcome">Welcome to Bigshop</div>-->

 <div class="slider-wrapper">
  <div id="slideshow0" class="nivoSlider">
                <a href=""><img src="imagenes/b1.jpg" alt="slideshow-4" /></a>
                <a href=""><img src="imagenes/b3.jpg" alt="slideshow-4" /></a>
                <a href=""><img src="imagenes/b6.jpg" alt="slideshow-2" /></a>
                <a href=""><img src="imagenes/b10.jpg" alt="slideshow-2" /></a>
                <a href=""><img src="imagenes/b9.jpg" alt="slideshow-1" /></a>
                <a href=""><img src="imagenes/b2.jpg" alt="slideshow-2" /></a>
                <a href=""><img src="imagenes/b4.jpg" alt="slideshow-2" /></a>
                <a href=""><img src="imagenes/b8.jpg" alt="slideshow-2" /></a>
                <a href=""><img src="imagenes/b5.jpg" alt="slideshow-2" /></a>
                <a href=""><img src="imagenes/b7.jpg" alt="slideshow-2" /></a>
          </div>
</div>
<script type="text/javascript"><!--
$(document).ready(function() {
  $('#slideshow0').nivoSlider();
});
--></script><h1 style="display: none;">Electricos de la villa</h1>
<div class="box">
  <div class="box-heading">Productos mas buscados</div>
  <div class="box-content">
    <div class="box-product">
        <div>
			<div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=40"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/iphone_1-152x152.jpg" alt="iPhone" /></a></div>
			<div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=40">iPhone</a></div>
			<div class="price">
				$120.68                  </div>
					<div class="rating"><img src="catalog/view/theme/bigshop/image/stars-5.png" alt="Based on 1 reviews." /></div>
			<div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('40');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=49"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/samsung_tab_1-152x152.jpg" alt="Chair Swing" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=49">Chair Swing</a></div>
                <div class="price">
                    $236.99                  </div>
                        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-3.png" alt="Based on 1 reviews." /></div>
                <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('49');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=47"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/hp_1-152x152.jpg" alt="Casual Saddle Shoes" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=47">Casual Saddle Shoes</a></div>
                <div class="price">
                    $119.50                  </div>
                        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('47');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=35"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/bag-152x152.jpg" alt="Bag Lady" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=35">Bag Lady</a></div>
                <div class="price">
                    $119.50                  </div>
                        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('35');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=32"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/ipod_touch_1-152x152.jpg" alt="Eyewear Eyeglasses" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=32">Eyewear Eyeglasses</a></div>
                <div class="price">
                    $119.50                  </div>
                        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('32');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=34"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/ipod_shuffle_1-152x152.jpg" alt="Nail Polish" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=34">Nail Polish</a></div>
                <div class="price">
                    $119.50                  </div>
                        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('34');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=33"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/samsung_syncmaster_941bw-152x152.jpg" alt="Sports Watch Band" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=33">Sports Watch Band</a></div>
                <div class="price">
                    $237.00                  </div>
                        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('33');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=44"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/macbook_air_1-152x152.jpg" alt="T-shirt Grill" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=44">T-shirt Grill</a></div>
                <div class="price">
                    $1,177.00                  </div>
                        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('44');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=48"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/ipod_classic_1-152x152.jpg" alt="iPad Classic" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=48">iPad Classic</a></div>
                <div class="price">
                    $119.50                  </div>
                        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('48');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=43"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/macbook_1-152x152.jpg" alt="Fancy Saddle" /></a></div>
                <div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=43">Fancy Saddle</a></div>
                <div class="price">
                    $589.50                  </div>
                        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('43');" class="button" /></div>
      </div>
    </div>
  </div>
</div>
</div>




<div class="clear"></div>
<div class="social-part">
<div id="facebook" >
<div class="facebook-inner">
<div id="fb-root"></div>
<div class="fb-like-box" data-href="http://www.facebook.com/160281810726316" data-width="585" data-show-faces="true" data-stream="false" data-header="false" data-border-color="#fff"></div>
</div></div>
</div>
</div>
</div>

<div id="footer">
   <div class="column">
    <h3>Información</h3>
    <ul>
            <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=information/information&amp;information_id=4">Acerca de nosotros</a></li>
            <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=information/information&amp;information_id=3">Politica de Privacidad</a></li>
           
          </ul>
  </div>
    <div class="column">
    <h3>Contacto</h3>
    <ul>
      <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=information/contact">Contactanos</a></li>
      <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=information/sitemap">Sucursales</a></li>
    </ul>
  </div>
<!-- <div class="column">
    <h3>Extras</h3>
    <ul>
      <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/manufacturer">Buscar producso</a></li>
      <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=account/voucher">Gift Vouchers</a></li>
      <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=affiliate/account">Affiliates</a></li>
      <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/special">Specials</a></li>
    </ul>
  </div>-->
  <div class="column">
    <h3>Mi cuenta</h3>
    <ul>
      <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=account/account">Crear cuenta</a></li>
      <li><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=account/order">Iniciar sesión</a></li>
    </ul>
  </div>
<div class="contact">
<ul>
<li class="address">Av. Tecnológico 170 Villa de Álvarez, Colima. CP. 28976  </li>

<li class="mobile">(312) 313 3036l</li>

<li class=""></li>

<li class="email"><a href="mailto:info@demo.com">marketing@electricosdelavilla.mx</a></li>
</ul>
</div>

<div class="clear"></div>
<div id="powered">
Powered By <a href="http://www.opencart.com">OpenCart</a><br /> Bigshop &copy; 2014 &nbsp;|&nbsp; Theme By <a target="_blank" href="http://harnishdesign.net">Harnish Design</a>

<div class="payments_types">
<img src="imagenes/banamex.png" alt="banamex" title="Tarjetas Banamex"><img src="imagenes/payment_american.png" alt="american-express" title="American Express"><img src="imagenes/visa.png" alt="VISA" title="VISA"><img src="imagenes/master.png" alt="MasterCard" title="MasterCard"></div>
</div>

</div>
<script type="jquery/jquery.easing-1.3.min.js"></script>
<script type="jquery/cloud_zoom.js"></script>
</body></html>
<script src="js/script.js"></script>