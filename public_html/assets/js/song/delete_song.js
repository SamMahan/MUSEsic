$(document).ready(function(){
    $("#delete-song-button").click(function() {
        var id = this.attr("data-songid");
        $("#confirm-delete-song").click(function() {

            $.ajax({
                url: "../../../controllers/api/song/delete_song.php",
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