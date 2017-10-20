<?php /* Smarty version 3.1.27, created on 2017-10-04 21:07:35
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\Album-list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:78151919259d585d748bcc5_33613664%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02c8918b382323cafd5782312abf47beb2206f54' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\Album-list.tpl',
      1 => 1507165652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78151919259d585d748bcc5_33613664',
  'variables' => 
  array (
    'WEB_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59d585d755c802_79058932',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59d585d755c802_79058932')) {
function content_59d585d755c802_79058932 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '78151919259d585d748bcc5_33613664';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ViewProfile</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Slate Theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEB_PATH']->value;?>
./assets/css/bootswatch.css"/>

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>

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


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="#">MUSEsic</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="songs/song_list.html">Song List</a></li>
                        <li class="divider"></li>
                        <li><a href="visitor/registration.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a data-toggle="modal" data-target="#login" href="#">Login</a></li>
            </ul>
            <img src="../assets/Images/NoProfilePic.jpg" height="40"/>
            <a href="User/profile.html">Matthew Bromley</a>
        </div>
    </div>
</nav>
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
        <td><a href="Playlists/ViewPlaylist.html">Album</a></td>
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