<div class="modal fade" id="modal-song">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form-song">
					<div class="modal-header">
						<h5 class="modal-title fw-bold">Add New Song</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input  type="hidden" name="song-id" id="song-id">
							<div class="mb-3">
								<label class="form-label">Title</label>
								<input type="text" class="form-control" name="title" id="song-title"/>
							</div>
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <label class="form-label">Artist</label>
                                    <select class="form-select" name="artist" id="song-artist">
                                        <option value="">Please select</option>
                                        <option value="1">Piano</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="form-label">Year</label>
                                    <input type="number" class="form-control" name="year" id="song-year"/>
                                </div>
                            </div>
                            <div class="mb-3">
								<label class="form-label">Album</label>
								<input type="text" class="form-control" name="album" id="song-album"/>
							</div>
							<div class="mb-0">
								<label class="form-label">Lyrics</label>
								<textarea class="form-control" rows="8" name="lyrics" id="song-lyrics"></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-secondary" data-bs-dismiss="modal" id="song-cancel-btn">Cancel</a>
						<button type="submit" name="delete" class="btn btn-danger song-action-btn" id="song-delete-btn">Delete</a>
						<button type="submit" name="update" class="btn btn-warning song-action-btn" id="song-update-btn">Update</a>
						<button type="submit" name="save" class="btn btn-primary song-action-btn" id="song-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>