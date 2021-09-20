let songCount = 0;


$(document).on('click', '#new-song-button', function () {
    console.log("Add song")
    if (songCount >= 19) {
        console.log("Too many songs");
    } else {
        songCount++;
        $("#album-list").append('<div class="song-input-item"><input class="song-input" type="text" name="songs"><button type="button" id="delete-song-button" class="delete-song-btn"><i class="fas fa-trash"></i></button></div>');
    }
});



$(document).on('click', '#delete-song-button', function () {
    console.log('remove');
    $(this).closest('div').remove();
    songCount--;
});

