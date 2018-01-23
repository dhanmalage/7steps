<?php
ob_start();

get_header(); ?>

<?php

$email = $_POST['email'];
$businessName = $_POST['businessName'];
$industry = $_POST['industry'];
$industryComment = $_POST['industryComment'];
$numEmployees = $_POST['numEmployees'];
$numYears = $_POST['numYears'];
$domain = $_POST['domain'];
$preferDomain = $_POST['preferDomain'];
$socialFb = $_POST['socialFb'];
$socialTw = $_POST['socialTw'];
$socialIn = $_POST['socialIn'];
$socialYo = $_POST['socialYo'];
$socialVi = $_POST['socialVi'];
$socialPi = $_POST['socialPi'];
$mission = $_POST['mission'];
$products = $_POST['products'];
$team = $_POST['team'];
$competitor1 = $_POST['competitor1'];
$competitor2 = $_POST['competitor2'];
$competitor3 = $_POST['competitor3'];
$competitor4 = $_POST['competitor4'];
$competitor5 = $_POST['competitor5'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$images = $_POST['images'];

$to = 'dmmdust@gmail.com';
$subject = 'The subject';

$body = "Email: " . $email . "\n";
$body .= "Business Name: " . $businessName . "\n";
$body .= "Industry: " . $industry . "\n";
$body .= "Industry Comment: " . $industryComment . "\n";
$body .= "Number of Employees: " . $numEmployees . "\n";
$body .= "Number of Years: " . $numYears . "\n";
$body .= "Domain: " . $domain . "\n";
$body .= "Prefer Domain: " . $preferDomain . "\n";
$body .= "Facebook: " . $socialFb . "\n";
$body .= "Twitter: " . $socialTw . "\n";
$body .= "Linked In: " . $socialIn . "\n";
$body .= "Youtube: " . $socialYo . "\n";
$body .= "Vimeo: " . $socialVi . "\n";
$body .= "Pinterest: " . $socialPi . "\n";
$body .= "Mission: " . $mission . "\n";
$body .= "Products: " . $products . "\n";
$body .= "Team: " . $team . "\n";
$body .= "Competitor 1: " . $competitor1 . "\n";
$body .= "Competitor 2: " . $competitor2 . "\n";
$body .= "Competitor 3: " . $competitor3 . "\n";
$body .= "Competitor 4: " . $competitor4 . "\n";
$body .= "Competitor 5: " . $competitor5 . "\n";
$body .= "Address Line 1: " . $address1 . "\n";
$body .= "Address Line 2: " . $address2 . "\n";
$body .= "City: " . $city . "\n";
$body .= "State: " . $state . "\n";
$body .= "Country: " . $country . "\n";
$body .= "Zip: " . $zip . "\n";
$body .= "Phone: " . $phone . "\n";

/*
$imgNo = 1;
foreach($images as $image){
    $body .= "Image " . $imgNo . ": " . $image . "\n";
    $imgNo++;
}
*/

$headers[] = 'Content-Type: text/html; charset=UTF-8';
$headers[] = 'From: info@smartsite.jarthur.co';
$headers[] = 'Cc: dmmdust@gmail.com';

wp_mail( $to, $subject, $body, $headers );



$checkOutUrl = get_template_directory_uri() . "/checkout.php?email=" . $email;

header("Location: {$checkOutUrl}");

?>

<?php get_footer(); ?>