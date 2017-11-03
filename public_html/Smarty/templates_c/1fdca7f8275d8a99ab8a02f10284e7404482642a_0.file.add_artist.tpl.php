<<<<<<< HEAD
<?php /* Smarty version 3.1.27, created on 2017-11-02 20:56:39
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\add_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:101755157359fbbec76ff134_53392910%%*/
=======
<<<<<<< HEAD
<?php /* Smarty version 3.1.27, created on 2017-11-02 20:49:34
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\add_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7149954459fbbd1ee42fe7_42892182%%*/
=======
<?php /* Smarty version 3.1.27, created on 2017-11-02 20:38:57
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\add_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:124425359759fbbaa1dc49b1_08422551%%*/
>>>>>>> 7992d1c964b7ee83d15eaf2f9a624f6089e74d79
>>>>>>> 3040f6c0fc6ef0a7db7b0f98039e40f951dde826
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fdca7f8275d8a99ab8a02f10284e7404482642a' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\add_artist.tpl',
<<<<<<< HEAD
      1 => 1509670047,
=======
<<<<<<< HEAD
      1 => 1509670044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7149954459fbbd1ee42fe7_42892182',
  'variables' => 
  array (
    'modalopen' => 0,
    'successArray' => 0,
    'populateArray' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fbbd1ef061f8_57370891',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fbbd1ef061f8_57370891')) {
function content_59fbbd1ef061f8_57370891 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7149954459fbbd1ee42fe7_42892182';
=======
      1 => 1509664879,
>>>>>>> 3040f6c0fc6ef0a7db7b0f98039e40f951dde826
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101755157359fbbec76ff134_53392910',
  'variables' => 
  array (
    'modalopen' => 0,
    'successArray' => 0,
    'populateArray' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fbbec776a921_76003550',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fbbec776a921_76003550')) {
function content_59fbbec776a921_76003550 ($_smarty_tpl) {

<<<<<<< HEAD
$_smarty_tpl->properties['nocache_hash'] = '101755157359fbbec76ff134_53392910';
=======
$_smarty_tpl->properties['nocache_hash'] = '124425359759fbbaa1dc49b1_08422551';
>>>>>>> 7992d1c964b7ee83d15eaf2f9a624f6089e74d79
>>>>>>> 3040f6c0fc6ef0a7db7b0f98039e40f951dde826
?>
<div class="modal fade" id="add_artist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" <?php echo $_smarty_tpl->tpl_vars['modalopen']->value;?>
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Create a New Artist:</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="post" action="<?php echo @constant('WEB_PATH');?>
artist_list.php">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[0];?>
" >
                            <label class="col-md-4 control-label" for="artist_name">Artist Name:</label>
                            <div class="col-md-4">
                                <input id="artist_name" name="artist_name" type="text" placeholder="name" class="form-control input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[0];?>
>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[1];?>
" >
                            <label class="col-md-4 control-label" for="popular_song">Most Popular Song:</label>
                            <div class="col-md-4">
                                <input id="popular_song" name="popular_song" type="text" placeholder="song name" class="form-control input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[1];?>
>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[2];?>
" >
                            <label class="col-md-4 control-label" for="number_songs">Number of Songs:</label>
                            <div class="col-md-4">
                                <input id="number_songs" name="number_songs" type="text" placeholder="number" class="form-control input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[2];?>
>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[3];?>
" >
                            <label class="col-md-4 control-label" for="number_albums">Number of Albums:</label>
                            <div class="col-md-4">
                                <input id="number_albums" name="number_albums" type="text" placeholder="number" class="form-control input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[3];?>
>

                            </div>
                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Save Changes</button>

                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
?>