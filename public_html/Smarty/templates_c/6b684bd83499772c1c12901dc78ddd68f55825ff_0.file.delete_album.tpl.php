<?php /* Smarty version 3.1.27, created on 2017-11-13 16:21:44
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\modals\delete_album.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11914342595a0a0ce8a3a277_22490688%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b684bd83499772c1c12901dc78ddd68f55825ff' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\modals\\delete_album.tpl',
      1 => 1510607406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11914342595a0a0ce8a3a277_22490688',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0a0ce8a4c069_64976729',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0a0ce8a4c069_64976729')) {
function content_5a0a0ce8a4c069_64976729 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11914342595a0a0ce8a3a277_22490688';
?>
<div class="modal" id="delete_album">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this album?</p>
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