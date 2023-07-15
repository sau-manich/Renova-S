
<!DOCTYPE html>

<!-- =========================================================
* Frest - Bootstrap Admin Template | v1.0.0
==============================================================

* Product Page: https://1.envato.market/frest_admin
* Created by: PIXINVENT
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright PIXINVENT (https://pixinvent.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="dark-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-dark">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Google Analytics</title>
    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://logos-world.net/wp-content/uploads/2021/02/Google-Analytics-Emblem.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="Source/v2/boxicons.css" />
    <link rel="stylesheet" href="Source/v2/fontawesome.css" />
    <link rel="stylesheet" href="Source/v2/flag-icons.css" />
    <link rel="stylesheet" type="text/css" href="Source/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="Source/app-assets/vendors/css/extensions/swiper.min.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="Source/v2/core-dark.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="Source/v2/theme-default-dark.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="Source/v2/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="Source/v2/perfect-scrollbar.css" />
    <link rel="stylesheet" href="Source/v2/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="Source/v2/formValidation.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="Source/v2/page-auth.css">
    <!-- Helpers -->
    <script src="Source/v2/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="Source/v2/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="Source/v2/s/config.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

  <!-- Content -->

<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
      <div class="flex-row text-center mx-auto">
        <img src="https://developers.google.com/static/analytics/images/terms/lockup_ic_Google_Analytics_vert_388pxH_wht.png" alt="Auth Cover Bg color" width="520" class="img-fluid authentication-cover-img" data-app-light-img="pages/login-light.png" data-app-dark-img="pages/login-dark.png">
        <div class="mx-auto">
          <h3>Bienvenido al Google Analytics 🥳</h3>
          <p>
            Perfectamente adecuado para todas sus necesidades, sistema que ayuda a<br>
            poner en marcha sus próximos grandes proyectos y aplicaciones. 
          </p>
        </div>
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <!-- <div class="app-brand mb-4">
          <a href="index.html" class="app-brand-link gap-2 mb-2">
            <span class="app-brand-logo"><br><br><br>
              <img src="v2/img/icoT.png" alt="Auth Cover Bg color" width="50" height="50" class="img-fluid authentication-cover-img" data-app-light-img="pages/login-light.png" data-app-dark-img="pages/login-dark.png">
            </span>
            <span class="app-brand-text demo h3 mb-0 fw-bold">Login</span>
          </a>
        </div> -->
        <!-- /Logo -->
        <!-- <h3 class="text-center"><img src="v2/img/icoT.png"></h3> -->
        <h3 class="text-center"><img src="https://logos-world.net/wp-content/uploads/2021/02/Google-Analytics-Logo.png" width="100px"></h3>
        <h4 class="mb-2 text-center">Bienvenido de nuevo! 👋</h4>
        <p class="mb-4 text-center">Inicia sesión en tu cuenta y comienza la aventura.</p>

        <form id="formAuthentication" class="mb-3" action="Admin/tablero.php" method="POST">
          <div class="mb-3">
            <label for="email" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="email" name="email-username" placeholder="Ingrese su email" autofocus>
          </div>
          <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="Contraseña">Contraseña</label>
              <!-- <a href="auth-forgot-password-cover.html">
                <small>Forgot Password?</small>
              </a> -->
            </div>
            <div class="input-group input-group-merge">
              <input type="password" id="password" class="form-control" name="Contraseña" placeholder="Ingrese su contraña" aria-describedby="Contraseña" />
              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me">
              <label class="form-check-label" for="remember-me">
                Recuérdame
              </label>
            </div>
          </div>
          <button class="btn btn-primary d-grid w-100">
            Iniciar sesión
          </button>
        </form>

        

        <div class="divider my-4">
          <div class="divider-text">Registro</div>
        </div>

        <!-- <div class="d-flex justify-content-center">
          <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
            <i class="tf-icons bx bxl-facebook"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
            <i class="tf-icons bx bxl-google-plus"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-twitter">
            <i class="tf-icons bx bxl-twitter"></i>
          </a>
        </div> -->

        <p class="text-center">
          <span>¿Nuevo en nuestra plataforma?</span>
          <a href="registroUsuario.html">
            <span>Crea una cuenta</span>
          </a>
        </p>

      </div>
    </div>
    <!-- /Login -->
  </div>
</div>

<!-- / Content -->



  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <!-- <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../assets/vendor/libs/popper/popper.js"></script>
  <script src="../../assets/vendor/js/bootstrap.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  
  <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
  

  <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script> -->
  
  <script src="Source/v2/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <!-- <script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script> -->

  <!-- Main JS -->
  <script src="Source/v2/js/main.js"></script>

  <!-- Page JS -->
  <script src="Source/v2/js/pages-auth.js"></script>
</body>

</html>
