<?php /* Smarty version 3.1.27, created on 2017-11-16 12:50:58
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/delete_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8807597245a0dd002ab7bf3_11832876%%*/
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
  'nocache_hash' => '8807597245a0dd002ab7bf3_11832876',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0dd002abcf48_71224184',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0dd002abcf48_71224184')) {
function content_5a0dd002abcf48_71224184 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8807597245a0dd002ab7bf3_11832876';
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