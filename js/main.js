    const mini_player_btn = document.getElementById('music_player');
const mini_player = document.querySelector('.mini_player');
let active = document.getElementById('active');
mini_player_btn.onclick = () => {
    mini_player.classList.toggle('active');
}

let main = 0;
let player_btn = document.getElementById("player_btn");
let player_prev = document.getElementById('prev');


let player_nxt = document.getElementById('next');
let music_btn = document.getElementById("music_btn");
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
let min_duration = document.querySelector('#min_duration');
let mini_player_ground = document.querySelector('.mini_player');
let wname = document.getElementById('wname');
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

music_btn.addEventListener('click', ()=>{
    if(audio.paused) {
        audio.play();
        music_btn.classList.remove("bx-play-circle");
        music_btn.classList.add("bx-pause-circle");
    }
    else{
        
        audio.pause();
        music_btn.classList.add("bx-play-circle");
        music_btn.classList.remove("bx-pause-circle");
        
        
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
                main_duration.innerHTML = calc;
                min_duration.innerHTML = `//${calc} //`;
                console.log(player_duration.value = calc);
                       audio.addEventListener('timeupdate' , ()=>{
                        duration_value = parseInt((audio.currentTime/audio.duration)*100);
                        // console.log(audio.duration);
                        // console.log(audio.currentTime);
                        player_duration.value = duration_value;
                        let tem = Math.round (parseInt(audio.currentTime));
                        runtime.innerHTML = Math.round(parseInt(audio.currentTime))
                        if(tem <= 9){
                            runtime.innerHTML = `00:0${tem}`;
                        }else{
                            runtime.innerHTML = `00:${tem}`;
                            if(tem >= 60){
                                let a = Math.floor(audio.currentTime/60);
                                let b = Math.floor(audio.currentTime - a*60)
                                runtime.innerHTML =`0${a}:0${b}`;
                                if(b>=10){
                                    runtime.innerHTML =`0${a}:${b}`;
                                }


                            }
                        }
                       })

                       player_duration.addEventListener('input', ()=>{
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
                main_duration.innerHTML = calc;
                min_duration.innerHTML = `//${calc} //`;
                console.log(player_duration.value = calc);
                       audio.addEventListener('timeupdate' , ()=>{
                        duration_value = parseInt((audio.currentTime/audio.duration)*100);
                        // console.log(audio.duration);
                        // console.log(audio.currentTime);
                        player_duration.value = duration_value;
                        let tem = Math.round (parseInt(audio.currentTime));
                        runtime.innerHTML = Math.round(parseInt(audio.currentTime))
                        if(tem <= 9){
                            runtime.innerHTML = `00:0${tem}`;
                        }else{
                            runtime.innerHTML = `00:${tem}`;
                            if(tem >= 60){
                                let a = Math.floor(audio.currentTime/60);
                                let b = Math.floor(audio.currentTime - a*60)
                                runtime.innerHTML =`0${a}:0${b}`;
                                if(b>=10){
                                    runtime.innerHTML =`0${a}:${b}`;
                                }


                            }
                        }
                       })

                       player_duration.addEventListener('input', ()=>{
                        audio.currentTime = (player_duration.value * audio.duration) / 100
                       })
            })
            song.innerText = sname;
            container.style.background = `radial-gradient(rgba(0,0,0,0),rgba(0,0,0,1)),url('upload/${imgfile}')`;
            container.style.backgroundSize = "cover";
           mini_player_ground.style.background = `radial-gradient(rgba(0,0,0,0),rgba(0,0,0,1)),url('upload/${imgfile}')`;
           mini_player_ground.style.backgroundSize = "cover";
           player_btn.classList.remove("bx-play-circle");
           player_btn.classList.add("bx-pause-circle");

            player_nxt.onclick = () => {
                main++;
                if(main >= data.length){
                    main = 0;
                }

                nxt = data[main].musicname;
                nxt_file = data[main].audiofilename;
                nxt_img = data[main].imagefilename;
                
                wname.innerHTML = nxt;
                mini_player_ground.style.background = `radial-gradient(rgba(0,0,0,0),rgba(0,0,0,1)),url('upload/${nxt_img}')`;
                audio.src = `upload/${nxt_file}`
                console.log(nxt_file)
                mini_player_ground.style.backgroundSize = "cover";
                
            }

            player_prev.onclick = () => {
               main--;
               prev = data[main].musicname;
                prev_file = data[main].audiofilename;
                prev_img = data[main].imagefilename;
                
                wname.innerHTML = prev;
                mini_player_ground.style.background = `radial-gradient(rgba(0,0,0,0),rgba(0,0,0,1)),url('upload/${prev_img}')`;
                audio.src = `upload/${prev_file}`
                console.log(prev_file)
                mini_player_ground.style.backgroundSize = "cover";
  

            }
            




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


