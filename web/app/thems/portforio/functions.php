<?php
function my_enqueue_scripts()
{
wp_enqueue_script('jquery');
wp_enqueue_script('bundle.js', get_template_directory_uri() . '/assets/js/bundle.js',array() );
wp_enqueue_style('my_style', get_template_directory_uri() . '/assets/css/style.css',array());
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
 
//ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
    array(
        'place_global' => 'グローバル',
        'place_footer' =>'フッターナビ',
    )
);
//メイン画面上にテンプレートごとの文字列を表示
    function get_main_title() {
    if ( is_singular( 'post' ) ):
     $category_obj = get_the_category();
     return $category_obj[0]->name;
      elseif ( is_page() ):
         return get_the_title();
      elseif ( is_category() ):
         return single_cat_title();
      elseif ( is_search() ):
        return 'サイト内検索結果';
      endif;
}
//子ページを取得する関数
function get_child_pages ( $number = -1, $specified_id = null ){
    if ( isset( $specified_id ) ):
        $parent_id = $specified_id;
    else:
        $parent_id = get_the_ID();
    endif;
 $parent_id = get_the_ID();            
    $args = array(                
        'posts_per_page' => $number,                 
        'post_type' => 'page',                 
        'orderby' => 'menu_order',                 
        'order' => 'ASC',                 
        'post_parent' => $parent_id,                  
    );
    $child_pages = new WP_Query( $args );
    return $child_pages;
}

//アイキャッチ画像を利用できるようにする
add_theme_support( 'post-thumbnails' );

//トップページのメイン画像用のサイズ設定
add_image_size( 'top', 1077,622,true);
    
//地域貢献活動一覧画像用のサイズ設定
add_image_size( 'contribution', 577, 280, true );

//トップサイズの地域貢献活動にて使用している画像用のサイズ設定
add_image_size( 'common', 465, 252, true );

//画像用のサイズ設定
add_image_size( 'detail', 1100, 330, true );

//画像用のサイズ設定
add_image_size( 'search', 168, 168, true );

function get_main_image(){ 
    if ( is_page( ) ):
        return get_the_post_thumbnail( /*$post->ID, 'detail'*/ );
    elseif ( is_category( 'news' ) ||is_singular( 'post' )): 
        return'<img src="'.get_template_directory_uri(). '/assets/images/bg-page-news.jpg" />';
    else:
         return'<img src="'.get_template_directory_uri(). '/assets/images/bg-page-dummy.png" />';
endif;
}

$args = null; 

 add_theme_support( 'custom-background', $args ) ;
 ?>
