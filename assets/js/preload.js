const url="http://localhost/manh/theme";
fetch('https://b5bfd1e30120aeb3add84dc2e0f4b29d.m.pipedream.net/')
    .then(response => response.json())
    .then(data => {
        var game= getGame();
        if (!game) {
            setGame(data);
            setGameCompleted(data.currentGame);
        }else{
            if(document.getElementById('iframe_game')){
                document.getElementById('iframe_game').src=url+"/games/page/?id="+game.id;
                document.getElementById('link-game').href=url+"/games/page/?p="+game.id;
                document.getElementById('current_game').innerHTML= game.level;
                setGameCompleted(game.currentGame);
            }  
        }
    });
   
const video = document.getElementById('video-play');
console.log('loaded script');
const timeControl = [0, 3, 7, 11, 15, 19, 23, 27, 31];

if(video){
video.addEventListener('loadedmetadata', (e) => {
    var game = getGame();
    video.currentTime = timeControl[game.currentGame-1];
    video.play();
    // if(game.currentGame==8){
    //     document.getElementById('level').style.display='block';
    // }
});

video.addEventListener('playing', (e) => {
    var loop = setInterval(() => {
        var game = getGame();
        // console.log('g ' + game.currentGame)
        if (video.currentTime >= timeControl[game.currentGame]) {
            if(game.currentGame==8){
                document.getElementById('level').style.display='block';
            }
            console.log('paused');
            video.currentTime = timeControl[game.currentGame] - 0.6;
            
        }
    }, 900)
});
}

function nextLevel(){
    var game = getGame();
    postData('https://b5bfd1e30120aeb3add84dc2e0f4b29d.m.pipedream.net/', 
    { 
        'currentGame': game.currentGame, 
        'isFinished': !game.isFinished,
        'id': game.id,
        'level':game.level
    }).then(data=>{
        setGame(data);
        window.location.reload();
    })
}
function finishGame(){
    var game = getGame();
    postData('https://b5bfd1e30120aeb3add84dc2e0f4b29d.m.pipedream.net/', 
    { 
        'currentGame': game.currentGame, 
        'isFinished': !game.isFinished,
        'id': game.id,
        'level':game.level
    }).then(data=>{
        setGame(data);
        window.location.assign(url+'/games');
    })
}
function playvideo() {
    var game = getGame();
    postData('https://b5bfd1e30120aeb3add84dc2e0f4b29d.m.pipedream.net/', 
    { 
        'currentGame': game.currentGame, 
        'isFinished': !game.isFinished,
        'id': game.id,
        'level':game.level
    })
        .then(data => {
            console.log(data);
            setGame(data);
        })
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
    if(data.id && document.getElementById('iframe_game')){
        document.getElementById('iframe_game').src=url+"/games/page/?id="+data.id;
        document.getElementById('link-game').href=url+"/games/page/?p="+data.id;
    }

    
}

function getGame() {
    return JSON.parse(localStorage.getItem('game'));
}

var timerVar = setInterval(countTimer, 1000);
var totalSeconds = 6696;
function countTimer() {
    if(document.getElementById("counttimer")){
           ++totalSeconds;
           var hour = Math.floor(totalSeconds /3600);
           var minute = Math.floor((totalSeconds - hour*3600)/60);
           var seconds = totalSeconds - (hour*3600 + minute*60);
           if(hour < 10)
             hour = "0"+hour;
           if(minute < 10)
             minute = "0"+minute;
           if(seconds < 10)
             seconds = "0"+seconds;
           document.getElementById("counttimer").innerHTML = hour + ":" + minute + ":" + seconds;
        }
    }
countTimer();



function setGameCompleted(current){
    if(document.getElementById("game_completed")){
     document.getElementById("progess").style.width=Number((current-1)*100/7)+'%';
     document.getElementById("progess").innerHTML=Number(current-1)+"/7";

    var display='';
    for(var i=1;i<current;i++){
         display+='<a href="'+url+'/game/page/?p='+14+'"><div class="numberCircle hvr-bounce-in" ><span>'+Number(i)+'</span></div></a>';
    }
    document.getElementById("game_completed").innerHTML=display;
}}
