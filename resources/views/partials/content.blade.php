
@if(in_category('event-photos'))
<article @php post_class('text-center mb-5 col-md-6 col-lg-4') @endphp>
@else
<article @php post_class('mb-5') @endphp>
@endif

@if(in_category(45))
<div class="pb-5">
@php $id=20; $post = get_page($id); echo $post->post_content;  @endphp
</div>
@endif

@if (has_post_thumbnail() & !in_category('event-photos'))
<div class="row">
  <div class="col-md-4">
    <a href="{{ get_permalink() }}">@php the_post_thumbnail('square', array('class' => 'h-auto mw-100 rounded-circle')) @endphp</a>
  </div>
  <div class="col-md-8">
@endif

@if (has_post_thumbnail() & in_category('event-photos'))
    <a href="{{ get_permalink() }}">@php the_post_thumbnail('square', array('class' => 'mb-3 h-auto mw-100 rounded-circle')) @endphp</a>
@endif

  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp

 @if (in_category('event-photos'))
<a href="{{ get_permalink() }}" class="btn btn-ghost">View photos</a>
@else
<a href="{{ get_permalink() }}" class="btn btn-ghost">Read more</a>

 @endif
  </div>

@if (has_post_thumbnail() & !in_category('event-photos'))
</div></div>
@endif

</article>


@if(in_category(45))


  @if($logosv)
  <h2 class="mb-5">Our sponsors:</h2>
        <div class="row-full lightgray">
          <div class="container">
              
            <div class="row d-flex justify-content-center">
              <div class="col-lg-10">
                <div class="row d-flex justify-content-center w-100">    
                  @foreach( $logosv as $lv )
                  <?php $link = get_field('link', $l['ID']); 
                  $logos_per_rowv = get_field('number_per_row', 'option');
                  
                  ?>
                  <div class="sponsor col-md-4 {{ $logos_per_rowv }} white min-height p-3 align-items-center d-flex">
                    @if($link)<a target="_blank" class="" href="{{ $link }}">@endif
                    <img class="logosoup mw-100 w-100" src="{!! $lv['url'] !!}" alt="{!! $lv['alt'] !!}" />
                    @if($link)</a>@endif
                  </div>
              
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif


@endif