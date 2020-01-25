/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


const plants = document.querySelectorAll('.fill'); //Singular element
const grids = document.querySelectorAll('.gardenPlanner'); // Node list

//Fill listeners
plants.addEventListener('dragstart', dragStart);
plants.addEventListener('dragend', dragEnd);

//Loop through empty containers and call drag events
for (const grid of grids){
  grid.addEventListener('dragover', dragOver);
  grid.addEventListener('dragenter', dragEnter);
  grid.addEventListener('dragleave', dragLeave);
  grid.addEventListener('drop', dragDrop);
}
//Drag Functions
function dragStart (){
    //console.log('start');
    this.className += ' hold'; //appends
    setTimeout(() => (this.className = 'invisible'), 0);
}
function dragEnd(){
  //console.log('end');  
  this.className = 'fill';
}
function dragOver(e){
   e.preventDefault();
   //console.log('over'); 
}
function dragEnter(e){
    //console.log('enter');
    e.preventDefault();
    this.className+= ' hovered'; //Appends to it and hover class
}
function dragLeave(){
    //console.log('leave');
    this.className = 'empty'; //Replaces hover
}
function dragDrop(){
    //Console.log('drop');
    this.className = 'empty'; //
    this.append(fill);  //Append fill element to empty
}

////Get co-ordinates from mouse X, Y 
document.onDragOver = function(coordinates) {
    coordinates = coordinates || window.event;
    var x = coordinates.pageX,
        y = coordinates.pageY;
    console.log(x, y);
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    $('#media').carousel({
      pause: true,
      interval: false,
    });
  });
  
  $(document).ready(function() {
    $('#media1').carousel({
      pause: true,
      interval: false,
    });
  });
  
  $(document).ready(function() {
    $('#media2').carousel({
      pause: true,
      interval: false,
    });
  });
  
  $(document).ready(function() {
    $('#media3').carousel({
      pause: true,
      interval: false,
    });
  });