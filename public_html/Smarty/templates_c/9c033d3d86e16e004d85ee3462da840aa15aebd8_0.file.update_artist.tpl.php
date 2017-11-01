<?php /* Smarty version 3.1.27, created on 2017-11-01 18:13:30
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/update_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:114732838659fa470a372875_33684206%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c033d3d86e16e004d85ee3462da840aa15aebd8' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/update_artist.tpl',
      1 => 1509574334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114732838659fa470a372875_33684206',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fa470a373ba6_64919333',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fa470a373ba6_64919333')) {
function content_59fa470a373ba6_64919333 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114732838659fa470a372875_33684206';
?>
<div class="modal fade" id="update_artist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Update Artist:</h2>
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
                                <input id="artist_name" name="artist_name" type="text" placeholder="old name" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="popular_song">Most Popular Song:</label>
                            <div class="col-md-4">
                                <input id="popular_song" name="popular_song" type="text" placeholder="old song name" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="number_songs">Number of Songs:</label>
                            <div class="col-md-4">
                                <input id="number_songs" name="number_songs" type="text" placeholder="old number" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="number_albums">Number of Albums:</label>
                            <div class="col-md-4">
                                <input id="number_albums" name="number_albums" type="text" placeholder="old number" class="form-control input-md">

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