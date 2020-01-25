const plant = document.querySelector('.plant');
const planners = document.querySelectorAll('.planner');

// Fill listeners
plant.addEventListener('dragstart', dragStart);
plant.addEventListener('dragend', dragEnd);

// Loop through empty boxes and add listeners
for (const planner of planners) {
    planner.addEventListener('dragover', dragOver);
    planner.addEventListener('dragenter', dragEnter);
    planner.addEventListener('dragleave', dragLeave);
    planner.addEventListener('drop', dragDrop);
}

// Drag Functions

function dragStart() {
  this.className += ' hold';
  setTimeout(() => (this.className = 'invisible'), 0);
}

function dragEnd() {
  this.className = 'plant';
}

function dragOver(e) {
  e.preventDefault();
}

function dragEnter(e) {
  e.preventDefault();
  this.className += ' hovered';
}

function dragLeave() {
  this.className = 'planner';
}

function dragDrop() {
  this.className = 'planner';
  this.append(plant);
}
