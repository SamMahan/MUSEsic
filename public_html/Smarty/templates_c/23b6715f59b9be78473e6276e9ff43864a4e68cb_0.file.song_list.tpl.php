<?php /* Smarty version 3.1.27, created on 2017-10-20 12:14:41
         compiled from "/home/ubuntu/workspace/public_html/templates/songs/song_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:119880246859ea20f1432d68_29594570%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23b6715f59b9be78473e6276e9ff43864a4e68cb' => 
    array (
      0 => '/home/ubuntu/workspace/public_html/templates/songs/song_list.tpl',
      1 => 1508516071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119880246859ea20f1432d68_29594570',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ea20f14b9289_56516348',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ea20f14b9289_56516348')) {
function content_59ea20f14b9289_56516348 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '119880246859ea20f1432d68_29594570';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <style type="text/css" media="all">
        @import "../../assets/css/song_list.css";
    </style>
    
    <?php echo @constant('RESOURCES');?>

    
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
                <td><a href="view_song.html">Head Strong</a></td>
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



    <a href="NewSongPage.html" class="btn btn-success">+Add Song</a>
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
                <li><a href="view_song.html">Head Strong</a></li>
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

</html><?php }
}
?>