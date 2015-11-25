
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="Una tienda Bootic">
    <meta name="author" content="Bootic">
    <title> - Bootstrap 1</title>
    <link href="https://o.btcdn.co/themes/1107/bootstrap.min.css?1448032751" media="all" rel="stylesheet" type="text/css" />
    <link href="https://o.btcdn.co/themes/1107/master.css?1448032751" media="all" rel="stylesheet" type="text/css" />
    <link rel='alternate' type='application/rss+xml' title='Bootstrap 1 - RSS 2.0' href='http://bootstrap1.bootic.net/blog.rss' />
<link media="all" rel="stylesheet" type="text/css" href="https://a.btcdn.co/stylesheets/bootic.css?1448032751" />

<script type="text/html" data-template="bootic_top_promo">
  <div id="bootic_top_promo" class="bootic_clearfix bootic_notice">
    Descuento <strong>"%{ promotion.name }"</strong>
    %{validPromotion}
      aplicado por <strong class="price">%{ promotion.formatted_discount_total }</strong>
      %{promotion.free_shipping}
       &lowast; <strong class="free_shipping">Envío gratuito!</strong>
      %{/promotion.free_shipping}
    %{/validPromotion}

    %{invalidPromotion}
      <strong>No aplicable</strong> &lowast;
      %{promotion.errors}
        <span>%{error}</span> &lowast;
      %{/promotion.errors}
    %{/invalidPromotion}
  <div>
</script>
<!-- Custom Header Fri Nov 20 12:19:11 -0300 2015 lovelace -->


<!-- Custom Header -->
  </head>

  <body class="products_page">

    <div class="container">

      <div class="masthead">

       <h3 class="muted">
          <a href="/">
            Bootstrap 1
          </a>
       </h3>

        <div class="navbar hidden-phone">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">

                  <li class=""><a href="/products">Productos</a></li>

                  <li class=""><a href="/blog/page">Blog</a></li>

                  <li class=""><a href="/pages/about">Acerca de nosotros</a></li>

                  <li class=""><a href="/forms/contact">Contacto</a></li>

                <li class="bootic-cart-count">
                  <a href="#cart-modal" data-toggle="modal">
                    <i class="icon-shopping-cart"></i>
                    <span class="badge badge-info count">0</span>
                    <span class="total">0</span>
                  </a>
                </li><!-- cart count -->
              </ul>
            </div>
          </div>
        </div><!-- /navbar desktop menu -->

       <ul class="nav hidden-desktop hidden-tablet">
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menú <b class="caret"></b></a>
           <ul class="dropdown-menu">

               <li><a href="/products">Productos</a></li>

               <li><a href="/blog/page">Blog</a></li>

               <li><a href="/pages/about">Acerca de nosotros</a></li>

               <li><a href="/forms/contact">Contacto</a></li>

           </ul>
         </li>
       </ul><!-- /mobile menu -->
       <!-- /main menu -->
      </div>


        <div class="row">
          <div class="span8">
            <h2>


</h2>


<ul class="thumbnails">
  <li class="span4">
  <div class="thumbnail">
    <a href="http://bootstrap1.bootic.net/products/unicorn-flux">
      <img src="https://beta.btcdn.co/r/eyJncmV5IjpmYWxzZSwic2hvcF9pZCI6NjQ5LCJmIjoiNjQ5NTUtdW5pY29ybi5qcGciLCJnIjoiMzYweDIxMiNjIn0/13f32e6ab4f8564" alt="Unicorn Flux" />
    </a>
    <h3 class="clearfix">
      <span class="pull-left">
        Unicorn Flux
        <small>swoosh</small>
      </span>


        <span class="badge badge-inverse pull-right price">$180.000</span>

    </h3>
    <p>
      Este es un producto de ejemplo en Bootic. Aquí puedes poner tu propia descripción del p...
    </p>
    <div class="clearfix">
      <form class="add_to_cart" action="/cart/cart_items" method="post" data-bootic-cart-add="add" data-bootic-productId="27869">

    <input type="hidden" name="cart_item[variant_id]" value="58758" />
    <!-- Botón de envío al carro -->
    <span class="loading">&hellip;</span>
    <input type="submit" value="Agregar al carro" class="submit" data-out-of-stock="No hay más disponibles." data-in-cart="en el carro" />

</form><!--/form-->
      <a href="http://bootstrap1.bootic.net/products/unicorn-flux" class="btn pull-right">Ver más »</a>
    </div>
  </div>
</li>
<li class="span4">
  <div class="thumbnail">
    <a href="http://bootstrap1.bootic.net/products/pony-blue">
      <img src="https://beta.btcdn.co/r/eyJncmV5IjpmYWxzZSwic2hvcF9pZCI6NjQ5LCJmIjoiNjQ5NTQtcG9ueS5qcGciLCJnIjoiMzYweDIxMiNjIn0/b2d97095c02b43b" alt="Pony Blue" />
    </a>
    <h3 class="clearfix">
      <span class="pull-left">
        Pony Blue
        <small>buzzy</small>
      </span>


    </h3>
    <p>
      Este es un producto de ejemplo en Bootic. Aquí puedes poner tu propia descripción del p...
    </p>
    <div class="clearfix">
      <form class="add_to_cart" action="/cart/cart_items" method="post" data-bootic-cart-add="add" data-bootic-productId="27868">

    <input type="hidden" name="cart_item[variant_id]" value="58757" />
    <!-- Botón de envío al carro -->
    <span class="loading">&hellip;</span>
    <input type="submit" value="Agregar al carro" class="submit" data-out-of-stock="No hay más disponibles." data-in-cart="en el carro" />

