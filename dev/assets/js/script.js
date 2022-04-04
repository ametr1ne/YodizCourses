$('.lessons-list li').each(function () {
    if ($(this).hasClass('selected')) {
        $(this).addClass('completed')
    } else {
        $(this).removeClass('completed')
    }
})

function hidePopups() {
    $('body').removeClass('showFreePopup');
    $('body').removeClass('showPaidPopup');
}

function closeAside() {
    $('body').removeClass('open-aside')
    $('.header__line--3').removeClass('header__line--3-fly');
    $('.header__burger').removeClass('closed');
    $('.header__line--2').removeClass('header__line--2-fly');
}

$('.free-lessons li').each(function () {
    $(this).on('click', function () {
        if (!$(this).hasClass('selected')) {
            $('body').addClass('showFreePopup');
            closeAside()
        }
    })
})

$('.paid-lessons li').each(function () {
    $(this).on('click', function () {
        if (!$(this).hasClass('selected')) {
            $('body').addClass('showPaidPopup');
            closeAside()
        }
    })
})

$('.next-lesson').on('click', function () {
    $('body').addClass('showFreePopup');
})

$('.close').on('click', function () {
    hidePopups()
})

$('.dark-popup').on('click', function () {
    hidePopups()
})

$('.popup__btn').on('click', function () {
    hidePopups()
})

$('.number').each(function (i) {
    $(this).text(i + 1)
})

$(document).on('ready', function () {
    let toolsHeight = $('.tools').outerHeight(true)
    $('.progress__categories').css('max-height', toolsHeight + 'px')
})

$('.btn-arrow').on('click', function () {
    $('.progress').toggleClass('open-body')
})

/*---------------- timecodes --------------*/

$('.timecode').on('click', function () {

    $(this).closest('li').addClass('pressed')
    $(this).closest('li').siblings().removeClass('pressed')

    let parentBlock = $(this).closest('.video-block');

    $(parentBlock).find('.timecode').each(function (index) {
        if ($(this).closest('li').hasClass('pressed')) {
            let green = index

            $(parentBlock).find('svg circle').each(function (i) {
                if (i <= green) {
                    $(this).css('fill', '#8DE300');
                } else {
                    $(this).css('fill', '#D0D0E1');
                }
            })
        }
    })
})

function videoResize() {
    let videoWidth = $('.video').outerWidth()
    let videoHeight = videoWidth * 0.56
    $('.video').css('height', videoHeight + 'px')
}

/*---------- бургер-меню -------------*/

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
    closeAside()
})

$('.aside__close-btn').on('click', function () {
    $('body').addClass('close-aside')
})

/*----- обработка таймкодов ---------*/

let tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
let firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

let videoData = [];

$('.video').each(function () {
    videoData.push(new Array($(this).attr('data-videohref'), $(this).find('.video_player').attr('id')));
})

let curplayer = []

function onYouTubeIframeAPIReady() {

    for (let i = 0; i < videoData.length; i++) {
        curplayer[i] = createPlayer(videoData[i]);
    }
}

function createPlayer(playerInfo) {
    return new YT.Player(playerInfo[1], {
        height: '100%',
        width: '100%',
        videoId: playerInfo[0],
        playerVars: {'controls': 1, 'modestbranding': 1, 'showinfo': 0, 'rel': 0, 'iv_load_policy': 3, 'fmt': 22}
    });
}

$('.timecode').each(function () {
    $(this).on('click', function () {
        curplayer[this.dataset.index].seekTo(this.dataset.timecode);
    })
})

/*----- Изменение высоты видео-контейнера -------------*/

videoResize()

$(".content").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function () {
    videoResize()
});

$(window).on('resize', function () {
    videoResize()
})
