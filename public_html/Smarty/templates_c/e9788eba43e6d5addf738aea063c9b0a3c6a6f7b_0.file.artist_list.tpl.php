<?php /* Smarty version 3.1.27, created on 2017-11-01 18:06:07
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/artists/artist_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:168640826659fa454f61f029_51213620%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9788eba43e6d5addf738aea063c9b0a3c6a6f7b' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/artists/artist_list.tpl',
      1 => 1509573966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168640826659fa454f61f029_51213620',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fa454f66f5b0_92447230',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fa454f66f5b0_92447230')) {
function content_59fa454f66f5b0_92447230 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '168640826659fa454f61f029_51213620';
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
                <tr>
                    <td><a href="view_artist.php">the Piano Guys</a></td>
                    <td>What makes you beautiful</td>
                    <td>5</td>
                    <td>3</td>
                    <td><a href="#" class="btn btn-danger">Delete</a><a href="#" class="btn btn-default">Update</a></td>
                </tr>
            </table>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("modals/add_artist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="row">
            <div class="col-lg-11"></div>
            <div class="col-lg-1">
                <a href="#" data-target="#add_artist" data-toggle="modal"><button class="btn btn-info">Add Album</button></a>
            </div>
        </div>

</body>
</html><?php }
}
?>