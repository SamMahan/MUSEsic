<?php /* Smarty version 3.1.27, created on 2017-11-17 09:07:03
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/delete_song.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19038639855a0eed07837817_37568842%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d994e3649a3b02234ff40fee855ad4943456527' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/delete_song.tpl',
      1 => 1510175701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19038639855a0eed07837817_37568842',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0eed0783d0c8_44878591',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0eed0783d0c8_44878591')) {
function content_5a0eed0783d0c8_44878591 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19038639855a0eed07837817_37568842';
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

                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>

            </div>
        </div>
    </div>
</div><?php }
}
?>