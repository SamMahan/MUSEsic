<?php /* Smarty version 3.1.27, created on 2017-12-08 01:36:40
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\delete_song.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21340949355a2a32f8ac9e92_62209372%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab839fb9712f2ceae34460a2cf2da377967bd063' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\delete_song.tpl',
      1 => 1512714915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21340949355a2a32f8ac9e92_62209372',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2a32f8ad0212_40065829',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2a32f8ad0212_40065829')) {
function content_5a2a32f8ad0212_40065829 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21340949355a2a32f8ac9e92_62209372';
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
                <a href="#" class="deleting_song" id="confirm_delete_song" data-song_id=""><button type="button" class="btn btn-danger">Delete</button></a>

            </div>
        </div>
    </div>
</div><?php }
}
?>