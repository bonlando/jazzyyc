@extends('layouts.app')

@section('content')
  @include('partials.page-header')
<div class="white pt-5 row-full">
  <div class="container video-wrapper">
    <div class="row justify-content-center w-100">
     
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif


  @while (have_posts()) @php the_post() @endphp
 
    @include('partials.archive-'.get_post_type())
  
  @endwhile
   

  {!! get_the_posts_navigation() !!}
  </div>
</div>
@endsection
