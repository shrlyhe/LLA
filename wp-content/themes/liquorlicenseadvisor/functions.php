<?php


// function fb_change_search_url_rewrite() 
// {
//     if ( is_search() && ! empty( $_GET['s'] ) ) 
//     {
//         wp_redirect( esc_url( home_url( '/' ) ) . urlencode( get_query_var( 's' ) ) ); 
//         exit();
//     }   
// }
// add_action( 'template_redirect', 'fb_change_search_url_rewrite' );




// function isu_search_url( $query ) {

//     $page_id = 38; // This is ID of page with your structure -> http://example.com/mysearch/
//     $per_page = 10;
//     $post_type = 'resources'; // I just modify a bit this querry

//     // Now we must edit only query on this one page
//     if ( !is_admin() && $query->is_main_query() && $query->queried_object->ID == $page_id  ) {
//         // I like to have additional class if it is special Query like for activity as you can see
//         add_filter( 'body_class', function( $classes ) {
//             $classes[] = 'filter-search';
//             return $classes;
//         } );
//         $query->set( 'pagename', '' ); // we reset this one to empty!
//             $query->set( 'posts_per_page', $per_page ); // set post per page or dont ... :)
//             $query->set( 'post_type', $post_type ); // we set post type if we need (I need in this case)
//             // 3 important steps (make sure to do it, and you not on archive page, 
//             // or just fails if it is archive, use e.g. Query monitor plugin )
//             $query->is_search = true; // We making WP think it is Search page 
//             $query->is_page = false; // disable unnecessary WP condition
//             $query->is_singular = false; // disable unnecessary WP condition
//         }
// }
// add_action( 'pre_get_posts', 'isu_search_url' );



?>