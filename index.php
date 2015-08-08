<?php

include_once("functions.php");


$user;
// Create connection //
$conn = connectDB();
// End creation //

// Check connection

echo checkConnection($conn);

// End Check //

//create the first five user arrays

$users = showFirstFive($conn);
<<<<<<< HEAD

//end creating array//

$conn->close();
=======

//end creating array//
>>>>>>> origin/master

?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>OnePlus Reservation Data</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

		<section class="leaderboard">

				<!-- Display top 5 members (highest rank? Most referrals?) -->

			<header>
			<h1>Leader board</h1>
			<h4><a href="#">View leader board</a></h4>
			</header>

			<form>
				<div id="mainselection">
				<select name="sort">
					<option value="rank">Sort by rank</option> <!-- Sort leaderboard by Rank -->
					<option value="refs">Sort by referrals</option> <!-- Sort leaderboard by Referrals -->
				</select>
				</div>
			</form>

<<<<<<< HEAD
			<h2><?php $conn = connectDB(); echo totalUsersRegistered($conn); $conn->close() ?> members joined so far</h2> <!-- Get the number of users that we have -->
=======
			<h2><?php echo totalUsersRegistered($conn); ?> members joined so far</h2> <!-- Get the number of users that we have -->
>>>>>>> origin/master
			<ol>

				<!-- Get data from database here, username, rank and refs 
				(it would be nice if you have the . in 1.000.000 it makes it more easy to read) -->

				<li id="one"><?php echo $users[1]['username']; ?><br/><span>Rank: <?php echo $users[1]['rank']; ?> / Referrals: <?php echo $users[1]['referrals'] ?></span></li>
				<li id="two"><?php if(isset($users[2])){echo $users[2]['username'];}  ?><br/><span>Rank: <?php if(isset($users[2])){echo $users[2]['rank'];} ?> / Referrals: <?php if(isset($users[2])){echo $users[2]['referrals'];} ?></span></li>
				<li id="three"><?php if(isset($users[3])){echo $users[3]['username'];} ?><br/><span>Rank: <?php if(isset($users[3])){echo $users[3]['rank'];} ?>  / Referrals: <?php if(isset($users[3])){echo $users[3]['referrals'];} ?></span></li>
				<li id="three"><?php if(isset($users[4])){echo $users[4]['username'];} ?><br/><span>Rank: <?php if(isset($users[4])){echo $users[4]['rank'];} ?>  / Referrals: <?php if(isset($users[4])){echo $users[4]['referrals'];} ?></span></li>
				<li id="three"><?php if(isset($users[5])){echo $users[5]['username'];} ?><br/><span>Rank: <?php if(isset($users[5])){echo $users[5]['rank'];} ?>  / Referrals: <?php if(isset($users[5])){echo $users[5]['referrals'];} ?></span></li>
			</ol>

		</section>


    <div class="wrapper">

	<div class="container">

		<section class="middle">
			<h1>Welcome OnePlus Fan</h1>
			<h3>Get your reservation data by filling in your (forum)name & email below.</h3>

			<div class="clear"></div>
			
			<form class="form" method="post" action="testsignup.php" > <!-- Do your thing? xD // efkes aangepast... getemail <-> testsignup (Bjorn) -->
				<input type="text" name="disname" required placeholder="Display name">
				<input type="email" name="email" required placeholder="Enter a valid email address">
				<button class="btn btn-3 btn-3e icon-arrow-right" type="submit">Show data</button>

				<!-- Show detail data here on same page, see detail.html -->

			</form>
		</section>

		<footer><p>Made with love by <a href="http://www.bdmultimedia.be/" target="_blank">BDmultimedia</a>, <a href="https://forums.oneplus.net/members/xtrme-q.155318/" target="_blank">Xtrme Q</a> & <a href="https://forums.oneplus.net/members/vici0us.663229/" target="_blank">Vici0us</a></p></footer>

	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
