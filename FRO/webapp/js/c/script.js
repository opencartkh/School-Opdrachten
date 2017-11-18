var opController={};

opController.init=function(){
  opModel.init();
  opView.init();
};

window.addEventListener("load",opController.init);
