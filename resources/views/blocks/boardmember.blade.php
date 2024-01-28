{{--
  Title: Board member
  Description: Board member
  Category: formatting
  Icon: groups
  Keywords: board member
--}}

@php
$image = get_field('board_image');
$board_email = get_field('board_email');
$url = $image['url'];
$alt = $image['alt'];
$size = 'square';
$thumb = $image['sizes'][ $size ];
$width = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];
@endphp

<div class="break-width-lg mt-5 mb-5 row">
  <div class="col-md-3 min-height d-flex align-items-center pb-4 pb-md-0">
    <img src="{!! $thumb !!}" class="d-block rounded-circle headshot" alt="{!! $alt !!}">
  </div>
  
  <div class="col-md-9 min-height d-flex align-items-center">
    <div>
      <h3>{!! get_field('board_name') !!}</h3>
      <p class="inverse">{!! get_field('board_title') !!}</p>
      <p>{!! get_field('board_copy') !!} </p>
      @if ($board_email)
      <p><a target="_blank" class="boardmember btn btn-ghost" href="mailto:{!! get_field('board_email') !!}">@icon('envelope fas') Contact {!! get_field('board_name') !!}</a> 
      @endif
    </div>
  </div>
</div>