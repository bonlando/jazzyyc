@php
  
  $video_embed = get_field('video_embed');
  
  $image = get_field('video_thumbnail');
  $url = $image['url'];
  $alt = $image['alt'];
  $size = 'featured-mobile';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
  $postID = get_the_ID();
  
  @endphp
  @if(current_user_can('mepr-active','rules: 23273'))
<div class="modal" id="videoModal{{ $postID }}">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h3>{!! get_the_title() !!}</h3>
        <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        <div class="video-container">
          {!! $video_embed !!}
        </div>
      </div> 
    </div>
  </div>
</div>
@endif

  @if($video_embed)
  <div class="mb-4 position-relative">
    @if(current_user_can('mepr-active','rules: 23273'))
    <div class="d-block d-md-none video-container">
      {!! $video_embed !!}
    </div>
    @endif

    <div class="@if(current_user_can('mepr-active','rules: 23273')) d-none d-md-flex @else d-flex @endif position-absolute w-100 h-100 align-items-center justify-content-center video-box">

      @if(current_user_can('mepr-active','rules: 23273'))
    
      <div class="d-none d-md-block position-relative">
        <a href="#" data-toggle="modal" data-target="#videoModal{{ $postID }}" class="w-100 h-100 position-absolute video-link"></a>
        <i class="fad fa-play-circle" style="--fa-secondary-color: white;"></i>
      </div>
      
      @else 
     <div class="text-center"> <a href="/get-involved/become-a-member/" class="btn btn-primary btn-lg">Sign up to watch</a><br>
      <p class="mb-0 mt-4" style="color: white;">or <a class="lrm-login btn btn-secondary" href="/sign-in"><strong>Sign in</strong></a></p></div>
      
      @endif
    </div>
    
    @if(current_user_can('mepr-active','rules: 23273'))
    <img src="{!! $thumb !!}" class="img-dark d-none d-md-block mw-100 h-auto" alt="{!! $alt !!}">
    @else 
    <img src="{!! $thumb !!}" class="img-dark mw-100 h-auto" alt="{!! $alt !!}">
    @endif

  </div>
  @endif