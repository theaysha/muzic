    // const player_btn = document.getElementById('music_player');
// const mini_player = document.querySelector('.mini_player');
// let active = document.getElementById('active');
// player_btn.onclick = () => {
//     mini_player.classList.toggle('active');
// }

let player_btn = document.getElementById("player_btn");
let audio =  new Audio();
let card_btn = Array.from(document.querySelectorAll('.card_content button'));
let singer = document.querySelector('.container h3');
let song =document.querySelector('.container h1');
let container = document.getElementById('home');

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
            let ex_idx = parseInt(ab.target.id)
            console.log(idx)
            
            sname = ab.target = data[idx].musicname;
            singname = ab.target = data[idx].singername;
            adfile = ab.target = data[idx].audiofilename;
            imgfile = ab.target = data[idx].imagefilename;
            audio.src = `upload/${adfile}`;
            singer.innerText =singname;
            song.innerText = sname;
            container.style.background = `radial-gradient(rgba(0,0,0,0),rgba(0,0,0,1)),url('upload/${imgfile}')`;
            container.style.backgroundSize = "cover";
            audio.play();
        })
    })
      
}

fetxh();

