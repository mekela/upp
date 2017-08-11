<?php
/** Hide admin bar on site **/
add_filter('show_admin_bar', '__return_false');

add_action( 'admin_enqueue_scripts', 'chrome_fix' );
function chrome_fix() {

    if ( strpos( $_SERVER[ 'HTTP_USER_AGENT' ], 'Chrome' ) !== false ) {
        wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0) }' );
    }
}

// This theme uses post thumbnails
add_theme_support('post-thumbnails');


//widjet
register_sidebar(array('name' => 'Menu', 'id' => 'menu_header', 'before_widget' => '', 'after_widget'  => ''));
register_sidebar(array('name' => 'Copyright', 'id' => 'copyright', 'before_widget' => '', 'after_widget'  => ''));
register_sidebar(array('name' => 'Footer contact', 'id' => 'contacts_foot', 'before_widget' => '', 'after_widget'  => ''));
register_sidebar(array('name' => 'Footer address', 'id' => 'address_foot', 'before_widget' => '', 'after_widget'  => ''));

//exerpt
function wpdocs_excerpt_more( $more ) {
    return '..';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<ul>";
         //if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' title='' class='prev'>&#171; <span>Попередня</span></a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."' title='' class='prev'>&#171; <span>Попередня</span></a></li>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li><a title='' class='active'>$i</a></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a><li>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."' title='' class='next'><span>Наступна</span> &#187;</a></li>"; 
        // if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</ul>\n";
     }
}

?>