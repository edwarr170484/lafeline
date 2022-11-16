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