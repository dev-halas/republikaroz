const header = document.querySelector('.header');
const hamburger = document.querySelector('.hamburger');
const headerLinks = document.querySelectorAll('.navbar a');
const pageHeight = window.innerHeight * 0.1;

hamburger.addEventListener('click', () => {
    header.toggleAttribute('open')
})

headerLinks.forEach((link) => {
    link.addEventListener('click', () => {
        header.removeAttribute('open')
    })
})

window.onscroll = () => {
    let top = window.scrollY;
    top >= pageHeight ? header.setAttribute('scrolled', '') : header.removeAttribute('scrolled');
};