<?php /* Smarty version 3.1.27, created on 2017-11-08 16:26:09
         compiled from "/Applications/MAMP/htdocs/MUSEsic/public_html/templates/componants/navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4202838075a037671bd1e43_53141891%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9618417c81c5fe30657cb2cbc1923411adc4a798' => 
    array (
      0 => '/Applications/MAMP/htdocs/MUSEsic/public_html/templates/componants/navbar.tpl',
      1 => 1509729398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4202838075a037671bd1e43_53141891',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a037671be7397_25637994',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a037671be7397_25637994')) {
function content_5a037671be7397_25637994 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4202838075a037671bd1e43_53141891';
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
                <a class="navbar-brand " href="<?php echo @constant('WEB_URL');?>
/controllers/Logic/visitor/registration.php">MUSEsic</a>
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