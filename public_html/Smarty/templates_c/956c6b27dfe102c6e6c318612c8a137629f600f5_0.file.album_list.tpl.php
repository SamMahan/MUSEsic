<?php /* Smarty version 3.1.27, created on 2017-11-09 18:27:51
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/albums/album_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19550713365a04e477d94d16_81083441%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '956c6b27dfe102c6e6c318612c8a137629f600f5' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/albums/album_list.tpl',
      1 => 1510267224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19550713365a04e477d94d16_81083441',
  'variables' => 
  array (
    'listOfAlbums' => 0,
    'value' => 0,
    'error' => 0,
    'display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a04e477f3a1f8_47224893',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a04e477f3a1f8_47224893')) {
function content_5a04e477f3a1f8_47224893 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19550713365a04e477d94d16_81083441';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php echo @constant('RESOURCES');?>



</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ("componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("modals/update_album.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("modals/delete_album.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Artist Name</th>
        <th>Number of Songs</th>
        <th>Total Play Time</th>
        <th></th>
    </tr>
    </thead>
    <tbody>

    <?php
$_from = $_smarty_tpl->tpl_vars['listOfAlbums']->value;
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
        <tr>
            <td><a href="<?php echo @constant('WEB_PATH');?>
view_album.php?key=<?php echo $_smarty_tpl->tpl_vars['value']->value["Album_Name"];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value["Album_Name"];?>
</a></td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td><a href="#" data-target="#delete_album" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><!--<a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a>--></td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>

    </tbody>
</table>

<div class="row">
    <div class="col-lg-11"></div>
    <div class="col-lg-1">
        <a href="#" data-target="#create_album" data-toggle="modal"><button class="btn btn-info">Add Album</button></a>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("modals/create_album.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("modals/submit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if (($_smarty_tpl->tpl_vars['error']->value == true)) {?>
    <?php echo '<script'; ?>
>
        $(document).ready(function(){
            $("#create_album").modal();
        });
    <?php echo '</script'; ?>
>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['display']->value == true)) {?>
    <?php echo '<script'; ?>
>
        $(document).ready(function(){
            $("#submit").modal();
        });
    <?php echo '</script'; ?>
>
<?php }?>

</body>
<?php }
}
?>