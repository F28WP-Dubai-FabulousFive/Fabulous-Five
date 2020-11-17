import { getInputDirection } from "./input.js"

export const TRAIN_SPEED = 5
const trainBody = [{ x: 11, y: 11 }]
let newSegments = 0

export function update() {
  addSegments()

  const inputDirection = getInputDirection()
  for (let i = trainBody.length - 2; i >= 0; i--) {
    trainBody[i + 1] = { ...trainBody[i] }
  }

  trainBody[0].x += inputDirection.x
  trainBody[0].y += inputDirection.y
}

export function draw(gameBoard) {
  trainBody.forEach(segment => {
    const trainElement = document.createElement('div')
    trainElement.style.gridRowStart = segment.y
    trainElement.style.gridColumnStart = segment.x
    trainElement.classList.add('train')
    gameBoard.appendChild(trainElement)
  })
}

export function expandTrain(amount) {
  newSegments += amount
}

export function onTrain(position, { ignoreHead = false } = {}) {
  return trainBody.some((segment, index) => {
    if (ignoreHead && index === 0) return false
    return equalPositions(segment, position)
  })
}

export function getTrainHead() {
  return trainBody[0]
}

export function trainIntersection() {
  return onTrain(trainBody[0], { ignoreHead: true })
}

function equalPositions(pos1, pos2) {
  return pos1.x === pos2.x && pos1.y === pos2.y
}

function addSegments() {
  for (let i = 0; i < newSegments; i++) {
    trainBody.push({ ...trainBody[trainBody.length - 1] })
  }

  newSegments = 0
}