let songCount = 0;


$(document).on('click', '#new-song-button', function () {
    console.log("Add song");
    songCount++;
    if (songCount >= 20) {
        $(this).prop('disabled', true);
        console.log("Too many songs");
    }
    $("#album-list").append('<div class="song-input-item"><input class="song-input" type="text" name="songs"><button type="button" id="delete-song-button" class="delete-song-btn"><i class="fas fa-trash"></i></button></div>');

    if (songCount === 1) {
        $('#delete-song-button').prop('disabled', true);
    } else {
        $('#delete-song-button').prop('disabled', false);
    }

});

$(document).on('click', '#delete-song-button', function () {
    console.log('remove');
    $(this).closest('div').remove();
    songCount--;
    $('#new-song-button').prop('disabled', false);
});

