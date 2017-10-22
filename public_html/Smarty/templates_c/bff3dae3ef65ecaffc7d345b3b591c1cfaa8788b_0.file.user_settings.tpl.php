<?php /* Smarty version 3.1.27, created on 2017-10-21 20:35:39
         compiled from "/home/ubuntu/workspace/public_html/templates/User/user_settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:85289721959ebe7dbbac311_56405763%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bff3dae3ef65ecaffc7d345b3b591c1cfaa8788b' => 
    array (
      0 => '/home/ubuntu/workspace/public_html/templates/User/user_settings.tpl',
      1 => 1508518269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85289721959ebe7dbbac311_56405763',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ebe7dbbc2939_91915905',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ebe7dbbc2939_91915905')) {
function content_59ebe7dbbc2939_91915905 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '85289721959ebe7dbbac311_56405763';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EditProfile</title>

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
        <div class="row justify-content-center">


            <div class="well col-lg 5">
                <form class="form-horizontal" method="post" action="#">
                    <fieldset>
                        <legend>Edit Profile</legend>
                        <div class="row justify-content-center">
                            <div class="control-group col-lg-2">
                                <label class="control-label" for="fileUpload">Upload Profile Picture</label>

                                <div class="col-lg-5">
                                    <input id="fileUpload" name="fileUpload" class="input-file" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-7">
                            <label class="control-label" for="Name">Name</label>
                            <input class="form-control" id="Name" type="text">
                        </div>

                        <div class="form-group col-lg-7">
                            <label class="control-label" for="Birthday">Birthday</label>
                            <input class="form-control" id="Birthday" type="text">
                        </div>

                        <div class="form-group col-lg-7">
                            <label class="control-label" for="FavoriteGenre">Favorite Genre</label>
                            <input class="form-control" id="FavoriteGenre" type="text">
                        </div>

                        <div class="form-group col-lg-7">
                            <label class="control-label" for="FavoriteArtist">Favorite Artist</label>
                            <input class="form-control" id="FavoriteArtist" type="text">
                        </div>


                        <div id="buttons" class="col-lg-10">
                            <button type="reset" class="btn btn-default">clear changes</button>
                            <button type="submit" class="btn btn-default" id="upload">Submit changes</button>
                        </div>
                        <div class="col-lg-2">
                            <a data-toggle="modal" data-target=".modal"><button class="btn btn-default">Update Password</button></a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Change Password</h4>
                </div>
                <div class="modal-body">
                    <form type="text" method="post" action="">
                        <fieldset>
                            <div class="col-lg-12">
                                <label for="new-password">New Password</label>
                                <input id="new-password" class="form-control" name="new-password" type="text" />
                            </div>
                            <div class="col-lg-12">
                                <label for="confirm-password">Confirm Password</label>
                                <input id="confirm-password" class="form-control" name="confirm-password" type="password" />
                            </div>
                        </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>




    
</body>

</html><?php }
}
?>