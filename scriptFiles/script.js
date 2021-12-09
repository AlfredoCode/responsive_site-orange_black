const hamburger = document.querySelector('.hamburger');
const leftNav = document.querySelector('.leftNav');
const leftMenu = document.querySelector('.leftMenu');


hamburger.addEventListener('click', function() {
    this.classList.toggle('is-active');
    leftNav.classList.toggle('is-active');
    leftMenu.classList.toggle('is-active');

})