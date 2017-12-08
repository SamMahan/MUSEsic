<?php /* Smarty version 3.1.27, created on 2017-12-07 21:46:39
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\delete_song.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9755691905a29fd0f6c7a39_35612994%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab839fb9712f2ceae34460a2cf2da377967bd063' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\delete_song.tpl',
      1 => 1512685981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9755691905a29fd0f6c7a39_35612994',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a29fd0f743be9_10339502',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a29fd0f743be9_10339502')) {
function content_5a29fd0f743be9_10339502 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9755691905a29fd0f6c7a39_35612994';
?>
<div class="modal" id="delete_song">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this song?</p>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" id="cancel" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirm-delete-song">Delete</button>

            </div>
        </div>
    </div>
</div><?php }
}
?>