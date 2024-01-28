{{--
  Title: Event preview
  Description: Shows list of events with shortcode
  Category: formatting
  Icon: calendar
  Keywords: events, shortcode, list
--}}

@php 

$options = get_field('options');
$theme = get_field('theme');
$feedtype = get_field('feed_type');
$number_per_row = get_field('number_per_row');
$shortcode = get_field('event_espresso_shortcode');
@endphp

<div id="{{ $feedtype }}" class="row-full 
@if( $options && in_array('event-hp', $options) ) events-hp @endif
@if( $feedtype == 'headliner' ) @else {{ $number_per_row }} @endif 
@if( $options && in_array('has-tickets', $options) ) has-tickets @endif {{ $theme }} 
@if( $options && in_array('pt-5', $options) ) pt-5 @endif 
@if( $options && in_array('pb-5', $options) ) pb-5 @endif">
    <div class="container">
      <div class="row d-flex justify-content-center">
{{ $shortcode }}
      </div>
    </div>
</div>