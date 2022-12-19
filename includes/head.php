<?php 
  require __DIR__.'/error_display.php';

  require(__DIR__."/../vendor/autoload.php");

  require __DIR__.'/db.php';
  require __DIR__.'/functions.php';
  require __DIR__.'/sessionManager.php';
  require __DIR__.'/participantManager.php';
  require __DIR__.'/adminManager.php';
  require __DIR__.'/categoriesManager.php';

  isLoggedIn();
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo site_url('/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo site_url('/css/sb-admin-2.css'); ?>" rel="stylesheet">

</head>
<?php $activatedMenu = 'dashboard'; ?>