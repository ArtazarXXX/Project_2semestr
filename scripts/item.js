var firstColor = document.querySelector('.colors-set__unit_first');
var secondColor = document.querySelector('.colors-set__unit_second');
var thirdColor = document.querySelector('.colors-set__unit_third');
firstColor.onclick = function(evt) {
    evt.preventDefault();
    firstColor.classList.toggle('colors-set__unit_first_click');
}
secondColor.onclick = function(evt) {
    evt.preventDefault();
    secondColor.classList.toggle('colors-set__unit_second_click');
}
thirdColor.onclick = function(evt) {
    evt.preventDefault();
    thirdColor.classList.toggle('colors-set__unit_third_click');
}
var SizeXs = document.querySelector('.sizes-set__link_xs');
var SizeS = document.querySelector('.sizes-set__link_s');
var SizeM = document.querySelector('.sizes-set__link_m');
var SizeL = document.querySelector('.sizes-set__link_l');
var SizeXl = document.querySelector('.sizes-set__link_xl');
SizeXs.onclick = function(evt) {
    evt.preventDefault();
    SizeXs.classList.toggle('sizes-set__link_active');
}
SizeS.onclick = function(evt) {
    evt.preventDefault();
    SizeS.classList.toggle('sizes-set__link_active');
}
SizeM.onclick = function(evt) {
    evt.preventDefault();
    SizeM.classList.toggle('sizes-set__link_active');
}
SizeL.onclick = function(evt) {
    evt.preventDefault();
    SizeL.classList.toggle('sizes-set__link_active');
}
SizeXl.onclick = function(evt) {
    evt.preventDefault();
    SizeXl.classList.toggle('sizes-set__link_active');
}