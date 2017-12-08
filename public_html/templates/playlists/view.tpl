<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First Playlist</title>
    <!-- Latest compiled and minified CSS -->
    {$smarty.const.RESOURCES}

</head>
<body>
{include file="componants/navbar.tpl"}

<div class="container">

    <div class="row">
        <h1>
            {$playlist->Playlist_Name}
            <a href="#" class="btn btn-success">Play All</a>
        </h1>
    </div>

    <div class="row">
    <table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Length</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    </div>

</div>
</body>
</html>