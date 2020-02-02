
$(".plants").draggable({
    appendTo: 'body', // Append to the body.
    containment: $('.planner'), //Where drag and drop events are contained within
    helper: 'clone', //Clones the image - clone is moved
    zIndex: 10,
    snap: '#gardenGrid',
    snapMode: 'inner',
    revert: "invalid", //If not dropped in a droppable zone it will revert to its original position
    revertDuration: 800 //duration of the revert animation in milliseconds
});

$(".gardenGrid").droppable({
    accept: ".plants",
    tolerance: "fit",
    drop: function(ui){
        $(".plants").append(ui.draggable);
        $(".plants").appendTo(".gardenGridColumn");
        $(".plants").draggable();
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


// Print page
function printPageAppear() {
    window.print();
  }

  $('.dropdown-toggle').dropdown()