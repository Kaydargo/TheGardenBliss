$(function() {
    
    //autocomplete
    $(".auto").autocomplete({
        source: "plantsFill.php",
        minLength: 1
    });                

});