import { getDirection } from "./input.js"

export const Train_SPEED = 5 //speed of the train 
const trainBody = [{ x: 11, y: 11 }]  //variable trainBody which represents the x-y cordinate system
let newPieces = 0  //intialised a variable newPieces
let score=0
export function logic() {
  addPieces()

  const Direction = getDirection() //calls the function getDirection()
  for (let i = trainBody.length - 2; i >= 0; i--) {  //loops through every piece of the train except the last piece
    trainBody[i + 1] = { ...trainBody[i] }  //taking the last element and assigning to the current element
  }

  trainBody[0].x += Direction.x //updates the train movement
  trainBody[0].y += Direction.y
}

 export function drawPics(gameBoard) {//drawing the snake to the gameboard
  trainBody.forEach(piece => {  //looping through each piece
    const element = document.createElement('div')  //creation of an element which holds a div
    element.style.gridRowStart = piece.y //setting the corrdinate system
    element.style.gridColumnStart = piece.x
    element.classList.add('train')  //adding the train class
    gameBoard.appendChild(element) //appeneds  a element as the last child of a node.
  })
}

export function expandTrain(number) { //function for the expansion of the train
  newPieces += number     
}

export function overTrain(position, { ignoreHead = false } = {}) {  //function to check if the train is on the coal
  return trainBody.some((piece, index) => {
    if (ignoreHead && index === 0) return false
    return equalPos(piece, position)
  })
}

export function getTrainHead() { //first element of the array is going to be our train head
  return trainBody[0]
}

export function trainIntersection() {
  return overTrain(trainBody[0], { ignoreHead: true })
}

function equalPos(p1, p2) {  //function to check if tw posions are equal
  return p1.x === p2.x && p1.y === p2.y
}

function addPieces() {   //function to add the pieces to the train
  for (let i = 0; i < newPieces; i++) {  //loops through the new pieces
    trainBody.push({ ...trainBody[trainBody.length - 1] })
	score++
  }

  newPieces = 0
}
export function getscore() {  //function to check if tw posions are equal
  return score
}