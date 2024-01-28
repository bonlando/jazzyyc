{{--
  Title: Section header
  Description: Full width title bar
  Category: formatting
  Icon: editor-kitchensink
  Keywords: section, heading
--}}

@php 

$section_title = get_field('section_title');
$sub_text = get_field('sub_text');
$theme = get_field('theme');
$anchor_name = get_field('anchor_name');
$link_to_anchor = get_field('link_to_anchor');
@endphp

<div class="pl-3 pr-3 row-full section-header text-center {{ $theme }} pt-md-5 pb-md-5 pb-3 pt-3">
  <a id="{!! $anchor_name !!}" class="anchor"></a>
<div class="container">
  <h2>{!! $section_title !!}</h2> 
  @if($sub_text)
  <p>{!! $sub_text !!}</p>
  @endif
  @if($link_to_anchor)
  <a href="{!! $link_to_anchor !!}">See all events</a>
  @endif
</div>
</div>