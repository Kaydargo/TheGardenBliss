$(document).ready(function() {
  // Default size (row, col) 10w 10h
  grid(10,10);
});

$(".gDimBtn").click(function() {
  var width =  document.getElementById("gWidth").value;
  var height =  document.getElementById("gHeight").value;

 grid(width, height);
});

function grid(rows, columns) {
  var table = "<table class='gardenGrid'>";
  //Get current styling for table
 // var tableStyle= document.querySelector('.gardenGrid');
  //var compTableStyle = window.getComputedStyle(tableStyle);
  var size = (1 / rows * 100) + "%";
  
  for (i=0; i<rows; i++) {
    table += "<tr class='gardenGridRow'>";
    for (j=0; j<columns; j++) {
      table += "<td class='gardenGridColumn'>"+"</td>";
    }
    table += "</tr>";
  }

  table += "</table>";
  
  $(".gardenPlanner").empty().append(table);
  $(".gardenGrid").css("height", size);
  $(".gardenGridColumn").css("color", "black").css("width", size);
}