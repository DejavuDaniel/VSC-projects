let pokeName = [];
let pokeId = [];
let pokeImg = [];
let pokeType = [];
let pokeMove = [];

let pokeCount = [];
for(let i = 1; i < 21; i++) pokeCount = [...pokeCount, i];

const _FetchPokes = async () => {
  for await (const poke of pokeCount) {
    await fetch(`https://pokeapi.co/api/v2/pokemon/${poke}/`)
      .then(Response => Response.json())
      .then(data => {
        pokeId.push(data['id']);
        pokeName.push(data['name']);
        pokeType.push(data['types'][0]['type']['name']);
        pokeMove.push(data['moves'][0]['move']['name']);
        pokeImg.push(data['sprites']['front_default']);
      });
  }
  let body = document.getElementsByTagName("body")[0];

  let HTML = "";
  HTML += '<div class="container">';
  let cardColor = [["l1", "info"], ["l2", "success"], ["l3", "primary"], ["l4", "dark"], ["l5", "warning"], ["l6", "danger"], ["l7", "secondary"]];
  let shine = ["","shine"];
  for (let i = 0; i < 20; i++) {

      HTML += `<div class="card-size" >
      <div class="card zone  ${shine[Math.floor(Math.random()*2)+1]}" id="logo" style="width: 18rem;background-image:url('image/${cardColor[Math.floor(Math.random()*7)][0]}.png');">
      <img class="card-img-top photo" src="${pokeImg[i]}" alt="Card image cap">
      <div class="card-body text-${cardColor[Math.floor(Math.random()*7)][1]}">
        <p class="card-text id">ID: ${pokeId[i]}</p>
        <p class="card-text name">Name: ${pokeName[i]}</p>
        <p class="card-text">Type: ${pokeType[i]} <br>
         Move: ${pokeMove[i]}</p>
        </div>
      </div>
    </div>`
  }
  
  HTML += '</div>';
  body.innerHTML += HTML;
}


function deckClick() {
  document.getElementById("pokiDeck").style.display="none";
  document.getElementById("dvv").style.display="none";
  _FetchPokes()
}

jQuery(document).ready(function(){
  $('h1').mousemove(function(e){
    var rXP = (e.pageX - this.offsetLeft-$(this).width()/2);
    var rYP = (e.pageY - this.offsetTop-$(this).height()/2);
    $('h1').css('text-shadow', +rYP/10+'px '+rXP/80+'px rgba(227,6,19,.8), '+rYP/8+'px '+rXP/60+'px rgba(255,237,0,1), '+rXP/70+'px '+rYP/12+'px rgba(0,159,227,.7)');
  });
});