const button = document.getElementById("button");
let blok = document.querySelectorAll(".blok");

const schuiven = () => {
  blok[0].classList.toggle('blok--verplaatst');
  setTimeout(() => {
    blok[1].classList.toggle('blok--verplaatst');
  },200 );
  setTimeout(() => {
    blok[2].classList.toggle('blok--verplaatst');
  },400 );
}

button.addEventListener('click', schuiven);
