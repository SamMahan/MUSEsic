<?php /* Smarty version 3.1.27, created on 2017-11-15 18:47:57
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\modals\add_to_album.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14555500515a0cd22d88b737_07541641%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0b7fb306770c4781c625a8ea39730aa5f9d19e9' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\modals\\add_to_album.tpl',
      1 => 1510607406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14555500515a0cd22d88b737_07541641',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0cd22d8c8c95_37647934',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0cd22d8c8c95_37647934')) {
function content_5a0cd22d8c8c95_37647934 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14555500515a0cd22d88b737_07541641';
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