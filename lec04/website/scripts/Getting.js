$(document).ready(function(){
    fillAlbums();
});

function fillAlbums(){
    $.getJSON("http://localhost:8000", function(data){
        if(data.length == 0){
            $("#albums").append($("<h3>No albums found</h3>"));
            return;
        }


        let ul = $("<ul></ul>").appendTo("#albums");
        for (album of data){
            console.log(album['name']);
            let li = $("<li></li>").appendTo(ul);
            li.text(album["name"]);
        }
    }, "json");
}