<?php /* Smarty version 3.1.27, created on 2017-11-01 18:40:29
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/create_album.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:195839875959fa4d5d5009b3_39880097%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e7d0c9c38103c4695893f921c8592ee537cad4' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/create_album.tpl',
      1 => 1509576028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195839875959fa4d5d5009b3_39880097',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fa4d5d534998_42817108',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fa4d5d534998_42817108')) {
function content_59fa4d5d534998_42817108 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '195839875959fa4d5d5009b3_39880097';
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

                <form class="form-horizontal">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="album_name">Album Name:</label>
                            <div class="col-md-4">
                                <input id="album_name" name="album_name" type="text" placeholder="name" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="number_songs">Number of Song:</label>
                            <div class="col-md-4">
                                <input id="number_songs" name="number_songs" type="text" placeholder="song number" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="play_time">Total Play Time:</label>
                            <div class="col-md-4">
                                <input id="play_time" name="play_time" type="text" placeholder="time" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="number_albums">Release Date:</label>
                            <div class="col-md-4">
                                <input id="release_date" name="release_date" type="text" placeholder="date" class="form-control input-md">

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