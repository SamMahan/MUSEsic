<<<<<<< HEAD
<?php /* Smarty version 3.1.27, created on 2017-11-02 20:49:35
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\update_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:111826692059fbbd1f223132_95936832%%*/
=======
<?php /* Smarty version 3.1.27, created on 2017-11-02 20:38:57
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\update_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:56166229559fbbaa1df3595_39021350%%*/
>>>>>>> 7992d1c964b7ee83d15eaf2f9a624f6089e74d79
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '379f40d6cdd56dcc8c1c0e13b3c26f44ff669277' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\update_artist.tpl',
<<<<<<< HEAD
      1 => 1509670044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111826692059fbbd1f223132_95936832',
  'variables' => 
  array (
    'successArray' => 0,
    'populateArray' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fbbd1f249e25_10116649',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fbbd1f249e25_10116649')) {
function content_59fbbd1f249e25_10116649 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '111826692059fbbd1f223132_95936832';
=======
      1 => 1509664879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56166229559fbbaa1df3595_39021350',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fbbaa1dfb883_53592377',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fbbaa1dfb883_53592377')) {
function content_59fbbaa1dfb883_53592377 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '56166229559fbbaa1df3595_39021350';
>>>>>>> 7992d1c964b7ee83d15eaf2f9a624f6089e74d79
?>
<div class="modal fade" id="update_artist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Update Artist:</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="post" action="<?php echo @constant('WEB_PATH');?>
artist_list.php">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[0];?>
">
                            <label class="col-md-4 control-label" for="artist_name">Artist Name:</label>
                            <div class="col-md-4">
                                <input id="artist_name" name="artist_name" type="text" placeholder="old name" class="form-control input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[0];?>
>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[1];?>
">
                            <label class="col-md-4 control-label" for="popular_song">Most Popular Song:</label>
                            <div class="col-md-4">
                                <input id="popular_song" name="popular_song" type="text" placeholder="old song name" class="form-control input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[1];?>
>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[2];?>
">
                            <label class="col-md-4 control-label" for="number_songs">Number of Songs:</label>
                            <div class="col-md-4">
                                <input id="number_songs" name="number_songs" type="text" placeholder="old number" class="form-control input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[2];?>
>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['successArray']->value[3];?>
">
                            <label class="col-md-4 control-label" for="number_albums">Number of Albums:</label>
                            <div class="col-md-4">
                                <input id="number_albums" name="number_albums" type="text" placeholder="old number" class="form-control input-md" <?php echo $_smarty_tpl->tpl_vars['populateArray']->value[3];?>
>

                            </div>
                        </div>

                    </fieldset>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>

                    </div>
                </form>

            </div>

        </div>
    </div>
</div><?php }
}
?>