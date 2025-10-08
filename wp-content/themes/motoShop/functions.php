<?php

add_filter('acf/settings/rest_api_format', function() {
    return 'standard';
});

function moto_shop_setup() {
    //habilitar imagenes destacadas
    add_theme_support('post-thumbnails');
}
    add_action('after_setup_theme', 'moto_shop_setup');

function moto_shop_api_init() {
       register_rest_field(
           array ('page', 'post'),
           'featured_images', 
            array( 'get_callback' => 'get_featured_image'),      
       );
       register_rest_field(
           array ('post'),
           'category_datails', 
            array( 'get_callback' => 'get_post_categories'),      
       );
}
add_action('rest_api_init', 'moto_shop_api_init');

function get_featured_image( $post, ) {
       if(!$post['featured_media']) {
       return false;
    }
       $image_sizes = get_intermediate_image_sizes();
        $images = array();
       foreach($image_sizes as $size) {
        if($size === '2048x2048') continue;
       $image = wp_get_attachment_image_src($post['featured_media'], $size);

        $images[$size === '1536x1536' ? 'full' : $size] = array(
         'url' => $image[0],
         'width' => $image[1],
         'height' => $image[2]
         );
        }
        return $images;
}
function get_post_categories( $post ) {
    return array_map(
        function($category_id) {
                $cat = get_category($category_id, ARRAY_A);
                return [
                    'name' => $cat['name'],
                    'slug' => $cat['slug'],
                ];
            },
            $post['categories']
    );
}