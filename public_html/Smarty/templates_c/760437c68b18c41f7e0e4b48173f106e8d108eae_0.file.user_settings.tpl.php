<?php /* Smarty version 3.1.27, created on 2017-11-13 17:06:02
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\user\user_settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8588129625a0a174a94dad9_95866180%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '760437c68b18c41f7e0e4b48173f106e8d108eae' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\user\\user_settings.tpl',
      1 => 1510610759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8588129625a0a174a94dad9_95866180',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0a174a987835_26077745',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0a174a987835_26077745')) {
function content_5a0a174a987835_26077745 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8588129625a0a174a94dad9_95866180';
?>




<?php echo @constant('RESOURCES');?>





<?php echo $_smarty_tpl->getSubTemplate ("componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("modals/change_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="container">
        <div class="row justify-content-center">


            <div class="well col-lg 5">
                <form class="form-horizontal user_form user_settings" method="post" action="<?php echo @constant('WEB_PATH');?>
settings.php">
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
                            <label class="control-label" for="first_name">First Name</label>
                            <input class="form-control" id="Name" type="text" required="required">
                        </div>

                        <div class="form-group col-lg-7">
                            <label class="control-label" for="last_name">Last Name</label>
                            <input class="form-control" id="Name" type="text" required="required">
                        </div>

                        <div class="form-group col-lg-7">
                            <label class="control-label" for="email">E-mail</label>
                            <input class="form-control" id="Name" type="text" required="required">
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

                    </fieldset>
                </form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-10">

                        </div>
                        <div class="col-md-2">
                            <a href="#" data-toggle="modal" data-target="#change_password"><button class="btn btn-default">Update Password</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><?php }
}
?>