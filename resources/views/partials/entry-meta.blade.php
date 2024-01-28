@php 
$category = get_the_category();
$firstCategory = $category[0]->cat_name;
$termCategory = get_the_terms( get_the_ID(), 'vault_category' ); 
@endphp
@if (is_single() & (!is_product()))

@php
if ( ! empty( $category ) ) {
  echo '<a class="btn btn-primary mb-4" href="' . esc_url( get_category_link( $category[0]->term_id ) ) . '">' . esc_html( $category[0]->name ) . '</a>';
}

if ( ! empty( $termCategory ) ) {
  echo '<div class="mb-4"><a href="/vault">vault</a> | <a href="' . esc_url( get_category_link( $termCategory[0]->term_id ) ) . '">' . esc_html( $termCategory[0]->name ) . '</a> | ' . get_the_title() . '</div>';
}
@endphp
</h5>
@endif
@if (!is_product())
  <p><strong><time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time></strong></p>
  @endif
{{-- <p class="byline author vcard">
  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p> --}}
