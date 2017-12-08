$(document).ready(function(){
    $("#create_playlist_submit").click(function(e){
        e.preventDefault();
        //populates info with information from the html file
        //meant too work with create_playlist.tpl
        var info = {
            Name: $("#playlist-name").val(),
            //Number_Of_Songs: $("#playlist-number-of-songs").val(),
            //RunTime: $("#playlist-runtime").val(),
            User_FK: $("#global-meta").attr("data-userid")
        };
        var data = JSON.stringify(info);

        //formulates request using var info
        $.ajax({
            url:"../../api/playlist/post.php",
            type: "POST",
            data:info,

            success :function(response){
                $("#create_playlist").modal('toggle');
            },
            error :function(request, error){
                alert(request.status);
            }
        });

    });
});

