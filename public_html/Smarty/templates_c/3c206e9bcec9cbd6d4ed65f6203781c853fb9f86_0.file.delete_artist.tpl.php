<?php /* Smarty version 3.1.27, created on 2017-11-13 16:19:42
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\modals\delete_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15268305805a0a0c6e944fa4_77128338%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c206e9bcec9cbd6d4ed65f6203781c853fb9f86' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\modals\\delete_artist.tpl',
      1 => 1510607406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15268305805a0a0c6e944fa4_77128338',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0a0c6e959271_98124979',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0a0c6e959271_98124979')) {
function content_5a0a0c6e959271_98124979 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15268305805a0a0c6e944fa4_77128338';
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