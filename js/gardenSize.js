$(document).ready(function() {
    // Default size (row, col) 10w 10h
    grid(10,10);
  });
  
  $(".gBtn").click(function() {
    var width =  document.getElementsByName("gWidth").value;
    var height =  document.getElementsByName("gHeight").value;
    grid(width, height);
  });


  
  function grid(rows, cols) {
    var table = "<table>";
    var size = (1 / rows * 525) + "px";
    
    
    for (i=0; i<rows; i++) {
      table += "<tr>";

      for (j=0; j<cols; j++) {
        table += "<td>"+"</td>";
      }
      table += "</tr>";
    }
    table += "</table>";
    
    $(".gardenPlanner").empty().append(table);
    $("tr").css("height", size);
    $("td").css("color", "black").css("width", size);
  }