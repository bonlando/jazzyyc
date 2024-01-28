<?php



function mycustom_filter_gettext( $translated, $original, $domain ) {

    // This is an array of original strings

    // and what they should be replaced with

    $strings = array(

        'Register Now' => 'Purchase Tickets',

       'There are no upcoming dates for this event.' => 'This event is currently underway.',

        // Add some more strings here

    );

    // See if the current string is in the $strings array

    // If so, replace its translation

    if ( isset( $strings[$original] ) ) {

        // This accomplishes the same thing as __()

        // but without running it through the filter again

        $translations = get_translations_for_domain( $domain );

        $translated = $translations->translate( $strings[$original] );

    }

    return $translated;

}

add_filter( 'gettext', 'mycustom_filter_gettext', 10, 3 );

define( 'EE_THEME_FUNCTIONS_LOADED', TRUE );

// changes the default ticket selector to NO

function ee4_event_editor_default_ticket_selector_off(){
?>
<script>
jQuery(document).ready(function ($) {
   if ($('#titlewrap:contains("Enter event title here")').length > 0) {
        $("select[id='display_ticket_selector']").val('');
    }
});
</script>
<?php
}
add_action('AHEE__Events_Admin_Page___generate_publish_box_extra_content__event_editor_overview_add', 'ee4_event_editor_default_ticket_selector_off');

function tw_ee_before_event_content( $post ) {

    $facebook = get_field('facebook');
    $twitter = get_field('twitter');
    $instagram = get_field('instagram');
    $website = get_field('website');
    $event_email_new = get_field('event_email_new');
    $event_phone_2 = get_field('event_phone_2');

    if(is_single()) {  
        if(array($website, $facebook, $twitter, $instagram, $event_email_new, $event_phone_new)) {
            echo '<div class="band-social mb-2">';
        }

        if($website) {
            echo '<a class="mr-2" target="_blank" href="' . $website . '"><i title="Artist or event website" class="fas fa-globe mr-1"></i></a>';
        }
                
        if($facebook) {
            echo '<a class="mr-2" target="_blank" href="' . $facebook . '"><i title="Facebook" class="fab fa-facebook mr-1"></i></a>';
        }

        if($twitter) {
            echo '<a class="mr-2" target="_blank" href="' . $twitter . '"><i title="Twitter" class="fab fa-twitter mr-1"></i></a>';
        } 

        if($instagram) {
            echo '<a class="mr-2" target="_blank" href="' . $instagram . '"><i title="Instagram" class="fab fa-instagram mr-1"></i></a>';
        }  
        
        if($event_email_new) {
            echo '<a class="mr-2" target="_blank" href="mailto:' . $event_email_new . '"><i title="Event or Artist Email" <i class="mr-1 fas fa-envelope"></i></a>';
        }              
        
        if(array($website, $facebook, $twitter, $instagram, $event_email_new, $event_phone_new)) {
            echo '</div>';
        }

        if($event_phone_2) {
            echo '<p><i title="Event phone number" <i class="mr-1 fas fa-phone-square"></i>' . $event_phone_2 . '</p>';
        }          
    }    
}
add_action( 'AHEE_event_details_before_the_content', 'tw_ee_before_event_content' );

function tw_ee_after_event_content( $post ) {
    $members = get_field('members');
    $ticket_link = get_field('ticket_link');
    $general_admission = get_field('general_admission');
    $student_pricing = get_field('student_pricing');
    $espressoSingle = is_espresso_event_single();
    $video = get_field('youtube_videos');
    $videos = get_sub_field('youtube_links');
    
    if(is_single()) {
    
    if($ticket_link) {
    echo '<p><strog>Tickets are available online :</strong></p>
    <a class="mb-4 btn btn-primary" target ="_blank" href="' . $ticket_link . '">Get tickets</a>';
    }

    if($members) {
    echo '<h4 class="mt-3">Band members</h4><p>' . $members . '</p>';
    }
    
    if ( has_term( 'ticketed-event', 'espresso_event_categories' ) ) {
    echo '<p><strong>Note:</strong> To make all patrons feel comfortable at our shows, we at JazzYYC are adhering to local COVID-19 bylaws in place with the city of Calgary as well as any other additional requirements that our partner venue may request. We would ask in order to make fellow patrons feel relaxed and safe that you wear a mask when you are not at your table, adhere to social distancing and feel free to register with our front of house team where possible for contact tracing when you check-in. We look forward to a safe and fun show!</p>';
    }

    if ( has_term( 'headliner', 'espresso_event_categories' ) ) {
      echo '<p><strong>Note:</strong> To make all patrons feel comfortable at our shows, we at JazzYYC are adhering to local COVID-19 bylaws in place with the city of Calgary as well as any other additional requirements that our partner venue may request. We would ask in order to make fellow patrons feel relaxed and safe that you wear a mask when you are not at your table, adhere to social distancing and feel free to register with our front of house team where possible for contact tracing when you check-in. We look forward to a safe and fun show!</p>';
      }

    if ( has_term( 'free-event', 'espresso_event_categories' ) ) {
    echo '<p><strong>Note:</strong>  To make all patrons feel comfortable at our shows, we at JazzYYC are adhering to local COVID-19 bylaws in place with the city of Calgary as well as any other additional requirements that our partner venue may request. We would ask in order to make fellow patrons feel relaxed and safe that you wear a mask when you are not at your table, adhere to social distancing and feel free to register with our front of house team where possible for contact tracing when you check-in. We look forward to a safe and fun show!</p>';
    }

    echo do_shortcode('[Sassy_Social_Share title="Share this event!" ]');

    if( have_rows('youtube_videos') ):
    echo '<div class="row-full primarydark mt-5 mb-5">
    <div class="video-container container text-center">';
        // loop through the rows of data
        while ( have_rows('youtube_videos') ) : the_row();

            // display a sub field value
            the_sub_field('youtube_links');

        endwhile;
    echo '</div>
    </div>';
    else :

        // no rows found

    endif;     
            
        }

    if(is_archive()) {

        if($general_admission) {
            echo '<span class="pricing-hp small inverse mb-4 mr-2"><strong>TICKETS: $' . $general_admission . '</strong></span> ';
        } 
      
        if($student_pricing) {
            echo '<span class="pricing-hp small inverse mb-4 mr-2"><strong>STUDENTS: $' . $student_pricing . '</strong></span><br>';
        } 
        echo '<br><a class="event-link btn btn-ghost" href="' . get_permalink() . '"><span>More details</span></a>';
    }
}
add_action( 'AHEE_event_details_after_the_content', 'tw_ee_after_event_content' );


