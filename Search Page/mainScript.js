const API_KEY = 'b9b2dcd226424fc2acac1952598df07e' ;
const URL = 'https://api.rawg.io/api/games' ;

class Game{
    constructor(name , rating , image,icon){
        this.name = name ;
        this.rating = rating ;
        this.image = image ;
        this.icon=icon ;
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
                <p>Rating: ${game.rating}</p>
            </div>
        ` ;
        Cards.appendChild(card) ;
    }) ;
    document.getElementsByClassName('loader')[0].style.display = 'none' ;
}

convertToGame = (game) => {
    return new Game(game.name , game.rating , game.background_image ) ;
}



let retryCount = 0;
const MAX_RETRIES2 = 5;
const MAX_RETRIES1 = 10;

getRandomGame = () => {
    if (retryCount >= MAX_RETRIES1) {
        console.error('Max retries reached');
        document.getElementsByClassName('display')[0].innerHTML = '<p class= "errorMessage">Try Again Later :(</p>'
        document.getElementsByClassName('loader')[0].style.display = 'none';
        return;
    }

    console.log('Fetching random games');
    document.getElementsByClassName('loader')[0].style.display = 'block';
    const page = Math.floor(Math.random() * 5) + 1;
    const params = new URLSearchParams({
        key: API_KEY,
        page_size: 45,
        page: page,
    });

    fetch(`${URL}?${params}`)
        .then((res) => {
            if (!res.ok) {
                throw new Error(`HTTP error! status: ${res.status}`);
            }
            return res.json();
        })
        .then((data) => {
            retryCount = 0; // Reset retry count on success
            data.results.forEach((game) => {
                const convertedGame = convertToGame(game);
                displayGames([convertedGame]);
            });
        })
        .catch((err) => {
            console.error('Error fetching random games:', err);
            retryCount++;
            getRandomGame(); // Retry
        });
};

getRandomGame() ;

searchGame = () => {
    document.getElementsByClassName('cards')[0].innerHTML = '' ;
    if (retryCount >= MAX_RETRIES2) {
        console.error('Max retries reached');
        document.getElementsByClassName('cards')[0].innerHTML = '<p class= "errorMessage">Try Again Later :(</p>'
        document.getElementsByClassName('loader')[0].style.display = 'none';
        retryCount = 0;
        return;
    }

    console.log('Fetching search games');
    console.log('try count: ' + retryCount);
    document.getElementsByClassName('loader')[0].style.display = 'block';
    const page = Math.floor(Math.random() * 5) + 1;
    const params = new URLSearchParams({
        key: API_KEY,
        page_size: 45,
        page: page,
        search: document.getElementsByClassName('search')[0].value
    });

    fetch(`${URL}?${params}`)
        .then((res) => {
            if (!res.ok) {
                throw new Error(`HTTP error! status: ${res.status}`);
            }
            return res.json();
        })
        .then((data) => {
            retryCount = 0; // Reset retry count on success
            data.results.forEach((game) => {
                const convertedGame = convertToGame(game);
                displayGames([convertedGame]);
            });
        })
        .catch((err) => {
            console.error('Error fetching random games:', err);
            retryCount++;
            searchGame(); // Retry
        });
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
