const video = document.getElementById('video-play');
console.log('loaded script')

function playvideo() {
    video.play();
    console.log(localStorage.getItem('game'))
}