const button = document.getElementById("button");
let blok = document.querySelectorAll(".blok");

const schuiven = () => {
  blok[0].classList.toggle('blok--verplaatst');
  blok[1].classList.toggle('blok--verplaatst');
  blok[2].classList.toggle('blok--verplaatst');
}

button.addEventListener('click', schuiven);
