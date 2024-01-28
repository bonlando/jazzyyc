@php
$year = date("Y");
@endphp
<footer class="content-info secondary">
  <div class="container pt-5 pb-5">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <p><a href="/privacy-policy">Privacy policy</a> | <a href="/contact">Contact us</a></p>
    <p>Copyright JazzYYC {{ $year }}</p>

  </div>
</footer>
