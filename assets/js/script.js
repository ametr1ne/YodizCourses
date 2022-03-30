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

let tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
let firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

let player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('theory_player', {
        height: '100%',
        width: '100%',
        videoId: '_AY7MxCw_Dg',
        events: {
            // 'onReady': onPlayerReady,
            // 'onStateChange': onPlayerStateChange
        }
    });
}

$('.timecode-theory').each(function () {
    $(this).on('click', function () {
        player.seekTo(this.dataset.timecode);
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
