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