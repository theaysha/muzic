// const player_btn = document.getElementById('music_player');
// const mini_player = document.querySelector('.mini_player');
// let active = document.getElementById('active');
// player_btn.onclick = () => {
//     mini_player.classList.toggle('active');
// }

let play_btn = document.getElementById("player_btn");
let audio =  new Audio();


player_btn.addEventListener('click', ()=>{
    if(audio.paused) {
        audio.play();
        player_btn.classList.remove("bx-play-circle");
        player_btn.classList.add("bx-pause-circle");
 }
 else{
    
        audio.pause();
        player_btn.classList.add("bx-play-circle");
        player_btn.classList.remove("bx-pause-circle");
 
 
 }
})

async function fetxh(){
    let a = await fetch("http://localhost/muzic/fetch.php");
    let data = await a.json();
    console.log(data[4].audiofilename); 
    play_btn.addEventListener('click',()=>{
        audio.src = `upload/${data[4].audiofilename}`;
        audio.play();
    })   
}

fetxh();

