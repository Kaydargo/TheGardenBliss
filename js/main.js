/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


const fill = document.querySelector('.fill'); //Singular element
const empties = document.querySelectorAll('.empty'); // Node list

//Fill listeners
fill.addEventListener('dragstart', dragStart);
fill.addEventListener('dragend', dragEnd);

//Loop through empty containers and call drag events
for (const empty of empties){
    empty.addEventListener('dragover', dragOver);
    empty.addEventListener('dragenter', dragEnter);
    empty.addEventListener('dragleave', dragLeave);
    empty.addEventListener('drop', dragDrop);
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

document.onDragOver = function(coordinates) {
    coordinates = coordinates || window.event;
    var x = coordinates.pageX,
        y = coordinates.pageY;
    console.log(x, y);
}








