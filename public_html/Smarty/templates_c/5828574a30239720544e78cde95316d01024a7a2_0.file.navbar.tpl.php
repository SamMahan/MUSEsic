<?php /* Smarty version 3.1.27, created on 2017-11-02 20:49:59
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\componants\navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:137814820359fbbd37c92591_33864303%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5828574a30239720544e78cde95316d01024a7a2' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\componants\\navbar.tpl',
      1 => 1509669923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137814820359fbbd37c92591_33864303',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fbbd37c96d28_84753346',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fbbd37c96d28_84753346')) {
function content_59fbbd37c96d28_84753346 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '137814820359fbbd37c92591_33864303';
?>

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
                            <li><a href="../../../controllers/Logic/user/home.php">Profile</a></li>
                            <li><a href="../../../controllers/Logic/songs/list.php">Song List</a></li>
                            <li><a href="../../../controllers/Logic/artists/artist_list.php">Artist List</a></li>
                            <li><a href="../../../controllers/Logic/albums/album_list.php">Album List</a></li>
                            <li class="divider"></li>
                            <li><a href="../../../controllers/Logic/visitor/registration.php">Log Out</a></li>
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
                <img src="../../../assets/Images/NoProfilePic.jpg" height="40"/>
                <a href="../user/home.php">Matthew Bromley</a>
            </div>
        </div>
    </nav>
<?php }
}
?>