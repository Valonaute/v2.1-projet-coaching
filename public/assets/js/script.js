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

function openNav() {
  sidenav.classList.add("active");
}

function closeNav() {
  sidenav.classList.remove("active");
}

// Création du carousel 

document.body.onload=function() {
  nb= 3;
  p=0;
  container=document.getElementById("container-carousel");
  g=document.getElementById("g");
  d=document.getElementById("d");
  container.style.width=(800*nb)+"px";
  for(i=1; i<=nb;i++){
    div=document.createElement("div");
    div.className="card-carousel";
    container.appendChild(div);
  }
}
