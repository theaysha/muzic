const player_btn = document.getElementById('music_player');
const mini_player = document.querySelector('.mini_player');
let active = document.getElementById('active');
player_btn.onclick = () => {
    mini_player.classList.toggle('active');
}