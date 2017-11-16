<?php /* Smarty version 3.1.27, created on 2017-11-13 17:17:57
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\modals\change_password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10472530115a0a1a1587f817_04643453%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '997bdb54a5a78c58049addf908c1f9a489686973' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\modals\\change_password.tpl',
      1 => 1510611452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10472530115a0a1a1587f817_04643453',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0a1a15886ba5_61525254',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0a1a15886ba5_61525254')) {
function content_5a0a1a15886ba5_61525254 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10472530115a0a1a1587f817_04643453';
?>
<div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Change Password</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form class="form-horizontal" method="post" action="<?php echo @constant('WEB_PATH');?>
settings.php">
                    <fieldset>
                        <div class="col-lg-12">
                            <label for="old_password">Old Password</label>
                            <input id="old_password" class="form-control" name="old_password" type="password" required="required"/>
                        </div>

                        <div class="col-lg-12">
                            <label for="new_password">New Password</label>
                            <input id="new_password" class="form-control" name="new_password" type="password" required="required"/>
                        </div>
                        <div class="col-lg-12">
                            <label for="confirm_password">Confirm Password</label>
                            <input id="confirm_password" class="form-control" name="confirm_password" type="password" required="required"/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </fieldset>
                </form>

        </div>
    </div>
</div>



<?php }
}
?>