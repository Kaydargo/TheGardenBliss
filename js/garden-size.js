$(document).ready(function() {
  // Default size (row, col) 10w 10h
  grid(3,6);
});

$(".gDimBtn").click(function() {
  var widthDropdown = document.getElementById("gardenWidthDrop");
  var getWidth = widthDropdown.options[widthDropdown.selectedIndex].value;

  var heightDropdown = document.getElementById("gardenHeighDrop");
  var getHeight = heightDropdown.options[heightDropdown.selectedIndex].value;

  /*var width =  document.getElementById("gWidth").value;
  var height =  document.getElementById("gHeight").value;*/

 grid(getHeight, getWidth);
});

function grid(rows, columns) {
  var table = "<table class='gardenGrid'>";
  //Get current styling for table
 // var tableStyle= document.querySelector('.gardenGrid');
  //var compTableStyle = window.getComputedStyle(tableStyle);
  var size = (1 / rows * 1000) + "PX";
  
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
  $(".gardenGridColumn").css("width", size);
}