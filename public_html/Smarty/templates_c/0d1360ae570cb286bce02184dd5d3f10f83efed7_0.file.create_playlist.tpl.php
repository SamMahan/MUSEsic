<?php /* Smarty version 3.1.27, created on 2017-12-07 20:59:39
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\create_playlist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10292650875a29f20bd22185_23536574%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d1360ae570cb286bce02184dd5d3f10f83efed7' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\create_playlist.tpl',
      1 => 1512688880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10292650875a29f20bd22185_23536574',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a29f20bd9aad3_00103297',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a29f20bd9aad3_00103297')) {
function content_5a29f20bd9aad3_00103297 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10292650875a29f20bd22185_23536574';
?>
<div class="modal" id="create_playlist">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Create Playlist</h4>
            </div>
                <form>


                <fieldset>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label" for="inputDefault">Name</label>
                            <input name="playlist_name" class="form-control" id="playlist-name" type="text" required="required">
                        </div>
                    <!--
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Number of Songs</label>
                            <input name="song_count" class="form-control form-control-sm" id="playlist-num-songs" type="text" required="required">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Run Time</label>
                            <input name="time" class="form-control form-control-sm" id="playlist-runtime" type="text" required="required">
                        </div>
                    -->
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" id="create_playlist_submit">Create</button>
                        <button id="new-playlist" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    </div>
                </fieldset>
                </form>
        </div>
    </div>
</div><?php }
}
?>