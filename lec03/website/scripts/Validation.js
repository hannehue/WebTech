$(document).ready(function () {
    validateForm();
});

function validateForm() {
    $("form").on("submit", function () {
        let formvalid = {valid: true};
        hideAllValidation();
        let input = $("#album-name")
        if (!(input.val())) {
            handleInvalidForm(input, formvalid);
        }

        input = $("#album-release");
        if (!(input.val() && Number(input.val()) > 2022)){
            handleInvalidForm(input, formvalid);
        }

        input = $(".album-type-div");
        if ($("#album-type").length == 0){
            handleInvalidForm(input.parent(), formvalid);
        }

        validateSongs(formvalid);

        return formvalid.valid;
    });
}

function validateSongs(formvalid){
    $(".song-input").each(function(){
        let input = $(this);
        console.log($(this).parent());
        if (!input.val()){
            handleInvalidForm(input, formvalid);
        }
    });
}

function handleInvalidForm(input, formValid){
    formValid.valid = false;
    input.closest(".input-div").children(".invalid-input").show();
}

function hideAllValidation() {
    $(".invalid-input").hide();
}