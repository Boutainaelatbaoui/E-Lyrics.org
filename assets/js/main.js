function addSong(){
    document.getElementById('song-save-btn').style.display   = "block";
    document.getElementById('song-update-btn').style.display = "none";
    document.getElementById('song-delete-btn').style.display = "none";

    document.getElementById('form-song').reset();
}