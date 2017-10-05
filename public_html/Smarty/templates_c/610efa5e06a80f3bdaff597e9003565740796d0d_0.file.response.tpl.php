<?php /* Smarty version 3.1.27, created on 2017-10-04 17:49:40
         compiled from "C:\MAMP\htdocs\SMARTYexample\public_html\templates\response.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:67251765459d55774bc7b61_55815871%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '610efa5e06a80f3bdaff597e9003565740796d0d' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\SMARTYexample\\public_html\\templates\\response.tpl',
      1 => 1507153513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67251765459d55774bc7b61_55815871',
  'variables' => 
  array (
    'inputs' => 0,
    'checkvalue' => 0,
    'checknullkey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59d55774c1e3c7_33425527',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59d55774c1e3c7_33425527')) {
function content_59d55774c1e3c7_33425527 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '67251765459d55774bc7b61_55815871';
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
            <div class = "alert-success col-lg-12"><h1>Form Completed!</h1></div>
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
        </div>
    </div>
</div>
</body>
</html><?php }
}
?>