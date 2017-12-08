<?php /* Smarty version 3.1.27, created on 2017-12-08 00:51:30
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\delete_song.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14514230285a2a28622ef4e6_02846478%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab839fb9712f2ceae34460a2cf2da377967bd063' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\delete_song.tpl',
      1 => 1512712217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14514230285a2a28622ef4e6_02846478',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2a28622f3206_23399089',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2a28622f3206_23399089')) {
function content_5a2a28622f3206_23399089 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14514230285a2a28622ef4e6_02846478';
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
                <button type="button" class="deleting_song btn btn-danger" id="confirm-delete-song" value="">Delete</button>

            </div>
        </div>
    </div>
</div><?php }
}
?>