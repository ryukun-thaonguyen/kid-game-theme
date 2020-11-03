// fetch api to get current game
fetch('https://b5bfd1e30120aeb3add84dc2e0f4b29d.m.pipedream.net/')
    .then(response => response.json())
    .then(data => {
        localStorage.setItem('game', JSON.stringify(data));
    });

Object.defineProperty(HTMLMediaElement.prototype, 'isPlaying', {
    get: function() {
        return !!(this.currentTime > 0 && !this.paused && !this.ended && this.readyState > 2);
    }
})
const video = document.getElementById('video-play');
console.log('loaded script');
const game = JSON.parse(localStorage.getItem('game'));
const timeControl = [0, 3, 7, 11, 15, 19, 23, 27];

video.addEventListener('loadedmetadata', (e) => {
    if (game.currentGame > 1) {
        video.currentTime = timeControl[game.currentGame];
        video.pause();
    } else {
        console.log('playing');
        video.play();
    }
});

video.addEventListener('playing', (e) => {
    console.log(video.isPlaying)
    var loop = setInterval(() => {
        console.log(video.currentTime);
        if (Math.round(video.currentTime) == timeControl[game.currentGame]) {
            console.log('paused');
            video.pause();
            clearInterval(loop);
        }
    }, 900)
});

function playvideo() {
    video.play();
}

