<div class="modal" id="delete_album">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <p>Deleting this album will delete these songs:</p>
                {foreach $listOfArtists as $key => $value}
                    <li>

                    </li>

                        <td> <a href="{$smarty.const.WEB_PATH}view_artist.php?key={$value["Artist_ID"]}">{$value["Artist_Name"]}</a></td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td><a href="#" data-target="#delete_artist" id="delete-artist-button" data-artistid="{$value["Artist_ID"]}" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_artist" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
                    </tr>
                {/foreach}
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirm-delete-album">Delete</button>

            </div>
        </div>
    </div>
</div>