<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artist List</title>
    {$smarty.const.RESOURCES}
    <link rel="stylesheet" type="text/css" href="../../../assets/css/artist_list.css" />
</head>
<body>

{include file ="Componants/navbar.tpl"}

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
                <tr>
                    <td><a href="view_artist.php">the Piano Guys</a></td>
                    <td>What makes you beautiful</td>
                    <td>5</td>
                    <td>3</td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            </table>
           

</body>
</html>