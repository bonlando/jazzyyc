      {{-- @php
        $logos_per_row = get_field('logos_per_row');
        $logos = get_field('logos');
        @endphp
        
        <div class="white">
          <div class="row pt-5 pb-5 justify-content-center w-100">  
            @while (have_rows('logos'))@php(the_row())
            <div class="col-sm-6 col-md-4 p-3">
              @foreach($logos as $logo)
              <img src="{!! $logo['url'] !!}" alt="{!! $logo['alt'] !!}" />
              @endforeach
            </div>
            @endwhile
          </div>
        </div> --}}
        
        @if($logos)
        <div class="row-full lightgray">
          <div class="container">
             @if(!is_front_page())
              <h2 class="text-center">Our sponsors:</h2>
              @endif
            <div class="row d-flex justify-content-center">
              <div class="col-lg-10">
                <div class="row d-flex justify-content-center w-100">    
                  @foreach( $logos as $l )
                  <?php $link = get_field('link', $l['ID']); 
                  $logos_per_row = get_field('number_per_row');
                  
                  ?>
                  <div class="sponsor col-md-4 {{ $logos_per_row }} white min-height p-3 align-items-center d-flex">
                    @if($link)<a target="_blank" class="" href="{{ $link }}">@endif
                    <img class="logosoup mw-100 w-100" src="{!! $l['url'] !!}" alt="{!! $l['alt'] !!}" />
                    @if($link)</a>@endif
                  </div>
              
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
        
        {{-- 
          <div class="white">
            <div class="row pt-5 pb-5 justify-content-center w-100">
              <div class="col-sm-6 col-md-4 p-3">
                <img src="@asset('images/studio-bell.jpg')" alt="">
              </div>
              <div class="col-sm-6 col-md-4 p-3">
                <img src="@asset('images/studio-bell.jpg')" alt="">
              </div>
              <div class="col-sm-6 col-md-4 p-3">
                <img src="@asset('images/studio-bell.jpg')" alt="">
              </div>
              <div class="col-sm-6 col-md-4 p-3">
                <img src="@asset('images/studio-bell.jpg')" alt="">
              </div>
              <div class="col-sm-6 col-md-4 p-3">
                <img src="@asset('images/studio-bell.jpg')" alt="">
              </div>                                
            </div>
          </div> --}}