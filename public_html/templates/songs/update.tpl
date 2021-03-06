<!DOCTYPE html>
<html lang="en">
<head>
    
    {$smarty.const.RESOURCES}

</head>
<body>

{include file = "Componants/navbar.tpl"}

<div class="container">
    <div class="row">
        <form class="form-horizontal" method="post" action="#">
            <fieldset>
                <legend>
                    <h1>Update Song</h1>
                </legend>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label" for="inputLarge">Title</label>
                        <input class="form-control input-lg" id="inputLarge" type="text" placeholder="Enter Title">
                    </div>

                    <div class="form-group col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <label class="control-label" for="inputDefault">Artist</label>
                        <input class="form-control" id="inputDefault" type="text" placeholder="Enter Artists Name">
                    </div>

                    <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <label class="control-label" for="inputSmall">Genre</label>
                        <input class="form-control input-sm" id="inputSmall" type="text" placeholder="Enter Genre">
                    </div>

                    <div class="form-group col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <label for="textArea" class="control-label">Uploader's Comments</label>
                        <textarea class="form-control" rows="3" id="textArea"></textarea>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-default" id="upload">Update</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>
</html>