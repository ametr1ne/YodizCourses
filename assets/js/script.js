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
    $(this).text(i + 1)
})

$(document).on('ready', function () {
    let toolsHeight = $('.tools').outerHeight(true)
    console.log(toolsHeight)
    $('.progress__categories').css('max-height', toolsHeight + 'px')
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

// function removingEmptyBlock() {
//     let scroll = $(document).scrollTop()
//
//     if (scroll >= 90) {
//         $('.empty').addClass('hide')
//         $('.aside__wrap').addClass('changeHeight')
//     } else {
//         $('.empty').removeClass('hide')
//         $('.aside__wrap').removeClass('changeHeight')
//     }
// }

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

// removingEmptyBlock()

// $('.aside__wrap').on('scroll', function () {
//     $('.aside__wrap').addClass('changeHeight');
// })

function videoResize() {
    let videoWidth = $('.video').outerWidth()
    let videoHeight = videoWidth * 0.628
    $('.video').css('height', videoHeight + 'px')
}

$('.header__burger').on('click', function () {
    $('body').toggleClass('open-aside')
    $('body').removeClass('close-aside')
    if ($('.header__burger').hasClass('closed')) {

        if (!window.matchMedia("(min-width: 1360px)").matches) {
            $('.header__line--3').removeClass('header__line--3-fly');
            $('.header__burger').removeClass('closed');
            $('.header__line--2').removeClass('header__line--2-fly');
        }
    } else {
        $('.header__burger').addClass('closed');

        if (!window.matchMedia("(min-width: 1360px)").matches) {
            $('.header__line--2').addClass('header__line--2-fly');
            $('.header__line--3').addClass('header__line--3-fly');
        }
    }
});

$('.dark').on('click', function () {
    $('body').removeClass('open-aside')
    $('.header__line--3').removeClass('header__line--3-fly');
    $('.header__burger').removeClass('closed');
    $('.header__line--2').removeClass('header__line--2-fly');
})

$('.aside__close-btn').on('click', function () {
    $('body').addClass('close-aside')
})

/*----- обработка таймкодов ---------*/

const iframeTheory = $('#theory_video');
const iframeHomework = $('#homework_video');
let player = new Vimeo.Player(iframeTheory);
let player2 = new Vimeo.Player(iframeHomework);

const theoryTimecodes = [
    {id: '1', name: 'Какие инструменты изучать, какие навыки развивать?', time: 30},
    {id: '2', name: 'Figma — бесплатно, быстро, просто', time: 341},
    {id: '3', name: 'Векторная и растровая графика', time: 123},
    {id: '4', name: 'Что делает веб-дизайнер?', time: 233},
    {id: '5', name: 'Photoshop для веб-дизайнера', time: 324},
    {id: '6', name: 'Зачем Illustrator веб-дизайнеру?', time: 233},
    {id: '7', name: 'Самые полезные горячие клавиши для работы', time: 345},
    {id: '8', name: 'Как собрать портфолио, не имея коммерческих заказов?', time: 324},
]

const homeworkTimecodes = [
    {id: '1', time: 30},
    {id: '2', time: 341},
]

$('.timecode-theory').each(function (index) {
    $(this).on('click', function () {
        player.setCurrentTime(theoryTimecodes[index].time)
        player.play();
    })
})

$('.timecode-homework').each(function (index) {
    $(this).on('click', function () {
        player2.setCurrentTime(homeworkTimecodes[index].time)
        player2.play();
    })
})

/*----- Изменение высоты видео-контейнера -------------*/

videoResize()

$(".content").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function() {
    videoResize()
});

$(window).on('resize', function () {
    videoResize()
})
