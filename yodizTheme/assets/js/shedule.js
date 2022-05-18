$(".btn-arrow").on("click", function () {

    if ($('.progress').hasClass('open-body')) {
        $(".progress__categories").css("max-height", '0')
        $(".progress").toggleClass("open-body")
    } else {
        $(".progress").addClass("open-body")
        let e = $(".free-lessons").outerHeight(true);
        $(".progress__categories").css("max-height", e + "px")
    }
})

$('.paid-lessons .number').each(function (e) {
    $(this).text(e + 1)
})