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

// $('.recovery-btn').on('click', function () {
//     $('form').addClass('recovery-password');
// })

$('.change-btn').on('click', function () {
    $('.input-block').hide()
    $('h2').html('Ваш пароль изменен');
    $(this).html("Войти в личный кабинет")
    $(this).css('margin-top', '24px')
})

$(document).ready(function () {
    $('form').validate({
        errorElement: "span",
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
            }
        },
        messages: {
            email: {
                required: "Необходимо заполнить это поле",
                email: "Введите корректный e-mail"
            },
            password: {
                required: "Необходимо заполнить это поле",
                minlength: "Минимальная длина пароля - 5 символов"
            },
            name: {
                required: "Необходимо заполнить это поле"
            },
            sec_name: {
                required: "Необходимо заполнить это поле"
            },
            phone: {
                required: "Необходимо заполнить это поле"
            },
            date: {
                required: "Необходимо заполнить это поле"
            },
            sex: {
                required: "Необходимо заполнить это поле"
            },
            skill_level: {
                required: "Необходимо заполнить это поле"
            }
        }
    });
})


