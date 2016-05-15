<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"   integrity="sha256-R7aNzoy2gFrVs+pNJ6+SokH04ppcEqJ0yFLkNGoFALQ="   crossorigin="anonymous"></script>
　　<script type="text/javascript">
    var $172 = $.noConflict(true);
　　</script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/tab.js"></script>
  <!-- jsTileのサンプルで使ってたフォントをとりあえず入れてみた -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,greek-ext' rel='stylesheet' type='text/css'>
  <?php wp_head(); ?>
  
  <!-- ここからjsTileスクリプト（js, css）と、jquery.easing（本当はこれらはmanifest.jsonに書きたい）-->
  <script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/assets/scripts/jquery.easing.1.3.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/jstiles.js"></script>
  <!-- ここまでjsTileスクリプト... -->
  
  <!-- ここからドロワーメニュー -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
  <!-- ここまでドロワーメニュー -->

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link href="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/tl-style.css" rel="stylesheet" />
  <link href="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/style.css" rel="stylesheet" />
<!-- 横スクロールタブメニュー用のcssをここで最後に読み込む（優先されるように）-->
<link href="<?php echo get_template_directory_uri(); ?>/scroll_tab_menu/style.css" rel="stylesheet"/>


</head>
