<?php /* Smarty version 3.1.27, created on 2017-11-02 23:00:31
         compiled from "C:\MAMP\htdocs\MUSEsic\public_html\templates\songs\view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:120313614459fbdbcf5f8c54_71178015%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c114c0b1b77a13f601bb4fe6d52647f082243d3b' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MUSEsic\\public_html\\templates\\songs\\view.tpl',
      1 => 1509678030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120313614459fbdbcf5f8c54_71178015',
  'variables' => 
  array (
    'songArray' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fbdbcf645f29_68289182',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fbdbcf645f29_68289182')) {
function content_59fbdbcf645f29_68289182 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '120313614459fbdbcf5f8c54_71178015';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <style type="text/css" media="all">@import "../../assets/css/view_song.css";</style>
    <link href="../../assets/css/bootswatch.css" type="text/css" rel="stylesheet"/>
    
    <?php echo @constant('RESOURCES');?>

    
</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ("componants/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="col-lg-11"></div>
<div class="col-lg-1">
    <a href="update.php" class="btn btn-info">Update Song</a>
</div>



<div class="container-fluid">
    <div class="songpic col-md-5 col-md-offset-1">
        <img src="../../../assets/Images/songpicture.jpg" alt="song picture" height="auto"
             width="auto">
        <h2><?php echo $_smarty_tpl->tpl_vars['songArray']->value["Title"];?>
</h2>
        <h4><?php echo $_smarty_tpl->tpl_vars['songArray']->value[''];?>
</h4>
        <h4>Added By: User</h4>
    </div>

    <div class="info col-md-5">
        <p>"Headstrong" is the debut single from the band Trapt and the
            lead single from their 2002 self-titled debut album. It reached
            No. 1 on the Billboard Mainstream Rock (1 week on July 26, 2003)
            and Modern Rock (5 weeks on May 31, 2003) charts and No. 16 on
            the Billboard Hot 100, as well as No. 1 on the singles recurrent
            charts. It crossed over to mainstream pop radio, peaking at No.
            4 on Billboard Mainstream Top 40. The song also won two
            Billboard Music Awards in 2003 for "Best Modern Rock Track" and
            "Best Rock Track". It was featured on the video game Karaoke
            Revolution Party. It was written by Chris Taylor Brown, Pete
            Charell, Simon Ormandy, Jeffrey Unbankes.
        </p>
    </div>

    <div class="">

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
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui...
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
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui...
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
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui...
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
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui...
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
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui...
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
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui...
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
                        How many stars do you give this song?
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
                <input type="submit" value="Submit"/>
            </form>
        </div>
    </div>

</div>

</body>
</html><?php }
}
?>