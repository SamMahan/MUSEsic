<?php /* Smarty version 3.1.27, created on 2017-11-17 09:06:27
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/delete_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8580911965a0eece385de61_24919672%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfd8117f019a0383708aba5ab53f19342f5cc5bd' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/delete_artist.tpl',
      1 => 1510175701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8580911965a0eece385de61_24919672',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0eece3864af7_46377756',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0eece3864af7_46377756')) {
function content_5a0eece3864af7_46377756 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8580911965a0eece385de61_24919672';
?>
<div class="modal" id="delete_artist">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this artist?</p>
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