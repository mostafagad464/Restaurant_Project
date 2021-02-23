
/* ********************************nav scroll************************** */
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $('.navi').addClass('color-change');
      $('.navi a').addClass('li-change');
    } else {
      $('.navi').removeClass('color-change');
      $('.navi a').removeClass('li-change');
    }
  });

  // ******************counters in about*************************
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });


    


