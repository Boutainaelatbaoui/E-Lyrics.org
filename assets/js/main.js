let more_modal  = document.querySelector('.more-modal');
let more_button = document.querySelector('#song-more-btn');
let modal_body  = document.querySelector('.modal-body');

function addSong(){
    document.getElementById('song-save-btn').style.display   = "block";
    document.getElementById('song-more-btn').style.display    = "block";
    document.getElementById('song-update-btn').style.display = "none";

    document.getElementById('form-song').reset();
}

function editSong(id){
    document.getElementById('song-save-btn').style.display   = "none";
    document.getElementById('song-more-btn').style.display   = "none";
    document.getElementById('song-update-btn').style.display = "block";

    document.getElementById("song-id").value = id;
    document.getElementById('song-title').value = document.getElementById(id).getAttribute("title");
    document.getElementById('song-album').value = document.getElementById(id).getAttribute("album");
    document.getElementById('song-artist').value = document.getElementById(id).getAttribute("artist");
    document.getElementById('song-year').value = document.getElementById(id).getAttribute("year");
    document.getElementById('song-lyrics').value = document.getElementById(id).getAttribute("lyrics");
}

more_button.addEventListener("click", () => {
    var clone = modal_body.cloneNode(true);
    clone.querySelector('.form-control').value = "";
    clone.querySelector('.a').value = "";
    clone.querySelector('.b').value = "";
    clone.querySelector('.c').value = "";
    clone.querySelector('.d').value = "";

    more_modal.append(clone);
})