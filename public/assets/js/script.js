/* Création de la barre représentant l'avancée du scroll */

let progressBarElement = document.getElementById('progress-bar');

window.addEventListener('scroll', (e) => {
    let height = document.body.scrollHeight - window.innerHeight;
    let scrollPosition = document.documentElement.scrollTop;
    let widthToAdd = ((scrollPosition / height) * 100);
    progressBarElement.style.width = `${widthToAdd}%`;
});
