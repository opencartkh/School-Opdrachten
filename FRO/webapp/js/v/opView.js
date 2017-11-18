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
    text.innerHTML = "Luffy is the captain of the Straw Hat Pirates and is best friends with all of them and values them over all else. At first glance, Luffy does not appear to be very intelligent, often seeing things in childish manner and can easily be amazed by the simplest things. However, because he views the world in a straightforward and simple manner, he is occasionally the only person who can see past the events and see what should be done. Luffy's dream is to find the One Piece and become Pirate King. He knows that to achieve his goal, he will have to defeat many strong opponents, including the World Government and his childhood hero Shanks.";
    modal.style.display = "block";
  };

  let zoro = document.createElement("img");
  zoro.src = "img/zoro.jpg";
  document.body.appendChild(zoro);
  zoro.onclick = function() {
  text.innerHTML = "Zoro was the first crew member to be recruited by Luffy. Zoro is a skilled swordsman who fights with his own unique sword style known as santoryu (three katana fighting style).This is achieved by using one katana in each hand and another in his mouth. He is also seen fighting with only one or two swords. When in a serious fight he ties his bandana, normally tied on the arm, on his head. Zoro is very vigorous, strong-willed, and determined.";
  modal.style.display = "block";
};

  let sanji = document.createElement("img");
  sanji.src = "img/sanji.jpg";
  document.body.appendChild(sanji);
  sanji.onclick = function() {
    text.innerHTML = "Sanji is the chain-smoking chef of the Straw Hat Pirate Crew. He has superb fighting skills that only make use of his legs, in an effort to minimize damage to his hands which would impair his cooking skills. His goal in life is to find the All Blue, a legendary ocean, which contains all the fish in the world. As such, it would be paradise for any cook with as much love for his work as Sanji, who holds great respect for the tools, ingredients, and art of cooking. So great is his devotion to his calling, that Sanji will not let any person or creature starve, regardless of them being friend or foe.";
    modal.style.display = "block";
  };


  let nami = document.createElement("img");
  nami.src = "img/nami.jpg";
  document.body.appendChild(nami);
  nami.onclick = function() {
  text.innerHTML = "She is the first member of the Straw Hat Pirates to appear (in the anime), but the third to align herself with the crew, and the fifth to actually join. Possibly one of the best (or even the best) navigators currently sailing the Grand Line, she has the ability to recognize and analyze even the slightest changes in the weather through sheer intuition, thus saving the ship and the crew from the very unstable Grand Line weather on multiple occasions.Nami also tries to avoid fights, and is one of the less adventurous and brave members of the crew. However, since the invention of her Clima Tact (A weapon that forms weather patterns), she is now seen fighting her own battles instead of becoming the 'easy target', as she doesn't want to be the one being saved anymore.";
  modal.style.display = "block";
};

  let usopp = document.createElement("img");
  usopp.src = "img/usopp.jpg";
  document.body.appendChild(usopp);
  usopp.onclick = function() {
    text.innerHTML = "Usopp is a liar and likes to play pranks on his crew members or just goof off with Luffy and Chopper. He loves to tell tall tales to Chopper (who believes him blindly) or anyone who's listening. The other aspect of Usopp besides his lying is his cowardice; he is a very timid person, or so he thinks. In extremely stressful situations, Usopp has proven to be far more courageous than he believes himself to be. He shows great resolve when his friends are threatened or mocked by outsiders. Usopp has outstanding marksmanship abilities with his slingshot and is on his way to becoming one of the best snipers in the One Piece world, although his goal in life is to become a proud and strong pirate like his father Yasopp of the Red Haired Pirate Crew.";
    modal.style.display = "block";
  };

  let chopper = document.createElement("img");
  chopper.src = "img/chopper.jpg";
  document.body.appendChild(chopper);
  chopper.onclick = function() {
    text.innerHTML = "He is the Straw Hat crew's general physician despite being a reindeer. After a set of unusual circumstances, he ate the Hito Hito no Mi (Human Human Fruit), which permitted him the ability to speak, think, and, to a limited extent, change into a human. Chopper is more or less on a journey to define himself, seeing almost anybody on his crew as a role model. This, combined with his naiveness, often causes him to imitate the other Straw Hats' actions, no matter how obviously silly. Although he is the crew's doctor he wasn't originally hired by Luffy for that purpose. But actually, in Luffy's words, for being 'cool reindeer that can transform.'";
    modal.style.display = "block";
  };

  let robin = document.createElement("img");
  robin.src = "img/robin.jpg";
  document.body.appendChild(robin);
  robin.onclick = function() {
    text.innerHTML = "Robin is the seventh member of Straw Hat's Crew. She had a bounty of 79 million beri (One Piece currency) since she was eight years old, during an incident in which she supposedly destroyed six Buster Call ships through the use of the powers she gained by the eating the Hana Hana no Mi (Flower Flower or Blooming Blooming Fruit). The fruit's power enables her to conjure up multiple replicas of her body parts (most often her arms) upon any surface she is able to see making her very powerful and dexterous as a result. Robin joined the Straw Hat Pirates after Luffy saved her life, or (how she states it) Luffy forced her to live when she wanted to die. To atone for his crime, Robin demands that Luffy allow her to join his crew, to which he complies leaving every other crew member except Sanji in shock. Although feared at first, she is quickly accepted and viewed as a comrade by the crew.";
    modal.style.display = "block";
  };

  let franky = document.createElement("img");
  franky.src = "img/franky.jpg";
  document.body.appendChild(franky);
  franky.onclick = function() {
    text.innerHTML = "Franky is a 34 year old cyborg who is the shipwright of the Straw Hat Pirates and their second most recently recruited member. He first appeared in the Water 7 arc. Franky is one of 'Tom's Workers', with original name 'Cutty Flam'.Franky's dream is to build a ship that would travel to the end of the Grand Line. This is the ship that the Straw Hats are currently riding, but his dream is not yet achieved until they make it to the end. Franky usually acts tough and is quickly angered, but he is also very emotional when it comes to sad tales and often bursts into large tears, or on some occasions, plays a song. His most distinguishable personality trait is his flamboyant attitude. He frequently shouts the word 'SUPER' when he's in a positive mood, or adds it into his speech. He also has a signature pose which he uses very often.";
    modal.style.display = "block";
  };

  let brook = document.createElement("img");
  brook.src = "img/brook.jpg";
  document.body.appendChild(brook);
  brook.onclick = function() {
    text.innerHTML = "Brook known as the 'Gentleman Skeleton', is a pirate inhabiting the Florian Triangle region of the Grand Line. Although he claims to be a gentleman, and talks in the dialect of one, Brook's etiquette has severely degenerated over the course of his isolation. He's a skilled musician (something Luffy has always wanted in his crew since the beginning), fond of playing the violin. Due to his light weight he can not only jump to incredible heights but can run on water by moving his legs furiously. He uses a shikomizue as his main weapon; with it, he is able to make swift iaidō attacks that the enemy cannot notice.";
    modal.style.display = "block";
  }

  let questionmark = document.createElement("img");
  questionmark.src = "img/questionmark.jpg";
  document.body.appendChild(questionmark);
  questionmark.onclick = function() {
    text.innerHTML = "Who'll be the new member of the Straw Hat Pirates? Will it be Jinbei who made a promise to Luffy that he'll join once his business is finished? Or will it be someone else? That's only an answer that Oda knows, we can only guess....";
    modal.style.display = "block";
  };

};
