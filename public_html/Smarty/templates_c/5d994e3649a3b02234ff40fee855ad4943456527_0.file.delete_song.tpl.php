<?php /* Smarty version 3.1.27, created on 2017-11-16 17:02:04
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/delete_song.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20152552225a0e0adc01b4e4_33484876%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d994e3649a3b02234ff40fee855ad4943456527' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/delete_song.tpl',
      1 => 1510175701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20152552225a0e0adc01b4e4_33484876',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0e0adc01de68_74114474',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0e0adc01de68_74114474')) {
function content_5a0e0adc01de68_74114474 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20152552225a0e0adc01b4e4_33484876';
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