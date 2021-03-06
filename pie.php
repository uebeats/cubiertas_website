<footer id="footer" class="footer">
      <div class="container pt-70 pb-40">
        <div class="row border-bottom-black">

          <!-- nosotros widget footer -->
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <img class="mt-10 mb-20" alt="" src="imagenes/log_inf.png">
              <h4 class="widget-title">Casa Matriz</h4>
              <p>Av. La Montaña 635 , Lote 4-9-10-20 - Lampa, Santiago.</p>

              <ul class="list-inline mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="tel:(56) 22 963 90 00">(56) 22 963 90 00</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="mailto:aortiz@cubiertasnacionales.cl">aortiz@cubiertasnaciones.cl</a> </li>

              </ul>
            </div>
          </div>

          <!-- productos widget footer -->
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h4 class="widget-title">Productos</h4>
              <div class="latest-posts">
                <?php 
                  require_once 'cb_config/conexion.php';

                  $number = '2';
                  $select = "SELECT * FROM tbl_products_cb WHERE cat_product_cb = '$number' ORDER BY id_product_cb DESC LIMIT 3";
                  $res = $con->query($select);
                  while($r = $res->fetch_assoc()){

                    /* NOMBRE PRODUCTO */
                    $name_product = $r['name_product_cb'];
                    $id_product = $r['id_product_cb'];
                    $category = $r['cat_product_cb'];

                    /* LIMPIAR NOMBRE DE PRODUCTO PARA PASARLO A URL */
                    $limpiar_1 = str_replace('-', '', $name_product);
                    $limpiar = str_replace('/', '', $limpiar_1);

                    /* SE PASA NOMBRE DE PRODUCTO A URL Y SE QUITAN LAS MAYUSCULAS */
                    $url = urlencode(strtolower($limpiar));

                    /* SE REEMPLAZA LOS SIGNOS + POR _ PARA COINCIDIR CON NOMBRE IMAGENES */
                    $str = str_replace('+', '_', $url);

                    /* URL O SLUG DE IMAGENES PRODUCTOS */
                    $slug_img = 'imagenes/productos/' . $str;
                ?>
                <article class="post media-post clearfix pb-0 mb-10">
                  <a href="ficha-producto.php?id_product=<?php echo $id_product . '&category=' . $category ;?>" class="post-thumb"><img alt="cubiertas nacionales" width="80" height="55" src="<?php echo $slug_img . '.jpg';?>"></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="ficha-producto.php?id_product=<?php echo $id_product . '&category=' . $category ;?>"><?php echo $name_product;?></a></h5>
                    <p class="post-date mb-0 font-12">Últimos productos</p>
                  </div>
                </article>
                <?php
                }
                ?>
              </div>
            </div>
          </div>

          <!-- sucursales widget footer -->
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h4 class="widget-title">Sucursales</h4>
              <div class="latest-posts">
                <p>
                    Av. Estero La Posada 3551, Coronel - Región del Bío Bío.<p></p>
                  <ul class="list-inline mt-5">
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="tel:(56) 22 963 90 10">(56) 22 963 90 10</a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="mailto:gmartinez@cubiertasnacionales.cl">jmartinez@cubiertasnaciones.cl</a> </li>

                  </ul>
                </p>
                <p>
                    Av. Egaña 662 - Peñalolen, Santiago.</p>
                  <ul class="list-inline mt-5">
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="tel:(56) 22 226 63 40">(56) 22 226 63 40</a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="mailto:egonzales@cubiertasnacionales.cl">egonzalez@cubiertasnaciones.cl</a> </li>

                  </ul>
                </p>

              </div>
            </div>
          </div>

          <!-- enlaces widget footer -->
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h4 class="widget-title">Enlaces</h4>
              <ul class="list-border">
                <li><a href="ficha-producto.php?id_product=17&category=2">Línea Industrial</a></li>
                <li><a href="ficha-producto.php?id_product=17&category=2">Línea Arquitectónica</a></li>
                <li><a href="ficha-producto.php?id_product=17&category=2">Línea Habitacional</a></li>

                <li><a href="contacto.php">Contacto</a></li>

              </ul>
            </div>
          </div>
          
        </div>

      </div>
      <div class="footer-bottom bg-black-444">
        <div class="container pt-10 pb-10">
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="font-13 text-black-777 m-0">&copy; <?php echo date('Y');?> Cubiertas Nacionales - Sitio web optimizado para dispositivos móviles. Hecho con <i class="fa fa-heart"></i> </span>por <a href="https://igospel.cl"><img width="80" src="imagenes/logo-igospel.png"></a></p>
              
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Código de instalación Cliengo para http://www.cubiertasnacionales.cl/ --> 
    <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5e0f3e70e4b0fc9558213d1a/5e0f3e71e4b0fc9558213d1d.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>