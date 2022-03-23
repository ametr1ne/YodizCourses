$('.lessons-list li').each(function (i) {
    $(this).on('click', function () {
        $('.lessons-list li').each(function (ind) {
            if (ind === i) {
                $(this).addClass('selected')
            } else $(this).removeClass('selected')
        })
    })
})

$('.number').each(function (i) {
    $(this).text(i+1)
})


$('.btn-arrow').on('click', function () {
    $('.progress').toggleClass('open-body')
})

$('.theory .timecode').each(function (index) {
    $(this).on('click', function () {

        $('.theory .timecode').each(function (ind) {
            if (ind === index)
                $(this).addClass('pressed')
            else $(this).removeClass('pressed')
        })

        $('.theory .timecode svg circle').each(function (i) {
            if (i <= index) {
                $(this).css('fill', '#8DE300');
            } else {
                $(this).css('fill', '#D0D0E1');
            }
        })
    })
})

$('.homework .timecode').each(function (index) {
    $(this).on('click', function () {

        $('.homework .timecode').each(function (ind) {
            if (ind === index)
                $(this).addClass('pressed')
            else $(this).removeClass('pressed')
        })

        $('.homework .timecode svg circle').each(function (i) {
            if (i <= index) {
                $(this).css('fill', '#8DE300');
            } else {
                $(this).css('fill', '#D0D0E1');
            }
        })
    })
})

$(window).on('scroll', function () {
    let scroll = $(document).scrollTop()

    if (scroll >= 90) {
        $('.empty').hide()
    } else $('.empty').show()
})

// $('.header__burger').on('click', function () {
//     $('body').toggleClass('open-aside')
// })
//
// $('.dark').on('click', function () {
//     $('body').removeClass('open-aside')
// })

var animationEnd = true;

$('.header__burger').click(function() {
    if(animationEnd) {
        animationEnd = false;
        $('body').toggleClass('open-aside')
        if ($('.header__burger').hasClass('closed')){
            $('.header__line--3').removeClass('header__line--3-fly');
            $('.header__burger').removeClass('closed');
            $('.dark').hide()

            setTimeout(function(){
                $('.header__line--2').removeClass('header__line--2-fly');
            }, 300);
        }
        else{
            $('.header__line--2').addClass('header__line--2-fly');
            $('.header__burger').addClass('closed');

            setTimeout(function(){
                $('.header__line--3').addClass('header__line--3-fly');
            }, 300);
        }
        setTimeout(function(){
            animationEnd = true;
        }, 600);
    }
});
$('.dark').on('click', function () {
    $('body').removeClass('open-aside')
    $('.header__line--3').removeClass('header__line--3-fly');
    $('.header__burger').removeClass('closed');

    setTimeout(function(){
        $('.header__line--2').removeClass('header__line--2-fly');
    }, 300);
})

$('.aside__close-btn').on('click', function () {
    $('body').addClass('close-aside')
})
// (function($) {
//     $(window).on('load', function() {
//         $('.mycustom-scroll').mCustomScrollbar();
//     });
// })(jQuery);
//
// $('.mycustom-scroll').mCustomScrollbar({
//     axis: 'y',              // вертикальный скролл
//     theme: 'rounded-dark',  // тема
//     scrollInertia: '330',   // продолжительность прокрутки, значение в миллисекундах
//     setHeight: '100%',      // высота блока (переписывает CSS)
//     mouseWheel: {
//         deltaFactor: 300    // кол-во пикселей на одну прокрутку колёсика мыши
//     }
// });

