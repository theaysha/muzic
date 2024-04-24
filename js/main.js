    const mini_player_btn = document.getElementById('music_player');
const mini_player = document.querySelector('.mini_player');
let active = document.getElementById('active');
mini_player_btn.onclick = () => {
    mini_player.classList.toggle('active');
}

let player_btn = document.getElementById("player_btn");
let audio =  new Audio();
let card_btn = Array.from(document.querySelectorAll('.card_content button'));
let singer = document.querySelector('.container h3');
let song =document.querySelector('.container h1');
let container = document.getElementById('home');
let vol = document.getElementById('volume');
let dura = document.querySelector('.card_content .duration');
let main_duration = document.getElementById('main_duration');
let player_duration = document.getElementById('play');
let runtime = document.getElementById('runtime');
let secc = 0;
let minn = 0;
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
            singer.innerText =singname;
            audio.src = `upload/${adfile}`;
            audio.play();
            audio.addEventListener('loadedmetadata', ()=>{
                let duration = audio.duration;
                let min = "0" + Math.floor(duration / 60);
                let sec = "0" + Math.floor(duration - min  * 60)
                let calc = min.substr(-2) + ":" + sec.substr(-2);
                console.log(calc);
                main_duration.innerHTML = calc;
                console.log(player_duration.value = calc);
                       audio.addEventListener('timeupdate' , ()=>{
                        duration_value = parseInt((audio.currentTime/audio.duration)*100);
                        // console.log(audio.duration);
                        // console.log(audio.currentTime);
                        player_duration.value = duration_value;
                        let tem = Math.floor(audio.currentTime);
                        if(tem <= 9){
                            runtime.innerHTML = `00:0${tem}`;
                        }else{
                            runtime.innerHTML = `00:${tem}`;
                            if(tem <= 59){
                                runtime.innerHTML = `00:${tem}`;
                            }
                        }
                       })

                       player_duration.addEventListener('change', ()=>{
                        audio.currentTime = (player_duration.value * audio.duration) / 100
                       })
            })
            song.innerText = sname;
            container.style.background = `radial-gradient(rgba(0,0,0,0),rgba(0,0,0,1)),url('upload/${imgfile}')`;
            container.style.backgroundSize = "cover";
            player_btn.classList.remove("bx-play-circle");
            player_btn.classList.add("bx-pause-circle");
        })
    })
      
}

vol.addEventListener('input',()=>{
    let vol_Val = vol.value/100
    console.log(vol_Val)
     audio.volume = vol_Val;

})


console.log(audio.volume);

fetxh();

