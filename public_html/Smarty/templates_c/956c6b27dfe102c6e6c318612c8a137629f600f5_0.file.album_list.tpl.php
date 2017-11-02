<?php /* Smarty version 3.1.27, created on 2017-11-01 20:12:18
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/albums/album_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:46227787959fa62e2b0b1e8_42335721%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '956c6b27dfe102c6e6c318612c8a137629f600f5' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/albums/album_list.tpl',
      1 => 1509581488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46227787959fa62e2b0b1e8_42335721',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fa62e2b5b4f0_50043206',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fa62e2b5b4f0_50043206')) {
function content_59fa62e2b5b4f0_50043206 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '46227787959fa62e2b0b1e8_42335721';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php echo @constant('RESOURCES');?>


    <style>
        #userName {
            margin-left: 6%;
        }

        #userNameLink{
            margin-left: 5%;
        }
    </style>

</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ("componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("modals/update_album.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("modals/delete_general.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Artist Name</th>
        <th>Number of Songs</th>
        <th>Total Play Time</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td><a href="view_album.tpl">Album</a></td>
        <td>Artist</td>
        <td>10</td>
        <td>00:30:00</td>
        <td><a href="#" data-target="#delete_general" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>My Second Album</td>
        <td>Artist</td>
        <td>7</td>
        <td>00:24:00</td>
        <td><a href="#" data-target="#delete_general" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
    </tr>

    <tr>
        <td>6</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td><a href="#" data-target="#delete_general" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
    </tr>
    <tr>
        <td>7</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td><a href="#" data-target="#delete_general" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
    </tr>

    </tbody>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("modals/create_album.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="row">
    <div class="col-lg-11"></div>
    <div class="col-lg-1">
        <a href="#" data-target="#create_album" data-toggle="modal"><button class="btn btn-info">Add Album</button></a>
    </div>
</div>

</body>
<?php }
}
?>