@if(is_front_page())
<div id="carouselHome" class="carousel slide" data-ride="carousel">
  {{-- <ol class="carousel-indicators">
    <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
    <li data-target="#carouselHome" data-slide-to="1"></li>
    <li data-target="#carouselHome" data-slide-to="2"></li>
  </ol> --}}
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="w-100 d-block d-md-none ml-auto mr-auto carousel-img" src="@asset('images/jazz-fest-700x500.jpg')" alt="Summer Jazz Festival background image">
      <img class="d-none d-md-block ml-auto mr-auto carousel-img" src="@asset('images/jazz-fest-1600x500.jpg')" alt="Summer Jazz Festival background image">
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
          {{-- <img class="logo" src="@asset('images/td.jpg')" alt="TD Sponsor"><br> --}}
          <h1>
            Thank you!<br>
            <span class="h3">from JazzYYC</span>
         </h1>
       
         {{-- <h3 class="d-block d-md-none">june 12-16</h3><br> --}}
            <a href="/latest-news/thank-you-for-another-successful-summer-jazz-festival/" class="btn btn-lg btn-primary">View Presidents Message</a>
      </div>

  </div>
</div>
@endif