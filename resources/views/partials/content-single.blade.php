<div class="row justify-content-center">
  <div class="col-lg-10 col-xl-8">
      <article @php post_class() @endphp>
          <div class="entry-content pt-4 pb-4">

              @include('partials/entry-meta')

              @php
                  $prev_post = get_previous_post(true);
                  $next_post = get_next_post();
              @endphp
              @php the_content() @endphp
              @if (!empty($prev_post))
                  <a class="btn btn-ghost" href="{{ get_permalink($prev_post->ID) }}">
                      <i class="fas fa-chevron-circle-left"></i> Previous Post
                  </a>
              @else
                  <a class="btn btn-ghost"
                      href="{{ get_category_link(get_the_category()[0]->term_id) }}">
                     See all {{ get_the_category()[0]->name }} articles
                  </a>
              @endif

              @if (!empty($next_post))
                  <a class="btn btn-ghost" href="{{ get_permalink($next_post->ID) }}">
                      Next Post <i class="fas fa-chevron-circle-right"></i>
                  </a>
              @endif

          </div>

      </article>
  </div>
</div>
</div>