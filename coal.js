import { onTrain, expandTrain } from './train.js'
import { randomGridPosition } from './grid.js'

let coal = getRandomCoalPosition()
const EXPANSION_RATE = 5

export function update() {
  if (onTrain(coal)) {
    expandTrain(EXPANSION_RATE)
    coal= getRandomCoalPosition()
  }
}

export function draw(gameBoard) {
  const coalElement = document.createElement('div')
  coalElement.style.gridRowStart = coal.y
  coalElement.style.gridColumnStart = coal.x
  coalElement.classList.add('coal')
  gameBoard.appendChild(coalElement)
}

function getRandomCoalPosition() {
  let newCoalPosition
  while (newCoalPosition == null || onTrain(newCoalPosition)) {
    newCoalPosition = randomGridPosition()
  }
  return newCoalPosition
}