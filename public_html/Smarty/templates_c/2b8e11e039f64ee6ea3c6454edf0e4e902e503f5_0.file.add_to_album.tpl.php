<?php /* Smarty version 3.1.27, created on 2017-11-17 09:07:03
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/add_to_album.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15097749545a0eed078bebe3_59172013%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b8e11e039f64ee6ea3c6454edf0e4e902e503f5' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/modals/add_to_album.tpl',
      1 => 1510270067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15097749545a0eed078bebe3_59172013',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0eed078c33f7_59414723',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0eed078c33f7_59414723')) {
function content_5a0eed078c33f7_59414723 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15097749545a0eed078bebe3_59172013';
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