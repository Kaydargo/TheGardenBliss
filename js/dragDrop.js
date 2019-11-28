
$(".plants").draggable({
    helper: 'clone',
    handle: "plants"
});

$(".empty").droppable({
    accept: ".plants",
    drop: function(event, ui){
        $("<div></div>")
            .html(ui.draggable.text())
            .appendTo($(this));
    }
});
