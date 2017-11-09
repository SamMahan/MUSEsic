<?php /* Smarty version 3.1.27, created on 2017-11-08 16:26:09
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/delete_album.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14005669835a037671c0ddc7_29798327%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '524077bd7c803401de9697efcccbb5997fbaede3' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/delete_album.tpl',
      1 => 1510175701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14005669835a037671c0ddc7_29798327',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a037671c0f5d7_99522912',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a037671c0f5d7_99522912')) {
function content_5a037671c0f5d7_99522912 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14005669835a037671c0ddc7_29798327';
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