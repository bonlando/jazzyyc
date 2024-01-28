export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // $('.min-height').matchHeight({ property: 'min-height' });
    // $('.same-height').matchHeight({ byRow: false, property: 'min-height' });
    $('<i class="fal mr-1 fa-fw fa-calendar-alt"></i>').insertBefore('.ee-event-datetimes-li-daterange');
    $('<i class="far fa-fw mr-1 fa-clock"></i>').insertBefore('.ee-event-datetimes-li-timerange');
    $('.single-feed .ee-status').addClass('d-none');
    $('.ee-status').prependTo('.espresso_events:first-child');
    $('li.facebook a').empty();
    $('li.twitter a').empty();
    $('li.youtube a').empty();
    $('li.instagram a').empty();
    $('li.contact a').empty();
    $('li.calendar a').empty();
    $('li.cart a').empty();
    $('li.memberlogin a').empty();
    $('<i class="fas fa-shopping-cart mr-1"></i>').prependTo('li.cart a');
    $('<i class="fas fa-calendar-alt mr-1"></i>').prependTo('li.calendar a');
    $('<i class="fab fa-facebook mr-1"></i>').prependTo('li.facebook a');
    $('<i class="fab fa-twitter mr-1"></i>').prependTo('li.twitter a');
    $('<i class="fas fa-envelope mr-1"></i>').prependTo('li.contact a');
    $('<i class="fas fa-sign-in-alt mr-1"></i>').prependTo('li.memberlogin a');
    $('<i class="fab fa-instagram mr-1"></i>').prependTo('li.instagram a');
    $('<i class="fab fa-youtube mr-1"></i>').prependTo('li.youtube a');
    $('<i class="fas fa-rotate-45 fa-ticket-alt mr-1"></i>').prependTo('li.ticket a');
    $('.has-tickets .event-link span').replaceWith('GET TICKETS');
    $('#headliner .ee-event-datetimes-li-daterange').addClass('inverse');
    $('#headliner .post-17550 .band-members').prependTo('#headliner .post-17550 .event-content');
    $('#headliner .post-17554 .band-members').prependTo('#headliner .post-17554 .event-content');
    $('#headliner .band-members').removeClass('d-none');
    $('#headliner .band-members').removeClass('text-right');
    $('.lolitas .view-all').appendTo('.lolitas .event-content');
    $('.kawa .view-all').appendTo('.kawa .event-content');
    $('.tool-venue').prependTo('.time_cal_qtip');
    $('.ee-registrations-list p.tiny-text').removeClass('.tiny-text');
    $('li.memberlogin a').append('<div class="hide-text"><span> Member&nbsp;login</span></div>');
    $('li.facebook a').append('<div class="hide-text"><span> Facebook</span></div>');
    $('li.twitter a').append('<div class="hide-text"><span> twitter</span></div>');
    $('li.instagram a').append('<div class="hide-text"><span> instagram</span></div>');
    $('li.youtube a').append('<div class="hide-text"><span> youtube</span></div>');
    $('li.contact a').append('<div class="hide-text"><span> Contact&nbsp;us</span></div>');
    $('li.cart a').append('<div class="hide-text"><span> Event&nbsp;cart</span></div>');
    $('li.calendar a').append('<div class="hide-text"><span> Calendar</span></div>');
    $('.news .listing-item').wrapInner('<div class="row justify-content-md-center ml-md-1"></div>');
    $('.news .listing-item .row').wrapInner('<div class="blog-content col-lg-10 col-md-9 min-height d-flex align-items-center pt-3 pb-3 pt-md-0 pb-md-0"></div>');
    $('.news .listing-item .row').prepend('<div class="blog-date col-xs-2 col-lg-2 col-md-3 primarydark min-height d-flex align-items-center"></div>');
    $('.news .listing-item .date')
    $('.blog-content').wrapInner('<div></div>');

    $( document ).ready(function() {
      $( 'body.page .espresso-event-list-wrapper-dv ul.ee-event-datetimes-ul' ).each(function() {
        $(this).find('li').slice(1).hide();
      });
    });
    $('body.page .espresso-event-list-wrapper-dv ul.ee-event-datetimes-ul li:nth-child(2)').after('<p style="float: left;">This is an event series with multiple dates. Click "More details" for a full list.</p>');
    // $('.date').appendTo('.blog-date');
    $('.news .listing-item').each(function () {    //loop over each list item
      var myDate = $('.date', this);         //get the year of the current list item
      $('.blog-date', this).append(myDate); //append it to the item information
    });


    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
