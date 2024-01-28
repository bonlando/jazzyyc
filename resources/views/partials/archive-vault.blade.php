@php 
$file = get_field('vault_file');
    // Extract variables.
    $url = $file['url'];
    $title = $file['title'];
    $caption = $file['caption'];
    $icon = $file['icon'];
@endphp

@if(has_term('resources', 'vault_category'))
<article @php post_class('mb-5 w-100') @endphp>
  @else 
<article @php post_class('mb-5 col-md-4') @endphp>
  @endif
  @if(has_term('educational-videos', 'vault_category') OR has_term('performances', 'vault_category'))
  @include('partials/member-video')
  @endif
  <header>
    <h2 class="entry-title">@if(!has_term('resources', 'vault_category'))<a href="{{ get_permalink() }}">@endif{!! get_the_title() !!}@if(!has_term('resources', 'vault_category'))</a>@endif</h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
    
    @if(has_term('resources', 'vault_category'))
    
    <a href="{{ $url }}" title="{{ $title }}" target="_blank" class="btn btn-ghost">Download {{ $title }}</a>
    @else
    {{-- <a href="{{ get_permalink() }}" class="btn btn-ghost">Read more</a> --}}
    @endif 
  </div>
  
  
  
</article>
