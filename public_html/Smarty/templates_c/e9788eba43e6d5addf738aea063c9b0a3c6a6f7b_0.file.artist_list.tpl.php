<?php /* Smarty version 3.1.27, created on 2017-11-17 09:06:27
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/artists/artist_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7760118105a0eece3778018_67023037%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9788eba43e6d5addf738aea063c9b0a3c6a6f7b' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/artists/artist_list.tpl',
      1 => 1510870303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7760118105a0eece3778018_67023037',
  'variables' => 
  array (
    'listOfArtists' => 0,
    'value' => 0,
    'error' => 0,
    'display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0eece381f501_56669888',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0eece381f501_56669888')) {
function content_5a0eece381f501_56669888 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7760118105a0eece3778018_67023037';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artist List</title>
    <?php echo @constant('RESOURCES');?>

    <link rel="stylesheet" type="text/css" href="../../../assets/css/artist_list.css" />
</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ("componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="container">
        
        <div class="row">
            <table class = "table tblData">
                <tr>
                    <th>Artist</th>
                    <th>Most Popular Song</th>
                    <th>Songs</th>
                    <th>Albums</th>
                    <th>actions</th>
                </tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['listOfArtists']->value;
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

                        <td> <a href="<?php echo @constant('WEB_PATH');?>
view_artist.php?key=<?php echo $_smarty_tpl->tpl_vars['value']->value["Artist_ID"];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value["Artist_Name"];?>
</a></td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td><a href="#" data-target="#delete_artist" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_artist" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
            </table>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("modals/add_artist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php echo $_smarty_tpl->getSubTemplate ("modals/update_artist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php echo $_smarty_tpl->getSubTemplate ("modals/delete_artist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        <a href="#" data-target="#add_artist" data-toggle="modal"><button class="btn btn-info">Add Artist</button></a>

        <?php echo $_smarty_tpl->getSubTemplate ("modals/submit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php if (($_smarty_tpl->tpl_vars['error']->value == true)) {?>
            <?php echo '<script'; ?>
>
                $(document).ready(function(){
                    $("#add_artist").modal();
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
    </div>
</body>
</html><?php }
}
?>