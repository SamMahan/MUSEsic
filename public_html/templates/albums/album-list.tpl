<!DOCTYPE html>
<html lang="en">
<head>
    
    {$smarty.const.RESOURCES}

    <style>
        #userName {
            margin-left: 6%;
        }

        #userNameLink{
            margin-left: 5%;
        }
    </style>

</head>
<body>

{include file = "componants/navbar.tpl"}
{include file = "modals/update_album.tpl"}
{incluse file = "modals/delete_general.tpl"}

<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Artist Name</th>
        <th>Number of Songs</th>
        <th>Total Play Time</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td><a href="Album-home.html">Album</a></td>
        <td>Artist</td>
        <td>10</td>
        <td>00:30:00</td>
        <td><a href="#" data-target="#delete_general" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>My Second Album</td>
        <td>Artist</td>
        <td>7</td>
        <td>00:24:00</td>
        <td><a href="#" data-target="#delete_general" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
    </tr>

    <tr>
        <td>6</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td><a href="#" data-target="#delete_general" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
    </tr>
    <tr>
        <td>7</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td>---</td>
        <td><a href="#" data-target="#delete_general" data-toggle="modal"><button class="btn btn-danger">Delete</button></a><a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a></td>
    </tr>

    </tbody>
</table>

{include file = "modals/create_album.tpl"}
<div class="row">
    <div class="col-lg-11"></div>
    <div class="col-lg-1">
        <a href="#" data-target="#create_album" data-toggle="modal"><button class="btn btn-info">Add Album</button></a>
        <a href="#" data-target="#update_album" data-toggle="modal"><button class="btn btn-default">Update</button></a>
    </div>
</div>

</body>
