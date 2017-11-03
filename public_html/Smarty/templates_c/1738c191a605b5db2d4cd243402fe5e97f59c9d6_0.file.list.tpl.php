<?php /* Smarty version 3.1.27, created on 2017-11-02 22:12:01
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\songs\list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:94433285359fbd0713c8fd9_89792486%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1738c191a605b5db2d4cd243402fe5e97f59c9d6' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\songs\\list.tpl',
      1 => 1509675120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94433285359fbd0713c8fd9_89792486',
  'variables' => 
  array (
    'listOfSongs' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fbd0714b7145_50449635',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fbd0714b7145_50449635')) {
function content_59fbd0714b7145_50449635 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '94433285359fbd0713c8fd9_89792486';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <style type="text/css" media="all">
        @import "../../assets/css/song_list.css";
    </style>

    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"><?php echo '</script'; ?>
>

    <?php echo @constant('RESOURCES');?>

    
</head>

<body>

<?php echo $_smarty_tpl->getSubTemplate ("componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">
    <div class="row">

    <table class="table tblData">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Album</th>
                <th>Time</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['listOfSongs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
            <tr>

                <td> <a href="<?php echo @constant('WEB_PATH');?>
view.php?key=<?php echo $_smarty_tpl->tpl_vars['value']->value["Song_ID"];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value["Title"];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value["Artist_FK"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value["Album_FK"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value["Length"];?>
</td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>

    </table>
    </div>



    <a href="new.php" class="btn btn-success">+Add Song</a>
    <div class="modal" id="add-to-album">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">choose album</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>1</td>
                                <td>album-name</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>album-name</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>album-name</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">


                </div>

            </div>
        </div>
    </div>

    <div class="modal" id="add-to-playlist">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Choose Playlist</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>1</td>
                                <td>Playlist</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Playlist</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Playlist</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">


                </div>

            </div>
        </div>
    </div>
    <!--<div class="list col-md-11 col-sm-12">
        <div class="titles col-md-4">
            <ul class="songul">
                <li class="section">Title</li>
                <li><a href="view.php">Head Strong</a></li>
                <li>Somebody That I Used To Know</li>
                <li>The Sound Of Silence</li>
                <li>Stacy's Mom</li>
                <li>Stereo Hearts</li>
                <li>Stitches</li>
                <li>Summer Vibe</li>
                <li>Sweet Caroline</li>
                <li>Thinking Out Loud</li>
                <li>This Is Gospel</li>
            </ul>
        </div>

        <div class="artist col-md-3">
            <ul class="songul">
                <li class="section">Artist</li>
                <li>Trapet</li>
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

        <div class="album col-md-3">
            <ul class="songul">
                <li class="section">Album</li>
                <li>Fun</li>
                <li>R.E.V.O.</li>
                <li>Immortalized</li>
                <li>I've Never Done Anything Like This</li>
                <li>The Papercut Chronicles II</li>
                <li>Handwritten</li>
                <li>R.E.V.O</li>
                <li>In My Lifetime</li>
                <li>x</li>
                <li>Too Weird To Live, Too Rare To Die!</li>
            </ul>
        </div>

        <div class="time col-md-1">
            <ul class="songul">
                <li class="section">Time</li>
                <li>4:46</li>
                <li>4:08</li>
                <li>4:08</li>
                <li>3:13</li>
                <li>3:31</li>
                <li>3:27</li>
                <li>3:06</li>
                <li>3:22</li>
                <li>4:42</li>
                <li>3:07</li>
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
        </div> -->


</div>


</body>

</html><?php }
}
?>