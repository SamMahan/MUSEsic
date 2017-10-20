<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First Playlist</title>
    <!-- Latest compiled and minified CSS -->
    {$smarty.const.RESOURCES}

</head>
<body>
{include file="Componants/navbar.tpl"}

<div class="container">

    <div class="row">
        <h1>
            My First Playlist
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
        <tr>
            <td>1</td>
            <td>Headstrong</td>
            <td>Traped</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>

        </tr>
        <tr>
            <td>2</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>6</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>7</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>8</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>9</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>10</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
    </tbody>
    </table>
    </div>

</div>
</body>
</html>