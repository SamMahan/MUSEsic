<div class="modal fade" id="add_to_playlist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <table class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Playlist Name</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        {$i = 1}
                        {foreach $list_of_playlists as $key => $value}
                        <td>{$i}</td>
                        <td>{$value->Playlist_Name}</td>
                        <td><button type="button" class="btn btn-sm btn-success">Add+</button></td>
                    </tr>
                    {$i = $i + 1}
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>