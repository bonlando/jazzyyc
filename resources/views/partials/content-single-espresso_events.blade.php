<div class="pt-5 white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="event-wrap col-lg-10">

<article @php post_class() @endphp>
  @if ( has_term( 'guest-submitted-event', 'espresso_event_categories' ) )

<p><a href="/events/community-events/">Community events</a> | {!! App::title() !!}
</p>
@endif

{{-- @if ( has_term( 'ticketed-event', 'espresso_event_categories' ) )

<p><a href="/events/get-tickets/">Ticketed events</a> | {!! App::title() !!}
</p>
@endif --}}

@if ( has_term( 'lolitas-lounge', 'espresso_event_categories' ) )

<p><a href="/events/partner-shows#lolitas">Lolitas Lounge</a> | {!! App::title() !!}
</p>
@endif

@if ( has_term( 'summer-jazz-festival-2021', 'espresso_event_categories' ) )

<p><a href="/summer-jazz-festival-2021/">TD JazzYYC Summer Festival</a> | {!! App::title() !!}
</p>
@endif

  <div class="entry-content">
@php edit_post_link() @endphp
    @php the_content() @endphp

@php 

$options = get_field('options');
$theme = get_field('theme');
$feedtype = get_field('feed_type');
$number_per_row = get_field('number_per_row');
$shortcode = get_post_meta($post->ID,'event_espresso_shortcode',true);
@endphp

@if($shortcode)
<div id="{{ $feedtype }}" class="single-feed row-full 
@if( $options && in_array('event-hp', $options) ) events-hp @endif
@if( $feedtype == 'headliner' ) @else {{ $number_per_row }} @endif 
@if( $options && in_array('has-tickets', $options) ) has-tickets @endif {{ $theme }} 
@if( $options && in_array('pt-5', $options) ) pt-5 @endif 
@if( $options && in_array('pb-5', $options) ) pb-5 @endif">
    <div class="container">
      <h3 class="mb-4">Other events in this category:</h3>
      <div class="row d-flex justify-content-center">

        
@php echo do_shortcode($shortcode); @endphp
      </div>
    </div>
</div>
@endif
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

</article>




      </div>
    </div>
  </div>
</div>

@include('partials.signup-email')
