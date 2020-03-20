/* Element vi använder */
const overlay = document.querySelector('#overlay');
const closeMenu = document.querySelector('#close-menu');
const openMenu = document.querySelector('#open-menu');

/* När vi clickar? */
openMenu.addEventListener('click', toggleOverlay);
closeMenu.addEventListener('click', toggleOverlay);

function toggleOverlay() {
    overlay.classList.toggle('show-menu');
}


