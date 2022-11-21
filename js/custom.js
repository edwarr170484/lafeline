function toogleMenu(event) {
    event.stopPropagation();
    let menu = document.getElementsByClassName('header__dropdown-menu')[0];

    if (menu.classList.contains('opened')) {
        menu.classList.remove('opened');
    } else {
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