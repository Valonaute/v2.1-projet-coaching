/* Création de la barre représentant l'avancée du scroll */

let progressBarElement = document.getElementById('progress-bar');

window.addEventListener('scroll', (e) => {
    let height = document.body.scrollHeight - window.innerHeight;
    let scrollPosition = document.documentElement.scrollTop;
    let widthToAdd = ((scrollPosition / height) * 100);
    progressBarElement.style.width = `${widthToAdd}%`;
});

// Création du menu hamburger pour le responsive 

let sidenav = document.getElementById("mySidenav");
let openBtn = document.getElementById("openBtn");
let closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
}

