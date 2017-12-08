$(document).ready(function(){
    $("#delete-artist-button").click(function() {
        var button = $(this);
        var artist_id2 = $(this).data("artistid");
        var info = {
            artist_id: artist_id2
        };

        $.ajax({
            url: "../../../controllers/api/artist/delete_artist.php",
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