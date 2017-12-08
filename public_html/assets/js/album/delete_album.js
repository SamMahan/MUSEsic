$(document).ready(function(){
    $("#delete-album-button").click(function() {
        var button = $(this);
        var song_id2 = $(this).data("albumid");
        var info = {
            song_id: song_id2
        };

        $.ajax({
            url: "../../../controllers/api/album/get_songs.php",
            type: "post",
            data: info,
            success: function(response) {
                if (response === 0) {
                    alert ("Could not delete" + response + ".");
                } else if (response === 1) {
                    alert ("Please sign in to access this function.")
                } else {
                    alert("Successfully deleted " + response + ".");

                    button.parent("td").parent("tr").hide();

                }
            },
            error: function() {
                alert("Your request could not be processed at this time.")
            }
        });
    });
});