@php
$year = date("Y");
@endphp
<footer class="row-full content-info black-bg">
  <div class="container pt-5 pb-5">
   <div class="row d-flex justify-content-center">
     <div class="col-lg-10 col-xl-8">
        @php dynamic_sidebar('sidebar-footer') @endphp
        <p><a href="/privacy-policy">Privacy policy</a> | <a href="/contact">Contact us</a></p>
        <p>Copyright JazzYYC {{ $year }}</p>
    
     </div>
   </div>
  </div>
</footer>
