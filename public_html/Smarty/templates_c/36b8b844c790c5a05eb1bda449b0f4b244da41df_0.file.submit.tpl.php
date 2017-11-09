<?php /* Smarty version 3.1.27, created on 2017-11-08 16:26:09
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/submit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11412025265a037671c28694_25833093%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36b8b844c790c5a05eb1bda449b0f4b244da41df' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/submit.tpl',
      1 => 1510174120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11412025265a037671c28694_25833093',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a037671c29803_45981521',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a037671c29803_45981521')) {
function content_5a037671c29803_45981521 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11412025265a037671c28694_25833093';
?>
<div class="modal fade" id="submit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Successfully Submitted! </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
</div><?php }
}
?>