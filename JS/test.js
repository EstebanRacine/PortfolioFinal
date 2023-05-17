var games = document.getElementById('gamesDiv');
var music = document.getElementById('musicDiv');
var theatre = document.getElementById('theatreDiv');
let changementMusic = setInterval(changeMusic, 4000);
let changementGames = setInterval(changeGames, 5000);
let changementTheatre = setInterval(changeTheatre, 6500);


function changeGames(){
    var backGames = games.style.backgroundImage;
    console.log(backGames);
    if (backGames === 'url("../images/passions/games/games1.jpg")'){
        games.style.backgroundImage = 'url("../images/passions/games/games2.jpg")';
    }else if (backGames === 'url("../images/passions/games/games2.jpg")'){
        games.style.backgroundImage = 'url("../images/passions/games/games3.jpg")';
    }else {
        games.style.backgroundImage = 'url("../images/passions/games/games1.jpg")';
    }
}

function changeMusic(){
    var backMusic = music.style.backgroundImage;
    console.log(backMusic);
    if (backMusic === 'url("../images/passions/music/music1.jpg")'){
        music.style.backgroundImage = 'url("../images/passions/music/music2.jpg")';
    }else if (backMusic === 'url("../images/passions/music/music2.jpg")'){
        music.style.backgroundImage = 'url("../images/passions/music/music3.jpg")';
    }else {
        music.style.backgroundImage = 'url("../images/passions/music/music1.jpg")';
    }
}

function changeTheatre(){
    var backTheatre = theatre.style.backgroundImage;
    console.log(backTheatre);
    if (backTheatre === 'url("../images/passions/theatre/theatre1.jpg")'){
        theatre.style.backgroundImage = 'url("../images/passions/theatre/theatre2.jpg")';
    }else if (backTheatre === 'url("../images/passions/theatre/theatre2.jpg")'){
        theatre.style.backgroundImage = 'url("../images/passions/theatre/theatre3.jpg")';
    }else {
        theatre.style.backgroundImage = 'url("../images/passions/theatre/theatre1.jpg")';
    }
}