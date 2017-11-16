<?php /* Smarty version 3.1.27, created on 2017-11-16 16:14:13
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/delete_album.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12562748585a0dffa5a20033_98293845%%*/
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
  'nocache_hash' => '12562748585a0dffa5a20033_98293845',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0dffa5a24f76_43249590',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0dffa5a24f76_43249590')) {
function content_5a0dffa5a24f76_43249590 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12562748585a0dffa5a20033_98293845';
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