<?php /* Smarty version 3.1.27, created on 2017-11-17 09:07:03
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/create_song.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18954112015a0eed0789e197_47439944%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbf18729efc821cfe36a1b561eb2173ed6a08344' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/create_song.tpl',
      1 => 1510271105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18954112015a0eed0789e197_47439944',
  'variables' => 
  array (
    'successArray' => 0,
    'populateArray' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0eed078b99c8_82226231',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0eed078b99c8_82226231')) {
function content_5a0eed078b99c8_82226231 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18954112015a0eed0789e197_47439944';
?>
<div class="modal fade" id="create_song" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Create a Song:</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="post" action="<?php echo @constant('WEB_PATH');?>
song_list.php">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[0];?>
">
                            <label class="col-md-4 control-label" for="song_name">Song Name:</label>
                            <div class="col-md-4">
                                <input required = "required" id="song_name" name="song_name" type="text" class="form-control required input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[0];?>
>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[1];?>
">
                            <label class="col-md-4 control-label" for="artist">Artist:</label>
                            <div class="col-md-4">
                                <input required = "required" id="artist" name="artist" type="text" class="form-control required input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[1];?>
>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[2];?>
">
                            <label class="col-md-4 control-label" for="album">Album:</label>
                            <div class="col-md-4">
                                <input required = "required" id="album" name="album" type="text" class="form-control required input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[2];?>
>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[3];?>
">
                            <label class="col-md-4 control-label" for="length">Length:</label>
                            <div class="col-md-4">
                                <input required = "required" id="length" name="length" type="text" class="form-control required input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[3];?>
>

                            </div>
                        </div>

                        <!-- File input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="song_upload">Upload Song:</label>
                            <div class="col-md-4">
                                <input id="fileUpload" name="song_upload" class="song_upload input-md" type="file">
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-default">Save Song</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div><?php }
}
?>