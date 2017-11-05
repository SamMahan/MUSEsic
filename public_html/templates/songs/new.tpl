<!DOCTYPE html>
<html lang="en">
<head>
    
    {$smarty.const.RESOURCES}
    
</head>

<body>
    
{include file = "componants/navbar.tpl"}

<div class="container">
    <div class="row">


        <form class="form-horizontal" method="post" action="{$smarty.const.WEB_PATH}new.php">
            <fieldset>
                <legend>
                    <h1>+Add A New Song</h1>
                </legend>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 ">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 {$successArray[0]}">
                        <label class="control-label" for="inputLarge">Title</label>
                        <input class="form-control input-lg" id="inputLarge" type="text" name="title" . {$populateArray[0]} />
                    </div>

                    <div class="form-group col-lg-11 col-md-11 col-sm-11 col-xs-11 {$successArray[1]}">
                        <label class="control-label" for="inputDefault">Artist</label>
                        <input class="form-control" id="inputDefault" type="text" name="artist_name" . {$populateArray[1]} />
                    </div>

                    <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-10 {$successArray[2]}">
                        <label class="control-label" for="inputSmall">Genre</label>
                        <input class="form-control input-sm" id="inputSmall" type="text" name="genre" . {$populateArray[2]} />
                    </div>

                    <div class="control-group col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <label class="control-label" for="fileUpload">File Upload</label>
                        <div class="controls">
                            <input id="fileUpload" name="fileUpload" class="input-file" type="file">
                        </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label for="textArea" class="control-label">Uploader's Comments</label>

                        <textarea class="form-control" rows="3" id="textArea" name="comment"></textarea>

                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <a class="btn btn-default" href="{$smarty.const.WEB_PATH}list.php">Cancel</a>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </fieldset>
        </form>

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
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>