<?php /* Smarty version 3.1.27, created on 2017-10-21 21:05:11
         compiled from "/home/ubuntu/workspace/public_html/templates/modals/add_album.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:76581631959ebeec7c92a01_56817820%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e161b78b7727e041f7a7f86922db4fea007cbae' => 
    array (
      0 => '/home/ubuntu/workspace/public_html/templates/modals/add_album.tpl',
      1 => 1508634218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76581631959ebeec7c92a01_56817820',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ebeec7c969d3_75724745',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ebeec7c969d3_75724745')) {
function content_59ebeec7c969d3_75724745 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '76581631959ebeec7c92a01_56817820';
?>
<div class="modal fade" id="add_album" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Pick an Album to Add:</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form class="form-horizontal">
        <fieldset>
        <div class="form-group">
          <label class="col-md-4 control-label" for="album_to_add"></label>
          <div class="col-md-4">
              <select id="album_to_add" name="album_to_add" class="form-control">
              <option value="0">--Select--</option>
              <option value="1">Album 1</option>
              <option value="2">Album 2</option>
              <option value="3">Album 3</option>
              <option value="4">Album 4</option>
              <option value="5">Album 5</option>
              <option value="6">Album 6</option>
            </select>
          </div>
        </div>
        </fieldset>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<?php }
}
?>