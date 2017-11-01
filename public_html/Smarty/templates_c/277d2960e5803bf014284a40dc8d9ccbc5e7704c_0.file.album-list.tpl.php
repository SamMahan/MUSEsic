<?php /* Smarty version 3.1.27, created on 2017-11-01 18:24:37
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/albums/album-list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:207647674059fa49a5502d22_34396919%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '277d2960e5803bf014284a40dc8d9ccbc5e7704c' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/albums/album-list.tpl',
      1 => 1509481166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207647674059fa49a5502d22_34396919',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fa49a554dea6_42526122',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fa49a554dea6_42526122')) {
function content_59fa49a554dea6_42526122 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '207647674059fa49a5502d22_34396919';
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


<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Artist Name</th>
        <th>Number of Songs</th>
        <th>Total Play Time</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td><a href="Album-home.html">Album</a></td>
        <td>Artist</td>
        <td>10</td>
        <td>00:30:00</td>
    </tr>
    <tr>
        <td>2</td>
        <td>My Second Album</td>
        <td>Artist</td>
        <td>7</td>
        <td>00:24:00</td>
    </tr>

    <tr>
        <td>6</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
    </tr>
    <tr>
        <td>7</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
    </tr>

    </tbody>
</table>
</body>
<?php }
}
?>