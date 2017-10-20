<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artist List</title>
    <style type="text/css" media="all">@import "../../assets/css/artist_list.css";</style>
    <link href="../../assets/css/bootswatch.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="#">MUSEsic</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../User/profile.html">Profile</a></li>
                        <li><a href="../songs/song_list.html">Song List</a></li>
                        <li><a href="../artists/artist_list.html">Artist List</a></li>
                        <li><a href="../Albums/Album-list.html">Album List</a></li>
                        <li class="divider"></li>
                        <li><a href="../visitor/registration.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a data-toggle="modal" data-target="#login" href="#">Login</a></li>
            </ul>
            <img src="../../assets/Images/NoProfilePic.jpg" height="40"/>
            <a href="../User/profile.html">Matthew Bromley</a>
        </div>
    </div>
</nav>

    <div class="container">
        
        <div class="list col-md-11 col-sm-12">
            <div class="titles col-md-4">
                <ul class="artistul">
                    <li class="section">Artist</li>
                    <li><a href="view_artist.html">The Piano Guys</a></li>
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