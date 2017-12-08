<?php /* Smarty version 3.1.27, created on 2017-12-08 11:01:17
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\delete_song.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20067845555a2ab74dd1cc08_69699666%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab839fb9712f2ceae34460a2cf2da377967bd063' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\delete_song.tpl',
      1 => 1512748855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20067845555a2ab74dd1cc08_69699666',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2ab74dd1f861_29951293',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2ab74dd1f861_29951293')) {
function content_5a2ab74dd1f861_29951293 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20067845555a2ab74dd1cc08_69699666';
?>
<div class="modal" id="delete_song" data-songid = "">
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
                <a href="#" class="deleting_song" id="confirm_delete_song"><button type="button" class="btn btn-danger">Delete</button></a>

            </div>
        </div>
    </div>
</div><?php }
}
?>