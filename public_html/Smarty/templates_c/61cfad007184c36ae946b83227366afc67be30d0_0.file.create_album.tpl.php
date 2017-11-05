<?php /* Smarty version 3.1.27, created on 2017-11-04 21:27:00
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\modals\create_album.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:114732093259fe68e40f3453_62016733%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61cfad007184c36ae946b83227366afc67be30d0' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\modals\\create_album.tpl',
      1 => 1509845183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114732093259fe68e40f3453_62016733',
  'variables' => 
  array (
    'successArray' => 0,
    'populateArray' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fe68e4121d92_12508046',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fe68e4121d92_12508046')) {
function content_59fe68e4121d92_12508046 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114732093259fe68e40f3453_62016733';
?>
<div class="modal fade" id="create_album" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Create an Album:</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="post" action="<?php echo @constant('WEB_PATH');?>
album_list.php">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[0];?>
">
                            <label class="col-md-4 control-label" for="album_name">Album Name:</label>
                            <div class="col-md-4">
                                <input required = "required" id="album_name" name="album_name" type="text" class="form-control input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[0];?>
>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[1];?>
">
                            <label class="col-md-4 control-label" for="number_songs">Number of Song:</label>
                            <div class="col-md-4">
                                <input required = "required" id="number_songs" name="number_songs" type="text" class="form-control input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[1];?>
>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[2];?>
">
                            <label class="col-md-4 control-label" for="play_time">Total Play Time:</label>
                            <div class="col-md-4">
                                <input required = "required" id="play_time" name="play_time" type="text" class="form-control input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[2];?>
>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[3];?>
">
                            <label class="col-md-4 control-label" for="number_albums">Release Date:</label>
                            <div class="col-md-4">
                                <input required = "required" id="release_date" name="release_date" type="text" class="form-control input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[3];?>
>

                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div><?php }
}
?>