<?php /* Smarty version 3.1.27, created on 2017-11-02 20:38:57
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\delete_general.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:149287370159fbbaa1e242d1_16885224%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cac12abe5ad6f8f1c95b0974edb1ff8a8cf46fc6' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\delete_general.tpl',
      1 => 1509664879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149287370159fbbaa1e242d1_16885224',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fbbaa1e2a4d2_61223151',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fbbaa1e2a4d2_61223151')) {
function content_59fbbaa1e2a4d2_61223151 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '149287370159fbbaa1e242d1_16885224';
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