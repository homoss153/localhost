const header = document.querySelector('.header');
const headerContainer = header.querySelector('.header__container');
const headerButton = header.querySelector('.button__menu');

const headerToggle = function() {
    if (header.classList.contains('header_show')) {
        header.classList.remove('header_show');
        headerContainer.classList.remove('header__container_show');
        headerButton.classList.add('header__button');
        headerButton.classList.remove('header__button_show');
    } else {
        header.classList.add('header_show');
        headerContainer.classList.add('header__container_show');
        headerButton.classList.remove('header__button');
        headerButton.classList.add('header__button_show');
    }
}

headerButton.addEventListener('click', headerToggle);