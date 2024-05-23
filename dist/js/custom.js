$(document).ready(function () {
    // banner background image src
    $('.isBGImg').each(function () {
        var imgURL = $(this).find('img').attr('src');
        $(this).css('background-image', 'url(' + imgURL + ')');
    });
});

$(function () {
    initScrollToTop();
});

function initScrollToTop() {
    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop(),
            docHeight = $(document).height(),
            winHeight = $(window).height(),
            scrollPercent = (scrollTop) / (docHeight - winHeight),
            scrollPercentRounded = Math.round(scrollPercent * 100);
        if (scrollPercentRounded > 50) {
            $('.topTop').css({
                opacity: 1,
                transform: 'translateY(-50%)'
            });
        } else {
            $('.topTop').css({
                opacity: 0,
                transform: 'translateY(50%)'
            });
        }
    });

    // Click event to scroll to top
    $('.topTop').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
}

// category-slider
$('.banner-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    infinite: true,
    dots: true,
    autoplay: true,
    speed: 2000,
});


$('.tour-list').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

$('.testimonial-list').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
});
