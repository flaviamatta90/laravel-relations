require('./bootstrap');
const $ = require("jquery");

$(function(){
    $.ajax({
        url : "http://localhost:8000/api/comics",
        method : "GET",
        success: function(data){
            renderComics(data)
        },
        error: function(err){
            alert("Errore");
        }
    });
});

function renderComics(data){

    var source = $("#comic-template").html();
    var template = Handlebars.compile(source);

    for(var i = 0; i < data.length; i++){

        var comic = data[i];
/*
        var context =
        {
            title: comic.title,
            cover: renderComics.cover,
            id: comic.id
        } */
    }

    var html = template(comic);

    $("#comics").append(html);
}