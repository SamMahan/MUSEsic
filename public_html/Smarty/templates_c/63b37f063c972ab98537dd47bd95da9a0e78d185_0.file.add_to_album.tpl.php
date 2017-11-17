<?php /* Smarty version 3.1.27, created on 2017-11-17 00:09:54
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\add_to_album.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13218614405a0e6f2255b235_99502740%%*/
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
  'nocache_hash' => '13218614405a0e6f2255b235_99502740',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0e6f225629c4_55101408',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0e6f225629c4_55101408')) {
function content_5a0e6f225629c4_55101408 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13218614405a0e6f2255b235_99502740';
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