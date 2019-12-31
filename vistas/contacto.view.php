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
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="imagenes/img_nosf.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Contacto</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Inicio</a></li>
              
                <li class="active text-theme-colored">Contacto</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    
    
    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-4">
            <div class="row">
				
				
				<div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                  <div class="media-body">
                    <h5 class="mt-0">Email de Contactos</h5>
                    <p><strong>Carlos Nuñez</strong><br>cnunez@cubiertasnacionales.cl<br>
                      <strong>Francisco Flores</strong><br>fflores@cubiertasnacionales.cl<br>
                      <strong>Patricia Gálvez</strong><br>pgalvez@cubiertasnacionales.cl<br>    
                      <strong>Marcela Ordenes</strong><br>mordenes@cubiertasnacionales.cl<br>  
                      <strong>Rodrigo Hernández</strong><br>rhernandez@cubiertasnacionales.cl<br>
                      <strong>Karen Quezada</strong><br>kquezada@cubiertasnacionales.cl<br>
                      <strong>Miguel Gajardo</strong><br>mgajardo@cubiertasnacionales.cl<br>
                      <strong>Patricia Nuñez</strong><br>pnunez@cubiertasnacionales.cl<br>
                      <strong>Johana Martínez</strong><br>jmartinez@cubiertasnacionales.cl<br>
                      <strong>Andrea Ortiz</strong><br>aortiz@cubiertasnacionales.cl<br>
                      <strong>Freddy Rojas</strong><br>frojas@cubiertasnacionales.cl<br>
                      <strong>Carolina Quezada</strong><br>cquezada@cubiertasnacionales.cl<br>
                      <strong>Danilo Escanilla</strong><br>descanilla@cubiertasnacionales.cl<br>
					          </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <h3 class="line-bottom mt-0 mb-30">Escríbenos a nuestro formulario</h3>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nombre <small>*</small></label>
                    <input name="form_name" class="form-control" type="text" placeholder="Ingresar Nombre" required="">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="form_email" class="form-control required email" type="email" placeholder="Ingresar Email">
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Motivo <small>*</small></label>
                    <input name="form_subject" class="form-control required" type="text" placeholder="Ingresar Motivo">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Fono</label>
                    <input name="form_phone" class="form-control" type="text" placeholder="Ingresar Fono">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Mensaje</label>
                <textarea name="form_message" class="form-control required" rows="5" placeholder="Ingresar Mensaje"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Por favor espere...">Enviar Mensaje</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Resetear</button>
              </div>
            </form>

            <!-- Contact Form Validation-->
            <script>
              $("#contact_form").validate({
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
                      if( data.status === 'true' ) {
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
			<table class="table table-striped table-schedule">
                <thead>
                  <tr class="bg-theme-colored">
                    <th>Zona</th>
                    <th>Ejecutivo</th>
                    <th>Email</th>
					<th>Celular</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Zona Norte</td>
                    <td><strong>Marcos Llanos</strong></td>
                    <td>mllanos@cubiertasnacionales.cl</td>
					  <td>+569 6168 5275</td>
                  </tr>
                  <tr>
                    <td>Quinta región</td>
                    <td><strong>Daniel Reyes</strong></td>
                    <td>dreyes@cubiertasnacionales.cl</td>
					  <td>+569 8228 2014</td>
                  </tr>
                  <tr>
                    <td>Zona Central</td>
                    <td><strong>Alicia Consigliere</strong></td>
                    <td>aconsigliere@cubiertasnacionales.cl</td>
					  <td>+5698 228 2938</td>
  
					  
                  </tr>
                  <tr>
                    <td>Zona Central</td>
                    <td><strong>Mario Hernández</strong></td>
                    <td>mhernandez@cubiertasnacionales.cl</td>
					  <td>+569 8228 2071</td>
				  </tr>
					
                  <tr>
                    <td>Zona Central</td>
                    <td><strong>Germán Gonzalez</strong></td>
                    <td>ggonzalez@cubiertasnacionales.cl</td>
					  <td>+569 9796 8495</td>
				  </tr>
					
					
                  <tr>
                    <td>Séptima Región</td>
                    <td><strong>Jorge Vasquez</strong></td>
                    <td>jvasquez@cubiertasnacionales.cl</td>
					  <td>+569 9323 8684</td>
				  </tr>					

                  <tr>
                    <td>Octava Región</td>
                    <td><strong>Juan Escobar</strong></td>
                    <td>jescobar@cubiertasnacionales.cl</td>
					  <td>+569 9089 4472</td>
				  </tr>	
					
                  <tr>
                    <td>Zona Sur</td>
                    <td><strong>Gino Castillo</strong></td>
                    <td>gcastillo@cubiertasnacionales.cl</td>
					  <td>+569 6190 3300</td>
				  </tr>						
	
                  <tr>
                    <td>Zona Sur</td>
                    <td><strong>Marco Troncoso</strong></td>
                    <td>mtroncoso@cubiertasnacionales.cl</td>
					  <td>+569 7388 0899</td>
					</tr>					
		
	
	
                </tbody>
              </table>
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