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
  
  <!-- Header -->
  <?php include 'cabecera.php';?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-4" data-bg-img="imagenes/productos/base_head.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-white font-36">Ficha del Producto</h2>
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
            <?php
            /* SE VALIDA SI EL PRODUCTO EXISTE */
                if(!$error){

                    if($cant_img === '2'){
                      $html = '
                      <div class="single-service">
                          <div class="owl-carousel-1col" data-nav="true">
                          <div class="item"><img src="'. $slug_img . '.jpg" alt="'. $name_product .'"></div>
                          <div class="item"><img src="'. $slug_img . '_b.jpg" alt="'. $name_product .'"></div>
                      </div>
                          <h2 class="line-bottom">
                              '. $name_product .'
                          </h2>
                          '. $desc_product .'

                          <div class="widget mt-30">
                            <a href="'. $slug_pdf .'.pdf" target="_blank" class="btn btn-success btn-lg"><i class="fa fa-cloud-download"></i> Descargar Ficha</a>
                          </div>
                      </div>';
                    echo $html;
                    }else{
                      $html = '
                        <div class="single-service">
                            <div class="owl-carousel-1col" data-nav="true">
                            <div class="item"><img src="'. $slug_img . '.jpg" alt="'. $name_product .'"></div>
                            <div class="item"><img src="'. $slug_img . '_b.jpg" alt="'. $name_product .'"></div>
                            <div class="item"><img src="'. $slug_img . '_c.jpg" alt="'. $name_product .'"></div>
                        </div>
                            <h2 class="line-bottom">
                                '. $name_product .'
                            </h2>
                            '. $desc_product .'

                            <div class="widget mt-30">
                              <a href="'. $slug_pdf .'.pdf" target="_blank" class="btn btn-success btn-lg"><i class="fa fa-cloud-download"></i> Descargar Ficha</a>
                            </div>
                        </div>';
                      echo $html;
                    }
                }else{
                    echo $error;
                }
            ?>
            
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