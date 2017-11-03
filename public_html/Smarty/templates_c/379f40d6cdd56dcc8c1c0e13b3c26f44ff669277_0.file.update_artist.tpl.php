<?php /* Smarty version 3.1.27, created on 2017-11-02 19:05:53
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\modals\update_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:141803241959fba4d1af16b6_17899566%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '379f40d6cdd56dcc8c1c0e13b3c26f44ff669277' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\modals\\update_artist.tpl',
      1 => 1509663741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141803241959fba4d1af16b6_17899566',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fba4d1b06331_18626140',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fba4d1b06331_18626140')) {
function content_59fba4d1b06331_18626140 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '141803241959fba4d1af16b6_17899566';
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

                <form class="form-horizontal">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="artist_name">Artist Name:</label>
                            <div class="col-md-4">
                                <input id="artist_name" name="artist_name" type="text" placeholder="old name" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="popular_song">Most Popular Song:</label>
                            <div class="col-md-4">
                                <input id="popular_song" name="popular_song" type="text" placeholder="old song name" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="number_songs">Number of Songs:</label>
                            <div class="col-md-4">
                                <input id="number_songs" name="number_songs" type="text" placeholder="old number" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="number_albums">Number of Albums:</label>
                            <div class="col-md-4">
                                <input id="number_albums" name="number_albums" type="text" placeholder="old number" class="form-control input-md">

                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Save Changes</button>

            </div>
        </div>
    </div>
</div><?php }
}
?>