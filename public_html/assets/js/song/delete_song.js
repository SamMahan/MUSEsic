$(document).ready(function() {
    $(".delete-song-button").click(function() {

        var song_id2 = $(this).data("songid");
        var info = {
            song_id: song_id2
        };

        $.ajax({
            url: "../../../controllers/api/song/delete_song.php",
            type: "post",
            data: info,
            success: function(response) {
                if (response === 0) {
                    alert ("Could not delete" + response + ".");
                } else if (response === 1) {
                    alert ("Please sign in to access this function.")
                } else {
                    alert("Successfully deleted " + response + ".");
                    $(this).parent("td").parent("tr").hide();
                }
            },
            error: function() {
                alert("Your request could not be processed at this time.")
            }
        });
    })
});