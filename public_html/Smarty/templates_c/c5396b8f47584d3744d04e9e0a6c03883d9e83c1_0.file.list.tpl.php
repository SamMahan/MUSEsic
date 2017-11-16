<?php /* Smarty version 3.1.27, created on 2017-11-15 18:47:57
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\songs\list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17096239105a0cd22d4a2d59_07685085%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5396b8f47584d3744d04e9e0a6c03883d9e83c1' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\songs\\list.tpl',
      1 => 1510607406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17096239105a0cd22d4a2d59_07685085',
  'variables' => 
  array (
    'listOfSongs' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0cd22d6db312_14223454',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0cd22d6db312_14223454')) {
function content_5a0cd22d6db312_14223454 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17096239105a0cd22d4a2d59_07685085';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <style type="text/css" media="all">
        @import "../../assets/css/song_list.css";
    </style>

    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"><?php echo '</script'; ?>
>

    <?php echo @constant('RESOURCES');?>

    
</head>

<body>

<?php echo $_smarty_tpl->getSubTemplate ("componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">
    <div class="row">

    <table class="table tblData">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Album</th>
                <th>Time</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['listOfSongs']->value;
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
view.php?key=<?php echo $_smarty_tpl->tpl_vars['value']->value["Song_ID"];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value["Title"];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value["Artist_FK"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value["Album_FK"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value["Length"];?>
</td>
                <td><a href="#" data-target="#delete_song" data-toggle="modal"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>

    </table>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("modals/create_song.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <a href="#" data-target="#create_song" data-toggle="modal"><button class="btn btn-success">Add Song</button></a>
    <?php echo $_smarty_tpl->getSubTemplate ("modals/add_to_album.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="modal" id="add_to_playlist">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Choose Playlist</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
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
                                <td>Playlist</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Playlist</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Playlist</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">


                </div>

            </div>
        </div>
    </div>

</div>


</body>

</html><?php }
}
?>