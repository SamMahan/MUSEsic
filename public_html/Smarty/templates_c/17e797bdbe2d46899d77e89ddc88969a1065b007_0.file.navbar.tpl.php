<?php /* Smarty version 3.1.27, created on 2017-12-05 13:14:46
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\componants\navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17623405265a26e2162bdea5_25639281%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17e797bdbe2d46899d77e89ddc88969a1065b007' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\componants\\navbar.tpl',
      1 => 1512412746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17623405265a26e2162bdea5_25639281',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a26e2164f8b65_42638505',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a26e2164f8b65_42638505')) {
function content_5a26e2164f8b65_42638505 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17623405265a26e2162bdea5_25639281';
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
                            <li><a href="../../../controllers/Logic/songs/song_list.php">Song List</a></li>
                            <li><a href="../../../controllers/Logic/artists/artist_list.php">Artist List</a></li>
                            <li><a href="../../../controllers/Logic/albums/album_list.php">Album List</a></li>
                            <li class="divider"></li>
                            <li><a href="../../../controllers/Logic/visitor/registration.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>

                <?php if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?>

                <ul class="nav navbar-nav navbar-right">
                    <li><a data-toggle="modal" data-target="#login" href="#">Login</a></li>
                </ul>

                <?php } else { ?>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                <img src="../../../assets/Images/NoProfilePic.jpg" height="40"/>
                <a href="../user/home.php"><?php echo $_smarty_tpl->tpl_vars['user']->value->First_Name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->Last_Name;?>
</a>
                <div id="global-meta" display="hidden" data-userid = "<?php echo $_smarty_tpl->tpl_vars['user']->value->User_ID;?>
"></div>
                <?php }?>
            </div>
        </div>

    </nav>
<?php }
}
?>