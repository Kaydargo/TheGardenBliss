
$(".plants").draggable({
    appendTo: 'body', // Append to the body.
    containment: $('.planner'), //Where drag and drop events are contained within
    helper: 'clone', //Clones the image - clone is moved
    zIndex: 1000,
    revert: "invalid", //If not dropped in a droppable zone it will revert to its original position
    revertDuration: 800 //duration of the revert animation in milliseconds
});

$(".gardenPlanner").droppable({
    accept: ".plants",
    tolerance: "fit",
    drop: function(){
        $(".plants").append(ui.draggable).draggable();
    }
       // ui.draggable.draggable('enable');
    //}
    
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