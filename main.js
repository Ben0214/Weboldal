window.onload = function(){
    $.get("nav.php", function(data){
        $("#nav").html(data);
    })
}