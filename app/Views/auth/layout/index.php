<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google." />
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard" />
  <meta name="author" content="ThemeSelect" />
  <title>User Login | Primkoppol Polres Wonosobo</title>
  <link rel="apple-touch-icon" href="<?= base_url('public/FrontEnd/images/logo'); ?>.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('public/FrontEnd/images/logo'); ?>.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('public/admin') ?>/app-assets/vendors/vendors.min.css" />
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('public/admin') ?>/app-assets/css/themes/vertical-modern-menu-template/materialize.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url('public/admin') ?>/app-assets/css/themes/vertical-modern-menu-template/style.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url('public/admin') ?>/app-assets/css/pages/login.css" />

  <link rel="stylesheet" type="text/css" href="<?= base_url('public/admin') ?>/app-assets/css/pages/register.css" />
  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('public/admin') ?>/app-assets/css/custom/custom.css" />
  <!-- END: Custom CSS-->
  <style>
    #register-page {
      height: auto !important;
    }

    .label2 {
      font-size: 1rem !important;
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      cursor: text !important;
      -webkit-transition: color .2s ease-out, -webkit-transform .2s ease-out !important;
      transition: color .2s ease-out, -webkit-transform .2s ease-out !important;
      transition: transform .2s ease-out, color .2s ease-out !important;
      transition: transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out !important;
      -webkit-transform: translateY(12px) !important;
      -ms-transform: translateY(12px) !important;
      transform: translateY(12px) !important;
      -webkit-transform-origin: 0 100% !important;
      -ms-transform-origin: 0 100% !important;
      transform-origin: 0 100% !important;
      text-align: initial !important;
      color: #9e9e9e !important;
      font-size: .8rem !important;
      position: absolute !important;
      top: -26px !important;
    }

    .select2 {
      width: 100% !important;
      height: 3rem !important;
      padding: 5px !important;
      border: none !important;
      border-bottom: 1px solid #bdbdbd !important;
      border-radius: 2px !important;
      background-color: transparent !important;
      font-size: 1rem !important;
      line-height: 3rem !important;
      position: relative !important;
      z-index: 1 !important;
      display: block !important;
      width: 100% !important;
      height: 3rem !important;
      margin: 0 0 8px 0 !important;
      padding: 0 !important;
      cursor: pointer !important;
      user-select: none !important;
      border: none !important;
      border-bottom: 1px solid #9e9e9e !important;
      outline: none !important;
      background-color: transparent;
    }
  </style>
</head>

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">


  <?= $this->renderSection('content') ?>
  <!-- BEGIN VENDOR JS-->
  <script src="<?= base_url('public/admin') ?>/app-assets/js/vendors.min.js"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN THEME  JS-->
  <script src="<?= base_url('public/admin') ?>/app-assets/js/plugins.js"></script>
  <script src="<?= base_url('public/admin') ?>/app-assets/js/search.js"></script>
  <script src="<?= base_url('public/admin') ?>/app-assets/js/custom/custom-script.js"></script>
  <!-- END THEME  JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <!-- END PAGE LEVEL JS-->
  <script>
    var minLength = 16;
    var maxLength = 17;
    $(document).ready(function() {
      $('#username').on('keydown keyup change', function() {
        var char = $(this).val();
        var charLength = $(this).val().length;
        if (charLength < minLength) {
          $('#warning-message').text('NIK minimum ' + minLength + ' required.');
        } else if (charLength > maxLength) {
          $('#warning-message').text('NIK tidak valid, maximum ' + maxLength + ' allowed.');
          $(this).val(char.substring(0, maxLength));
        } else {
          $('#warning-message').text('');
        }
      });
    });
  </script>
</body>

</html>