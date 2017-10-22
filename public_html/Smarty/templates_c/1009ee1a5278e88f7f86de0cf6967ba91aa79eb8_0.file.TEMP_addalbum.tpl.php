<?php /* Smarty version 3.1.27, created on 2017-10-21 20:39:41
         compiled from "/home/ubuntu/workspace/public_html/templates/Albums/TEMP_addalbum.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:66741359959ebe8cd1d77f6_95536281%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1009ee1a5278e88f7f86de0cf6967ba91aa79eb8' => 
    array (
      0 => '/home/ubuntu/workspace/public_html/templates/Albums/TEMP_addalbum.tpl',
      1 => 1508632749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66741359959ebe8cd1d77f6_95536281',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ebe8cd1e5667_33528655',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ebe8cd1e5667_33528655')) {
function content_59ebe8cd1e5667_33528655 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '66741359959ebe8cd1d77f6_95536281';
?>
<!DOCTYPE html>
<!--
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Artist</title>
    <style type="text/css" media="all">
        @import "../../assets/css/view_artist.css";
    </style>
    <link href="../../assets/css/bootswatch.css" type="text/css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <!-- Latest compiled and minified CSS --
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <?php echo '</script'; ?>
>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
                <img src="../../assets/Images/NoProfilePic.jpg" height="40" />
                <a href="../User/profile.html">Matthew Bromley</a>
            </div>
        </div>
    </nav>
    
    <form class="form-horizontal">
        <fieldset>

        <!-- Form Name --
        <legend>Add an Album to the Artist</legend>

        <!-- Text input--
        <div class="form-group">
          <label class="col-md-4 control-label" for="albumname">Album Name:</label>  
          <div class="col-md-4">
          <input id="albumname" name="albumname" type="text" placeholder="" class="form-control input-md">
    
          </div>
        </div>

        <!-- Text input--
        <div class="form-group">
          <label class="col-md-4 control-label" for="numbersongs">Number of Songs:</label>  
          <div class="col-md-4">
          <input id="numbersongs" name="numbersongs" type="text" placeholder="" class="form-control input-md">
            
          </div>
        </div>

        <!-- Text input--
        <div class="form-group">
          <label class="col-md-4 control-label" for="totaltime">Total Play Time:</label>  
          <div class="col-md-4">
          <input id="totaltime" name="totaltime" type="text" placeholder="" class="form-control input-md">
    
          </div>
        </div>

        <!-- Text input--
        <div class="form-group">
          <label class="col-md-4 control-label" for="released">Release Date:</label>  
          <div class="col-md-4">
          <input id="released" name="released" type="text" placeholder="" class="form-control input-md">
    
          </div>
        </div>
        
        <!-- Button (Double) --
        <div class="form-group">
          <label class="col-md-4 control-label" for="confirm"></label>
          <div class="col-md-8">
            <button id="confirm" name="confirm" class="btn btn-success">Confirm</button>
            <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
          </div>
        </div>

        </fieldset>
        </form> -->
        
<div class="modal fade" id="add-album" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php }
}
?>