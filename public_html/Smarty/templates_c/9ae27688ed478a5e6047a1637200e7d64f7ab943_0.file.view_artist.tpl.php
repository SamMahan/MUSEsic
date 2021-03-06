<?php /* Smarty version 3.1.27, created on 2017-10-21 21:05:11
         compiled from "/home/ubuntu/workspace/public_html/templates/artists/view_artist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:66330083659ebeec7c6eec4_27824292%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ae27688ed478a5e6047a1637200e7d64f7ab943' => 
    array (
      0 => '/home/ubuntu/workspace/public_html/templates/artists/view_artist.tpl',
      1 => 1508634306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66330083659ebeec7c6eec4_27824292',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ebeec7c8d332_69297229',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ebeec7c8d332_69297229')) {
function content_59ebeec7c8d332_69297229 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '66330083659ebeec7c6eec4_27824292';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Artist</title>
    
    <?php echo @constant('RESOURCES');?>

    
</head>

<body>

   
   
   <?php echo $_smarty_tpl->getSubTemplate ("Componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   
    <div class="row">
        <div class="col-lg-11"></div>
        <div class="col-lg-1">
            <a href="update.html" class="btn btn-info">Update Artist</a>
        </div>



        <div class="container-fluid">
            <div class="artistpic col-md-5 col-md-offset-1">
                <img src="../../../assets/Images/artistpicture.jpg" alt="artist picture" height="auto" width="auto">
                <h2>The Piano Guys</h2>
                <h4>Added By: User</h4>
            </div>

            <div class="info col-md-5">
                <p>The Piano Guys are an American musical group consisting of pianist Jon Schmidt, cellist Steven Sharp Nelson, videographer Paul Anderson, and music producer Al van der Beek. They gained popularity through YouTube, where in 2010 they began
                    posting piano and cello compositions combining classical, contemporary, and rock and roll music, accompanied by professional-quality videos. In August 2016 the group surpassed one billion views on their YouTube channel, which at that
                    time had nearly 5 million subscribers. Their first five major-label albums, The Piano Guys, The Piano Guys 2, A Family Christmas, Wonders, and Uncharted each reached number one on the Billboard Classical Albums and New Age Albums charts.
                    The four group members all belong to the Mormon church and were middle-aged family men with other careers before they started the group.
                </p>
            </div>

            <div class="">

            </div>
        </div>
    </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <h2>
                    Albums
                </h2>
            </div>
        </div>
        <!--added by Samuel Mahan to include popular albums in the artist table-->
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Number of Songs</th>
                    <th>Total Play Time</th>
                    <th>Release-date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="../Albums/Album-home.html">First Album</a></td>
                    <td>10</td>
                    <td>00:30:00</td>
                    <td>10/20/06</td>
                    <td><button type="button" class="btn btn-danger">Delete Album</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>My Second Playlist</td>
                    <td>7</td>
                    <td>00:24:00</td>
                    <td>10/20/06</td>
                    <td><button type="button" class="btn btn-danger">Delete Album</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>10/20/06</td>
                    <td><button type="button" class="btn btn-danger">Delete Album</button></td>
                </tr>
        </table>

        <?php echo $_smarty_tpl->getSubTemplate ("modals/add_album.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="row">
        <div class="col-lg-11"></div>
        <div class="col-lg-1">
            <a href="#" data-target="#add_album" data-toggle="modal"><button class="btn btn-info">Add Album</button></a>
        </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">

                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <h2>
                    Latest Review 1
                    <small>Star Rating Here</small>
                </h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui...
                </p>
                <p>
                    <a class="btn" href="#">View more »</a>
                </p>
            </div>
            <div class="col-md-4">
                <h2>
                    Latest Review 2
                    <small>Star Rating Here</small>
                </h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui...
                </p>
                <p>
                    <a class="btn" href="#">View more »</a>
                </p>
            </div>
            <div class="col-md-4">
                <h2>
                    Latest Review 3
                    <small>Star Rating Here</small>
                </h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui...
                </p>
                <p>
                    <a class="btn" href="#">View more »</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2>
                    Latest Review 4
                    <small>Star Rating Here</small>
                </h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui...
                </p>
                <p>
                    <a class="btn" href="#">View more »</a>
                </p>
            </div>
            <div class="col-md-4">
                <h2>
                    Latest Review 5
                    <small>Star Rating Here</small>
                </h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui...
                </p>
                <p>
                    <a class="btn" href="#">View more »</a>
                </p>
            </div>
            <div class="col-md-4">
                <h2>
                    Latest Review 6
                    <small>Star Rating Here</small>
                </h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui...
                </p>
                <p>
                    <a class="btn" href="#">View more »</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <h2>
                    Submit your own review!
                </h2>
                <form>
                    <textarea name="review" rows="8" cols="70">
                        Submit your own review here for all to see!
                    </textarea>
                    <div class="form-group ">
                        <label for="star_rating">
                        How many stars do you give this artist?
                    </label>
                        <select class="select form-control" id="star_rating" name="star_rating">
                        <option value="One Star">
                            One Star
                        </option>
                        <option value="Two Stars">
                            Two Stars
                        </option>
                        <option value="Three Stars">
                            Three Stars
                        </option>
                        <option value="Four Stars">
                            Four Stars
                        </option>
                        <option value="Five Stars">
                            Five Stars
                        </option>
                    </select>
                    </div>
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </div>
        
</body>
</html><?php }
}
?>