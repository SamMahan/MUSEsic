<!DOCTYPE html>
<html lang="en">

<head>
    
    <style type="text/css" media="all">
        @import "../../assets/css/song_list.css";
    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>

    {$smarty.const.RESOURCES}
    
</head>

<body>

{include file = "componants/navbar.tpl"}
{include file = "modals/delete_song.tpl"}

<div class="container">
    <div class="row">

    <table class="table tblData">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Album</th>
                <th>Time</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {foreach $listOfSongs as $key => $value}
            <tr>

                <td> <a href="{$smarty.const.WEB_PATH}view.php?key={$value["Song_ID"]}">{$value["Title"]}</a></td>
                <td>{getSongArtist($value["Artist_FK"])}</td>
                <td>{getSongAlbum($value["Album_FK"])}</td>
                <td>{timeToStandard($value["Length"])}</td>
                <td><a href="#" data-target="#delete_song" class="delete-song-button" data-songid="{$value["Song_ID"]}" data-toggle="modal"><button class="btn btn-danger">"{$value["Song_ID"]}"<button></a></td>
            </tr>
        {/foreach}

    </table>
    </div>
    {include file="modals/create_song.tpl"}

    <a href="#" data-target="#create_song" data-toggle="modal"><button class="btn btn-info">Add Song</button></a>
    {include file="modals/add_to_album.tpl"}

    <div class="modal" id="add_to_playlist">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Choose Playlist</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>1</td>
                                <td>Playlist</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Playlist</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Playlist</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">


                </div>

            </div>
        </div>
    </div>

</div>


</body>

</html>