<div class="modal" id="create_playlist">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Create Playlist</h4>
            </div>
                <form>


                <fieldset>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label" for="inputDefault">Name</label>
                            <input name="playlist_name" class="form-control" id="playlist-name" type="text" required="required">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Number of Songs</label>
                            <input name="song_count" class="form-control form-control-sm" id="playlist-num-songs" type="text" required="required">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Run Time</label>
                            <input name="time" class="form-control form-control-sm" id="playlist-runtime" type="text" required="required">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" id="create_playlist_submit" type="submit">Create</button>
                        <button id="new-playlist" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    </div>
                </fieldset>
                </form>
        </div>
    </div>
</div>