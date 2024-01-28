<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    /**
     * Primary Nav Menu arguments
     * @return array
     */

    public function primarymenu() {
    $args = array(
        'theme_location'    => 'primary_navigation',
        'menu_class'=> 'nav navbar-nav',
        'walker'            => new \App\wp_bootstrap4_navwalker()
    );
    return $args;
    }

    public function secondary() {
    $args = array(
        'theme_location'    => 'secondary_navigation',
        'menu_class'=> 'nav navbar-nav nav-secondary',
        'walker'            => new \App\wp_bootstrap4_navwalker()
    );
    return $args;
    }


    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

//home page fields

public function home_test() {
        return get_field('home_test');
    }

//event fields

public function members() {
        return get_field('members');
    }   
    
public function general_admission() {
        return get_field('general_admission');
    } 
    
public function student_pricing() {
        return get_field('student_pricing');
    } 

public function code_for_membee() {
    return get_field('code_for_membee');
}

//board of directors block

public function board_image() {
    return get_field('board_image');
}

public function board_name() {
    return get_field('board_name');
}

public function board_title() {
    return get_field('board_title');
}

public function board_copy() {
    return get_field('board_copy');
}

public function board_email() {
    return get_field('board_email');
}

public function youtube_videos() {
    return get_field('youtube_videos');
}

public function logos() {
    return get_field('logos');
}

public function logosv() {
    return get_field('logos', 'option');
}

public function logos_per_row() {
    return get_field('logos_per_row');
}

public function logos_per_rowv() {
    return get_field('logos_per_row', 'option');
}

public function feature_quality() {
    return get_field('feature_quality');
}

public function good_quality() {
    return get_field('good_quality');
}

public function row_setting() {
    return get_field('row_setting', $logos['ID']);
}

public function link() {
return get_field('link', $logos['ID']);
}

public function video_embed() {
  return get_field('video_embed');
}

public function video_thumbnail() {
  return get_field('video_thumbnail');
}

public function accordion()
{
   return array_map(function($accordions) {
      return [
         'header' => $accordions['header'] ?? null,
         'body' => $accordions['accordion_body'] ?? null,
      ];
   }, get_field('accordion') ?? []);
}

}

add_image_size( 'square', 600, 600, array( 'center', 'center', true ) ); 
add_image_size( 'featured', 1600, 900, array( 'center', 'center', true ) );
add_image_size( 'featured-mobile', 737, 426, array( 'center', 'center', true ) );
// add_image_size( 'carousel', 1600, 500, array( 'center', 'center', true ) ); 
// add_image_size( 'post-thumb', 700, 467, array( 'center', 'center', true ) ); 
// add_image_size( 'featured-image', 1280, 450, array( 'center', 'center' ) ); 

/**
 * Tell WordPress how to interpret our project URL structure
 *
 * @param array $rules Existing rewrite rules
 * @return array
 */
// function so23698827_add_rewrite_rules( $rules ) {
//   $new = array();
//   $new['vault/([^/]+)/(.+)/?$'] = 'index.php?cpt_project=$matches[2]';
//   $new['vault/(.+)/?$'] = 'index.php?cpt_project_category=$matches[1]';

//   return array_merge( $new, $rules ); // Ensure our rules come first
// }
// add_filter( 'rewrite_rules_array', 'so23698827_add_rewrite_rules' );

// /**
//  * Handle the '%project_category%' URL placeholder
//  *
//  * @param str $link The link to the post
//  * @param WP_Post object $post The post object
//  * @return str
//  */
// function so23698827_filter_post_type_link( $link, $post ) {
//   if ( $post->post_type == 'cpt_project' ) {
//     if ( $cats = get_the_terms( $post->ID, 'cpt_project_category' ) ) {
//       $link = str_replace( '%vault_category%', current( $cats )->slug, $link );
//     }
//   }
//   return $link;
// }
// add_filter( 'post_type_link', 'so23698827_filter_post_type_link', 10, 2 );