</form><!--/form-->
      <a href="http://bootstrap1.bootic.net/products/pony-blue" class="btn pull-right">Ver más »</a>
    </div>
  </div>
</li>
<li class="span4">
  <div class="thumbnail">
    <a href="http://bootstrap1.bootic.net/products/xy-vision">
      <img src="https://beta.btcdn.co/r/eyJncmV5IjpmYWxzZSwic2hvcF9pZCI6NjQ5LCJmIjoiNjQ5NTMtZXllZ2xhc3Nlcy5qcGciLCJnIjoiMzYweDIxMiNjIn0/77553d9058c609f" alt="XY Vision" />
    </a>
    <h3 class="clearfix">
      <span class="pull-left">
        XY Vision
        <small>daylite</small>
      </span>


        <span class="badge badge-inverse pull-right price">$16.000</span>

    </h3>
    <p>
      Este es un producto de ejemplo en Bootic. Aquí puedes poner tu propia descripción del p...
    </p>
    <div class="clearfix">
      <form class="add_to_cart" action="/cart/cart_items" method="post" data-bootic-cart-add="add" data-bootic-productId="27867">

    <input type="hidden" name="cart_item[variant_id]" value="58756" />
    <!-- Botón de envío al carro -->
    <span class="loading">&hellip;</span>
    <input type="submit" value="Agregar al carro" class="submit" data-out-of-stock="No hay más disponibles." data-in-cart="en el carro" />

</form><!--/form-->
      <a href="http://bootstrap1.bootic.net/products/xy-vision" class="btn pull-right">Ver más »</a>
    </div>
  </div>
</li>
<li class="span4">
  <div class="thumbnail">
    <a href="http://bootstrap1.bootic.net/products/stallion-ii">
      <img src="https://beta.btcdn.co/r/eyJncmV5IjpmYWxzZSwic2hvcF9pZCI6NjQ5LCJmIjoiNjQ5NTItc3RhbGxpb24yLmdpZiIsImciOiIzNjB4MjEyI2MifQ/a74c9641063bee7" alt="Stallion II" />
    </a>
    <h3 class="clearfix">
      <span class="pull-left">
        Stallion II
        <small>lightrek</small>
      </span>


        <span class="badge badge-inverse pull-right price">$220.000</span>

    </h3>
    <p>
      Este es un producto de ejemplo en Bootic. Aquí puedes poner tu propia descripción del p...
    </p>
    <div class="clearfix">
      <form class="add_to_cart" action="/cart/cart_items" method="post" data-bootic-cart-add="add" data-bootic-productId="27866">

    <input type="hidden" name="cart_item[variant_id]" value="58755" />
    <!-- Botón de envío al carro -->
    <span class="loading">&hellip;</span>
    <input type="submit" value="Agregar al carro" class="submit" data-out-of-stock="No hay más disponibles." data-in-cart="en el carro" />

</form><!--/form-->
      <a href="http://bootstrap1.bootic.net/products/stallion-ii" class="btn pull-right">Ver más »</a>
    </div>
  </div>
</li>
<li class="span4">
  <div class="thumbnail">
    <a href="http://bootstrap1.bootic.net/products/boomblock-ab">
      <img src="https://beta.btcdn.co/r/eyJncmV5IjpmYWxzZSwic2hvcF9pZCI6NjQ5LCJmIjoiNjQ5NTEtaGVsbWV0LmpwZyIsImciOiIzNjB4MjEyI2MifQ/3ac4dc56f7a05f7" alt="Boomblock AB" />
    </a>
    <h3 class="clearfix">
      <span class="pull-left">
        Boomblock AB
        <small>adura</small>
      </span>


        <span class="badge badge-inverse pull-right price">$8.000</span>

    </h3>
    <p>
      Este es un producto de ejemplo en Bootic. Aquí puedes poner tu propia descripción del p...
    </p>
    <div class="clearfix">
      <form class="add_to_cart" action="/cart/cart_items" method="post" data-bootic-cart-add="add" data-bootic-productId="27865">

    <input type="hidden" name="cart_item[variant_id]" value="58754" />
    <!-- Botón de envío al carro -->
    <span class="loading">&hellip;</span>
    <input type="submit" value="Agregar al carro" class="submit" data-out-of-stock="No hay más disponibles." data-in-cart="en el carro" />

</form><!--/form-->
      <a href="http://bootstrap1.bootic.net/products/boomblock-ab" class="btn pull-right">Ver más »</a>
    </div>
  </div>
</li>

