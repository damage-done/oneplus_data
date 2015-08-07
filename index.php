<?php

//$servername = "localhost:3307";
//$username = "root";
//$password = "usbw";
//$dbname = "oneplusinvites";

$servername = "renssmit.be.mysql";
$username = "renssmit_be";
$password = "x7fZjwPj";
$dbname = "renssmit_be";

$user;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT rank, referrals, displayname FROM users ORDER BY rank ASC LIMIT 5";


$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		$count++;
       $user[$count]['username'] = $row["displayname"];
       $user[$count]['rank'] = $row["rank"];
       $user[$count]['referrals'] = $row["referrals"];
    }
} else {
    echo "0 results";
}

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
			<h1>Leaderboard</h1>
			<h4><a href="#">View leaderboard</a></h4>
			</header>

			<form>
				<div id="mainselection">
				<select name="sort">
					<option value="rank">Sort by rank</option> <!-- Sort leaderboard by Rank -->
					<option value="refs">Sort by referrals</option> <!-- Sort leaderboard by Referrals -->
				</select>
				</div>
			</form>

			<h2>100 members joined so far</h2> <!-- Get the number of users that we have -->
			<ol>

				<!-- Get data from database here, username, rank and refs 
				(it would be nice if you have the . in 1.000.000 it makes it more easy to read) -->

				<li id="one"><?php echo $user[1]['username']; ?><br/><span>Rank: <?php echo $user[1]['rank']; ?> / Referrals: <?php echo $user[1]['referrals'] ?></span></li>
				<li id="two"><?php echo $user[2]['username']; ?><br/><span>Rank: <?php echo $user[2]['rank']; ?> / Referrals: <?php echo $user[2]['referrals'] ?></span></li>
				<li id="three"><?php echo $user[3]['username']; ?><br/><span>Rank: <?php echo $user[3]['rank']; ?>  / Referrals: <?php echo $user[3]['referrals'] ?></span></li>
				<li>Display name<br/><span>Rank: 1.200.000 / Referrals: 2</span></li>
				<li>Display name<br/><span>Rank: 1.700.000 / Referrals: 4</span></li>
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

		<footer><p>Made with love by <a href="https://forums.oneplus.net/members/xtrme-q.155318/" target="_blank">Xtrme Q</a> & <a href="https://forums.oneplus.net/members/vici0us.663229/" target="_blank">Vici0us</a></p></footer>

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