function tw_ee_after_event_content_shortcode( $post ) {
    $members = wpautop(get_field('members'));
    $band_members = get_field('band_members');
    $feature_quality = get_field('feature_quality');
    $event_img_url = get_the_post_thumbnail_url($post->ID, 'square');
    if ( $feature_quality == 'pass' ) {
    echo '<div class="event-image-container">';

    if(has_post_thumbnail()) {
        echo '<a href="' . get_permalink() . '"><img class="mw-100 w-100 mb-3" src="' . $event_img_url . '" alt=""></a>';
    }
      if($members) {
        echo '<div class="band-members d-none d-md-block text-right"><h5 class="mb-1">Band members</h5>' . $members . '</div>';
      }     
      echo '</div>';
    }
}
add_action( 'AHEE_event_details_left_tile', 'tw_ee_after_event_content_shortcode' );

function ee_list_upcoming_events_for_a_venue( $post ) {
    // query the events for this venue using EE_Venue's events() method
    $query_params = array( 
        'order_by' => 'Datetime.DTT_EVT_start',
        'order' => 'ASC',
        array( 
            'status' => 'publish', 
            'Datetime.DTT_EVT_start' => array( 
                '>', 
                date( current_time( 'mysql' ) ), 
                'Datetime.DTT_EVT_end' => array(
                    '<', 
                    date( current_time( 'mysql' ) )
                ) 
            )
        )
    );
    $events = EEH_Venue_View::get_venue( $post->ID )->events( $query_params );
    // start the output
    echo '<h3 class="mt-5">Upcoming events at this venue</h3><ul>';
    // the loop
    foreach ( $events as $event ) {
        echo '<li>';
        echo '<a href="' . get_permalink( $event->get( 'EVT_ID' ) ) . '">' . $event->get( 'EVT_name' ) . '</a>';
        echo '</li>';
    }
    echo '</ul>';    
    // end the output
}
// next, add the above to an action found in the venue template
// you could instead use 'AHEE__content_espresso_venues_details_template__before_the_content' to put the list before the content
add_action( 'AHEE__content_espresso_venues_details_template__after_the_content', 'ee_list_upcoming_events_for_a_venue' );

add_filter( 'FHEE__EED_Event_Archive__template_include__allow_custom_selected_template', '__return_true' );

function ee_mer_change_event_list_url(){
	return '/events/get-tickets/';
}

add_filter( 'FHEE__EED_Multi_Event_Registration__set_definitions__events_list_url', 'ee_mer_change_event_list_url' );

add_filter( 'tiled_gallery_content_width', 'crunchify_tiled_gallery_width' );
function crunchify_tiled_gallery_width($width){
    $tiled_gallery_content_width = $width;
    $width = 730;
    return $width;
}

function jf_ee_add_location_to_calendar_qtip( $text, $datetime ) {
    if ( $datetime instanceof EE_Datetime ) {
        $event = $datetime->get_first_related( 'Event' );
        if ( $event instanceof EE_Event ) {
            $venue = $event->get_first_related( 'Venue' );
            if ( $venue instanceof EE_Venue ) {
                $venue_name = $venue->name();
                $text .= '<p class="tool-venue">Venue:&nbsp;' . $venue_name . '</p>';
            }
        }
    }
    return $text;
}
add_filter( 'FHEE__EE_Calendar__tooltip_datetime_available_spaces', 'jf_ee_add_location_to_calendar_qtip', 10, 2 );

add_filter( 
  'FHEE__EED_WP_Users_Ticket_Selector__maybe_restrict_ticket_option_by_cap__no_access_msg',
  'my_custom_no_access_message',
  10,
  4
);

function my_custom_no_access_message( $content, $tkt, $ticket_price, $tkt_status ) {
  $url = wp_login_url( get_permalink() );
  $content = '<small>' . $tkt->name() . ' special pricing is available to our members. ';
  $content .= '<a href="/get-involved/become-a-member/" target="_blank" class="small btn btn-primary">Join today</a> or <a href="#" class="btn btn-secondary lrm-login small" title="Log in">log in</a></small>';
  return $content;
}