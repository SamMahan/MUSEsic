<?php /* Smarty version 3.1.27, created on 2017-12-07 21:46:12
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\user\user_settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5902947615a29fcf44f3aa5_55863594%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cef534e916173f7d8bdc30ab4ecafb37f00fd0c9' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\user\\user_settings.tpl',
      1 => 1512685981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5902947615a29fcf44f3aa5_55863594',
  'variables' => 
  array (
    'successArray' => 0,
    'populateArray' => 0,
    'changePasswordError' => 0,
    'display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a29fcf45dede7_13284265',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a29fcf45dede7_13284265')) {
function content_5a29fcf45dede7_13284265 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5902947615a29fcf44f3aa5_55863594';
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
                        <div class="form-group col-lg-7 <?php echo $_smarty_tpl->tpl_vars['successArray']->value[1];?>
">
                            <label class="control-label" for="first_name">First Name</label>
                            <input name="first_name" class="form-control" id="first_name" type="text"<?php echo $_smarty_tpl->tpl_vars['populateArray']->value[1];?>
 >
                        </div>

                        <div class="form-group col-lg-7 <?php echo $_smarty_tpl->tpl_vars['successArray']->value[2];?>
">
                            <label class="control-label" for="last_name">Last Name</label>
                            <input name="last_name" class="form-control" id="last_name" type="text"<?php echo $_smarty_tpl->tpl_vars['populateArray']->value[2];?>
 >
                        </div>

                        <div class="form-group col-lg-7 <?php echo $_smarty_tpl->tpl_vars['successArray']->value[3];?>
">
                            <label class="control-label" for="email">E-mail</label>
                            <input name="email" class="form-control" id="email" type="text"<?php echo $_smarty_tpl->tpl_vars['populateArray']->value[3];?>
>
                        </div>

                       <!-- <div class="form-group col-lg-7">
                            <label class="control-label" for="Birthday">Birthday</label>
                            <input name="birthday" class="form-control" id="Birthday" type="text">
                        </div>

                        <div class="form-group col-lg-7">
                            <label class="control-label" for="FavoriteGenre">Favorite Genre</label>
                            <input name="favorite_genre" class="form-control" id="FavoriteGenre" type="text">
                        </div>

                        <div class="form-group col-lg-7">
                            <label class="control-label" for="FavoriteArtist">Favorite Artist</label>
                            <input name="favorite_artist" class="form-control" id="FavoriteArtist" type="text">
                        </div>-->


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
    </div>

<?php echo $_smarty_tpl->getSubTemplate ("modals/submit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if ($_smarty_tpl->tpl_vars['changePasswordError']->value == true) {?>
    <?php echo '<script'; ?>
>
        $(document).ready(function(){
            $("#change_password").modal();
        });
    <?php echo '</script'; ?>
>
<?php }?>
<?php if (($_smarty_tpl->tpl_vars['display']->value == true)) {?>
    <?php echo '<script'; ?>
>
        $(document).ready(function(){
            $("#submit").modal();
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
?>