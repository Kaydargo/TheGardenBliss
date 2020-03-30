
// var coordinates = function(element) {
//     element = $(element);
//     var top = element.position().top;
//     var left = element.position().left;
//     $('#results').text('X: ' + left + ' ' + 'Y: ' + top);
// }

// $('#box').draggable({
//     start: function() {
//         coordinates('#box');
//     },
//     stop: function() {
//         coordinates('#box');
//     }
// });


// // Print page
// function printPageAppear() {
//     window.print();
//   }
$(document).ready(function(){
  $compost = $( "#compost" );

  function deleteImage( $item ) {
    $item.fadeOut(function() {
      var $list = $( "div", $compost ).length ?
        $( "div", $compost ) :
        $( $item).appendTo( $compost );
      $item.find( "a.ui-icon-trash" ).remove();
      $(this).find("h5").remove();

      $item.appendTo( $list ).fadeIn(function() {
        $item
          .animate({ width: "45px" })
          .find( "img" )
            .animate({ height: "35px" });
      });
    });
  }

    $(".veg").draggable({
      helper: 'clone',
      revert: "invalid",
      containment: "document",
      cursor: "move"
      });

    $(".drop").droppable({
      activeClass: 'droppable-active',
      hoverClass: 'droppable-hover',
      drop: function(ev, ui) {
      if ($(this).html() == ""){
          $(this).append($(ui.draggable).clone());
          $(this).children("li").append("<span><a href='' title='Delete this image' class='ui-icon ui-icon-trash'></a></span>");
          $(this).find("h5").remove();
      }
      else{
         $(this).empty().append($(ui.draggable).clone());
         $(this).children("li").append("<span><a href='' title='Delete this image' class='ui-icon ui-icon-trash'></a></span>");
          $(this).find("h5").remove();
      }
      }
    });

    $( "div.garden > table > tbody > tr > td > div" ).on( "click", function( event ) {
    var $item = $( this ).children("li"),
      $target = $( event.target );
    if ( $target.is( "a.ui-icon-trash" ) ) {
      deleteImage( $item );
    }
    return false;
  });    

  });