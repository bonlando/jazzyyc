@php
    $video_embed = get_field('video_embed');
@endphp
<div class="fuck pt-md-5 white">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
            <article @php post_class() @endphp>
                <div class="entry-content">
                    @include('partials/member-video')
                    @php the_content() @endphp
                </div>
                <footer>
                    {!! wp_link_pages([
                        'echo' => 0,
                        'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
                        'after' => '</p></nav>',
                    ]) !!}


                </footer>
            </article>
        </div>
    </div>
</div>
