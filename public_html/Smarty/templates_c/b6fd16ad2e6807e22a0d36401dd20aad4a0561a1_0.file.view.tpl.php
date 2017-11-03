<?php /* Smarty version 3.1.27, created on 2017-11-02 23:57:55
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\playlists\view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:200179700859fbe943f34f73_42811783%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6fd16ad2e6807e22a0d36401dd20aad4a0561a1' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\playlists\\view.tpl',
      1 => 1509482734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200179700859fbe943f34f73_42811783',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fbe9440507d6_94171530',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fbe9440507d6_94171530')) {
function content_59fbe9440507d6_94171530 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '200179700859fbe943f34f73_42811783';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First Playlist</title>
    <!-- Latest compiled and minified CSS -->
    <?php echo @constant('RESOURCES');?>


</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">

    <div class="row">
        <h1>
            My First Playlist
            <a href="#" class="btn btn-success">Play All</a>
        </h1>
    </div>

    <div class="row">
    <table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Length</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Headstrong</td>
            <td>Traped</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>

        </tr>
        <tr>
            <td>2</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>6</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>7</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>8</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>9</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
        <tr>
            <td>10</td>
            <td>Song</td>
            <td>Artist</td>
            <td>00:03:00</td>
            <td>
                <a href="#" class="btn btn-success">Play</a>
                <a href="#" class="btn btn-danger">Remove</a>
            </td>
        </tr>
    </tbody>
    </table>
    </div>

</div>
</body>
</html><?php }
}
?>