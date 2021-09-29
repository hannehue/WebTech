$(document).ready(function() {
    newSongEvent();
    deleteSongEvent();
});

function newSongEvent(){
    $(".new-song-btn").on("click", function() {
        let song = $(".song").first().clone();
        song.children("input").val("");
        song.appendTo(".song-list");

        toggleDeleteButton();
    });
}

function deleteSongEvent(){
    $(".song-list").on("click", ".delete-song-btn", function() {
        $(this).parent().remove();
        toggleDeleteButton();
    });
}

function toggleDeleteButton(){
    if($(".song").length > 1){
        $(".song button").prop("disabled", false)
    } else {
        $(".song button").prop("disabled", true)
    }
}