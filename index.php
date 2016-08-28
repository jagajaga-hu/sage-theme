<?php echo do_shortcode("[huge_it_slider id='5']"); ?>

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
    <div class="tab-pane fade in active" id="tab0">
    <?php $args = array(
		'posts_per_page' => 15,
        'orderby' => 'date'
    );
    $category_posts = get_posts($args);
    foreach($category_posts as $post): setup_postdata($post);
    $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium');
    ?>
        <div class="article-list">
			<div class="article-list-left">
					<img src="<?php echo $postthumb[0]; ?>" alt="">
			</div>
            <div class="article-list-right">
                <span class="date"><?php the_time('Y.m.d'); ?></span>
                <?php /*
                <span class="tag tag_awarded">殿堂入り</span>
                <span class="tag tag_hot">HOT</span>
                */ ?>
				<a href="<?php the_permalink(); ?>">
					<h1><?php the_title(); ?></h1>
				</a>
            </div>
        </div> 
    <?php endforeach; ?>
    </div>
    <?php foreach($categories as $category): ?>
    <div class="tab-pane fade" id="tab<?php echo $category->cat_ID; ?>">
    <?php $args = array(
		'posts_per_page' => 15,
        'category' => $category->cat_ID,
        'orderby' => 'date'
    );
    $category_posts = get_posts($args);
    foreach($category_posts as $post): setup_postdata($post);
    $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium');
    ?>
        <div class="article-list">
			<div class="article-list-left">
					<img src="<?php echo $postthumb[0]; ?>" alt="">
			</div>
            <div class="article-list-right">
                <span class="date"><?php the_time('Y.m.d'); ?></span>
                <?php /*
                <span class="tag tag_awarded">殿堂入り</span>
                <span class="tag tag_hot">HOT</span>
                */ ?>
				<a href="<?php the_permalink(); ?>">
					<h1><?php the_title(); ?></h1>
				</a>
            </div>
        </div> 
    <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
</div>
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
    /*if(tabno > 0){
        tabno = tabno - 1; //これは応急処置だから、後でちゃんと直す
    }*/
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
