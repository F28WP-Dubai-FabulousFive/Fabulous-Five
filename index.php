<!DOCTYPE html>
<html>
  <head>
    <title>Game Website</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="webpage.css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body >

    <!-------------------------------------------------------MENU TABS------------------------------------------------------------->
    <div class="tab" style="100%;padding-bottom:20px;padding-top:60px;padding-left:50px;">
	 
      <button style="width:10%;height:50px" class="tablinks" onclick="openBtn(event, 'Home')" style="height:20px;">Home</button>
	  <button style="width:18%;height:50px" class="tablinks" onclick="openBtn(event, 'About the Game')">About the Game</button>
      <button style="width:14%;height:50px" class="tablinks" onclick="openBtn(event, 'Instructions')">Instructions</button>
      <button style="width:14%;height:50px" class="tablinks" onclick="openBtn(event, 'High Scores')">High Scores</button>
      <button style="width:12%;height:50px" class="tablinks" onclick="openBtn(event, 'Credits')">Credits</button>
      <button style="width:20%;height:50px" class="tablinks" onclick="openBtn(event, 'Terms and Conditions')">Terms and Conditions</button>
      <button style="border: none;background:none" class="tablinks" onclick="openBtn(event, 'Gear')"><img src = "Gear.png" width="70" height="43px"></button>
    </div>
	<div style="height:100px;color:none">
	g
	</div>
    <!-------------------------------------------------------HOME BUTTON------------------------------------------------------------->

    <div id="Home" class="tabcontent" style="100%">
			<div>
	  <div style="float:left;20%;"><img src = "Bat.gif"  height="220" ></div>
      <div style="float:left;60%;"><img src="Trainsylvania-Font.png" width="100%" height="200"></div>
	  <div style="float:left;20%;"><img src = "Bat.gif"  height="220" ></div>
			</div>
	   <!--<h1 id="myh1"><img src="Trainsylvania-Font.png" width="100%" height="200"></h1>-->
      <div style id ="myh3">xx You Hit You Die xx</div>

      <h4 id ="myh4"><img src="PLAY BUTTON.png" onclick="document.getElementById('id01').style.display='block'" alt="play"></h4>
      <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close ">&times;</span>
        <div class="one1">
          <div class="form-box">
            <div class="button-box">
              <div id="btn"></div>
              <button type="button" class="toggle-btn" onclick="login()">LOGIN</button>
              <button type="button" class="toggle-btn" onclick="register()">REGISTER</button>
            </div>
            <form id="login1" class="input-group" action="login_process.php" method="POST">
              <input type="text" class="input-field" name="username" placeholder="User Id" required>
              <input type="password" class="input-field" name="password" placeholder="Password" required>
              <button type="submit" class="login-btn">LOGIN</button>
            </form>
            <form id="register" class="input-group" action="add_users.php" method="POST">
              
			  <input type="text" class="input-field" placeholder="User Name" name="username" required>
              <input type="email" class="input-field" placeholder="Email" name="email" required>
              <input type="password" class="input-field" placeholder="Password" name="password" required>
			  
              <button type="submit" class="register-btn">REGISTER</button>
            </form>
          </div></div>
      </div>

      <!--<h5 id ="myh5"><img src = "Bat.gif" width="400" height="400" ></h5>
      <h6 id ="myh6"><img src = "Bat.gif" width="400" height="400" ></h6>-->
	  
      <!--<h7 id ="myh7"><img src = "Skeleton1.gif" width="400" height="500"></h7>
	  
      <h8 id ="myh8"><img src = "Skeleton2.gif" width="400" height="500"></h8>-->
	  
	 <div style="width:99%">
		<div id ="" style="float:left;width:33%;padding-left:200px;"><img src ="Skeleton1.gif" width="400" height="500"></div>
		 <!--<div id ="myh4" style="float:right;width:33%;;padding-left:-50%"><img src="PLAY BUTTON.png" onclick="document.getElementById('id01').style.display='block'" alt="play"></div>-->
		 <div id ="" style="float:right;width:33%;padding-right:200px;"><img src ="Skeleton2.gif" width="400" height="500"></div>
		
       
      
		
	</div>
    </div>
