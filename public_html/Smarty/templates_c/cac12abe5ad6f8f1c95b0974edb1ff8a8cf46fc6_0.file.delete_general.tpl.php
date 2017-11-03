<?php /* Smarty version 3.1.27, created on 2017-11-02 19:05:53
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\delete_general.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:57978516159fba4d1c15118_57180273%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cac12abe5ad6f8f1c95b0974edb1ff8a8cf46fc6' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\delete_general.tpl',
      1 => 1509663741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57978516159fba4d1c15118_57180273',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fba4d1c1bbd1_68367002',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fba4d1c1bbd1_68367002')) {
function content_59fba4d1c1bbd1_68367002 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '57978516159fba4d1c15118_57180273';
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

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Save Changes</button>

                </div>
        </div>
    </div>
</div>
<?php }
}
?>