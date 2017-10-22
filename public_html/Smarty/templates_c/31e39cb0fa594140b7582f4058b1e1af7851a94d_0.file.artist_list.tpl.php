<?php /* Smarty version 3.1.27, created on 2017-10-21 21:12:02
         compiled from "/home/ubuntu/workspace/public_html/templates/artists/artist_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:108551908959ebf062302859_79574971%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31e39cb0fa594140b7582f4058b1e1af7851a94d' => 
    array (
      0 => '/home/ubuntu/workspace/public_html/templates/artists/artist_list.tpl',
      1 => 1508634711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108551908959ebf062302859_79574971',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ebf062378067_57971246',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ebf062378067_57971246')) {
function content_59ebf062378067_57971246 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '108551908959ebf062302859_79574971';
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

<?php echo $_smarty_tpl->getSubTemplate ("Componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Number of Songs</th>
                    <th>Total Play Time</th>
                    <th>Release-date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="../Albums/Album-home.html">First Album</a></td>
                    <td>10</td>
                    <td>00:30:00</td>
                    <td>10/20/06</td>
                    <td><button type="button" class="btn btn-danger">Delete Album</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>My Second Playlist</td>
                    <td>7</td>
                    <td>00:24:00</td>
                    <td>10/20/06</td>
                    <td><button type="button" class="btn btn-danger">Delete Album</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>10/20/06</td>
                    <td><button type="button" class="btn btn-danger">Delete Album</button></td>
                </tr>
        </table>
    <div class="container">
        
        <div class="list col-md-11 col-sm-12">
            <div class="titles col-md-4">
                <ul class="artistul">
                    <li class="section">Artist</li>
                    <li><a href="view_artist.php">The Piano Guys</a></li>
                    <li>Trapet</li>
                    <li>Walk Off the Earth</li>
                    <li>Disturbed</li>
                    <li>Bowling For Soup</li>
                    <li>Gym Class Heroes</li>
                    <li>Shawn Mendes</li>
                    <li>Walk Off the Earth</li>
                    <li>Ed Sheeran</li>
                    <li>Panic! At The Disco</li>
                </ul>
            </div>

            <div class="artist col-md-3">
                <ul class="artistul">
                    <li class="section">Most Popular Song</li>
                    <li>What Makes You Beautiful</li>
                    <li>Walk Off the Earth</li>
                    <li>Disturbed</li>
                    <li>Bowling For Soup</li>
                    <li>Gym Class Heroes</li>
                    <li>Shawn Mendes</li>
                    <li>Walk Off the Earth</li>
                    <li>Neil Diamond</li>
                    <li>Ed Sheeran</li>
                    <li>Panic! At The Disco</li>
                </ul>
            </div>

            <div class="album col-md-1">
                <ul class="artistul">
                    <li class="section">Songs</li>
                    <li>5</li>
                    <li>9</li>
                    <li>12</li>
                    <li>16</li>
                    <li>14</li>
                    <li>24</li>
                    <li>16</li>
                    <li>12</li>
                    <li>8</li>
                    <li>14</li>
                </ul>
            </div>

            <div class="col-md-1">
                <ul class="buttonul">
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                    <li><a href="#" class="btn btn-danger">Delete</a></li>
                </ul>
            </div>

        </div>
    </div>

</body>
</html><?php }
}
?>