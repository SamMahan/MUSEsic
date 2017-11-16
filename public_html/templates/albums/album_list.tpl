<!DOCTYPE html>
<html lang="en">
<head>
    
    {$smarty.const.RESOURCES}


</head>
<body>

{include file = "componants/navbar.tpl"}

{include file = "modals/update_album.tpl"}

{include file = "modals/delete_album.tpl"}

<div class="container">
    <div class="row">
        <table class="table tblData">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Artist Name</th>
                    <th>Number of Songs</th>
                    <th>Total Play Time</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            {foreach $listOfAlbums as $key => $value}
                <tr>
                    <td><a href="{$smarty.const.WEB_PATH}view_album.php?key={$value["Album_ID"]}">{$value["Album_Name"]}</a></td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td><a href="#" data-target="#delete_album" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><!--<a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a>--></td>
                </tr>
            {/foreach}

            </tbody>
        </table>
    </div>

    <a href="#" data-target="#create_album" data-toggle="modal"><button class="btn btn-info">Add Album</button></a>

    {include file = "modals/create_album.tpl"}
    {include file = "modals/submit.tpl"}

    {if ($error == true)}
        <script>
            $(document).ready(function(){
                $("#create_album").modal();
            });
        </script>
    {/if}

    {if ($display == true)}
        <script>
            $(document).ready(function(){
                $("#submit").modal();
            });
        </script>
    {/if}
</div>
</body>
</html>
