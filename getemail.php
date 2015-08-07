<?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "oneplusdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$givenemail = $_POST['email'] ;
$disname = $_POST['disname'] ;
$original_mail = $givenemail ;

$givenemail = str_replace("@","%40",$givenemail);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$eql = "INSERT INTO `oneplus_emails`(`email`,`name`) VALUES ('$original_mail','$disname')";

if( $conn->query($eql) === TRUE)
	{
		echo "working";
        echo $eql;
	}
	else
	 {
		echo "Error: " . $sql . "<br>" . $conn->error;
        echo $eql;
	}



function array_trim(&$value) 
{ 
    $value = trim($value,"\"\""); 
}
$emailname = "https://invites.oneplus.net/index.php?r=share/signup&success_jsonpCallback=success_jsonpCallback&email=$givenemail&koid=6GJ8S&_=1438659411445";

include_once('htmldom/simple_html_dom.php');
$html = file_get_html($emailname);
$linearray = explode(",",trim($html,"success_jsonpCallback({}})")); 
echo "<br><br>";

if (strpos($html,'"ret":0') !== false) {
    echo 'Record does not exist. Please register first. <a href="https://oneplus.net/invites">Click here to register for the reservation list.</a>';
	exit();
}
else
{
	$crude = substr($html,strpos($html,'data')+7);
	$values = preg_split("/[:,]+/", $crude);
	
	
	$values[19]=trim($values[19],"}})");
	

	$sql = "INSERT INTO `oneplus_users`(`kid`, `rank`, `ref_count`, `total`) 
			VALUES ($values[8],$values[10],$values[12],$values[16])";


//	echo $sql;

	if( $conn->query($sql) === TRUE)
	{
		$flag = 1;
		
	}
	else
	 {
		$flag = 0;
		echo "Error: " . $sql . "<br>" . $conn->error;
	} 
$flag = 1;
	 $conn->query($sql);
	$conn->close();
array_walk($values, 'array_trim');
if($values[3]=="")
{$values[3]=="-";}

if($values[10]=="")
{$values[10]=="-";}
}
?>
