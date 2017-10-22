<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Artist</title>
<<<<<<< HEAD
=======
    
>>>>>>> 18ca0ee445bd9e1d77acf7e44bd15e7220431d5b
    {$smarty.const.RESOURCES}
    
</head>

<body>

   
   
   {include file = "Componants/navbar.tpl"}
   
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
                </tr>
                <tr>
                    <td>2</td>
                    <td>My Second Playlist</td>
                    <td>7</td>
                    <td>00:24:00</td>
                    <td>10/20/06</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>10/20/06</td>
                </tr>
        </table>

        {include file = "Albums/TEMP_addalbum.tpl"}
        <div class="row">
        <div class="col-lg-11"></div>
        <div class="col-lg-1">
            <a href="#" data-target="#add-album" data-toggle="modal"><button class="btn btn-info">Add Album</button></a>
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
<<<<<<< HEAD

{include file = "Albums/TEMP_addalbum.tpl"}

<a href="#" data-target="#add-album" data-toggle="modal"><button class="button">Add Album</button></a>
    

=======
        
>>>>>>> 18ca0ee445bd9e1d77acf7e44bd15e7220431d5b
</body>
</html>