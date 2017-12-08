<?php /* Smarty version 3.1.27, created on 2017-12-07 21:46:12
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\change_password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3135568845a29fcf474c621_68554404%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e73cd14a99bcbce0882a92d3730cf187b626662a' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\change_password.tpl',
      1 => 1511203618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3135568845a29fcf474c621_68554404',
  'variables' => 
  array (
    'changePasswordMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a29fcf47b8376_75047684',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a29fcf47b8376_75047684')) {
function content_5a29fcf47b8376_75047684 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3135568845a29fcf474c621_68554404';
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
                    <?php echo $_smarty_tpl->tpl_vars['changePasswordMessage']->value;?>
;
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