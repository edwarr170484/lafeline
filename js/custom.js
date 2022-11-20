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

$('.form__select').on('click', function () {
    $(this).toggleClass('form__select_opened');
});

$('.form__select-option').on('click', function (event) {
    let value = $(this).data('option');
    let label = $(this).find('span').text();
    $(this).parent().next('input[type="hidden"]').val(value);
    $(this).parent().parent().find('.form__field-label').addClass('form__field-label_selected').text(label);
});