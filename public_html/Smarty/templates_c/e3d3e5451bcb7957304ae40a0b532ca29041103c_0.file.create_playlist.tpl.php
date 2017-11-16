<?php /* Smarty version 3.1.27, created on 2017-11-16 17:53:14
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/create_playlist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7501970155a0e16da5c43b9_97207536%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3d3e5451bcb7957304ae40a0b532ca29041103c' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/create_playlist.tpl',
      1 => 1510872750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7501970155a0e16da5c43b9_97207536',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0e16da5c7740_66677649',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0e16da5c7740_66677649')) {
function content_5a0e16da5c7740_66677649 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7501970155a0e16da5c43b9_97207536';
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