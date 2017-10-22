<<<<<<< HEAD:public_html/templates/Albums/TEMP_addalbum.tpl
<!DOCTYPE html>
<!--
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Artist</title>
    <style type="text/css" media="all">
        @import "../../assets/css/view_artist.css";
    </style>
    <link href="../../assets/css/bootswatch.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS --
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand " href="#">MUSEsic</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="../User/profile.html">Profile</a></li>
                            <li><a href="../songs/song_list.html">Song List</a></li>
                            <li><a href="../artists/artist_list.html">Artist List</a></li>
                            <li><a href="../Albums/Album-list.html">Album List</a></li>
                            <li class="divider"></li>
                            <li><a href="../visitor/registration.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-toggle="modal" data-target="#login" href="#">Login</a></li>
                </ul>
                <img src="../../assets/Images/NoProfilePic.jpg" height="40" />
                <a href="../User/profile.html">Matthew Bromley</a>
            </div>
        </div>
    </nav>
    
    <form class="form-horizontal">
        <fieldset>

        <!-- Form Name --
        <legend>Add an Album to the Artist</legend>

        <!-- Text input--
        <div class="form-group">
          <label class="col-md-4 control-label" for="albumname">Album Name:</label>  
          <div class="col-md-4">
          <input id="albumname" name="albumname" type="text" placeholder="" class="form-control input-md">
    
          </div>
        </div>

        <!-- Text input--
        <div class="form-group">
          <label class="col-md-4 control-label" for="numbersongs">Number of Songs:</label>  
          <div class="col-md-4">
          <input id="numbersongs" name="numbersongs" type="text" placeholder="" class="form-control input-md">
            
          </div>
        </div>

        <!-- Text input--
        <div class="form-group">
          <label class="col-md-4 control-label" for="totaltime">Total Play Time:</label>  
          <div class="col-md-4">
          <input id="totaltime" name="totaltime" type="text" placeholder="" class="form-control input-md">
    
          </div>
        </div>

        <!-- Text input--
        <div class="form-group">
          <label class="col-md-4 control-label" for="released">Release Date:</label>  
          <div class="col-md-4">
          <input id="released" name="released" type="text" placeholder="" class="form-control input-md">
    
          </div>
        </div>
        
        <!-- Button (Double) --
        <div class="form-group">
          <label class="col-md-4 control-label" for="confirm"></label>
          <div class="col-md-8">
            <button id="confirm" name="confirm" class="btn btn-success">Confirm</button>
            <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
          </div>
        </div>

        </fieldset>
        </form> -->
        
<div class="modal fade" id="add-album" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
<div class="modal fade" id="add_album" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> f0d66f81968a4864f602d050aa1aaf8bff7c4eb8:public_html/templates/modals/add_album.tpl
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Pick an Album to Add:</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form class="form-horizontal">
        <fieldset>
        <div class="form-group">
          <label class="col-md-4 control-label" for="album_to_add"></label>
          <div class="col-md-4">
              <select id="album_to_add" name="album_to_add" class="form-control">
              <option value="0">--Select--</option>
              <option value="1">Album 1</option>
              <option value="2">Album 2</option>
              <option value="3">Album 3</option>
              <option value="4">Album 4</option>
              <option value="5">Album 5</option>
              <option value="6">Album 6</option>
            </select>
          </div>
        </div>
        </fieldset>
        </form>

      </div>
      <div class="modal-footer">
<<<<<<< HEAD
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Save Changes</button>
=======
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
>>>>>>> 4d57e20cf21c3fe8f59337b39dda622c24ed7381
      </div>
    </div>
  </div>
</div>

