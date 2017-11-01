<?php /* Smarty version 3.1.27, created on 2017-11-01 18:40:03
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/albums/album_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:56842668059fa4d43702c69_28006807%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '277d2960e5803bf014284a40dc8d9ccbc5e7704c' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/albums/album_list.tpl',
      1 => 1509576002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56842668059fa4d43702c69_28006807',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fa4d43764193_03842787',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fa4d43764193_03842787')) {
function content_59fa4d43764193_03842787 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '56842668059fa4d43702c69_28006807';
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
        <td><a href="Album-home.html">Album</a></td>
        <td>Artist</td>
        <td>10</td>
        <td>00:30:00</td>
        <td><button type="button" class="btn btn-danger">Remove</button><a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>My Second Album</td>
        <td>Artist</td>
        <td>7</td>
        <td>00:24:00</td>
        <td><button type="button" class="btn btn-danger">Remove</button><a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
    </tr>

    <tr>
        <td>6</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td><button type="button" class="btn btn-danger">Remove</button><a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
    </tr>
    <tr>
        <td>7</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td><button type="button" class="btn btn-danger">Remove</button><a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
    </tr>

    </tbody>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("modals/create_album.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="row">
    <div class="col-lg-11"></div>
    <div class="col-lg-1">
        <a href="#" data-target="#create_album" data-toggle="modal"><button class="btn btn-info">Add Album</button></a>
        <a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a>
    </div>
</div>

</body>
<?php }
}
?>