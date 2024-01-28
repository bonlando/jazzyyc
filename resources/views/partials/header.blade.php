<header class="banner">



<nav class="fixed-top navbar navbar-toggleable-md nav-primary navbar-expand-lg pr-md-0 pt-3 pb-3 pb-lg-0 pt-lg-0">
  <a href="{{ home_url('/') }}"><img class="brand" src="@asset('images/jazzyyc-white.svg')" alt="JazzYYC">
<div class="tagline d-none d-sm-block">
    Calgary's Jazz<br>
    Collaborative
</div>
  </a>
<button class="mr-md-2 navbar-toggler btn btn-primary btn-lg d-lg-none" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      ☰ menu
</button>
     
<div class="navbar-collapse collapse" id="navbarCollapse">
      @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu($primarymenu) !!}
    
  @endif
      </div>

    </nav>



<nav class="d-none d-lg-block fixed-top navbar navbar-toggleable-md nav-secondary navbar-expand-lg pt-3 pb-3 pb-lg-0 pt-lg-0">
    <button class="navbar-toggler btn btn-ghost btn-lg d-lg-none" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      ☰
  </button>
     
<div class="navbar-collapse collapse" id="navbarCollapse">
  @if (has_nav_menu('secondary_navigation'))
    {!! wp_nav_menu($secondary) !!}
  @endif
      </div>

    </nav>
  
</header>


