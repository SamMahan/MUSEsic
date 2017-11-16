<?php /* Smarty version 3.1.27, created on 2017-11-15 20:04:39
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\modals\create_playlist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18852089225a0ce427d5e3c2_15018220%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bb4b6a4adcd96e43c39ae083823408beba9c550' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\modals\\create_playlist.tpl',
      1 => 1510794178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18852089225a0ce427d5e3c2_15018220',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0ce427d62153_72998369',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0ce427d62153_72998369')) {
function content_5a0ce427d62153_72998369 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18852089225a0ce427d5e3c2_15018220';
?>
<div class="modal" id="create_playlist">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Create Playlist</h4>
            </div>
            <form method="post" action="<?php echo @constant('WEB_PATH');?>
home.php">
                <fieldset>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label" for="inputDefault">Name</label>
                            <input name="playlist_name" class="form-control" id="inputDefault" type="text" required="required">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">Create</button>
                        <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div><?php }
}
?>