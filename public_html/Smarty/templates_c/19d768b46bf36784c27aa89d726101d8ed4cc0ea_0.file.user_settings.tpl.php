<?php /* Smarty version 3.1.27, created on 2017-11-02 21:07:52
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\user\user_settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:94613140259fbc1682faec0_88388330%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19d768b46bf36784c27aa89d726101d8ed4cc0ea' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\user\\user_settings.tpl',
      1 => 1509669923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94613140259fbc1682faec0_88388330',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fbc16832d4c0_54944068',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fbc16832d4c0_54944068')) {
function content_59fbc16832d4c0_54944068 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '94613140259fbc1682faec0_88388330';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EditProfile</title>

   <?php echo @constant('RESOURCES');?>

</head>

<body>

<?php echo $_smarty_tpl->getSubTemplate ("componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="container">
        <div class="row justify-content-center">


            <div class="well col-lg 5">
                <form class="form-horizontal user_form user_settings" method="post" action="#">
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