<div class="white pt-5">
  <div class="container">
    <div class="row justify-content-center w-100">
      <div class="col-lg-10">

<article @php post_class() @endphp>
  <div class="entry-content">
    @php the_content() @endphp


	<div class="espresso-venue-wrapper-dv">
    <?php espresso_get_template_part( 'content', 'espresso_venues-details' ); ?>
    <?php espresso_get_template_part( 'content', 'espresso_venues-location' ); ?>
		
		<footer class="venue-meta">
			<?php do_action( 'AHEE__content_espresso_venues_template__footer_top', $post ); ?>
			<?php do_action( 'AHEE__content_espresso_venues_template__footer_bottom', $post ); ?>
		</footer>
	</div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>

      </div>
    </div>
  </div>
</div>

