$(document).ready(function(){
    fillAlbums();
});

function fillAlbums(){
    $.getJSON("localhost:8000", function(data){
        let albums = [];
        $.each( data, function(key, value){
            albums.push("<li id='" + key + "'>" + value + "</li>");
        });
        
    });
}