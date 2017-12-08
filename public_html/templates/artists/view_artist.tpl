<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Artist</title>


    {$smarty.const.RESOURCES}

{include file = "componants/navbar.tpl"}
{include file = "modals/update_artist.tpl"}

<div class="row">
     <div class="col-lg-11"></div>
     <div class="col-lg-1">
         <a href="#" data-target="#update_artist" data-toggle="modal"><button class="btn btn-info">Update Artist</button></a>
     </div>
</div>


<div class="container-fluid">
    <div class="artistpic col-md-5 col-md-offset-1">
        <img src="../../../assets/Images/artistpicture.jpg" alt="artist picture" height="auto" width="auto">
        <h2>{$artist["Artist_Name"]}</h2>
        <h4>Added By: {$author->First_Name}</h4>
    </div>

    <div class="info col-md-5">
        <p>The Piano Guys are an American musical group consisting of pianist Jon Schmidt, cellist Steven Sharp Nelson,
            videographer Paul Anderson, and music producer Al van der Beek. They gained popularity through YouTube,
            where in 2010 they began
            posting piano and cello compositions combining classical, contemporary, and rock and roll music, accompanied
            by professional-quality videos. In August 2016 the group surpassed one billion views on their YouTube
            channel, which at that
            time had nearly 5 million subscribers. Their first five major-label albums, The Piano Guys, The Piano Guys
            2, A Family Christmas, Wonders, and Uncharted each reached number one on the Billboard Classical Albums and
            New Age Albums charts.
            The four group members all belong to the Mormon church and were middle-aged family men with other careers
            before they started the group.
        </p>
    </div>

</div>

<div class="row justify-content-center">
    <div class="col-lg-4">
        <h2>
            Albums
        </h2>
    </div>
</div>

{include file = "modals/update_album.tpl"}
<!--added by Samuel Mahan to include popular albums in the artist table-->
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Number of Songs</th>
        <th>Total Play Time</th>
    </tr>
    </thead>
    <tbody>
    {foreach $listOfAlbums as $key => $value}
    <tr>
        <td>1</td>
        <td><a href="../albums/album-home.php">First Album</a></td>
        <td>10</td>
        <td>00:30:00</td>
        <td></td>
        <td>
            <button type="button" class="btn btn-danger">Remove</button>
        </td>
    </tr>
    {/foreach}
</table>



{include file = "modals/add_album.tpl"}
<div class="row">
    <div class="col-lg-11"></div>
    <div class="col-lg-1">
        <a href="#" data-target="#add_album" data-toggle="modal">
            <button class="btn btn-info">Add Album</button>
        </a>
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
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
            condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
            Donec sed odio dui...
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
            condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
            Donec sed odio dui...
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
            condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
            Donec sed odio dui...
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
            condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
            Donec sed odio dui...
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
            condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
            Donec sed odio dui...
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
            condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
            Donec sed odio dui...
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
        <form method="post" action="{$smarty.const.WEB_PATH}view_artist.php">
            <fieldset>
                <div class="form-group">
                    <label for="text_review">Write A Review</label>
                    <textarea class="form-control" id="text_review" rows="3" name="review" required="required"></textarea>
                </div>
            </fieldset>

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

</body>

</html>
