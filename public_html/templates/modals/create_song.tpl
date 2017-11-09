<div class="modal fade" id="create_song" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Create a Song:</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="post" action="{$smarty.const.WEB_PATH}song_list.php">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group {$successArray[0]}">
                            <label class="col-md-4 control-label" for="song_name">Song Name:</label>
                            <div class="col-md-4">
                                <input required = "required" id="song_name" name="song_name" type="text" class="form-control required input-md" {$populateArray[0]}>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group {$successArray[1]}">
                            <label class="col-md-4 control-label" for="artist">Artist:</label>
                            <div class="col-md-4">
                                <input required = "required" id="artist" name="artist" type="text" class="form-control required input-md" {$populateArray[1]}>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group {$successArray[2]}">
                            <label class="col-md-4 control-label" for="album">Album:</label>
                            <div class="col-md-4">
                                <input required = "required" id="album" name="album" type="text" class="form-control required input-md" {$populateArray[2]}>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group {$successArray[3]}">
                            <label class="col-md-4 control-label" for="length">Length:</label>
                            <div class="col-md-4">
                                <input required = "required" id="length" name="length" type="text" class="form-control required input-md" {$populateArray[3]}>

                            </div>
                        </div>

                        <!-- File input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="song_upload">Upload Song:</label>
                            <div class="col-md-4">
                                <input id="fileUpload" name="song_upload" class="song_upload input-md" type="file">
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-default">Save Song</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>