
$(".plants").draggable({
    helper: 'clone',
    handle: "plants"
});

$("#basket").droppable({
    accept: ".plants",
    drop: function(event, ui){
        $("<div></div>")
            .html(ui.draggable.text())
            .appendTo($(this));
    }
});

var coordinates = function(element) {
    element = $(element);
    var top = element.position().top;
    var left = element.position().left;
    $('#results').text('X: ' + left + ' ' + 'Y: ' + top);
}


$('#box').draggable({
    start: function() {
        coordinates('#box');
    },
    stop: function() {
        coordinates('#box');
    }
});