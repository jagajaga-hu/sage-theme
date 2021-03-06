<?php /** GUI からのウィジェットは入れない! 
dynamic_sidebar('sidebar-primary'); **/ ?>

&nbsp;

<div class="wpp-article">
    <span class="ranking">
        Weekly Ranking
    </span>
</div>

<?php $limit_num = (wp_is_mobile()) ? 3 : 5; ?>

<?php
$wpp = array (
    'range' => 'weekly', /*集計期間の設定（daily,weekly,monthly）*/
    'limit' => $limit_num, /*表示数はmax5記事*/
    'post_type' => 'post', /*投稿のみ指定（固定ページを除外）*/
    'title_length' => '35', /*タイトル文字数上限*/
    'stats_comments' => '0', /*コメント数は非表示*/
    'stats_views' => '1', /*閲覧数を表示させる*/
    'thumbnail_width' => '150', /*画像のwidth（px）*/
    'thumbnail_height' => '100', /*画像のheight（px）*/
    'post_html' => '<div class="wpp-article"><div class="wpp-article-img">{thumb}</div><div class="wpp-article-text">{title}</div></div>', /*表示されるhtmlの設定（サムネイル、記事タイトル、の順で表示）*/
); ?>

<?php wpp_get_mostpopular($wpp); ?>

&nbsp;

<div class="wpp-article">
    <span class="ranking">
        Daily Ranking
    </span>
</div>

<?php
$wpp = array (
    'range' => 'daily', /*集計期間の設定（daily,weekly,monthly）*/
    'limit' => $limit_num, /*表示数はmax5記事*/
    'post_type' => 'post', /*投稿のみ指定（固定ページを除外）*/
    'title_length' => '35', /*タイトル文字数上限*/
    'stats_comments' => '0', /*コメント数は非表示*/
    'stats_views' => '1', /*閲覧数を表示させる*/
    'thumbnail_width' => '150', /*画像のwidth（px）*/
    'thumbnail_height' => '100', /*画像のheight（px）*/
    'post_html' => '<div class="wpp-article"><div class="wpp-article-img">{thumb}</div><div class="wpp-article-text">{title}</div></div>', /*表示されるhtmlの設定（サムネイル、記事タイトル、の順で表示）*/
); ?>

<?php wpp_get_mostpopular($wpp); ?>

<?php hot_post(5); ?>

<div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- jagajaga-top -->
<ins class="adsbygoogle adsense"
     style="display:block"
     data-ad-client="ca-pub-3573519413191427"
     data-ad-slot="7250886990"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
