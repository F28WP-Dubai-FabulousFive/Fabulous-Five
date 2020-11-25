<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
	}
	$score=0;
	
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style1.css" media="all" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Trainsylvania</title>
 <style>
 
/* Outer background*/
body {
        
       
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        background-color: black;
      }
  /* background of the game board -plan to add pics */
      #game-board {
       background-color: grey;
       width: 100vmin;
        
        display: grid;
        grid-template-rows: repeat(21, 1fr); /* 21 equal rows and 21 equal columns  */
        grid-template-columns: repeat(21, 1fr);
      }
     /* add train pic */
      .train {  
       background-color:red;
       border: .25vmin solid black;
       
      }
  /*add coal pic */
      .coal {
        background-color: hsl(50, 55%, 4%);
        border: .25vmin solid black;
      }

 </style>


</head>
<body>
<div >
<br/>
<br/>
<br/>

<div style="background-color: white;height:40px;color:black;width:100%;">
Welcome User :<?php echo $_SESSION['username'];?> <a href="logout.php"><span style="color:red;">END</span></a></br>

<span id="mxscr">Highest Score : <?php echo $_SESSION['max_score'];?></span>
<span id="yrscr">Your Score:0</span>

  <!--This the game board.Tis is where all the pieces come together-->
  <div id="game-board" style="height:700px;">

</div>  
 </div> 
<script defer type="module">

import { logic as logicTrain, drawPics as drawTrain, Train_SPEED, getTrainHead, trainIntersection,expandTrain,getscore } from './train.js'
import { logic as logicCoal, drawPics as drawCoal } from './coal.js'
import { outsideGrid } from './grid.js'

let prevTime = 0
let gameFinish = false
let strt=0

const gameBoard = document.getElementById('game-board')
function play() 
{
	
	strt=1;
}
play();
function time(currentTime) 
{ //the main time in which our function runs
  if (gameFinish) 
  {
	  let scr=(getscore()+1)
    if (confirm('You hit so you die!. Press ok to restart.')) 
	{
		//alert(prevTime);
		
		if(scr>"<?php echo $_SESSION['score'];?>")
		{
		if(scr>"<?php echo $_SESSION['max_score'];?>")
		{
     alert("You are the winner and your score is "+scr)
		}
      window.location = 'save_score.php?score='+scr
		}
		else
		{
			window.location = 'home.php'
		}
    }
    return
  }


  window.requestAnimationFrame(time)
  const secondsPrevTime = (currentTime - prevTime) / 1000
  if (secondsPrevTime < 1 / Train_SPEED) return
if(strt==1)
{
  document.getElementById('yrscr').innerHTML = 'Your Score: '+(getscore()+1);
}
  prevTime = currentTime

  logic() //updates the logic of the game
  drawPics()   //draws everything in the game
}
if(strt==1)
{
window.requestAnimationFrame(time)
}


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



</script>
</body>
</html>