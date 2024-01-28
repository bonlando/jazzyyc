<article @php post_class() @endphp>
<div class="row d-flex justify-content-center">
 
    @php $members = get_field('members'); @endphp
  @if($members)
  <div class="col-md-4">
  <h4>Band members</h4>
  {!! $members !!}
  </div>
  @endif

  <div class="col-md-8">
  <header>
    <h2 class="entry-title h3"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
  </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </div>
</div>
</article>
