<!DOCTYPE html>
<html lang="en">

<head>
    
    <style type="text/css" media="all">
        @import "../../assets/css/song_list.css";
    </style>
    
    {$smarty.const.RESOURCES}
    
</head>

<body>

{include file = "componants/navbar.tpl"}

<div class="container">
    <div class="row">
    <div class="col-lg-11">
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Album</th>
                <th>Time</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="song.php">Head Strong</a></td>
                <td>Trapet</td>
                <td>Fun</td>
                <td>4:46</td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
        <div class="col-lg-1">
        </br>
            </br>
            <a href="#" data-toggle="dropdown"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
            <ul class="dropdown-menu">
           <li><a href="#" data-target="#add-to-album" data-toggle="modal">+Add to album</a></li>
                <li><a href="#" data-target="#add-to-playlist" data-toggle="modal">+Add to playlist</a></li>
            </ul>
        </div>
    </div>



    <a href="new.php" class="btn btn-success">+Add Song</a>
    <div class="modal" id="add-to-album">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">choose album</h4>
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
                                <td>album-name</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>album-name</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>album-name</td>
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

    <div class="modal" id="add-to-playlist">
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
    <!--<div class="list col-md-11 col-sm-12">
        <div class="titles col-md-4">
            <ul class="songul">
                <li class="section">Title</li>
                <li><a href="view.php">Head Strong</a></li>
                <li>Somebody That I Used To Know</li>
                <li>The Sound Of Silence</li>
                <li>Stacy's Mom</li>
                <li>Stereo Hearts</li>
                <li>Stitches</li>
                <li>Summer Vibe</li>
                <li>Sweet Caroline</li>
                <li>Thinking Out Loud</li>
                <li>This Is Gospel</li>
            </ul>
        </div>

        <div class="artist col-md-3">
            <ul class="songul">
                <li class="section">Artist</li>
                <li>Trapet</li>
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

        <div class="album col-md-3">
            <ul class="songul">
                <li class="section">Album</li>
                <li>Fun</li>
                <li>R.E.V.O.</li>
                <li>Immortalized</li>
                <li>I've Never Done Anything Like This</li>
                <li>The Papercut Chronicles II</li>
                <li>Handwritten</li>
                <li>R.E.V.O</li>
                <li>In My Lifetime</li>
                <li>x</li>
                <li>Too Weird To Live, Too Rare To Die!</li>
            </ul>
        </div>

        <div class="time col-md-1">
            <ul class="songul">
                <li class="section">Time</li>
                <li>4:46</li>
                <li>4:08</li>
                <li>4:08</li>
                <li>3:13</li>
                <li>3:31</li>
                <li>3:27</li>
                <li>3:06</li>
                <li>3:22</li>
                <li>4:42</li>
                <li>3:07</li>
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
        </div> -->


</div>


</body>

</html>