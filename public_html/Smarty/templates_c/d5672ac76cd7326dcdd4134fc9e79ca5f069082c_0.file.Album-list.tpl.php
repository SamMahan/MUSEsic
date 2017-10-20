<?php /* Smarty version 3.1.27, created on 2017-10-20 12:46:06
         compiled from "/home/ubuntu/workspace/public_html/templates/Albums/Album-list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:154283397059ea284e99f630_21414453%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5672ac76cd7326dcdd4134fc9e79ca5f069082c' => 
    array (
      0 => '/home/ubuntu/workspace/public_html/templates/Albums/Album-list.tpl',
      1 => 1508517648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154283397059ea284e99f630_21414453',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ea284e9b3216_58470128',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ea284e9b3216_58470128')) {
function content_59ea284e9b3216_58470128 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '154283397059ea284e99f630_21414453';
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

<?php echo $_smarty_tpl->getSubTemplate ("Componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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