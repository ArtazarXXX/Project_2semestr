var iconBurger = document.querySelector('.burger');
var menu = document.querySelector('.menu');

iconBurger.onclick = function() {
    if (iconBurger.classList.contains('burger-open')) {
        iconBurger.classList.add('burger-close');
    } else {
        iconBurger.classList.remove('burger-close');
    }
    iconBurger.classList.toggle('burger-open');
    menu.classList.toggle('menu-open');
};