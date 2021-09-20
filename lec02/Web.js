$(document).ready(function () {
    $("#new-song-button").click(function () {
        console.log("yeet"); 
        $("#album-list").append('<li><input class="song-input" type="text" name="songs" id="song-3"></li>');        
    });
});




