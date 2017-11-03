<?php /* Smarty version 3.1.27, created on 2017-11-02 20:49:59
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\songs\new.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:159200617359fbbd37bc7062_38664785%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af0a0322b66c4d27841023bc107fa9661ed2607a' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\songs\\new.tpl',
      1 => 1509669924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159200617359fbbd37bc7062_38664785',
  'variables' => 
  array (
    'successArray' => 0,
    'populateArray' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fbbd37c0da81_70669659',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fbbd37c0da81_70669659')) {
function content_59fbbd37c0da81_70669659 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '159200617359fbbd37bc7062_38664785';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php echo @constant('RESOURCES');?>

    
</head>

<body>
    
<?php echo $_smarty_tpl->getSubTemplate ("componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">
    <div class="row">


        <form class="form-horizontal" method="post" action="<?php echo @constant('WEB_PATH');?>
new.php">
            <fieldset>
                <legend>
                    <h1>+Add A New Song</h1>
                </legend>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 ">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php echo $_smarty_tpl->tpl_vars['successArray']->value[0];?>
">
                        <label class="control-label" for="inputLarge">Title</label>
                        <input class="form-control input-lg" id="inputLarge" type="text" name="title" . <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[0];?>
 />
                    </div>

                    <div class="form-group col-lg-11 col-md-11 col-sm-11 col-xs-11 <?php echo $_smarty_tpl->tpl_vars['successArray']->value[1];?>
">
                        <label class="control-label" for="inputDefault">Artist</label>
                        <input class="form-control" id="inputDefault" type="text" name="artist_name" . <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[1];?>
 />
                    </div>

                    <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-10 <?php echo $_smarty_tpl->tpl_vars['successArray']->value[2];?>
">
                        <label class="control-label" for="inputSmall">Genre</label>
                        <input class="form-control input-sm" id="inputSmall" type="text" name="genre" . <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[2];?>
 />
                    </div>

                    <div class="control-group col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <label class="control-label" for="fileUpload">File Upload</label>
                        <div class="controls">
                            <input id="fileUpload" name="fileUpload" class="input-file" type="file">
                        </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label for="textArea" class="control-label">Uploader's Comments</label>

                        <textarea class="form-control" rows="3" id="textArea" name="comment"></textarea>

                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <a class="btn btn-default" href="<?php echo @constant('WEB_PATH');?>
list.php">Cancel</a>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>

</div>

<!-- Latest compiled and minified JavaScript -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>