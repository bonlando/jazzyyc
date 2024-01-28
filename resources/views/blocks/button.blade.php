{{--
  Title: Bootstrap Button
  Description: Just a plain ol button
  Category: formatting
  Icon: admin-links
  Keywords: Bootstrap button
--}}

@php 

$link = get_field('link');
$copy = get_field('copy');

@endphp

<a class="mr-2 btn btn-ghost" href="{{ $link }}">{{ $copy }}</a>