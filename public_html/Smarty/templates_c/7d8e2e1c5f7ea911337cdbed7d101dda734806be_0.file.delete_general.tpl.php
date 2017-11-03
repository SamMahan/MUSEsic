<?php /* Smarty version 3.1.27, created on 2017-11-02 20:50:18
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\modals\delete_general.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:194947286559fbbd4aeaad70_08826496%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d8e2e1c5f7ea911337cdbed7d101dda734806be' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\modals\\delete_general.tpl',
      1 => 1509669923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194947286559fbbd4aeaad70_08826496',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fbbd4aec9f60_24678018',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fbbd4aec9f60_24678018')) {
function content_59fbbd4aec9f60_24678018 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '194947286559fbbd4aeaad70_08826496';
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