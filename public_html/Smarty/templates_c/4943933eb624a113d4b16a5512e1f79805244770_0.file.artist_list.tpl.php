<?php /* Smarty version 3.1.27, created on 2017-11-01 19:39:02
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\artists\artist_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:108214535559fa5b16389ac1_65125114%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4943933eb624a113d4b16a5512e1f79805244770' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\artists\\artist_list.tpl',
      1 => 1509579414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108214535559fa5b16389ac1_65125114',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fa5b16409172_72644609',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fa5b16409172_72644609')) {
function content_59fa5b16409172_72644609 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '108214535559fa5b16389ac1_65125114';
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
                    <td><a href="view_artist.php">The Piano Guys</a></td>
                    <td>What makes you beautiful</td>
                    <td>5</td>
                    <td>3</td>
                    <td><a href="#" data-target="#delete_general" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_artist" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
                </tr>
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

</body>
</html><?php }
}
?>