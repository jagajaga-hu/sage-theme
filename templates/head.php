<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="北海道はまだまだ面白い。北大生応援メディア。">
    <title>JagaJaga - 北大生応援メディア -</title>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"   integrity="sha256-R7aNzoy2gFrVs+pNJ6+SokH04ppcEqJ0yFLkNGoFALQ="   crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/tab.js"></script>
  <!-- jsTileのサンプルで使ってたフォントをとりあえず入れてみた -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,greek-ext' rel='stylesheet' type='text/css'>
  <?php  wp_head(); ?>   
  <!-- faviconのセット -->  
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png" sizes="16x16">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon.ico">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#003e21">
<meta name="apple-mobile-web-app-title" content="JagaJaga">
<meta name="application-name" content="JagaJaga">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicons/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">

  <!-- ここからjsTileスクリプト（js, css）と、jquery.easing（本当はこれらはmanifest.jsonに書きたい）-->
  <script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/assets/scripts/jquery.easing.1.3.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/jstiles.js"></script>
  <!-- ここまでjsTileスクリプト... -->
  
  <!-- ここからドロワーメニュー -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
  <!-- ここまでドロワーメニュー -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/tl-style.css" rel="stylesheet" />
  <link href="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/style.css" rel="stylesheet" />
  <!-- 横スクロールタブメニュー用のcssをここで最後に読み込む（優先されるように）-->
  <link href="<?php echo get_template_directory_uri(); ?>/scroll_tab_menu/style.css" rel="stylesheet"/>
  <!-- sage-theme直下のステイルシート（これが最優先されるから、これで上書きできる） -->
</head>
