let Direction = { x: 0, y: 0 } //default variable so snake does not move 
let prevDirection = { x: 0, y: 0 } //variable assigned for the previous direction of the train

window.addEventListener('keydown', event=> {  
  switch (event.key) {                  //switch statements written so that for going up ,down ,left and right
    case 'ArrowUp':
      if (prevDirection.y !== 0) break  //condition to check if we are moving up or down
      Direction = { x: 0, y: -1 }
      break
    case 'ArrowDown':
      if (prevDirection.y !== 0) break
      Direction = { x: 0, y: 1 }
      break
    case 'ArrowLeft':
      if (prevDirection.x !== 0) break   //condition to check if we are moving left or right
      Direction = { x: -1, y: 0 }
      break
    case 'ArrowRight':
      if (prevDirection.x !== 0) break
      Direction = { x: 1, y: 0 }
      break
  }
})

export function getDirection() { //function to return the direction
  prevDirection = Direction
  return Direction  
}