
@php 
$featured_img_url = get_the_post_thumbnail_url($post->ID, 'featured');
$large_img_url = get_the_post_thumbnail_url($post->ID); 

$featured_size = 'featured'; 
$mobile_size_mobile = 'featured-mobile'; 
$volunteer_id = get_field('volunteer_image', 'option');
$volunteer_img = $volunteer_id['sizes'][ $featured_size ];
$volunteer_img_mobile = $volunteer_id['sizes'][ $featured_size_mobile ];


$get_description = get_post(get_post_thumbnail_id())->post_excerpt;
$feature_quality = get_field('feature_quality');
$featured_mobile_img_url = get_the_post_thumbnail_url($post->ID, 'featured-mobile'); 
@endphp
@if (has_post_thumbnail() & $feature_quality == 'pass' & !is_product()) 

{{-- desktop --}}
@if(in_category(45))
<div class="d-none d-md-block mb-5 h-400 page-header position-relative tertiarydark row-full parallax-window" data-position-x="top" data-speed="1.4"  data-parallax="scroll" data-image-src="{{ esc_url($volunteer_img) }}">
  @elseif(is_product())
  <h1 class="inverse d-inline mb-4">{!! App::title() !!}</h1>
  @else
  <div class="d-none d-md-block mb-5 h-full page-header position-relative tertiarydark row-full parallax-window" data-position-x="top" data-parallax="scroll" data-image-src="{{ $featured_img_url }}">
    @endif  
    
    <div class="image-header w-100">
      <div class="container pt-md-5 pt-3 pb-3">
        <div class="row"> 
          <div class="col-md-10">
            <div class="row align-items-center">
              <div class="col-md-2"><a href="https://www.jazzyyc.com/summer-jazz-fest-2022"><img src="https://www.jazzyyc.com/newsite/wp-content/uploads/2022/05/JAZZYYC-logo-1000px-wide-600x717.jpg" alt="" class="mw-100"></a></div>
              <div class="col-md-10"><h1 class="inverse d-inline">{!! App::title() !!}</h1> </div>  
            </div>  
            
          </div>
          @if (!empty($get_description))
          {{-- <div class="d-none d-md-block featured_caption"><small>Photo: {{ $get_description }}</small></div> --}}
          @endif
          
        </div>
      </div> 
      
    </div>
  </div>
  {{-- mobile --}}
  <div class="d-block d-md-none mb-5 page-header position-relative tertiarydark row-full">
    <img class="mw-100" src="{{ $featured_mobile_img_url }}" alt="">
    <div class="image-header w-100">
      <div class="container pt-md-5 pt-3 pb-3">
        <div class="row"> 
          <div class="col-md-10">
            <h1 class="inverse d-inline">{!! App::title() !!}</h1> 
            
          </div>
          
          @if (!empty($get_description))
          <div class="d-none d-md-block featured_caption"><small>Photo: {{ $get_description }}</small></div>
          @endif
          
        </div>
      </div>
      
    </div>
  </div>
  
  
  @elseif (has_post_thumbnail() & (is_page() || is_single() || is_category())) 
  {{-- desktop --}}
  
  <div class="row-full tertiary image-fail d-none d-md-block">
    <div class="container">
      <div class="row d-flex justify-content-center"> 
        <div class="col-md-10 col-xl-8">
          
          <img class="ml-auto mr-auto w-100 d-none d-sm-block" src="{{ $large_img_url }}" alt="">
          <h1 class="inverse">{!! App::title() !!}</h1> 
          
        </div>
        @if (!empty($get_description))
        <div class="d-none d-md-block featured_caption"><small>Photo: {{ $get_description }}</small></div>
        @endif
        
      </div>
    </div>
  </div> 
</div>
{{-- mobile --}}
<div class="d-block d-md-none mb-5 page-header position-relative tertiarydark row-full">
  <img class="mw-100" src="{{ $featured_mobile_img_url }}" alt="">
  <div class="image-header w-100">
    <div class="container pt-md-5 pt-3 pb-3">
      <div class="row"> 
        <div class="col-md-10">
          <h1 class="inverse d-inline">{!! App::title() !!}</h1> 
          
        </div>
        
        @if (!empty($get_description))
        <div class="d-none d-md-block featured_caption"><small>Photo: {{ $get_description }}</small></div>
        @endif
        
      </div>
    </div>
    
  </div>
</div>

{{-- @elseif (!is_archive() & has_post_thumbnail() & $feature_quality == 'fail') 
<div class="container">
  <div class="row d-flex justify-content-center"> 
    <div class="col-md-10 @if(!is_product()) text-center @endif">
      @if(!is_product())
      <img class="ml-auto mr-auto guest-image d-none d-sm-block mt-3" src="{{ $large_img_url }}" alt="">
      <h1 class="mt-3 mb-3">{!! App::title() !!}</h1> 
      @endif
      
      @if(is_product())
      <div class="row-full page-header position-relative secondary">
        <div class="container pt-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8"> 
              
              <h1 class="">{!! App::title() !!}</h1> 
              
            </div>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div> --}}
  
  @else
  <div class="row-full page-header position-relative secondary">
    <div class="container pt-5">
      @if (is_single())
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8"> 
          @endif
          <h1 class="">{!! App::title() !!}</h1> 
          @if (is_single())
          {{-- @include('partials/entry-meta') --}}
        </div>
      </div>
      @endif
      
      
    </div>
  </div>
  @endif
  