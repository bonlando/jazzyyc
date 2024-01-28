

@php
$thecontent = get_the_content();
if(!empty($thecontent)) { @endphp
  
  <div class="pt-5">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        @php } @endphp 
        
        @php the_content() @endphp
        @php
        $thecontent = get_the_content();
        if(!empty($thecontent)) { 
          @endphp
          
        </div>
      </div>
    </div>
    
    @php } 
    @endphp 

    @include('partials.signup-email')
  
    <div class="row-full section-header text-center secondary pt-md-5 pb-md-5 pb-3 pt-3">
      <h2>Sponsors</h2>
      <p>JazzYYC would like to thank the following sponsors for their generous support:</p>
    </div>
    
    @include('partials.logosoup')
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    