<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?=$data['title'] . ' | ' . c('site_name');?></title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="Jason Gu">

  <!-- Google Fonts -->
  <link href="/assets/fonts/googlefont2" rel="stylesheet">
  <link href="/assets/fonts/googlefont1" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="/assets/css/bootstrap.css">
  <link rel="stylesheet" href="/assets/css/misc.css">
  <link rel="stylesheet" href="/assets/css/blue-scheme.css">
  <?php if( isset($data['css']) && is_array( $data['css'] ) ): ?>
    <?php foreach( $data['css'] as $cfile ): ?><link rel="stylesheet" type="text/css" href="/assets/css/<?=$cfile?>"/>
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- JavaScripts -->
  <script src="/assets/js/jquery-1.10.2.min.js"></script>
  <script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>

  <link rel="shortcut icon" href="/assets/images/CAC.ico" type="image/x-icon" />

</head>
  <body>
    <?php

    $header_file = dirname( __FILE__ ) . DS  . 'header.tpl.php'; 
    if( file_exists( $header_file ) ) include( $header_file );
    ?>
    <div class="notice-box">
        <h2>系统提示</h2>
        <?=$message?>
    </div>
    <?php
    $footer_file = dirname( __FILE__ ) . DS  . 'footer.tpl.php'; 
    if( file_exists( $footer_file ) ) include( $footer_file );
			
    ?>
  </body>
</html>
