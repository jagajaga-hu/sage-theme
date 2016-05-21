<!-- 人気記事スライダー -->
<?php //echo do_shortcode('[advps-slideshow optset="1"]'); ?>

<div id="garally">
    <div id="garally-caption">
        北大生はもっと面白い
    </div>
</div>


<nav class="nav-horizontal" id="global-nav">
<div class="mask">
<ul class="nav list">
  <li><a href="#tab0" data-toggle="tab">ホーム</a></li>
<?php
    $args = array(
        'hide_empty' => 1,
    );
    $categories = get_categories($args);
    foreach($categories as $category){
        if($category->cat_ID!=1){
            echo '<li><a href="#tab'.$category->cat_ID.'" data-toggle="tab">';
            echo $category->name.'</a></li>';
        }
    }
?>
</ul>
</div>
</nav>

<div class="tab-content">
  <!-- ホームタブ{{{ -->
    <div class="tab-pane fade in active" id="tab0">
        <div id="tiles-container">
            <div class="tl-page" data-tl-template="tempD">
                <?php $counter = 0; ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="jstile row">
                    <article <?php post_class('top_page'); ?>>
                        <a href="<?php the_permalink(); ?>">
                            <?php if(wp_is_mobile()):
                                $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'homethumbnail_mobile');
                            else:
                                $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'homethumbnail');
                            endif; ?>
                            <?php if($counter>4 || $counter==1): ?>
                                <div class="col-xs-3 col-sm-12 jstile-img">
                                    <img src="<?php echo $postthumb[0]; ?>" alt="">
                            <?php else: ?>
                                <div class="col-xs-3 col-sm-5 jstile-img">
                                    <img src="<?php echo $postthumb[0]; ?>" alt="">
                            <?php endif; ?>
                            </div>
                            <?php if($counter==0): ?>
                                <div class="col-xs-9 col-sm-7 jstile-text top-article">
                            <?php elseif($counter>4 || $counter==1): ?>
                                <div class="col-xs-9 col-sm-12 jstile-text">
                            <?php else: ?>
                                <div class="col-xs-9 col-sm-7 jstile-text">
                            <?php endif; ?>
                                <h2><?php the_title(); ?></h2>
                            <!-- ここから、記事本文抜粋 -->
                            <?php if($counter==0): ?>
                                <?php echo mb_strimwidth(get_the_excerpt(), 0, 100, "…", "UTF-8"); ?>
                            <?php elseif($counter==1): ?>
                                <?php echo mb_strimwidth(get_the_excerpt(), 0, 1, "…", "UTF-8"); ?>
                            <?php else: ?>
                                <?php echo mb_strimwidth(get_the_excerpt(), 0, 1, "…", "UTF-8"); ?>
                            <?php endif; ?>
                            </div>
                        </a>
                    </article>
                </div>
            <?php $counter++; endwhile; endif; ?>
            <?php for($i = $counter; $i<25; $i++): ?>
                <div> Dummy! </div>
            <?php endfor; ?>
            </div>
        </div>
    </div>
    <!-- ホームタブ}}} -->
    <?php foreach($categories as $category): ?>
    <div class="tab-pane fade" id="tab<?php echo $category->cat_ID; ?>">
    <?php $args = array(
        'category' => $category->cat_ID,
        'orderby' => 'date'
    );
    $category_posts = get_posts($args);
    foreach($category_posts as $post): setup_postdata($post);
    $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium');
    ?>
        <div class="article-list" data-url="<?php the_permalink(); ?>">
 
            <div class="article-list-left">
                <img src="<?php echo $postthumb[0]; ?>" alt="">
            </div>
            <div class="article-list-right">
                <span class="date"><?php the_time('Y.m.d'); ?></span>
                <span class="tag tag_awarded">殿堂入り</span>
                <span class="tag tag_hot">HOT</span>
                <h1><?php the_title(); ?></h1>
            </div>
        </div> 
    <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
</div>
<script>
$(function() {
        var w = $(window).width();
        var x = 800;
        if (w <= x) {
            $('#sample').css({
                color: 'red'
            });
        }
});
jQuery('.article-list').click(function() {
    location.href = jQuery(this).attr('data-url');
});
</script>
<script>
//ダイレクトリンク
$(function() {
    //location.hashで#以下を取得 変数hashに格納
    var hash = location.hash; 
    console.log(hash); // OK

    //hashの中に#tab～が存在するか調べる。
    hash = (hash.match(/^#tab\d+$/) || [])[0];
    console.log(hash); // OK
    
     //hashに要素が存在する場合、hashで取得した文字列（#tab2,#tab3等）から#より後を取得(tab2,tab3)    
　　　　if($(hash).length){
    var tabname = hash.slice(1) ;
    console.log(tabname);
    } else{
　　　　// 要素が存在しなければtabnameにtab1を代入する
　　　　var tabname = "tab0";}
    //コンテンツを一度すべて非表示にし、
    //$('.tab-content .tab-pane').css('display','none');

    //一度タブについているクラスin activeを消し、
    $('.tab-content div').removeClass('active in');
    $('.nav-horizontal li').removeClass('active');

    var tabno = $('div#' + tabname).index();
    console.log(tabno);
    
    var elements = document.getElementsByClassName("tab-pane fade") ;
    console.log(elements);
    elements[tabno].className = 'tab-pane fade active in';
    $('.nav-horizontal li').eq(tabno).addClass('active');

    //クリックされたタブと同じ順番のコンテンツを表示します。
    //$('.tab-content').eq(tabno).fadeIn();
    //console.log($('.tab-content').eq(tabno).fadeIn());
     
    //クリックされたタブのみにクラスselectをつけます。
    //$('.tab-content div').eq(tabno).addClass('active');
    //$('.tab-content div').eq(tabno).addClass('in');
    //var tabs = $('.tab-content div');
    //console.log(tabs);
});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/top_fixed_menu_script/script.js"></script>
