/* global screenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

var change;
var appear;

(function ($) {


    $(document).ready(function () {

        $(document).on('click', '.news-block', function () {
            $('.news-text').html($(this).find('.hidden').html());
            $('.row .news-block').removeClass('active');
            $(this).addClass('active');
        });

        about = $('.slider').bxSlider({
            pager: false,
            mode: "fade"
        });

        $(document).on('click', '.menu-burger, .close', function () {
            $('.menu-wrapper, .menu-burger').toggleClass('opened');
        });

        $('form :submit').on('click', function () {
            $('input:required').each(function () {
                if (!$(this).val()) $(this).addClass('incomplete');
            });
        });

        $('input:required').on('input', function () {
            $(this).removeClass('incomplete');
        });

        $('input.phone').mask("+38 (999) 999-9999", {
            completed: function () {
                $(this).removeClass('incomplete');
            }
        });

        $('input.name').on('input', function () {
            $(this).val($(this).val().replace(/[0-9\\^$.|?*+-_()]/g, ""));
        });

        $('#form').on('submit', function (e) {

            e.preventDefault();

            var name = $(this).find('#name').val();
            var phone = $(this).find('#phone').val();

            $.ajax({
                type: "POST",
                url: '/wp-admin/admin-ajax.php',
                data: {
                    action: 'do_something',
                    name: name,
                    phone: phone
                },
                beforeSend: function () {
                    $('#form :submit').remove();
                },
                success: function () {
                    $('#form').html('<p class="success-request">Thank you for the request!<br>Our manager will contact you soon!</p>');
                }
            });
        });

        $('.projects .cell, .main-page .cell').mouseenter(function () {
            var proj = $(this).data('id');
            $('.bckg').each(function () {
                if (proj === $(this).data('bg')) {
                    var back = $(this);
                    $('.bckg').removeClass('active').addClass('hide');
                    back.removeClass('hide').addClass('active');
                }
            });
        });

        $('.left-arr').mouseenter(function () {
            $('.left-arr').css('fill', '#fdd440');
        });

        $('.left-arr').mouseleave(function () {
            $('.left-arr').css('fill', '#414141');
        });

        $('.service-wrap').on('click', function () {
            let $this = $(this),
                $wrap = $this.find('.description'),
                $h = $wrap.get(0).scrollHeight,
                $opened = $this.hasClass("opened");

            if ($opened) {
                $wrap.animate({
                        'max-height': '0'
                    }, 0, function () {
                    $this.removeClass("opened");
                });
            }
            else {
                $wrap.animate({
                    'max-height': $h,
                }, 0, function () {
                    $this
                        .addClass("opened")
                        .siblings().removeClass("opened");
                    $this.siblings().find('.description').css('max-height', '0');
                });
            }
        });

        if ($(window).width()<= 414){
            $('.home .bckg-wrp').remove();
            $('.menu-wrapper, .menu-burger').removeClass('opened');
        }
    });

    $(window).load(function () {
        $('#preloader').remove();

        if ($(window).width() <= 414) {

            $('.menu-wrapper').removeClass('opened');
        }

        $('.slider-project').owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            autoWidth: true,
            margin: 0
        });

        $(".big").fancybox({
            caption: function (instance, item) {
                var caption, link;

                if (item.type === 'image') {
                    var caption = $(this).data('caption');

                    if (caption) {
                        //set description to current title
                        //this will set what posts
                        var description = $(this).data('caption');
                        //add pinterest button for title
                        pin = '<a data-pin-do="buttonPin" data-pin-tall="true" data-pin-save="false" href="https://pinterest.com/pin/create/button/?url=' +
                            encodeURIComponent(document.location.href) +
                            '&amp;amp;amp;media=' +
                            //put the path to the image you want to share here
                            encodeURIComponent(this.href) +
                            '&amp;amp;amp;description=' + description + '"><img src="/fileadmin/templates/img/pinterest.png" /></a>'
                            //add title information
                            + '&amp;amp;amp;nbsp;<span>' + $(this).data('caption') + '</span>';
                        return pin;
                    } else {
                        //add pinterest button for title
                        caption = '<a data-pin-do="buttonPin" data-pin-tall="true" data-pin-save="false" href="https://pinterest.com/pin/create/button/?url=' +
                            encodeURIComponent(document.location.href) +
                            '&amp;amp;amp;media=' +
                            encodeURIComponent(this.href) +
                            '&amp;amp;amp;description=DaVinchi Group"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>';
                        return caption;
                    }


                }
            }
        });
    });


})(jQuery);
