fetch('https://e1e88bf09c12a0d95a826252ee32e063.m.pipedream.net')
    .then(response => response.json())
    .then(data => {
        localStorage.setItem('game', JSON.stringify(data));
    });


const video = document.getElementById('video-play');
console.log('loaded script');
const game = JSON.parse(localStorage.getItem('game'));

video.addEventListener('loadedmetadata', (e) => {
    console.log('lo')
    if (video.currentTime < game.currentTime) {
        video.play();
    } else {
        video.pause();
    }
})


function playvideo() {
    video.play();
}

// video.onplaying = () => {
//     console.log('playing');
//     while (true) {
//         if (video.currentTime == 0) {
//             video.play();
//             console.log('playing');
//             console.log(video.currentTime);
//             if (video.currentTime == game.currentTime) {
//                 console.log('paused')
//                 break;
//             }
//         }
//     }
//     video.pause();
// }


// while (true) {
//     if (video.currentTime == 0) {
//         video.play();
//         console.log('playing');
//         console.log(video.currentTime);
//         if (video.currentTime == game.currentTime) {
//             // console.log('paused')
//             video.pause();
//             break;
//         }
//     }
// }