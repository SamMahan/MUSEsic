<?php /* Smarty version 3.1.27, created on 2017-11-17 00:09:54
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\delete_song.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3997034925a0e6f2221b603_99346680%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab839fb9712f2ceae34460a2cf2da377967bd063' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\delete_song.tpl',
      1 => 1510269098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3997034925a0e6f2221b603_99346680',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0e6f22273443_05903216',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0e6f22273443_05903216')) {
function content_5a0e6f22273443_05903216 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3997034925a0e6f2221b603_99346680';
?>
<div class="modal" id="delete_song">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this song?</p>
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