<?php /* Smarty version 3.1.27, created on 2017-10-31 17:29:59
         compiled from "C:\MAMP\htdocs\Group Final\MUSEsic\public_html\templates\songs\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:107777312759f8eb57231da2_31584577%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c58d32b02df13ae76bfdbd926e4c7f2d407ae00f' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Group Final\\MUSEsic\\public_html\\templates\\songs\\update.tpl',
      1 => 1509481430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107777312759f8eb57231da2_31584577',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f8eb57266e58_17589451',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f8eb57266e58_17589451')) {
function content_59f8eb57266e58_17589451 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '107777312759f8eb57231da2_31584577';
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
        <form class="form-horizontal" method="post" action="#">
            <fieldset>
                <legend>
                    <h1>Update Song</h1>
                </legend>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label" for="inputLarge">Title</label>
                        <input class="form-control input-lg" id="inputLarge" type="text" placeholder="Enter Title">
                    </div>

                    <div class="form-group col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <label class="control-label" for="inputDefault">Artist</label>
                        <input class="form-control" id="inputDefault" type="text" placeholder="Enter Artists Name">
                    </div>

                    <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <label class="control-label" for="inputSmall">Genre</label>
                        <input class="form-control input-sm" id="inputSmall" type="text" placeholder="Enter Genre">
                    </div>

                    <div class="form-group col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <label for="textArea" class="control-label">Uploader's Comments</label>
                        <textarea class="form-control" rows="3" id="textArea"></textarea>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-default" id="upload">Update</button>
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