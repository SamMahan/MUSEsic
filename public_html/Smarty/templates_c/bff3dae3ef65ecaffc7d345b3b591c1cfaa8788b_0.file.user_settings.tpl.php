<?php /* Smarty version 3.1.27, created on 2017-10-20 09:54:27
         compiled from "/home/ubuntu/workspace/public_html/templates/User/user_settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:201620798359ea0013386168_63488800%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bff3dae3ef65ecaffc7d345b3b591c1cfaa8788b' => 
    array (
      0 => '/home/ubuntu/workspace/public_html/templates/User/user_settings.tpl',
      1 => 1508507665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201620798359ea0013386168_63488800',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ea0013399af3_25614209',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ea0013399af3_25614209')) {
function content_59ea0013399af3_25614209 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '201620798359ea0013386168_63488800';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EditProfile</title>

   <?php echo @constant('RESOURCES');?>

</head>

<body>
   <?php echo $_smarty_tpl->getSubTemplate ("Componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


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




    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
?>