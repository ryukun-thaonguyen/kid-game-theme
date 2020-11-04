// fetch api to get current game

fetch('https://b5bfd1e30120aeb3add84dc2e0f4b29d.m.pipedream.net/')
    .then(response => response.json())
    .then(data => {
        if (!localStorage.getItem('game')) {
            localStorage.setItem('game', JSON.stringify(data));
        }
    });


const video = document.getElementById('video-play');
console.log('loaded script');
const timeControl = [0, 3, 7, 11, 15, 19, 23, 27];


video.addEventListener('loadedmetadata', (e) => {
    var game = getGame();
    video.currentTime = timeControl[game.currentGame];
    video.play();

});

video.addEventListener('playing', (e) => {
    var loop = setInterval(() => {
        var game = getGame();
        console.log('g ' + game.currentGame)
        if (video.currentTime >= timeControl[game.currentGame]) {
            console.log('paused');
            video.currentTime = timeControl[game.currentGame] - 0.6;
        }
    }, 900)
});

function playvideo() {
    var game = getGame();
    postData('https://b5bfd1e30120aeb3add84dc2e0f4b29d.m.pipedream.net/', { 'currentGame': game.currentGame, 'isFinished': !game.isFinished })
        .then(data => {
            console.log(data);
            setGame(data);
        })
}

function nextGame(data) {
    var loop = setInterval(() => {
        var game = getGame();
        console.log(video.currentTime);
        if (data.currentGame == game.currentGame) {
            video.currentTime = timeControl[game.currentGame] - 0.75;
        } else {
            if (Math.round(video.currentTime) == timeControl[data.currentGame]) {
                setGame(data);
                console.log('paused');
            }
        }
    }, 900)
}

Object.defineProperty(HTMLMediaElement.prototype, 'isPlaying', {
    get: function() {
        return !!(this.currentTime > 0 && !this.paused && !this.ended && this.readyState > 2);
    }
})
async function postData(url = '', data = {}) {
    const response = await fetch(url, {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        credentials: 'same-origin',
        headers: {
            'Content-Type': 'application/json'
        },
        redirect: 'follow',
        referrerPolicy: 'no-referrer',
        body: JSON.stringify(data)
    });
    return response.json();
}

function setGame(data) {
    localStorage.setItem('game', JSON.stringify(data));
}

function getGame() {
    return JSON.parse(localStorage.getItem('game'));
}