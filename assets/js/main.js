function addSong(){
    document.getElementById('song-save-btn').style.display   = "block";
    document.getElementById('song-update-btn').style.display = "none";
    document.getElementById('song-delete-btn').style.display = "none";

    document.getElementById('form-song').reset();
}

function editSong(){
    document.getElementById('product-save-btn').style.display   = "none";
    document.getElementById('product-update-btn').style.display = "block";
    document.getElementById('product-delete-btn').style.display = "block";
}