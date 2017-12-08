<?php /* Smarty version 3.1.27, created on 2017-12-08 01:36:40
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\add_to_album.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12310015495a2a32f8be69a6_94451385%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b37f063c972ab98537dd47bd95da9a0e78d185' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\add_to_album.tpl',
      1 => 1510609564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12310015495a2a32f8be69a6_94451385',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2a32f8c1ed66_13909559',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2a32f8c1ed66_13909559')) {
function content_5a2a32f8c1ed66_13909559 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12310015495a2a32f8be69a6_94451385';
?>


<div class="modal" id="add_to_album">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Choose the Album:</h4>
            </div>
            <div class="modal-body">
                <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>1</td>
                    <td>album-name</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>album-name</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>album-name</td>
                </tr>
            </tbody>
            </div>
            <div class="modal-footer">
            <button class="btn-success">yes</button>
            <button class="bth-danger">cancel</button>

            </div>

        </div>
    </div>
</div><?php }
}
?>