$(document).ready(function(){
    $("#delete-artist-button").click(function() {
        var id = this.attr("data-artistid");
        $("#confirm-delete-artist").click(function() {

            $.ajax({
                url: "../../../controllers/api/artist/delete_artist.php",
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