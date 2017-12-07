<div class="modal" id="delete_album">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <p>Deleting this album will delete these songs:</p>
                $album = new Album;
                $listOfSongs = $album->getongs();
                {foreach $listOfSongs as $key => $value}
                    <li>
                        {$value->Title}
                    </li>
                {/foreach}
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirm-delete-album">Delete</button>

            </div>
        </div>
    </div>
</div>