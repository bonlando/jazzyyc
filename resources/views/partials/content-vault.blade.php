
<article @php post_class('mb-5') @endphp>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp


<a href="{{ get_permalink() }}" class="btn btn-ghost">Read more</a>

  </div>



</article>