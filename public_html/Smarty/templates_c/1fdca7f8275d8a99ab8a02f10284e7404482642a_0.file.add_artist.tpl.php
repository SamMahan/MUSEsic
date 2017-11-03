<?php /* Smarty version 3.1.27, created on 2017-11-02 19:05:53
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\add_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:99684871159fba4d199e4e2_37382678%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fdca7f8275d8a99ab8a02f10284e7404482642a' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\add_artist.tpl',
      1 => 1509663741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99684871159fba4d199e4e2_37382678',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fba4d19b1049_90424061',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fba4d19b1049_90424061')) {
function content_59fba4d19b1049_90424061 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '99684871159fba4d199e4e2_37382678';
?>
<div class="modal fade" id="add_artist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Create a New Artist:</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="artist_name">Artist Name:</label>
                            <div class="col-md-4">
                                <input id="artist_name" name="artist_name" type="text" placeholder="name" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="popular_song">Most Popular Song:</label>
                            <div class="col-md-4">
                                <input id="popular_song" name="popular_song" type="text" placeholder="song name" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="number_songs">Number of Songs:</label>
                            <div class="col-md-4">
                                <input id="number_songs" name="number_songs" type="text" placeholder="number" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="number_albums">Number of Albums:</label>
                            <div class="col-md-4">
                                <input id="number_albums" name="number_albums" type="text" placeholder="number" class="form-control input-md">

                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Save Changes</button>

            </div>
        </div>
    </div>
</div><?php }
}
?>