import { overTrain, expandTrain } from './train.js'
import { newGridPosition } from './grid.js'

let coal = getNewCoalPos()
const expand_comp = 1  //how much the train compartments increase

export function logic() {
	
  if (overTrain(coal)) {   //xcondition to check if the snake is on top of the food
    expandTrain(expand_comp) //we expand the train
    coal= getNewCoalPos()
  }
}

export function drawPics(gameBoard) {
  const coal_ele = document.createElement('div')
  coal_ele.style.gridRowStart = coal.y
  coal_ele.style.gridColumnStart = coal.x
  coal_ele.classList.add('coal')
  gameBoard.appendChild(coal_ele)
}

function getNewCoalPos() { //sets new position for the coal everytime its taken by the train
  let newCoalPos //variable declared for new poistion of the coal
  while (newCoalPos == null || overTrain(newCoalPos)) { //while loop to check if the train is on top of the coal
    newCoalPos = newGridPosition() //new coal position until the train is not over the coal
  }
  return newCoalPos
}