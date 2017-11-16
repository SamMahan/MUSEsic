



{$smarty.const.RESOURCES}




{include file = "componants/navbar.tpl"}
{include file = "modals/change_password.tpl"}

    <div class="container">
        <div class="row justify-content-center">


            <div class="well col-lg 5">
                <form class="form-horizontal user_form user_settings" method="post" action="{$smarty.const.WEB_PATH}settings.php">
                    <fieldset>
                        <legend>Edit Profile</legend>
                        <div class="row justify-content-center">
                            <div class="control-group col-lg-2">
                                <label class="control-label" for="fileUpload">Upload Profile Picture</label>

                                <div class="col-lg-5">
                                    <input id="fileUpload" name="fileUpload" class="input-file" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-7 {$successArray[0]}">
                            <label class="control-label" for="first_name">First Name</label>
                            <input name="first_name" class="form-control" id="first_name" type="text" required="required">
                        </div>

                        <div class="form-group col-lg-7 {$successArray[1]}">
                            <label class="control-label" for="last_name">Last Name</label>
                            <input name="last_name" class="form-control" id="last_name" type="text" required="required">
                        </div>

                        <div class="form-group col-lg-7 {$successArray[2]}">
                            <label class="control-label" for="email">E-mail</label>
                            <input name="email" class="form-control" id="email" type="text" required="required">
                        </div>

                        <div class="form-group col-lg-7">
                            <label class="control-label" for="Birthday">Birthday</label>
                            <input name="birthday" class="form-control" id="Birthday" type="text">
                        </div>

                        <div class="form-group col-lg-7">
                            <label class="control-label" for="FavoriteGenre">Favorite Genre</label>
                            <input name="favorite_genre" class="form-control" id="FavoriteGenre" type="text">
                        </div>

                        <div class="form-group col-lg-7">
                            <label class="control-label" for="FavoriteArtist">Favorite Artist</label>
                            <input name="favorite_artist" class="form-control" id="FavoriteArtist" type="text">
                        </div>


                        <div id="buttons" class="col-lg-10">
                            <button type="reset" class="btn btn-default">clear changes</button>
                            <button type="submit" class="btn btn-default" id="upload">Submit changes</button>
                        </div>

                    </fieldset>
                </form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-10">

                        </div>
                        <div class="col-md-2">
                            <a href="#" data-toggle="modal" data-target="#change_password"><button class="btn btn-default">Update Password</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{include file = "modals/submit.tpl"}

{if ($display == true)}
    <script>
        $(document).ready(function(){
            $("#submit").modal();
        });
    </script>
{/if}