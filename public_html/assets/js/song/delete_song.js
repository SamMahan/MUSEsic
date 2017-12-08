/* $(document).ready(function(){

    $(".delete-song-button").click(function() {
        var var1 = this.child(button);
        alert(var1);
        $("#delete_song").prop("data-songid");

    });
        $("#confirm-delete-song").click(function() {
            var song_id = $("#delete_song").attr("data-songid");
            $.ajax({
                url: "../../../controllers/api/song/delete_song.php",
                type: "post",
                data: song_id,
                success: function(response) {
                    if (response === 0) {
                        alert ("Could not delete" + response + ".");
                    } else if (response === 1) {
                        alert ("Please sign in to access this function.")
                    } else {
                        alert("Successfully deleted " + response + ".");
                    }
                },
                error: function() {
                    alert("Your request could not be processed at this time.")
                }
            });
        });
        $("#cancel").click(function() {


        });
    }); */

$(document).ready(function() {
    $(".delete-song-button").click(function() {
        var song_id = $(this).data("song_id");
        $("#deleting_song .confirm_delete_song").setAttribute("data-song_id", song_id);
    });
    $(".confirm_delete_song").click(function() {
        var song_id = $(this).data("song_id");
        
        $.ajax({
            url: "../../../controllers/api/song/delete_song.php",
            type: "post",
            data: song_id,
            success: function(response) {
                if (response === 0) {
                    alert ("Could not delete" + response + ".");
                } else if (response === 1) {
                    alert ("Please sign in to access this function.")
                } else {
                    alert("Successfully deleted " + response + ".");
                }
            },
            error: function() {
                alert("Your request could not be processed at this time.")
            }
        });
    })
});