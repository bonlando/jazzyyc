<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.typekit.net/uip5urn.css">
  @php 
  $featured_img_url = get_the_post_thumbnail_url($post->ID, 'featured');
  @endphp
  @if (has_post_thumbnail())
    <meta name="twitter:image" content="https://www.jazzyyc.com{{ $featured_img_url }}"/>
      <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:site" content="@jazz_yyc"/>
  @endif
  @php wp_head() @endphp
</head>
