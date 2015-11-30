<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- carrito -->
    <base href="<?php echo base_url();?>" target="_blank" />
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
      <link rel="stylesheet" type="text/css" href="css/minicart.css" />
      <link rel="stylesheet" type="text/css" href="css/code.css" />
      <link rel="alternate" type="application/atom+xml"  href="https://github.com/jeffharrell/MiniCart/commits/master.atom" title="PayPal Mini Cart RSS Feed" />
  </head>
  <body>

<div id="wrapper">

                  <section id="example">
                  <div class="container">
                    <br>
                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="last">
                            <input type="hidden" name="business" value="example@example.com" />
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="display" value="1" />
                            <input type="submit" name="submit" value="Ver articluos en carrito" class="button" />
                    </form>
                    <br>
                    <h3>Productos</h3>
                    <br>
                    <div class="row ">
                      <div class="col-md-2">
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value="example@example.com" />
                                <input type="hidden" name="item_name" value="Iphone 1" />
                                <input type="hidden" name="item_number" value="Iphone 1" />
                                <input type="hidden" name="amount" value="1120.68" />
                                <input type="hidden" name="quantity" value="1" />
                                <input type="hidden" name="currency_code" value="MXN" />
                                <input type="hidden" name="return" value="http://www.minicartjs.com/?success" />
                                <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel" />
                                <strong><div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=40">iPhone</a></div></strong>
                                <ul>
                                  <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=40"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/iphone_1-152x152.jpg" alt="iPhone" /></a></div>

                                  <li>Price $1120.68 </li>
                                </ul>
                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>
                      </div>

                      <div class="col-md-2">
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value="example@example.com" />
                                <input type="hidden" name="item_name" value="Iphone 2" />
                                <input type="hidden" name="item_number" value="Iphone 2" />
                                <input type="hidden" name="amount" value="2120.68" />
                                <input type="hidden" name="quantity" value="1" />
                                <input type="hidden" name="currency_code" value="MXN" />
                                <input type="hidden" name="return" value="http://www.minicartjs.com/?success" />
                                <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel" />
                                <strong><div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=40">iPhone</a></div></strong>
                                <ul>
                                  <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=40"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/iphone_1-152x152.jpg" alt="iPhone" /></a></div>

                                  <li>Price $2120.68 </li>
                                </ul>
                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>
                      </div>

                      <div class="col-md-2">
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value="example@example.com" />
                                <input type="hidden" name="item_name" value="Iphone 4" />
                                <input type="hidden" name="item_number" value="Iphone 4" />
                                <input type="hidden" name="amount" value="3120.68" />
                                <input type="hidden" name="quantity" value="1" />
                                <input type="hidden" name="currency_code" value="MXN" />
                                <input type="hidden" name="return" value="http://www.minicartjs.com/?success" />
                                <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel" />
                                <strong><div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=40">iPhone</a></div></strong>
                                <ul>
                                  <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=40"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/iphone_1-152x152.jpg" alt="iPhone" /></a></div>

                                  <li>Price $3120.68 </li>
                                </ul>
                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>
                      </div>

                      <div class="col-md-2">
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value="example@example.com" />
                                <input type="hidden" name="item_name" value="Iphone 5" />
                                <input type="hidden" name="item_number" value="Iphone 5" />
                                <input type="hidden" name="amount" value="5120.68" />
                                <input type="hidden" name="quantity" value="1" />
                                <input type="hidden" name="currency_code" value="MXN" />
                                <input type="hidden" name="return" value="http://www.minicartjs.com/?success" />
                                <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel" />
                                <strong><div class="name"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=40">iPhone</a></div></strong>
                                <ul>
                                  <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/index.php?route=product/product&amp;product_id=40"><img src="http://demo.harnishdesign.net/opencart/bigshop/image/cache/data/demo/iphone_1-152x152.jpg" alt="iPhone" /></a></div>
                                  <li>Price $5120.68 </li>
                                </ul>
                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>
                      </div>

                    </div>

                    <div class="row ">

                      <div class="col-md-2">
                        <h4>Descuent0s</h4>
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value="example@example.com" />
                                <input type="hidden" name="item_name" value="Motor A" />
                                <input type="hidden" name="amount" value="3.00" />
                                <input type="hidden" name="discount_amount" value="1.00" />
                                <input type="hidden" name="currency_code" value="MXN" />
                                <input type="hidden" name="return" value="http://www.minicartjs.com/?success" />
                                <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel" />
                                <strong>Motor A</strong>
                                <ul>
                                    <li>Price $3.00</li>
                                    <li>Discounted $1.00</li>
                                </ul>

                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>

                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value="example@example.com" />
                                <input type="hidden" name="item_name" value="Motor B" />
                                <input type="hidden" name="amount" value="2.00" />
                                <input type="hidden" name="discount_amount" value="1.00" />
                                <input type="hidden" name="currency_code" value="MXN" />
                                <input type="hidden" name="return" value="http://www.minicartjs.com/?success" />
                                <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel" />
                                <strong>Motor B</strong>
                                <ul>
                                    <li>Price $2.00</li>
                                    <li>Discounted $1.00</li>
                                </ul>

                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>

                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value="example@example.com" />
                                <input type="hidden" name="item_name" value="Motor C" />
                                <input type="hidden" name="amount" value="3.00" />
                                <input type="hidden" name="discount_amount" value="2.00" />
                                <input type="hidden" name="currency_code" value="MXN" />
                                <input type="hidden" name="return" value="http://www.minicartjs.com/?success" />
                                <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel" />
                                <strong>Motor C</strong>
                                <ul>
                                    <li>Price $3.00</li>
                                    <li>Discounted $2.00</li>
                                </ul>

                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>

                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value="example@example.com" />
                                <input type="hidden" name="item_name" value="Motor D" />
                                <input type="hidden" name="amount" value="5.00" />
                                <input type="hidden" name="discount_amount" value="3.00" />
                                <input type="hidden" name="currency_code" value="MXN" />
                                <input type="hidden" name="return" value="http://www.minicartjs.com/?success" />
                                <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel" />
                                <strong>Motor D</strong>
                                <ul>
                                    <li>Price $5.00</li>
                                    <li>Discounted $3.00</li>
                                </ul>

                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>
                      </div>

                    </div>
                    <br>

                          <div class="row">
                              <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                                  <fieldset>
                                      <input type="hidden" name="cmd" value="_cart" />
                                      <input type="hidden" name="add" value="1" />
                                      <input type="hidden" name="business" value="example@example.com" />
                                      <input type="hidden" name="item_name" value="Tornillo" />
                                      <input type="hidden" name="quantity" value="1" />
                                      <input type="hidden" name="currency_code" value="MXN" />
                                      <input type="hidden" name="return" value="http://www.minicartjs.com/?success" />
                                      <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel" />
                                      <strong>Tornillo</strong>
                                      <ul>
                                          <li>
                                              <label>
                                                  <select name="os0">
                                                    <option value="TornilloA">Tornillo A $3.00</option>
                                                    <option value="TornilloB">Tornillo B $4.00</option>
                                                    <option value="TornilloC">Tornillo C $5.00</option>
                                                  </select>
                                              </label>
                                              <input type="hidden" name="on0" value="Type" />
                                              <input type="hidden" name="option_select0" value="TornilloA" />
                                              <input type="hidden" name="option_amount0" value="3.00" />
                                              <input type="hidden" name="option_select1" value="TornilloB" />
                                              <input type="hidden" name="option_amount1" value="4.00" />
                                              <input type="hidden" name="option_select2" value="TornilloC" />
                                              <input type="hidden" name="option_amount2" value="5.00" />
                                          </li>
                                      </ul>
                                      <input type="submit" name="submit" value="Add to cart" class="button" />
                                  </fieldset>
                              </form>


                              <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                                  <fieldset>
                                      <input type="hidden" name="cmd" value="_cart" />
                                      <input type="hidden" name="add" value="1" />
                                      <input type="hidden" name="business" value="example@example.com" />
                                      <input type="hidden" name="item_name" value="Tornillo" />
                                      <input type="hidden" name="quantity" value="1" />
                                      <input type="hidden" name="currency_code" value="MXN" />
                                      <input type="hidden" name="return" value="http://www.minicartjs.com/?success" />
                                      <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel" />
                                      <strong>Tornillo</strong>
                                      <ul>
                                          <li>
                                              <label>
                                                  <select name="os0">
                                                    <option value="Tornillo A">Tornillo A $3.00</option>
                                                    <option value="Tornillo B">Tornillo B $4.00</option>
                                                    <option value="Tornillo C">Tornillo C $5.00</option>
                                                  </select>
                                              </label>
                                              <input type="hidden" name="on0" value="Type" />
                                              <input type="hidden" name="option_select0" value="Tornillo A" />
                                              <input type="hidden" name="option_amount0" value="3.00" />
                                              <input type="hidden" name="option_select1" value="Tornillo B" />
                                              <input type="hidden" name="option_amount1" value="4.00" />
                                              <input type="hidden" name="option_select2" value="Tornillo C" />
                                              <input type="hidden" name="option_amount2" value="5.00" />
                                          </li>
                                      </ul>
                                      <input type="submit" name="submit" value="Add to cart" class="button" />
                                  </fieldset>
                              </form>

                              <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                                  <fieldset>
                                      <input type="hidden" name="cmd" value="_cart" />
                                      <input type="hidden" name="add" value="1" />
                                      <input type="hidden" name="business" value="" />
                                      <input type="hidden" name="item_name" value="Pony" />
                                      <input type="hidden" name="quantity" value="1" />
                                      <input type="hidden" name="currency_code" value="MXN" />
                                      <input type="hidden" name="return" value="http://www.minicartjs.com/?success" />
                                      <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel" />
                                      <strong>Tornillo</strong>
                                      <ul>
                                          <li>
                                              <label>
                                                  <select name="os0">
                                                      <option value="Stripes">Stripes $3.00</option>
                                                      <option value="Spots">Spots $4.00</option>
                                                      <option value="Psychedelic">Psychedelic $5.00</option>
                                                  </select>
                                              </label>
                                              <input type="hidden" name="on0" value="Type" />
                                              <input type="hidden" name="option_select0" value="Stripes" />
                                              <input type="hidden" name="option_amount0" value="3.00" />
                                              <input type="hidden" name="option_select1" value="Spots" />
                                              <input type="hidden" name="option_amount1" value="4.00" />
                                              <input type="hidden" name="option_select2" value="Psychedelic" />
                                              <input type="hidden" name="option_amount2" value="5.00" />
                                          </li>
                                      </ul>
                                      <input type="submit" name="submit" value="Add to cart" class="button" />
                                  </fieldset>
                              </form>

                              <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                                  <fieldset>
                                      <input type="hidden" name="cmd" value="_cart" />
                                      <input type="hidden" name="add" value="1" />
                                      <input type="hidden" name="business" value="example@example.com" />
                                      <input type="hidden" name="item_name" value="Pony" />
                                      <input type="hidden" name="quantity" value="1" />
                                      <input type="hidden" name="currency_code" value="MXN" />
                                      <input type="hidden" name="return" value="http://www.minicartjs.com/?success" />
                                      <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel" />
                                      <strong>Tornillo</strong>
                                      <ul>
                                          <li>
                                              <label>
                                                  <select name="os0">
                                                      <option value="Stripes">Stripes $3.00</option>
                                                      <option value="Spots">Spots $4.00</option>
                                                      <option value="Psychedelic">Psychedelic $5.00</option>
                                                  </select>
                                              </label>
                                              <input type="hidden" name="on0" value="Type" />
                                              <input type="hidden" name="option_select0" value="Stripes" />
                                              <input type="hidden" name="option_amount0" value="3.00" />
                                              <input type="hidden" name="option_select1" value="Spots" />
                                              <input type="hidden" name="option_amount1" value="4.00" />
                                              <input type="hidden" name="option_select2" value="Psychedelic" />
                                              <input type="hidden" name="option_amount2" value="5.00" />
                                          </li>
                                      </ul>
                                      <input type="submit" name="submit" value="Add to cart" class="button" />
                                  </fieldset>
                              </form>
                            </div>
                  </div>

              </section>
</div>
          </div>



<!-- carrito -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.scrollTo.js"></script>   <!--  scrollTo -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/minicart/3.0.5/minicart.min.js"></script>
<script>
    paypal.minicart.render();
</script>

  <script>
      // Mini Cart
      paypal.minicart.render({
              strings: {
               button: "paga con <img src='//cdnjs.cloudflare.com/ajax/libs/minicart/3.0.1/paypal_65x18.png' width='65' height='18' alt='PayPal' />",
             },
            action: 'https://www.sandbox.paypal.com/cgi-bin/webscr'
        });

        if (~window.location.search.indexOf('reset=true')) {
            paypal.minicart.reset();
        }
  </script>



  <script>
      // Page tracking
      var _gaq = [
          ['_setAccount', 'UA-2544686-8'],
          ['_trackPageview']
      ];

      (function() {
          var ga = document.createElement('script');
          ga.type = 'text/javascript';
          ga.async = true;
          ga.src = 'http://www.google-analytics.com/ga.js';
          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
      })();
  </script>

  </body>
</html>
