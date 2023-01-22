<div class="modal fade" id="modal-song">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="./code/lyricsController.php" method="POST" id="form-song" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title fw-bold">Add New Song</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input  type="hidden" name="id" id="song-id">
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
									<label class="form-label">Title</label>
									<input type="text" class="form-control" name="title[]" id="song-title" required data-parsley-minlength="3" data-parsley-trigger="keyup"/>
                                </div>
                                <div class="col-md-6 col-sm-12">
									<label class="form-label">Album</label>
									<input type="text" class="form-control" name="album[]" id="song-album" required data-parsley-minlength="3" data-parsley-trigger="keyup"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <label class="form-label">Artist</label>
                                    <input type="text" class="form-control" name="artist[]" id="song-artist" required data-parsley-minlength="3" data-parsley-trigger="keyup"/>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="form-label">Year</label>
                                    <input type="number" class="form-control" name="year[]" id="song-year" required data-parsley-min="1" data-parsley-trigger="keyup"/>
                                </div>
                            </div>
							<div class="mb-3">
								<label class="form-label">Lyrics</label>
								<textarea class="form-control" rows="8" name="lyrics[]" id="song-lyrics" required data-parsley-minlength="6" data-parsley-trigger="keyup"></textarea>
							</div>				
					</div>
					<div class="more-modal">

					</div>	
					<div class="modal-footer">
						<a href="#" class="btn btn-secondary" data-bs-dismiss="modal" id="song-cancel-btn">Cancel</a>
						<button type="button" class="btn song-action-btn" id="song-more-btn"><i class="bi bi-plus"></i> Add more</button>
						<button type="submit" name="update" class="btn btn-warning song-action-btn" id="song-update-btn">Update</a>
						<button type="submit" name="save" class="btn btn-primary song-action-btn" id="song-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
