<?php /* Smarty version 3.1.27, created on 2017-10-21 20:54:05
         compiled from "/home/ubuntu/workspace/public_html/templates/Albums/TEMP_addalbum.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:56658555559ebec2dc68a04_17807339%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1009ee1a5278e88f7f86de0cf6967ba91aa79eb8' => 
    array (
      0 => '/home/ubuntu/workspace/public_html/templates/Albums/TEMP_addalbum.tpl',
      1 => 1508633604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56658555559ebec2dc68a04_17807339',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ebec2dcc9211_99387403',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ebec2dcc9211_99387403')) {
function content_59ebec2dcc9211_99387403 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '56658555559ebec2dc68a04_17807339';
?>
<div class="modal fade" id="add-album" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<?php }
}
?>