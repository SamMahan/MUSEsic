<?php /* Smarty version 3.1.27, created on 2017-10-20 12:17:41
         compiled from "/home/ubuntu/workspace/public_html/templates/songs/NewSongPage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:122837750659ea21a5a82124_60937478%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'beab6c4bd77cdf9086489836f90a88be5bfe5975' => 
    array (
      0 => '/home/ubuntu/workspace/public_html/templates/songs/NewSongPage.tpl',
      1 => 1508516074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122837750659ea21a5a82124_60937478',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ea21a5aed1c6_37345595',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ea21a5aed1c6_37345595')) {
function content_59ea21a5aed1c6_37345595 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '122837750659ea21a5a82124_60937478';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
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


        <form class="form-horizontal" method="post" action="#">
            <fieldset>
                <legend>
                    <h1>+Add A New Song</h1>
                </legend>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label" for="inputLarge">Title</label>
                        <input class="form-control input-lg" id="inputLarge" type="text" placeholder="Enter Title">
                    </div>

                    <div class="form-group col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <label class="control-label" for="inputDefault">Artist</label>
                        <input class="form-control" id="inputDefault" type="text" placeholder="Enter Artists Name">
                    </div>

                    <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <label class="control-label" for="inputSmall">Genre</label>
                        <input class="form-control input-sm" id="inputSmall" type="text" placeholder="Enter Genre">
                    </div>

                    <div class="control-group col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <label class="control-label" for="fileUpload">File Upload</label>
                        <div class="controls">
                            <input id="fileUpload" name="fileUpload" class="input-file" type="file">
                        </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label for="textArea" class="control-label">Uploader's Comments</label>

                        <textarea class="form-control" rows="3" id="textArea"></textarea>

                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>

</div>
</div>
<!-- Latest compiled and minified JavaScript -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>