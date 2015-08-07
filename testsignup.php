<?php

$displayname = $_POST['disname'];
$email = $_POST['email'];

//$servername = "localhost:3307";
//$username = "root";
//$password = "usbw";
//$dbname = "oneplusinvites";

$servername = "renssmit.be.mysql";
$username = "renssmit_be";
$password = "x7fZjwPj";
$dbname = "renssmit_be";


$url = "https://invites.oneplus.net/index.php?r=share/signup&success_jsonpCallback=success_jsonpCallback&email=".$email."&koid=6GJ8S&_=1438659411445";

$JSON = file_get_contents($url);
$JSON = substr(substr($JSON,22),0,-1);
$JSON = (json_decode($JSON));

$rank = $JSON->data->rank;
$referrals = $JSON->data->ref_count;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//////////////////////////////////
$query = 'SELECT displayname FROM users WHERE displayname = ?';
$stmt = $conn->stmt_init();
$stmt->prepare($query);
$stmt->bind_param("s", $displayname);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_array(MYSQLI_NUM))
{
	$exist = $row;
}

///////////////////////////////////

if(empty($exist)){
	$stmt = $conn->prepare('INSERT INTO `users` (`displayname`, `email`, `rank`, `referrals`) VALUES (?, ?, ?, ?);');
	$stmt-> bind_param('ssii', $displayname, $email, $rank, $referrals);
	$stmt->execute();

	$conn->close();
	header("location:detail.php?user=".$displayname."&email=".$email."");
}
else{
	print 'bestaat al';
}
?>