</ul>



          </div><!-- /main content -->
          <div class="span2 pull-right">
            <ul class="nav nav-tabs nav-stacked">

    <li>
      <a href="/collections/accessories">Accesorios</a>
    </li>

    <li>
      <a href="/types/bikes">Bicicletas</a>
    </li>

    <li>
      <a href="/collections/featured">Destacados</a>
    </li>

    <li>
      <a href="/collections/deals">Ofertas</a>
    </li>

</ul>

          </div><!-- /sidebars -->
        </div>


      <hr>

      <div class="footer">
        <p><p>(c) 2012 - Tu empresa.<br />Nuestra tienda corre sobre la plataforma de ventas en línea Bootic.</p></p>
      </div>

    </div> <!-- /container -->

    <!-- Modal -->
<div id="cart-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- JavaScript template for ajx cart -->
<script type="text/html" data-template="cart">
  <div class="modal-header clearfix">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

    <img src="https://o.btcdn.co/649/logo/tiny/logo-logo-Screen_Shot_2012-10-27_at_18.32.52.png?1364773305" class="pull-left bootic_cart_logo" />

    <h3 class="pull-left bootic_modal_title">%{ units } unidades en el carro</h3>
    <div class="progress progress-striped active loading hide">
      <div class="bar" style="width: 100%;"></div>
    </div>
  </div>
  %{hasProducts}
  <div class="modal-body">

    <table class="table table-striped">
      <tr>
        <th>Producto</th>
        <th>Unidades</th>
        <th>Precio</th>
        <th>&nbsp;</th>
      </tr>
      %{products}
      <tr>
        <td>
          %{unavailable}
          <a href="#" data-toggle="tooltip" title="No hay más disponibles.">
            <i class="icon-exclamation-sign"></i>
          </a>
          %{/unavailable}
          (%{ variant_title }) <strong>%{ model }</strong>
        </td>
        <td>
          <input type="text" class="input-mini" value="%{ quantity }" size="2" name="quantity" data-update="%{ variant_id }" />
        </td>
        <td>%{ formatted_price }</td>
        <td>
          <a href="#" class="btn btn-danger btn-mini" data-remove="%{ variant_id }" title="Remover del carro">
            <i class="icon-remove"></i>
          </a>
        </td>
      </tr>
      %{/products}
    </table>

    <!-- applied discount info -->
    %{hasPromotion}
    <div class="promo">
      <div class="clearfix">
        <span class="left">Descuento "%{ promotion.name}"</span>
        %{validPromotion}
         <strong class="right">- %{promotion.formatted_discount_total}</strong>
        %{/validPromotion}
      </div>

      %{validPromotion}
        %{promotion.free_shipping}
        <p class="free_shipping">
          Envío gratuito!
        </p>
        %{/promotion.free_shipping}
      %{/validPromotion}

      %{invalidPromotion}
        <div class="invalid_promo alert">
          <h5>No aplicable:</h5>
          <ul class="promo_errors">
           %{promotion.errors}
            <li>%{error}</li>
           %{/promotion.errors}
          </ul>
        </div>
      %{/invalidPromotion}
    </div>

    %{/hasPromotion}
    <!-- /applied discount -->

    <p class="clearfix">
      <span class="pull-right">
        Subtotal:
        %{validPromotion}
          <strike>%{formatted_net_total}</strike>
        %{/validPromotion}
        <span class="badge badge-inverse bootic_cart_subtotal">%{ formatted_total }</span>
      </span>
    </p>

  </div><!-- /modal body -->
  <div class="modal-footer">
    <form action="/cart" method="post">
      <input type="hidden" name="_method" value="put" />
      <button class="btn" data-dismiss="modal" aria-hidden="true">Seguir comprando</button>
      <input type="submit" name="cart_action" class="btn btn-primary" value="Comprar »" data-loading-text="..." />
    </form>
  </div><!-- /buttons -->
  %{/hasProducts}

  %{isEmpty}
  <div class="modal-body">
   <p class="alert">
     Carro vacío.
   </p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Seguir comprando</button>
  </div>
  %{/isEmpty}
</script>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Custom Footer -->

<script type="text/javascript">
  var _btc = _btc || [];
  _btc.push(['_trackPageview']);



  ;(function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'bootic-tracker';
    t.setAttribute('data-account', 'bootstrap1');
    t.setAttribute('data-app', 'bootic_shops');
    t.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + "du8eo9nh88b2j.cloudfront.net/tracker/0.0.5/tracker.min.js";
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>

<!-- /Custom Footer -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap JS -->
    <script src="https://o.btcdn.co/themes/1107/bootstrap.min.js?1448032751" type="text/javascript"></script>
    <!-- http://wiki.bootic.net/es/diseno/recetas/carrito_ajax -->
    <script src="http://js.bootic.net/cart/0.0/bootic_cart.min.js" type="text/javascript"></script>
    <!-- JavaScript principal de esta tienda -->
    <script src="https://o.btcdn.co/themes/1107/app.js?1448032751" type="text/javascript"></script>
  </body>
</html>
