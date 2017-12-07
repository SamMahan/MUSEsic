<?php /* Smarty version 3.1.27, created on 2017-12-06 23:32:07
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\delete_song.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21281859735a28c4479e2d34_23103694%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab839fb9712f2ceae34460a2cf2da377967bd063' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\delete_song.tpl',
      1 => 1512618248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21281859735a28c4479e2d34_23103694',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a28c447ba6152_87670775',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a28c447ba6152_87670775')) {
function content_5a28c447ba6152_87670775 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21281859735a28c4479e2d34_23103694';
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