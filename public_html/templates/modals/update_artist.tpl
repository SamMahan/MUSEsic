<div class="modal fade" id="update_artist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Update Artist:</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="post" action="{$smarty.const.WEB_PATH}artist_list.php">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group {$successArray[0]}">
                            <label class="col-md-4 control-label" for="artist_name">Artist Name:</label>
                            <div class="col-md-4">
                                <input id="artist_name" name="artist_name" type="text" placeholder="old name" class="form-control input-md" {$populateArray[0]}>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group {$successArray[1]}">
                            <label class="col-md-4 control-label" for="popular_song">Most Popular Song:</label>
                            <div class="col-md-4">
                                <input id="popular_song" name="popular_song" type="text" placeholder="old song name" class="form-control input-md" {$populateArray[1]}>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group {$successArray[2]}">
                            <label class="col-md-4 control-label" for="number_songs">Number of Songs:</label>
                            <div class="col-md-4">
                                <input id="number_songs" name="number_songs" type="text" placeholder="old number" class="form-control input-md" {$populateArray[2]}>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group {$successArray[3]}">
                            <label class="col-md-4 control-label" for="number_albums">Number of Albums:</label>
                            <div class="col-md-4">
                                <input id="number_albums" name="number_albums" type="text" placeholder="old number" class="form-control input-md" {$populateArray[3]}>

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