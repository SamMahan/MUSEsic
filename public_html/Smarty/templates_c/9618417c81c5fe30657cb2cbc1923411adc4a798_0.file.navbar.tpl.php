<?php /* Smarty version 3.1.27, created on 2017-10-31 16:46:42
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/componants/navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:165529987859f8e132f1ff11_80232476%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9618417c81c5fe30657cb2cbc1923411adc4a798' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/componants/navbar.tpl',
      1 => 1509481166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165529987859f8e132f1ff11_80232476',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f8e132f23913_98067909',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f8e132f23913_98067909')) {
function content_59f8e132f23913_98067909 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '165529987859f8e132f1ff11_80232476';
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
                            <li><a href="../../../Controllers/Logic/User/home.php">Profile</a></li>
                            <li><a href="../../../Controllers/Logic/songs/list.php">Song List</a></li>
                            <li><a href="../../../Controllers/Logic/artists/artist_list.php">Artist List</a></li>
                            <li><a href="../../../Controllers/Logic/Albums/album-list.php">Album List</a></li>
                            <li class="divider"></li>
                            <li><a href="../../../Controllers/Logic/visitor/registration.php">Log Out</a></li>
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
                <a href="../user/profile.html">Matthew Bromley</a>
            </div>
        </div>
    </nav>
<?php }
}
?>