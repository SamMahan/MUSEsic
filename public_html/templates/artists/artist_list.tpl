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
            <div class="titles col-md-4">
                <ul class="artistul">
                    <li class="section">Artist</li>
                    <li><a href="view_artist.php">The Piano Guys</a></li>
                    <li>Trapet</li>
                    <li>Walk Off the Earth</li>
                    <li>Disturbed</li>
                    <li>Bowling For Soup</li>
                    <li>Gym Class Heroes</li>
                    <li>Shawn Mendes</li>
                    <li>Walk Off the Earth</li>
                    <li>Ed Sheeran</li>
                    <li>Panic! At The Disco</li>
                </ul>
            </div>

            <div class="artist col-md-3">
                <ul class="artistul">
                    <li class="section">Most Popular Song</li>
                    <li>What Makes You Beautiful</li>
                    <li>Walk Off the Earth</li>
                    <li>Disturbed</li>
                    <li>Bowling For Soup</li>
                    <li>Gym Class Heroes</li>
                    <li>Shawn Mendes</li>
                    <li>Walk Off the Earth</li>
                    <li>Neil Diamond</li>
                    <li>Ed Sheeran</li>
                    <li>Panic! At The Disco</li>
                </ul>
            </div>

            <div class="album col-md-1">
                <ul class="artistul">
                    <li class="section">Songs</li>
                    <li>5</li>
                    <li>9</li>
                    <li>12</li>
                    <li>16</li>
                    <li>14</li>
                    <li>24</li>
                    <li>16</li>
                    <li>12</li>
                    <li>8</li>
                    <li>14</li>
                </ul>
            </div>

            <div class="col-md-1">
                <ul class="buttonul">
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                </ul>
            </div>

        </div>
    </div>

</body>
</html>