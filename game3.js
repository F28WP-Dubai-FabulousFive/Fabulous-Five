import { logic as logicTrain, drawPics as drawTrain, Train_SPEED, getTrainHead, trainIntersection } from './train.js'
import { logic as logicCoal, drawPics as drawCoal } from './coal.js'
import { outsideGrid } from './grid.js'

let prevTime = 0
let gameFinish = false
const gameBoard = document.getElementById('game-board')

function time(currentTime) 
{ //the main time in which our function runs
  if (gameFinish) 
  {
    if (confirm('testYou hit so you die!. Press ok to restart.')) 
	{
		alert(prevTime);
      window.location = 'http://localhost/Game/'
    }
    return
  }


  window.requestAnimationFrame(time)
  const secondsPrevTime = (currentTime - prevTime) / 1000
  if (secondsPrevTime < 1 / Train_SPEED) return


  prevTime = currentTime

  logic() //updates the logic of the game
  drawPics()   //draws everything in the game
}

window.requestAnimationFrame(time)

function logic() {
  logicTrain()
  logicCoal()
  crash()
}

function drawPics() {
  gameBoard.innerHTML = ''
  drawTrain(gameBoard) //pass the gameBoard
  drawCoal(gameBoard)
}

function crash() {
  gameFinish = outsideGrid(getTrainHead()) || trainIntersection()  //global variable assigned which checks if the train goes outside the grid and the train intersects itself
}


