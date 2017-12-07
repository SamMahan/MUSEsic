$(document).ready(function(){
    $("#delete-album-button").click(function() {
        var id = this.attr("data-albumid");

        $.ajax({
            url: "../../../controllers/api/album/get_songs.php",
            type: "post",
            data: id,
            dataType: 'json',
            success: function(response) {
                $('#album-song-response').prepend(response);
            },
            error: function() {
                alert("Your request could not be processed at this time.")
            }
        });

        $("#confirm-delete-album").click(function() {

            $.ajax({
                url: "../../../controllers/api/album/delete_album.php",
                type: "post",
                data: id,
                dataType: 'json',
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
    });
});