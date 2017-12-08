<!DOCTYPE html>
<html lang="en">
<head>
  
    <style media="all">@import "../../assets/css/view_song.css";</style>
    <link href="../../assets/css/bootswatch.css" type="text/css" rel="stylesheet"/>
    <title>View Song</title>
    {$smarty.const.RESOURCES}
</head>
    


{include file = "componants/navbar.tpl"}

<div class="col-lg-11"></div>
<div class="col-lg-1">
    <a href="update.php?key={$songArray["Song_ID"]}" class="btn btn-info">Update Song</a>
</div>



<div class="container-fluid">
    <div class="songpic col-md-5 col-md-offset-1">
        <img src="../../../assets/Images/songpicture.jpg" alt="song picture" height='auto'
             width='auto'>
        <h2>{$songArray["Title"]}</h2>
        <h4>Added By: {$userid->First_Name}</h4>
    </div>

    <div class="info col-md-5">
        <p>{$songArray["Description"]}
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

            <form method="post" action="{$smarty.const.WEB_PATH}view.php">
                <fieldset>
                    <div class="form-group">
                        <label for="text_review">Write A Review</label>
                        <textarea class="form-control" id="text_review" rows="3" name="review" required="required"></textarea>
                    </div>
                </fieldset>

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
                <input type="submit" value="Submit" class="btn btn-success"/>
            </form>
        </div>
    </div>

    {include file = "modals/update_artist.tpl"}

    {include file = "modals/submit.tpl"}

    {if ($error == true)}
        <script>
            $(document).ready(function(){
                $("#update_artist").modal();
            });
        </script>
    {/if}

    {if ($display == true)}
        <script>
            $(document).ready(function(){
                $("#submit").modal();
            });
        </script>
    {/if}

</div>

</body>
</html>