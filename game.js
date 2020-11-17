import { update as updateTrain, draw as drawTrain, TRAIN_SPEED, getTrainHead, trainIntersection } from './train.js'
import { update as updateCoal, draw as drawCoal } from './coal.js'
import { outsideGrid } from './grid.js'

let lastRenderTime = 0
let gameOver = false
const gameBoard = document.getElementById('game-board')

function main(currentTime) {
  if (gameOver) {
    if (confirm('You lost. Press ok to restart.')) {
      window.location = '/'
    }
    return
  }


  window.requestAnimationFrame(main)
  const secondsSinceLastRender = (currentTime - lastRenderTime) / 1000
  if (secondsSinceLastRender < 1 / TRAIN_SPEED) return


  lastRenderTime = currentTime

  update()
  draw()
}

window.requestAnimationFrame(main)

function update() {
  updateTrain()
  updateCoal()
  checkDeath()
}

function draw() {
  gameBoard.innerHTML = ''
  drawTrain(gameBoard)
  drawCoal(gameBoard)
}

function checkDeath() {
  gameOver = outsideGrid(getTrainHead()) || trainIntersection()
}