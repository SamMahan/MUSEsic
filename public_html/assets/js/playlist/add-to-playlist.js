$(document).onload(function(){

    $("new-playlist").click(function(){
        //populates info with information from the html file
        //meant too work with create_playlist.tpl
        var info = {
            Name: $("#playlist-name").val(),
            Number_Of_Songs: $("#playlist-number-of-songs").val(),
            RunTime: $("#playlist-runtime").val()

        }

        //formulates request using var info
        $.ajax({
            url:"../api/playlists/post.php",
            type: "POST",
            data:info,
            type:"json",
            success :function(response){
                alert(response);
            },
            error :function(request, error){
                alert("error!!");
            }
        });



    });
});