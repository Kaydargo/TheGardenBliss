$(function() { 
    //autocomplete
    $(".auto").autocomplete({
        source: "plantsFill.php",
        minLength: 1
    });                

$(document).ready(function () {
    var suggestions = [];
$("#plantInput").keyup(function () {
  $.ajax({
      type: "POST",
      url: '../includes/plantsFill.php',
      async: false,
      data: {'plant': $(this).val()},
      success: function (data) {
          suggestions = jQuery.parseJSON(data);
      }
  });
  $("#plantInput").autocomplete({
      source: suggestions
      
  });
});
});