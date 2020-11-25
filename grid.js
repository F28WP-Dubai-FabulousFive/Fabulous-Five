const size_of_grid = 21

export function newGridPosition() {
  return {
    x: Math.floor(Math.random() * size_of_grid) + 1, //return random number between 0 and the grid size
    y: Math.floor(Math.random() * size_of_grid) + 1
  }
}
export function outsideGrid(pos) {  //fuction to check if the position is greater than the size of the grid or lesser than the minimum grid size
  return (
    pos.x < 1 || pos.x > size_of_grid||
    pos.y < 1 || pos.y > size_of_grid
  )
}