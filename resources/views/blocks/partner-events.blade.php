{{--
  Title: Partner events
  Description: Add the partner events feed for the home page. Will be more customizable in the future
  Category: formatting
  Icon: calendar-alt
  Keywords: events, feed, homepage
--}}




<div style="margin-top: -2rem; z-index: -2;" class="position-relative container-fluid">
  <div class="row">
    <div class="col-md-6 d-flex align-items-center secondary p-3 p-md-5">
     
<div id="no-image-feed" class="events-hp partner lolitas">
   <h4>JazzYYC presents: <br>Lolita’s Just Jazz every Friday.</h4>
    <p><strong>Next event:</strong>

@shortcode('[ESPRESSO_EVENTS category_slug=lolitas-lounge limit=1]')

<a href="/events/partner-shows#lolitas" class="view-all mt-3 btn btn-ghost mb-3 ml-3">View all events</a>
</div>

    </div>
    <div class="col-md-6 d-flex align-items-center white p-3 p-md-5">
   
<div id="no-image-feed" class="white events-hp partner kawa">

   <h4>Kawa Saturday Sessions:<br>A Jazz Jam</h4>
   <p>Saturday afternoons from 3 p.m. to 6 p.m.
    <p><strong>Next event:</strong>
 @shortcode('[ESPRESSO_EVENTS category_slug=the-kawa-saturday-jam limit=1]')

              <a href="/events/partner-shows#kawa" class="view-all btn mt-3 btn-ghost mb-3 ml-2  ml-md-0 ml-lg-3">View all events</a>
</div>      
    </div>
  </div>
</div>
