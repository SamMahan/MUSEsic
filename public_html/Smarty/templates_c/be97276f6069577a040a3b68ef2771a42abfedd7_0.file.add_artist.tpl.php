<?php /* Smarty version 3.1.27, created on 2017-11-03 13:48:47
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/add_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:170609871759fcabffdeb285_06699234%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be97276f6069577a040a3b68ef2771a42abfedd7' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/add_artist.tpl',
      1 => 1509729398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170609871759fcabffdeb285_06699234',
  'variables' => 
  array (
    'modalopen' => 0,
    'successArray' => 0,
    'populateArray' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fcabffdfe068_14427145',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fcabffdfe068_14427145')) {
function content_59fcabffdfe068_14427145 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170609871759fcabffdeb285_06699234';
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