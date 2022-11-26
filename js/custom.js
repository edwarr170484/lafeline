$(document).scroll('scroll', function is_shown() {
    const chat = document.querySelector('.chat__inner');
    let wt = $(window).scrollTop();
    let wh = $(window).height();
    let eh = $('.chat__inner').outerHeight();
    let et = $('.chat__inner').offset().top;

    if (wt + wh >= et && wt + wh - eh * 2 <= et + (wh - eh) && !chat.classList.contains('active')) {
        chat.classList.add('active');

        $('.consultation__chat-message--fit-content').fadeIn();

        setTimeout(() => {
            $('.consultation__chat-message--fit-content').fadeOut(200, function() {
                $('.chat__messages-from div:eq(0)').fadeIn(200, function () {
                    $(this).next().fadeIn(500, arguments.callee);
                });
            });
        }, 1000);
        setTimeout(() => {
            $('.chat__message-to').fadeIn();
        }, 2400);
    } else {
        return false;
    }
});

function toogleMenu(event) {
    event.stopPropagation();
    let menu = document.getElementsByClassName('header__dropdown-menu')[0];
    let toggler = document.querySelector('.header__toggler');

    if (menu.classList.contains('opened')) {
        toggler.classList.remove('opened');
        menu.classList.remove('opened');
    } else {
        toggler.classList.add('opened');
        menu.classList.add('opened');
    }
}

function closeMenu(event) {
    event.stopPropagation();
    let menu = document.getElementsByClassName('header__dropdown-menu')[0];
    menu.classList.remove('opened');
}
function openModal() {
    $('.modal').addClass('modal_opened');
    $('body').addClass('modal_opened');
}

function closeModal() {
    $('.modal').removeClass('modal_opened');
    $('body').removeClass('modal_opened');
}

$(document).ready(function () {
    $('.form__select').on('click', function () {
        $(this).toggleClass('form__select_opened');
    });

    $('.form__select-option').on('click', function (event) {
        let value = $(this).data('option');
        let label = $(this).find('span').text();
        $(this).parent().next('input[type="hidden"]').val(value);
        $(this).parent().parent().find('.form__field-label').addClass('form__field-label_selected').text(label);
    });

    $('button[data-toggle="modal"]').on('click', function () {
        openModal();
    });

    $('.modal__dialog').on('click', function (event) {
        event.stopPropagation();
    });

    $('.modal').on('click', function () {
        closeModal();
    });

    $('.form__button_cancel').on('click', function () {
        closeModal();
    });

    $('#form__avatar').on('change', function (event) {
        console.log(event);
        $('.form__image-empty').addClass('form__image-empty_hide');
        $('.form__image-avatar').attr('src', URL.createObjectURL(event.target.files[0])).addClass('form__image-avatar_show');
    })
});