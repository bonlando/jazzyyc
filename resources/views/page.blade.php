@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @if (is_page('get-tickets'))
  @include('partials.front-banner-festival')
  @else
    @include('partials.page-header')
  @endif
    @include('partials.content-page')
  @endwhile
@endsection
