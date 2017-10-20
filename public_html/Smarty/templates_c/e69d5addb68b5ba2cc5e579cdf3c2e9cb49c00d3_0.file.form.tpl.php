<?php /* Smarty version 3.1.27, created on 2017-10-04 17:49:29
         compiled from "C:\MAMP\htdocs\SMARTYexample\public_html\templates\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:37387848959d557698f76f1_77057976%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e69d5addb68b5ba2cc5e579cdf3c2e9cb49c00d3' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\SMARTYexample\\public_html\\templates\\form.tpl',
      1 => 1507153766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37387848959d557698f76f1_77057976',
  'variables' => 
  array (
    'inputs' => 0,
    'checkvalue' => 0,
    'checknullkey' => 0,
    'WEB_URL' => 0,
    'key' => 0,
    'value' => 0,
    'states' => 0,
    'state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59d5576996a6f6_72251484',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59d5576996a6f6_72251484')) {
function content_59d5576996a6f6_72251484 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '37387848959d557698f76f1_77057976';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css'
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 jumbotron centered">
            <?php
$_from = $_smarty_tpl->tpl_vars['inputs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['checkvalue'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['checkvalue']->_loop = false;
$_smarty_tpl->tpl_vars['checknullkey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['checknullkey']->value => $_smarty_tpl->tpl_vars['checkvalue']->value) {
$_smarty_tpl->tpl_vars['checkvalue']->_loop = true;
$foreach_checkvalue_Sav = $_smarty_tpl->tpl_vars['checkvalue'];
?>
                <?php if ($_smarty_tpl->tpl_vars['checkvalue']->value == '') {?>
                    <div class="alert-danger col-lg-12"> The field "<?php echo $_smarty_tpl->tpl_vars['checknullkey']->value;?>
" had no input value</div>
                <?php } else { ?>
                    <div class="alert-success col-lg-12"> The field "<?php echo $_smarty_tpl->tpl_vars['checknullkey']->value;?>
" is set</div>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['checkvalue'] = $foreach_checkvalue_Sav;
}
?>

            <form class='form' type="text" method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
/form.php">
                <div class='controls'>
                    <div class="col-lg-6 form-group">
                        <!-- iterates through the array of inputs, blank if this is the first time user has entered the form>
                    <?php
$_from = $_smarty_tpl->tpl_vars['inputs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>


                        <!-- special instructions for the select element for states -->
                        <?php if ($_smarty_tpl->tpl_vars['key']->value == "state") {?>
                        <div class="col-lg-4 form-group">
                            <label for="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" class='control-label'> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</label>
                            <select id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="form-control">

                                <!-- iterates through city names to find if one has been selected, using value returned -->
                                <?php
$_from = $_smarty_tpl->tpl_vars['states']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['state'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['state']->_loop = false;
$_smarty_tpl->tpl_vars['skey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['skey']->value => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
$foreach_state_Sav = $_smarty_tpl->tpl_vars['state'];
?>
                                    <option name="<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
"
                                            value="<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['state']->value == $_smarty_tpl->tpl_vars['value']->value) {?> selected="selected"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['state']->value;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['state'] = $foreach_state_Sav;
}
?>
                            </select>


                            <!-- include special case for password-->
                            <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == "password" || $_smarty_tpl->tpl_vars['key']->value == "confirmpassword") {?>
                                <label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class='control-label'> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 </label>
                                <input class='input-large field form-control' data-type="input" type='password'
                                       name='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"/>

                            <!-- special case for gender radio buttons -->
                            <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == "gender") {?>
                                <input class="" type="radio" name="gender" value="male"
                                       <?php if ($_smarty_tpl->tpl_vars['value']->value == "male") {?>checked<?php }?>>
                                Male
                                <br>
                                <input class="" type="radio" name="gender" value="female"
                                       <?php if ($_smarty_tpl->tpl_vars['value']->value == "female") {?>checked<?php }?>>
                                Female
                                <br>
                            <?php } else { ?>
                            <!-- standard checking -->
                            <label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class='control-label'> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</label>
                            <input class='input-large field form-control' data-type="input" type='text'
                                   name='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"/>
                            <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>


                            <input type="submit" value="Submit">

                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<?php }
}
?>