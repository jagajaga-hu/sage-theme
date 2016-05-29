<head prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 記事ページの場合のメタデータ記述 -->
    <?php if( is_single() ): ?>
    <meta name="description" content="<?php echo wp_trim_words( $post->post_content, 100, '...' ); ?>">
		<?php if( has_tag() ): ?>
			<?php $tags = get_the_tags();
			$kwds = array();
			foreach($tags as $tag) {
				$kwds[] = $tag->name;
			} ?>
    <meta name="keywords" content="<?php echo implode( ',', $kwds ); ?>">
		<?php endif; ?>
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:description" content="<?php echo wp_trim_words( $post->post_content, 100, '...' ); ?>">
        <?php if(has_post_thumbnail()): ?>
            <?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'facebook'); ?> 
    <meta property="og:image" content="http://hu-jagajaga.com/<?php echo $postthumb[0]; ?>">
        <?php else: ?>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/icon.png">
        <?php endif; ?>
	<?php else: ?>
    <meta property="og:type" content="blog">
    <meta property="og:title" content="JagaJaga -北大生応援メディア-">
	<meta property="og:description" content="北大発のオンラインメディア。魅力的な北大生や北大の団体、イベント等の情報を発信。">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/aboutus.png">
    <?php endif; ?>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@JagaJagaHU">


    <!-- jsTileのサンプルで使ってたフォントをとりあえず入れてみた -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,greek-ext' rel='stylesheet' type='text/css'>
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

    <?php  wp_head(); ?>   



    <!-- ここからドロワーメニューのスタイルシート -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
    <!-- ここまでドロワーメニュー -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/tl-style.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/style.css" rel="stylesheet" />
    <!-- 横スクロールタブメニュー用のcssをここで最後に読み込む（優先されるように）-->
    <link href="<?php echo get_template_directory_uri(); ?>/scroll_tab_menu/style.css" rel="stylesheet"/>
    <!-- sage-theme直下のステイルシート（これが最優先されるから、これで上書きできる） -->
    
    <script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/jquery.easing.1.3.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/jstiles.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
</head>
