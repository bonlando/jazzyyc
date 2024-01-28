<div class="pt-md-5 white">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        
        @if(is_page('registrations'))
        <div class="mp_wrapper">
          <div id="mepr-account-nav">
            <span class="mepr-nav-item mepr-home mr-2">
              <a href="/account/?action=home" id="mepr-account-home">Home</a>
            </span>
            <span class="mepr-nav-item mepr-subscriptions mr-2">
              <a href="/account/?action=subscriptions" id="mepr-account-subscriptions">Subscriptions</a></span>
            <span class="mepr-nav-item mepr-payments mr-2">
              <a href="/account/?action=payments" id="mepr-account-payments">Payments</a>
            </span>
                <span class="mepr-nav-item events mepr-active-nav-tab mr-2">
              <a href="/account/?action=events"><strong>Events</strong></a>
            </span>
              <span class="mepr-nav-item"><a href="/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Flocalhost%3A8888%2Flogin%2F&amp;_wpnonce=172360de11&amp;redirect_to=https%3A%2F%2Fmemberservices.membee.com%2Ffeeds%2FLogin%2FLogout.aspx%3Fclientid%3D1513%26appid%3D2126%26returnURL%3Dhttp%253A%252F%252Flocalhost%253A8888" id="mepr-account-logout">Logout</a></span>
          </div>
        </div>
        @endif
        
@php the_content() @endphp
@if(get_field('code_for_membee'))
	{!! $code_for_membee !!}
@endif


      </div>
    </div>
  </div>
 @include('partials.logosoup')
@include('partials.signup-email')


<?php echo bootstrap_pagination(); ?>
