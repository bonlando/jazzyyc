
<div id="carouselHome" class="row-full carousel slide" data-ride="carousel">
  {{-- <ol class="carousel-indicators">
    <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
    <li data-target="#carouselHome" data-slide-to="1"></li>
    <li data-target="#carouselHome" data-slide-to="2"></li>
  </ol> --}}
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="w-100 d-block d-md-none ml-auto mr-auto carousel-img" src="@asset('images/jazz-fest-737x426.jpg')" alt="Canadian Jazz Festival background image">
      <img class="d-none d-md-block ml-auto mr-auto carousel-img" src="@asset('images/canadian-jazz-fest-1600x500.jpg')" alt="Canadian Jazz Festival background image">
    </div>

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
      <div class="container position-relative">
          
              <h2 class="d-none d-lg-block datetag text-center rotate">nov 6 - 10</h2>
                   
          {{-- <img class="logo" src="@asset('images/td.jpg')" alt="TD Sponsor"><br> --}}
          <h1>
            <span class="h2 d-block">JazzYYC</span>
          Canadian<br>
          <span class="festival">Festival</span><span class="yellow-font h2 ml-2">2019</span><br>
         </h1>
         <h3 class="yellow-font d-block d-lg-none">Nov 6 - 10</h3><br>
         @if(is_front_page())
            <a href="/events/get-tickets" class="btn btn-lg btn-primary">GET TICKETS</a>
        @endif
      </div>

  </div>
</div>
