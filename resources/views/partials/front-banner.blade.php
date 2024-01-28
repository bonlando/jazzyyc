@if(is_front_page())
<div id="carouselHome" class="carousel slide" data-ride="carousel">
  {{-- <ol class="carousel-indicators">
    <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
    <li data-target="#carouselHome" data-slide-to="1"></li>
    <li data-target="#carouselHome" data-slide-to="2"></li>
  </ol> --}}
  <div class="carousel-inner">
    <div class="carousel-item active">
      {{-- <a href="{{ home_url('/') }}"><img class="mw-100 w-100" src="@asset('images/jazzdays-bg.jpg')" alt="JazzYYC international Jazz Days"> --}}
        <div class="d-block d-md-none mw-100"><a href="https://www.jazzyyc.com/jazzyyc-international-jazz-days-2021/"> <img class="w-100 ml-auto mr-auto carousel-img d-block" src="https://www.jazzyyc.com/newsite/wp-content/uploads/2021/04/JazzYYC-2021-1200x630-1.jpg')" alt="JazzYYC International Jazz Days"></a></div>
      <div class="d-none d-md-block"><a href="https://www.jazzyyc.com/jazzyyc-international-jazz-days-2021/"> <img class="mw-100 ml-auto mr-auto carousel-img d-block" src="https://www.jazzyyc.com/newsite/wp-content/uploads/2021/04/JazzYYC-2021-1200x630-1.jpg')" alt="JazzYYC International Jazz Days"></a></div>

      @php 
$youtube = get_field('youtube_link');
$content = get_field('content');
      @endphp
      {{-- <h1 class="text-center mt-4">Welcome to JazzYYC</h1> --}}
      {{-- <p class="mt-4 mb-4 text-center">
       {{ $content }}
      </p> --}}
      {{-- <p class="mt-4 mb-4 text-center"><a  style="color: white;" href="/td-jazzyyc-international-jazz-days/archived-live-streams/">View archived shows</a></p>
      <div class="video-container container text-center"><iframe title="Honest Trailers | Sonic the Hedgehog" width="960" height="540" src="https://www.youtube.com/embed/{{ $youtube }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div> --}}
    </div>

      {{-- <div class="d-none d-lg-block datetag rotate text-center">
<h2 class="date">june 12 - 16</h2>
      </div> --}}

      
  </div>
  {{-- <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> --}}
  <div class="carousel-copy w-100 pt-4 pt-md-0 pb-4 pt-md-0">
      <div class="container">
         
       

      </div>

  </div>


</div>
@endif