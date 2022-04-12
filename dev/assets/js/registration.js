$('.input').on('focus', function () {
    $(this).closest('.input-block').addClass('moving-label')
})

$('.input').on('blur', function () {
    if ($(this).val() <= 1) {
        $(this).closest('.input-block').removeClass('moving-label');
    }
});

// $('.submit-btn').on('click', function (e) {
//     e.preventDefault();
// })
//
// $('.recovery-btn').on('click', function () {
//     $('form').addClass('recovery-password');
// })

// $('.change-btn').on('click', function () {
//     $('.input-block').hide()
//     $('h2').html('Ваш пароль изменен');
//     $(this).html("Войти в личный кабинет")
//     $(this).css('margin-top', '24px')
// })

$(document).ready(function () {
    $('form').validate({
        errorElement: 'span',
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            name: {
                required: true,
                minlength: 3
            },
            sec_name: {
                required: true
            },
            phone: {
                required: true
            },
            date: {
                required: true
            },
            sex: {
                required: true
            },
            skill_level: {
                required: true
            },
        },
        messages: {
            email: {
                email: "Некорректный e-mail"
            },
            sex: {
                required: "Выберите, пожалуйста, пол"
            },
            skill_level: "Выберите, пожалуйста, ваш уровень знаний"
        }
    });
})


