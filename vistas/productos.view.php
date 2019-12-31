<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<?php include 'head.php';?>
</head>
<body>
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Desactivar Precarga</div>
  </div>
  
  <!-- header -->
  <?php include 'cabecera.php'; ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-4" data-bg-img="imagenes/productos/base_head.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-white font-36">Detalle de Productos</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
  
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: service-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img class="img-fullwidth" src="imagenes/img_pro.jpg" alt="">
              
              
              <div class="row mt-30">
                <div class="col-md-12">
                  <h2 class="line-bottom">Nuestros Productos</h2>
                  <div class="mt-20">
                    <ul id="myTab" class="nav nav-tabs">
                      <li class="active"><a href="#home" data-toggle="tab">Línea Industrial</a></li>
                      <li><a href="#profile" data-toggle="tab">Línea Arquitectónica</a></li>
                      <li><a href="#description" data-toggle="tab">Línea Habitacional</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade in active" id="home">
                        <p>Posee un recubrimiento especial, reforzada para tener una duración prolongada y resistente. Dimensiones especiales.
							
							
							</p>
                      </div>
                      <div class="tab-pane fade" id="profile">
                        <p> Diseñada para ser expuesta en áreas de alta visibilidad, variedad de colores y betas.</p>
                      </div>
                      <div class="tab-pane fade" id="description">
                        <p>
						  
						  Orientada para Hogares, con precios accesibles y una calidad insuperable con una alta duración.
						  </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="products mt-20">
                <div class="row multi-row-clearfix">
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Cordless Combi Drill</h5></a>
                        <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%" style="width: 90%;">3.50</span></div>
                        <div class="price"><del><span class="amount">$520.00</span></del><ins><span class="amount">$480.00</span></ins></div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Angle Grinders</h5></a>
                        <div class="star-rating" title="Rated 5.00 out of 5"><span data-width="100%" style="width: 100%;">5.00</span></div>
                        <div class="price"><del><span class="amount">$364.00</span></del><ins><span class="amount">$344.00</span></ins></div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Hot!</span>
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Planers</h5></a>
                        <div class="star-rating" title="Rated 5.00 out of 5"><span data-width="100%" style="width: 100%;">3.90</span></div>
                        <div class="price"><span class="amount">$245.00</span></div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Circular Saw</h5></a>
                        <div class="star-rating" title="Rated 4.90 out of 5"><span data-width="95%" style="width: 95%;">4.60</span></div>
                        <div class="price"><del><span class="amount">$490.00</span></del><ins><span class="amount">$475.00</span></ins></div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Sandar</h5></a>
                        <div class="star-rating" title="Rated 4.00 out of 5"><span data-width="80%" style="width: 80%;">4.00</span></div>
                        <div class="price"><span class="amount">$175.00</span></div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Nail Gun</h5></a>
                        <div class="star-rating" title="Rated 2.50 out of 5"><span data-width="50%" style="width: 50%;">2.50</span></div>
                        <div class="price"><span class="amount">$265.00</span></div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Cordless Multi Screwdriver</h5></a>
                        <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="95%" style="width: 95%;">4.50</span></div>
                        <div class="price"><del><span class="amount">$350.00</span></del><ins><span class="amount">$45.00</span></ins></div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Hot Gun</h5></a>
                        <div class="star-rating" title="Rated 4.00 out of 5"><span data-width="80%" style="width: 80%;">4.00</span></div>
                        <div class="price"><span class="amount">$365.00</span></div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Cordless Oscillating Tools</h5></a>
                        <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="94%" style="width: 94%;">4.80</span></div>
                        <div class="price"><span class="amount">$490.00</span></div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <nav>
                      <ul class="pagination theme-colored">
                        <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">...</a></li>
                        <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                      </ul>
                    </nav>
                  </div>
                </div>
            </div> -->
          </div>
        
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-40">
              <?php include 'menu_products.php';?>
              
                <!-- Quick Contact Form Validation-->
                <script type="text/javascript">
                  $("#quick_contact_form_sidebar").validate({
                    submitHandler: function(form) {
                      var form_btn = $(form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      $(form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                      $(form).ajaxSubmit({
                        dataType:  'json',
                        success: function(data) {
                          if( data.status == 'true' ) {
                            $(form).find('.form-control').val('');
                          }
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          $(form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                        }
                      });
                    }
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <?php include 'pie.php';?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>