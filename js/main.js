// const player_btn = document.getElementById('music_player');
// const mini_player = document.querySelector('.mini_player');
// let active = document.getElementById('active');
// player_btn.onclick = () => {
//     mini_player.classList.toggle('active');
// }

let player_btn = document.getElementById("player_btn");
let audio =  new Audio();
let card_btn = Array.from(document.querySelectorAll('.card_content button'));


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
    console.log(data);
    card_btn.forEach((elem,idx)=>{
        elem.addEventListener('click',(ab)=>{
            idx = parseInt(ab.target.id)
            console.log(idx)
            sname = ab.target = data[idx].musicname;
            singname = ab.target = data[idx].singername;
            adfile = ab.target = data[idx].audiofilename;
            imgfile = ab.target = data[idx].imagefilename;
            audio.src = `upload/${adfile}`;
            audio.play();
        })
    })
      
}

fetxh();

