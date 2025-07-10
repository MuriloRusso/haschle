const menuMobile = document.querySelector("#menu-mobile");
const menuMobileOpenButton = document.querySelector("#menu-mobile-open-button");
const menuMobileCloseButton = document.querySelector("#menu-mobile-close-button");

menuMobileOpenButton.addEventListener('click', function(e){
    menuMobile.classList.add('open');
})

menuMobileCloseButton.addEventListener('click', function(e){
    menuMobile.classList.remove('open');
})