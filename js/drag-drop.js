
// $(".plants").draggable({
//     appendTo: 'body', // Append to the body.
//     containment: $('.planner'), //Where drag and drop events are contained within
//     helper: 'clone', //Clones the image - clone is moved
//     zIndex: 10,
//     snap: '#gardenGrid',
//     snapMode: 'inner',
//     revert: "invalid", //If not dropped in a droppable zone it will revert to its original position
//     revertDuration: 800 //duration of the revert animation in milliseconds
// });

// $(".gardenGrid").droppable({
//     accept: ".plants",
//     tolerance: "fit",
//     drop: function(ui){
//         $(".plants").append(ui.draggable);
//         $(".plants").appendTo(".gardenGridColumn");
//         $(".plants").draggable();
//     }
//        // ui.draggable.draggable('enable');
//     //}
// });

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

//   $('.dropdown-toggle').dropdown()


  $( function() {
    var $veg = $( "#vegetables" ),
    $gardenGrid = $("#gardenPlanner"),
    $bin = $( "#bin" );
 
    // Let the vegetable items be draggable
    $( "div", $veg ).draggable({
      cancel: "a.ui-icon", // clicking an icon won't initiate dragging
      revert: "invalid", // when not dropped, the item will revert back to its initial position
      revertDuration: 800,  
      containment: "document",
      helper: "clone",
    //   snap: '#bin',
      cursor: "move",
      zIndex: 10
    });
 
     // Let the bin be droppable, accepting the vegetables
     $gardenGrid.droppable({
        accept: "#vegetables > div > div",
        classes: {
          "ui-droppable-active" : "ui-state-highlight"
        },
        drop: function(ui) {
            $(this).append(ui.draggable);
            $(this).appendTo(".gardenGridColumn");
            // $(this).draggable();
        }
      });

    // Let the bin be droppable, accepting the vegetables
    $bin.droppable({
      accept: "#vegetables > div > div",
      classes: {
        "ui-droppable-active" : "ui-state-highlight"
      },
      drop: function( event, ui ) {
        deleteImage( ui.draggable );
        // deleteImage( ui.helper );
      }
    });

   
    // Let the vegetables be droppable as well, accepting items from the bin
    $veg.droppable({
      accept: "#bin > div > div",
      classes: {
        "ui-droppable-active": "custom-state-active"
      },
      drop: function( event, ui ) {
        recycleImage( ui.draggable );
        // recycleImage( ui.helper );
      }
    });
 
    // Image deletion function
    var recycle_icon = "<a href='' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
    function deleteImage( $item ) {
      $item.fadeOut(function() {
        var $list = $( "div", $bin ).length ?
          $( "div", $bin ) :
        //   $( "<div class='vegetables ui-helper-reset ui-helper-clearfix'>").appendTo( $bin );
          $( "<div class='vegetables ui-helper-reset'/>").appendTo( $bin );
 
        $item.find( "ui-icon-trash" ).remove();
        $item.append( recycle_icon ).appendTo( $list ).fadeIn(function() {
          $item
            .animate({ width: "80px" })
            .find( "img" )
              .animate({ height: "20px" });
        });
      });
    }
 
    // Image recycle function
    var bin_icon = "<a href='' title='Delete this image' class='ui-icon ui-icon-bin'>Delete image</a>";
    function recycleImage( $item ) {
      $item.fadeOut(function() {
        $item.find( "ui-icon-trash" ).remove().end();
        $item
          .find( "a.ui-icon-refresh" )
            .remove()
          .end()
          .css( "width", "96px")
          .append( bin_icon )
          .find( "img" )
            .css( "height", "72px" )
          .end()
          .appendTo( $veg )
          .fadeIn();
      });
    }
 
    // Image preview function, demonstrating the ui.dialog used as a modal window
    function viewLargerImage( $link ) {
      var src = $link.attr( "href" ),
        title = $link.siblings( "img" ).attr( "alt" ),
        $modal = $( "img[src$='" + src + "']" );
 
      if ( $modal.length ) {
        $modal.dialog( "open" );
      } else {
        var img = $( "<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />" )
          .attr( "src", src ).appendTo( "body" );
        setTimeout(function() {
          img.dialog({
            title: title,
            width: 400,
            modal: true
          });
        }, 1 );
      }
    }
 
    // Resolve the icons behavior with event delegation
    $( "div.vegetables > div > div" ).on( "click", function( event ) {
      var $item = $( this ),
        $target = $( event.target );
 
      if ( $target.is( "a.ui-icon-trash" ) ) {
        deleteImage( $item );
      } else if ( $target.is( "a.ui-icon-zoomin" ) ) {
        viewLargerImage( $target );
      } else if ( $target.is( "a.ui-icon-refresh" ) ) {
        recycleImage( $item );
      }
 
      return false;
    });
  } );