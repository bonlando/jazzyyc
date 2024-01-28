@extends('layouts.app')

@section('content')



  @include('partials.page-header')
<div class="white pt-5">
  <div class="container">
    <div class="row justify-content-center w-100">
      <div class="col-lg-10">
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif 

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
      </div>
    </div>
  </div>
</div>
@endsection
