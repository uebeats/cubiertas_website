<!-- /* 
  Modificado por Jesús Caballero by @uebeats in Github
  @TeamIgospelChile
  Diseño Web - Impresión Digital
*/ -->

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="description" content="CubiertasNacionales.cl">
<meta name="keywords" content="cubiertas nacionales, cubiertas, nacionales, cubiertasnacionales.cl">
<meta name="author" content="Igospel Publicidad @uebeats" >

<!-- Page Title -->
<title><?php echo $titulo;?> - Cubiertas Nacionales</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<style>
.load-email {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(https://www.mktv.mx/wp-content/uploads/2017/07/letter_sending.gif) 50% 50% no-repeat rgb(253,253,253);
    opacity: .8;
}
</style>


<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- script para envio de form -->
<script>

var contactForm = function () {
    $("#contactForm").submit(function(e) {
        e.preventDefault();
        var datos = $(this).serialize();
        console.log(datos);
            $('.load-email').show();
        $.ajax({
            type: "POST",
            url: "php/sendMail.php",
            data: datos,
            success: function (data) {
                $('.load-email').hide();
                swal({
                    title: "Buen Trabajo!",
                    text: "El mensaje ha sido enviado satisfactoriamente.",
                    icon: "success",
                    button: "Ok",
                });
                $('#contactForm')[0].reset();
                },
            }).fail(function (data){
                $('.load-email').hide();
                swal({
                    title: "Algo salio mal!",
                    text: "Intentalo nuevamente, no puedes incluir campos vacios, ni caracteres extraños.",
                    icon: "error",
                    button: "Cerrar",
                });
            })

        });
}
</script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<style>

.bg-industry a{
  background: #333;
  color: white;
}

.bg-arq a{
  background: #0E9539;
  color: white;
}

.bg-home a{
  background: orangered;
  color: white;
}

.services-list .nav-sidebar li a {
  color: white;
}
.services-list .nav-pills li.bg-industry a:hover{
  background: orangered;
  color:white;
}
.services-list .nav-pills li.bg-arq a:hover{
  background: orangered;
  color:white;
}
.services-list .nav-pills li.bg-home a:hover{
  background: #333;
  color:white;
}

.services-list .nav-pills li.active > a{
  background-color:#777;
}
ul{
  list-style: disc;
  margin: 20px;
}

</style>