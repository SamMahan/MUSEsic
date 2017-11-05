<div class="modal fade" id="create_album" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Create an Album:</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="post" action="{$smarty.const.WEB_PATH}album_list.php">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group {$successArray[0]}">
                            <label class="col-md-4 control-label" for="album_name">Album Name:</label>
                            <div class="col-md-4">
                                <input required = "required" id="album_name" name="album_name" type="text" class="form-control input-md" {$populateArray[0]}>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group {$successArray[1]}">
                            <label class="col-md-4 control-label" for="number_songs">Number of Song:</label>
                            <div class="col-md-4">
                                <input required = "required" id="number_songs" name="number_songs" type="text" class="form-control input-md" {$populateArray[1]}>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group {$successArray[2]}">
                            <label class="col-md-4 control-label" for="play_time">Total Play Time:</label>
                            <div class="col-md-4">
                                <input required = "required" id="play_time" name="play_time" type="text" class="form-control input-md" {$populateArray[2]}>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group {$successArray[3]}">
                            <label class="col-md-4 control-label" for="number_albums">Release Date:</label>
                            <div class="col-md-4">
                                <input required = "required" id="release_date" name="release_date" type="text" class="form-control input-md" {$populateArray[3]}>

                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>