<?php /* Smarty version 3.1.27, created on 2017-11-04 21:13:00
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\artists\artist_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:117961475759fe659cf0c800_18289699%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4943933eb624a113d4b16a5512e1f79805244770' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\artists\\artist_list.tpl',
      1 => 1509841278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117961475759fe659cf0c800_18289699',
  'variables' => 
  array (
    'listOfArtists' => 0,
    'value' => 0,
    'error' => 0,
    'display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fe659d007ae2_32101307',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fe659d007ae2_32101307')) {
function content_59fe659d007ae2_32101307 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '117961475759fe659cf0c800_18289699';
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
        
        <div class="list col-md-11 col-sm-12">
            <table class = "table">
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
view_artist.php?key=<?php echo $_smarty_tpl->tpl_vars['value']->value["Artist_Name"];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value["Artist_Name"];?>
</a></td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td><a href="#" data-target="#delete_general" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_artist" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
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

        <?php echo $_smarty_tpl->getSubTemplate ("modals/delete_general.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        <div class="row">
            <div class="col-lg-11"></div>
            <div class="col-lg-1">
                <a href="#" data-target="#add_artist" data-toggle="modal"><button class="btn btn-info">Add Artist</button></a>
            </div>
        </div>

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

</body>
</html><?php }
}
?>