<header class="banner">
  
  <div class="site-icon">
  <a href="<?= home_url('/');?>" id="logo">
  <img src="<?php echo get_template_directory_uri(); ?>/icon.png" alt="" width="30" height="30">
  JagaJaga</a><h5 class="no-mobile">- 北大生応援メディア -</h5>

  <!-- ここから、ドロワーメニュー -->
  <div class="drawer drawer--top">
  <!-- ハンバーガーボタン -->
  <button type="button" class="drawer-toggle drawer-hamburger no-pc">
    <span class="sr-only">toggle navigation</span>
    <span class="drawer-hamburger-icon"></span>
  </button>
  <nav class="drawer-nav">
    <ul class="drawer-menu">
      <!-- ドロワーメニューの中身 -->
      <li><a href="/wordpress/about/">JagaJagaについて</a></li>
      <li><a href="/wordpress/contact/">お問い合わせ</a></li>
      <li><a href="/wordpress/recruit/">ライター募集</a></li>
    </ul>
  </nav>
  </div>
  <!-- ここまで、ドロワーメニュー（これを動かすためのjQueryはfooter.phpで読み込む） -->

  <!-- ここから、デバイス幅が768px以上なら、右上にメニュー表示 -->
  <ul class="only-pc-top-right-menu">
    <!-- ドロワーメニューの中身 -->
    <li><a href="/wordpress/recruit/">ライター募集</a></li>
    <li><a href="/wordpress/contact/">お問い合わせ</a></li>
    <li><a href="/wordpress/about/">JagaJagaについて</a></li>
  </ul>
  <!-- ここまで、デバイス幅が768px以上なら、右上にメニュー表示 -->

  </div>

</header>

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
