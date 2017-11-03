<?php /* Smarty version 3.1.27, created on 2017-11-01 16:53:32
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\visitor\registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:210234830559fa344c6fa3d0_18223475%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f022aef2f5a0d572c0f3b01acafc8cbbe483b90' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\visitor\\registration.tpl',
      1 => 1509569603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210234830559fa344c6fa3d0_18223475',
  'variables' => 
  array (
    'successArray' => 0,
    'populateArray' => 0,
    'modal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fa344c7a1ab0_89826729',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fa344c7a1ab0_89826729')) {
function content_59fa344c7a1ab0_89826729 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '210234830559fa344c6fa3d0_18223475';
?>
<!DOCTYPE html>
<html>
    <!-- Created by Samuel Mahan
9/20/17
registration page -->
<head>
  
    <!-- begin global header test -->
    <?php echo @constant('RESOURCES');?>

    
</head>

<body class = "visitor">
    <?php echo $_smarty_tpl->getSubTemplate ("componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="container">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

    </div>

    <div class="container">
        <div class="row">
            <div class="jumbotron col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>Get musing</h2>
                <h3>amazing music for your amusement</h3>
            </div>
            <div class="col-lg-6">
                <h3>easy to use, one-stop source for your entertainment</h3>
            </div>
            <div class="well col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <form class ="user_form user_registration" type="text" method="post" action="registration.php">
                    <fieldset>
                        <div class='col-lg-12 . <?php echo $_smarty_tpl->tpl_vars['successArray']->value[0];?>
'>
                            <label for="first_name">First Name</label>
                            <input required = "required" id='first_name' class='form-control' name='first_name' type='text' <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[0];?>
 />
                        </div>
                         <div class='required col-lg-12 <?php echo $_smarty_tpl->tpl_vars['successArray']->value[1];?>
'>
                            <label for="last_name">Last Name</label>
                            <input required = "required" id="last_name" class="form-control" name="last_name" type="text" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[1];?>
 />
                        </div>
                         <div class='required col-lg-12 <?php echo $_smarty_tpl->tpl_vars['successArray']->value[2];?>
'>
                            <label for="email">Email</label>
                           <input required = "required" id="email" class="form-control" name="email" type="text" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[2];?>
/>
                        </div>
                         <div class='required col-lg-12  <?php echo $_smarty_tpl->tpl_vars['successArray']->value[3];?>
'>
                            <label for="password">Password</label>
                            <input required = "required" id="password" class="form-control" name="password" type="password" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[3];?>
 />
                        </div>
                         <div class='required col-lg-12 <?php echo $_smarty_tpl->tpl_vars['successArray']->value[4];?>
'>
                            <label for="confirm_password">Confirm Password</label>
                            <input required = "required" id="confirm_password" class="form-control" name="confirm_password" type="password" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[4];?>
 />
                        </div>

                    </fieldset>
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
                        <button type="submit" type="button" class="btn btn-primary">submit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <div class="modal" <?php echo $_smarty_tpl->tpl_vars['modal']->value;?>
 id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Welcome back!</h4>
                </div>
                <div class="modal-body">
                    <form type = "text" method="post" action="registration.php">
                        <fieldset>
                            <div class='col-lg-12 <?php echo $_smarty_tpl->tpl_vars['successArray']->value[0];?>
'>
                                <label for="login-email">email</label>
                                <input id="login-email" class="form-control" name="login-email" type="text" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[0];?>
 />
                            </div>
                            <div class='col-lg-12 <?php echo $_smarty_tpl->tpl_vars['successArray']->value[1];?>
'>
                                <label for="login-password">Password</label>
                                <input id="login-password" class="form-control" name="login-password" type="password" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[1];?>
 />
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary">Login</button>
                        
                         </form>
                         <a href ="../../../Controllers/Logic/User/home.php"><button >temp login access</button></a>                </div>

                <div class="modal-footer">
                    

                </div>
               
            </div>
        </div>

</body>

</html>
<?php }
}
?>