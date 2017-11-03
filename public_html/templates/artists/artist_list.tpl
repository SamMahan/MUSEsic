<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artist List</title>
    {$smarty.const.RESOURCES}
    <link rel="stylesheet" type="text/css" href="../../../assets/css/artist_list.css" />
</head>
<body>

{include file="componants/navbar.tpl"}

    <div class="container">
        
        <div class="list col-md-11 col-sm-12">
            <table class = "table">
                <tr>
                    <th>Artist</th>
                    <th>Most Popular Song</th>
                    <th>Songs</th>
                    <th>Albums</th>
                    <th>actions</th>
                </tr>
                {foreach $listOfArtists as $key => $value}
                    <tr>

                        <td> <a href="{$smarty.const.WEB_PATH}view_artist.php?key={$value["Artist_Name"]}">{$value["Artist_Name"]}</a></td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td><a href="#" data-target="#delete_general" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_artist" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
                    </tr>
                {/foreach}
            </table>
        </div>

        {include file = "modals/add_artist.tpl"}
        {include file = "modals/update_artist.tpl"}
        {include file = "modals/delete_general.tpl"}

        <div class="row">
            <div class="col-lg-11"></div>
            <div class="col-lg-1">
                <a href="#" data-target="#add_artist" data-toggle="modal"><button class="btn btn-info">Add Artist</button></a>
            </div>
        </div>

</body>
</html>