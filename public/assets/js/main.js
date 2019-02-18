/*
 *****************************************************
 *	CUSTOM JS DOCUMENT                              *
 *	Single window load event                        *
 *   "use strict" mode on                            *
 *****************************************************
 */
$(window).on('load', function() {

    "use strict";
    var preloader = $('.loader');
    var fancyboxImg = $('.fancybox');
    var fancyboxIframe = $('.fancybox-iframe');
    var dataToggleTooTip = $('[data-toggle="tooltip"]');
    var progressBar = $(".progress-bar");
    var comingSoonTimer = $('.coming-soon #demo');
    var accordionFAQ = $("#accordion");
    var scrollTop = $('.footer-icon');

    /*
    ========================================
    Preloder Setting
    ========================================
    */
    if (preloader.length) {
        preloader.fadeOut();
    }


    //========================================
    // Image and Video Fancy Box
    //========================================



    if (fancyboxImg.length) {
        fancyboxImg.fancybox();
    }
    if (fancyboxIframe.length) {
        fancyboxIframe.fancybox({
            type: "iframe",
            // other API options
        });
    }

    //========================================
    // FAQ Accordion
    //========================================

    if (accordionFAQ.length) {
        accordionFAQ.accordion();
    }

    //========================================
    // Progress Bar
    //========================================
    // if (progressBar.length) {
    //     progressBar.appear(function() {
    //         dataToggleTooTip.tooltip({
    //             trigger: 'manual'
    //         }).tooltip('show');
    //
    //         progressBar.each(function() {
    //             var each_bar_width = $(this).attr('aria-valuenow');
    //             $(this).width(each_bar_width + '%');
    //         });
    //     });
    //
    // }

    //========================================
    // Scroll top
    //========================================

    if (scrollTop.length) {
        scrollTop.on('click', function() {
            $('body').animate({
                    scrollTop: 0
                },
                2000);
        });
    }

    //========================================
    // Comming Soon Timer function Calling
    //========================================

    if (comingSoonTimer.length) {
        comingsoonInt();
    }

    //========================================
    // Owl Carousel functions Calling
    //========================================

    // owlCarouselInit();

    //***************************************
    // Map initialization function Calling
    //****************************************

    initMap();

});


//***************************************
// Contact Map function
//****************************************

function initMap() {
    "use strict";

    var mapDiv = $('#gmap_canvas');

    if (mapDiv.length) {
        var myOptions = {
            zoom: 10,
            scrollwheel: false,
            center: new google.maps.LatLng(-37.81614570000001, 144.95570680000003),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        var marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(-37.81614570000001, 144.95570680000003)
        });
        var infowindow = new google.maps.InfoWindow({
            content: '<strong>Envato</strong><br>Envato, King Street, Melbourne, Victoria<br>'
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });

        infowindow.open(map, marker);
    }

}
//========================================
// Owl Carousel functions
//========================================

function owlCarouselInit() {

    "use strict";

    var sliderMain = $('#slider');
    var teamSlider = $('#team');
    var nextNav = '<i class="fa fa-angle-right" aria-hidden="true"></i>';
    var prevNav = '<i class="fa fa-angle-left" aria-hidden="true"></i>';

    if (sliderMain.length) {
        sliderMain.owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            navText: [prevNav, nextNav],
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    }

    if (teamSlider.length) {
        teamSlider.owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });

    }

}
//========================================
//Coming Soon Timer functions
//========================================
function comingsoonInt() {

    "use strict";

    // /*Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = "<div class='col-md-3 col-sm-3 col-xs-3'><div class='timer'>" + days + "</div><span>days </span></div><div class='col-md-3 col-sm-3 col-xs-3'><div class='timer'>" + hours + "</div><span>hours </span></div><div class='col-md-3 col-sm-3 col-xs-3'><div class='timer'> " +
            minutes + "</div><span>minutes </span></div> <div class='col-md-3 col-sm-3 col-xs-3'><div class='timer'>" + seconds + "</div><span>seconds </span></div> ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
}
/*
*****************************************************
*	END OF THE JS 									*
*	DOCUMENT                       					*
*****************************************************
*/
