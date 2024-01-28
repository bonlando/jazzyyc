<div class="pt-md-5 white">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-xl-8">
<article @php post_class() @endphp>
  <div class="entry-content">
    
@include('partials/entry-meta')

    @if (in_category('event-photos'))
    <a class="mb-3 btn btn-ghost" href="/event-photos">View more event photos</a>
    @endif
    @php the_content() @endphp
    @if (in_category('event-photos'))
    <a class="mt-5 mb-5 btn btn-ghost" href="/event-photos">View more event photos</a>
    @elseif (in_category('latest-news'))
    <a class="mt-5 mb-5 btn btn-ghost" href="/latest-news">View more news</a>
    @endif
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
 

    </footer>
</article>