<!-------------------------------------------------------ABOUT THE GAME BUTTON------------------------------------------------------------->

    <div id="High Scores" class="tabcontent" style="display:none;border: 5px cyan dotted;">
      <div class="myBox" id="zero" style="width:95%">
	  <p>
         <iframe src="getscore.php" width="90%" height="100%" frameBorder="0">
		</iframe>
		</p>
	</div>
    </div>
    <!-------------------------------------------------------ABOUT THE GAME BUTTON------------------------------------------------------------->

    <div id="About the Game" class="tabcontent" style="display:none;">
      <div class="myBox mygrid" id="one">
	  
          <div>
          <div style="float:left;60%"><strong>ARE YOU READY FOR A HORRIFYING TRAIN EXPERIRENCE  ???</strong> </div>
		  <div style="float:right;30%"><img src = "Skull.gif" width="200" height="200" ></div>
		  <div>
          <br><br>
          Come join us and play Trainslyvania ,a horror theme based game created by five budding programmers. 
          This is a 2D multiplayer game,that allows the players to move the train block only by turning left and right. 
          As the players are moving they  have to collect gold which increases the size of the train compartment.
          <br><br>
          <strong>BEWARE!!!! DON'T COLLIDE WITH YOUR OPONENETS TRAIN OTHERWISE YOU KNOW WHAT HAPPENS - YOU DIE!!!</strong>
          
          
      </div>
	 </div>
    </div>
    </div>
    <!-------------------------------------------------------INSTRUCTIONS BUTTON------------------------------------------------------------->

    <div id="Instructions" class="tabcontent" style="display:none;">
	
      <div class="myBox mygrid" id="two">
	  
	  
        <div>
        1. Collect blocks of coal in order to increase the number of compartments in your train to win. 
        <br><br>
        2. The player with the highest number of compartments will win.
        <br><br>
        3. The train will only move left and right. To move the train right, use your right arrow key on your keyboard and to move left, 
        use the left arrow key on your keyboard.
        <br><br>
        4. This game is multiplayer, if you hit another player’s train, you lose immediately. 
        <br>
        
        
        </div>
	
		<div>
			<div style="float:left;50%"><img src = "Arrow.gif" width="250" height="100"></div>
			<div style="float:right;50%"><img src = "Coal.gif" width="150" height="100"></div>
		</div>
	</div>
	 </div>
    

    <!-------------------------------------------------------HIGH SCORES BUTTON------------------------------------------------------------->

    <div id="High Scores" class="tabcontent">
    </div>

    <!-------------------------------------------------------CREDITS BUTTON-------------------------------------------------------------------->

    <div id="Credits" class="tabcontent" style="display:none">
	
	<div style="width:50px;float-left:20%">
	jj
	</div>
      <div class="myBox mygrid" id="four" style="float-left:80%">
        <!--First row -->
		<div>
        <div style="float:left;width:20%"><img src ="Avatar-1.png" width="200" height="200">
		</br>
        <span >Geethanjali Dhanish</span>
		</div>
		<div style="float:left;;width:20%"><img src ="Hand.png" width="200" height="300"></div>
        <div style="float:left;;width:20%"><img src ="Avatar-2.png" width="200" height="200">
		</br>
        <span >Muhammad Fahim</span>
		</div>
		<div style="float:left;width:20%"><img src ="Hand.png" width="200" height="300"></div>
		<div style="float:left;width:20%"><img src ="Avatar-3.png" width="200" height="200">
        <span >Lakshmi Sunil</span>
		</div>
		</div>
		<!-- end -->
		<!--second row -->
		<div style="width:100%">
		<div style="float:left;width:20%"><img src ="Hand.png" width="200" height="300"></div>
        <div style="float:left;width:20%"><img src ="Avatar-4.png" width="200" height="200">
        <span >Khushi Popat</span>
		</div>
		
		<div style="float:left;width:20%"><img src ="Hand.png" width="200" height="300"></div>
		
        
		<div style="float:left;width:25%"><img src ="Avatar-5.png" width="200" height="200">
        <span >Nashwa Abdul Kadhar</span>
		</div>
		<div style="float:left;width:15%"><img src ="Hand.png" width="200" height="300"></div>
		</div>
		
		</div>
        <!-- end -->
        
        </div>
        
		
       
    <!-------------------------------------------------------TERMS AND CONDITIONS BUTTON---------------------------------------------------------->

    <div id="Terms and Conditions" class="tabcontent" style="display:none">
      <div class="myBox mygrid" id="five">
        <p>-------- xx --------- xx --------- xx -------- xx --------- xx ---------- xx ----------- xx --------- xx -------- xx ----------</p>
        => By using our services, you are agreeing to those, our trainer guidlines and our privacy policy.
        <br><br>
        => If you are the parent or legal guardian of a child of age under 13, you are agreeing to these terms on behalf of yourself 
        and your child who are authorized to use the services pursuant to these terms and in our privacy policies.
        <br><br>
        => If u don't agree to these terms,our trainer guidlines, and our privacy policy,do not use the services.
        <p>-------- xx --------- xx --------- xx -------- xx --------- xx ---------- xx ----------- xx --------- xx -------- xx ----------</p> 
        </p>
        <div><img src = "pg13.png" width="200" height="100" top: 100px right: 10px;></div>
		
      </div>
    </div>

    <!-------------------------------------------------------JAVA SCRIPT CODE - MENU TABS-------------------------------------------------------------------->

    <script>
    function openBtn(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>

   <!-------------------------------------------------------JAVA SCRIPT CODE - PLAY BUTTON-------------------------------------------------------------------->

    <script>
    var x= document.getElementById("login1");
    var y= document.getElementById("register");
    var z= document.getElementById("btn");
    function register(){
      x.style.left = "-450px";
      y.style.left = "50px";
      z.style.left = "110px";
    }
    function login(){
      x.style.left = "50px";
      y.style.left = "400px";
      z.style.left = "0";
    }
    </script>


  </body>
</html>