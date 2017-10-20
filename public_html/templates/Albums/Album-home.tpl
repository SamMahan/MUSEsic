<html lang="en">

<head>
   
    <style type="text/css" media="all">
        @import "../../assets/css/view_artist.css";
    </style>
    
    {$smarty.const.RESOURCES}
    
</head>

<body>

   {include file = "Componants/navbar.tpl"}
   
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11"></div>
            <div class="col-lg-1">
                <!--<a href="update.html" class="btn btn-info">Update Album</a>-->
            </div>
        </div>



        <div class="row">
            <div class="artistpic col-lg-3 col-lg-offset-4">
                <img src="../../assets/Images/artistpicture.jpg" alt="artist picture" height="auto" width="auto">
                <h2>The Piano Guys(album)</h2>
                <h4>The Piano Guys</h4>
                <h4>Added By: User</h4>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th> Play Time</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="../songs/view_song.html">Headstrong</a></td>

                    <td>00:30:00</td>
                    <td><a  data-toggle="modal" data-target="#remove-song" href = "#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>My Second song</td>
                    <td>00:24:00</td>
                    <td><a  data-toggle="modal" data-target="#remove-song" href = "#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>My third song</td>
                    <td>00:24:00</td>
                    <td><a  data-toggle="modal" data-target="#remove-song" href = "#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            </tbody>
        </table>
<!-- remove song modal-->
        <div class="modal" id="remove-song">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">remove from album?</h4>
                    </div>
                    <div class="modal-body">
                        <div class = "row">
                        <div class "btn-group-vertical" role = "group">
                        <button type = "button" class="btn btn-danger col-lg-12"><h4>yes</h4></button>
                        <button type = "button" class="btn btn-primary col-lg-12"><h4>cancel</h4></button>
                        </div>
                        </div>
                        <div class="modal-footer">
                            
                        </div>
                    </div>
                </div>
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
            <div class="col-md-3">
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

</html>