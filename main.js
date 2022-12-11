window.onload = function(){
    $.get("nav.html", function(data){
        $("#nav").html(data);
    })
}