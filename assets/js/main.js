let more_modal = document.querySelector('.more-modal');

function addSong(){
    document.getElementById('song-save-btn').style.display   = "block";
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

function addMore() {
    let another_modal = `
        <input  type="hidden" name="song-id" id="song-id">
        <div class="row mb-3">
            <div class="col-md-6 col-sm-12">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title[]" id="song-title"/>
            </div>
            <div class="col-md-6 col-sm-12">
                <label class="form-label">Album</label>
                <input type="text" class="form-control" name="album[]" id="song-album"/>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 col-sm-12">
                <label class="form-label">Artist</label>
                <input type="text" class="form-control" name="artist[]" id="song-artist"/>
            </div>
            <div class="col-md-6 col-sm-12">
                <label class="form-label">Year</label>
                <input type="number" class="form-control" name="year[]" id="song-year"/>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Lyrics</label>
            <textarea class="form-control" rows="8" name="lyrics[]" id="song-lyrics"></textarea>
        </div>
        <div class="mb-3">
            <a href="#" class="btn song-action-btn" id="song-more-btn" onclick="addMore()"><i class="bi bi-plus"></i> Add more</a>
        </div>
    `;
    more_modal.innerHTML += another_modal;
}