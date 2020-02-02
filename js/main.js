/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


const plants = document.querySelectorAll('.plant'); //Singular element
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

var plantingSeason = document.getElementByClassName('plantSeason');

    switch (plantingSeason) {
      case 'January':
      case 'February':
      case 'March':
        case 'April':
          case 'May':
            case 'June':
              case 'July':
                case 'August':
                  case 'September':
                    case 'October':
                      case 'November':
                        case 'December':
            plantingSeason.css({backgroundColor: '#9518b8'});
            break;
      /*      
      case 'February':
        plantingSeason.css({backgroundColor: '#009fe3'});
            
      case 'March':
        plantingSeason.css({backgroundColor: '#95c11f'});
            
      case 'April':
            $(this).css({backgroundColor: '#d40d10'});
            
      case 'May':
             $(this).css({backgroundColor: '#ffcc00'});
            
             case 'June':
             $(this).css({backgroundColor: '#ffcc00'});

             case 'July':
              $(this).css({backgroundColor: '#ffcc00'});

              case 'August':
                $(this).css({backgroundColor: '#ffcc00'});

                case 'September':
                  $(this).css({backgroundColor: '#ffcc00'});

                  case 'October':
                    $(this).css({backgroundColor: '#ffcc00'});

                    case 'November':
                      $(this).css({backgroundColor: '#ffcc00'});

                      case 'December':
                        $(this).css({backgroundColor: '#ffcc00'});
         */              
        default:
            $(this).text('Nix!');
            break;
    }


/*
  var plantingSeason = document.getElementsByClassName('plantSeason');
  for(i=0; i<plantingSeason.length; i++) {
    var plantSeasonText = plantingSeason[i].textContent.trim();

    switch (plantSeasonText) {
      case 'January':
        plantingSeason[i].style.backgroundColor = '#9518b8';                
              
        case 'February':
          plantingSeason[i].style.backgroundColor = '#9518b8'; 
            
        case 'March':
          plantingSeason[i].style.backgroundColor = '#9518b8'; 
            
        case 'April':
          plantingSeason[i].style.backgroundColor = '#9518b8'; 
            
        case 'May':
          plantingSeason[i].style.backgroundColor = '#9518b8'; 
            
        case 'June':
          plantingSeason[i].style.backgroundColor = '#9518b8'; 
            
        case 'July':
          plantingSeason[i].style.backgroundColor = '#9518b8'; 
            
        case 'August':
          plantingSeason[i].style.backgroundColor = '#9518b8'; 
            
        case 'September':
          plantingSeason[i].style.backgroundColor = '#9518b8'; 
            
        case 'October':
          plantingSeason[i].style.backgroundColor = '#9518b8'; 
        case 'Novemeber':
          plantingSeason[i].style.backgroundColor = '#9518b8'; 
        case 'December':
          plantingSeason[i].style.backgroundColor = '#9518b8'; 
        default:
            $(this).text('Nix!');
            break;
    }
};*/