var opView={};

opView.init=function(){

 let modal = document.getElementById("myModal");

 let span = document.getElementsByClassName("close")[0];

 let text = document.getElementById("text")

 span.onclick = function() {
    modal.style.display = "none";
 };

 window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
  };
};

  let luffy = document.createElement("img");
  luffy.src = "img/luffy.jpg";
  document.body.appendChild(luffy);
    luffy.onclick = function() {
    text.innerHTML = opModel.teksten[0];
    modal.style.display = "block";
  };

  let zoro = document.createElement("img");
  zoro.src = "img/zoro.jpg";
  document.body.appendChild(zoro);
  zoro.onclick = function() {
  text.innerHTML = opModel.teksten[1];
  modal.style.display = "block";
};

  let sanji = document.createElement("img");
  sanji.src = "img/sanji.jpg";
  document.body.appendChild(sanji);
  sanji.onclick = function() {
    text.innerHTML = opModel.teksten[2];
    modal.style.display = "block";
  };


  let nami = document.createElement("img");
  nami.src = "img/nami.jpg";
  document.body.appendChild(nami);
  nami.onclick = function() {
  text.innerHTML = opModel.teksten[3];
  modal.style.display = "block";
};

  let usopp = document.createElement("img");
  usopp.src = "img/usopp.jpg";
  document.body.appendChild(usopp);
  usopp.onclick = function() {
    text.innerHTML = opModel.teksten[4];
    modal.style.display = "block";
  };

  let chopper = document.createElement("img");
  chopper.src = "img/chopper.jpg";
  document.body.appendChild(chopper);
  chopper.onclick = function() {
    text.innerHTML = opModel.teksten[5];
    modal.style.display = "block";
  };

  let robin = document.createElement("img");
  robin.src = "img/robin.jpg";
  document.body.appendChild(robin);
  robin.onclick = function() {
    text.innerHTML = opModel.teksten[6];
    modal.style.display = "block";
  };

  let franky = document.createElement("img");
  franky.src = "img/franky.jpg";
  document.body.appendChild(franky);
  franky.onclick = function() {
    text.innerHTML = opModel.teksten[7];
    modal.style.display = "block";
  };

  let brook = document.createElement("img");
  brook.src = "img/brook.jpg";
  document.body.appendChild(brook);
  brook.onclick = function() {
    text.innerHTML = opModel.teksten[8];
    modal.style.display = "block";
  }

  let questionmark = document.createElement("img");
  questionmark.src = "img/questionmark.jpg";
  document.body.appendChild(questionmark);
  questionmark.onclick = function() {
    text.innerHTML = opModel.teksten[9];
    modal.style.display = "block";
  };

};
