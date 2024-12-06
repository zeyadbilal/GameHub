const API_KEY = 'b9b2dcd226424fc2acac1952598df07e' ;
const URL = 'https://api.rawg.io/api/games' ;

class Game{
    constructor(name , rating , image){
        this.name = name ;
        this.rating = rating ;
        this.image = image ;
    }
}

window.addEventListener('scroll', () => {
    if (window.innerHeight + window.scrollY >= document.documentElement.scrollHeight) {
        getRandomGame();
    }
});

displayGames = (games) => {
    const Cards = document.querySelector('.cards') ;
    games.forEach(game => {
        const card = document.createElement('div') ;
        card.classList.add('card') ;
        game.rating = game.rating || 'N/A' ;
        card.innerHTML = `
            <div class="container">
                <img src="${game.image}" alt="${game.name}">
            </div>
            <div class="details">
                <h3>${game.name}</h3>
                <p>${game.rating}</p>
            </div>
        ` ;
        Cards.appendChild(card) ;
    }) ;
}

convertToGame = (game) => {
    return new Game(game.name , game.rating , game.background_image) ;
}



getRandomGame = () => {
    const page = Math.floor(Math.random() * 5) + 1;
    const parms = new URLSearchParams(
        {
            key : API_KEY, 
            page_size : 45,
            page : page
        }
    ) ;
    fetch(`${URL}?${parms}`)
    .then(res => res.json())
    .then(res => {
        res.results.forEach(game => {
            const convertedGame = convertToGame(game) ;
            displayGames([convertedGame]) ;
        })
    })
}

getRandomGame() ;

searchGame = () => {
    const search = document.querySelector('.search').value ;
    document.querySelector('.cards').innerHTML = '' ;
    const page = Math.floor(Math.random() * 5) + 1;
    const parms = new URLSearchParams(
        {
            key : API_KEY, 
            page_size : 45,
            page : page,
            search : search,
            ordering : '-rating'
        }
    ) ;
    fetch(`${URL}?${parms}`)
    .then(res => res.json())
    .then(res => {
        if(res.results.length === 0){
            search.value = '' ;
            alert('No games found') ;
            getRandomGame();
            return ;
        }
        else{res.results.forEach(game => {
            const convertedGame = convertToGame(game) ;
            displayGames([convertedGame]) ;
        })}
        search.value = '' ;
    })
}

let scrollUp = document.getElementById("returnToTopBtn");

window.onscroll = function() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    scrollUp.style.display = "block";
  } else {
    scrollUp.style.display = "none";
  }
};

scrollUp.onclick = function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
};
