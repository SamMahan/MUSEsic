<?php /* Smarty version 3.1.27, created on 2017-11-03 13:18:08
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/delete_general.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:99582648659fca4d03b4142_36781209%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac2242f5407a9c42fa26f334554a58847246e689' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/delete_general.tpl',
      1 => 1509664720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99582648659fca4d03b4142_36781209',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fca4d03bae63_29543432',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fca4d03bae63_29543432')) {
function content_59fca4d03bae63_29543432 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '99582648659fca4d03b4142_36781209';
?>
<div class="modal" id="delete_general">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this item?</p>
            </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>

                </div>
        </div>
    </div>
</div>
<?php }
}
?>