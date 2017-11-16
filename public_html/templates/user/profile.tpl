<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ViewProfile</title>
    {$smarty.const.RESOURCES}

   <!-- <style>
        #userName {
            margin-left: 6%;
        }

        #userNameLink{
            margin-left: 5%;
        }
    </style> -->

</head>
<body>

{include file="componants/navbar.tpl"}


<div class="col-lg-3">
    <div class="col-lg-offset-1">
        <img src="../../../assets/Images/NoProfilePic.jpg" height="300"/>
    </div>
    <div class="col-lg-offset-3">
        <h3 id="userName">{$user->First_Name} {$user->Last_Name}</h3>
        <div class="col-lg-offset-1">
            <a id="userNameLink" href="settings.php" id="editLink">Edit Profile</a>
        </div>
    </div>
</div>

<div class="col-lg-9">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#AboutMe" data-toggle="tab" aria-expanded="true">About Me</a></li>
        <li class=""><a href="#Favorites" data-toggle="tab" aria-expanded="false">Favorites</a></li>
        <li class=""><a href="#MyPlayLists" data-toggle="tab" aria-expanded="false">My Play Lists</a></li>
        <li class=""><a href="#Friends" data-toggle="tab" aria-expanded="false">Friends</a></li>

    </ul>

    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="AboutMe">
            <h2>Name</h2>
            <p class="info">{$user->First_Name} {$user->Last_Name}</p>
            <br>

            <h2>Birthday</h2>
            <p class="info">12/23/98</p>
            <br>

            <h2>Favorite Genre</h2>
            <p class="info">Orchestral</p>
            <br>

            <h2>Favorite Artist</h2>
            <p class="info">Thomas J. Bergerse, Nick Phoenix</p>
            <br>
        </div>

        <div class="tab-pane fade" id="Favorites">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Rating</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Flight Of The Silver Eagle</td>
                    <td>Thomas J. Bergerse, Nick Phoenix</td>
                    <td>4/5</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>

                </tbody>
            </table>
        </div>

        <div class="tab-pane fade" id="MyPlayLists">
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
                <tr>
                    <td>1</td>
                    <td><a href="../../../Controllers/Logic/playlists/playlist.php">My First Playlist</a></td>
                    <td>10</td>
                    <td>00:30:00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>My Second Playlist</td>
                    <td>7</td>
                    <td>00:24:00</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                </tbody>
            </table>
            {include file = "modals/create_playlist.tpl"}
            <a href="#" class="btn btn-success" data-target="#create_playlist" data-toggle="modal">+Create New Playlist</a>
        </div>

        <div class="tab-pane fade" id="Friends">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Sam</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Donavin</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Isacccc...Smells</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Gooooooooooooooood</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>---</td>
                </tr>

                </tbody>
            </table>
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
</body>
</html>