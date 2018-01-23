<?php

// 1. Autoload the SDK Package. This will include all the files and classes to your autoloader
require __DIR__  . '/PayPal-PHP-SDK/autoload.php';

// 2. Provide your Secret Key. Replace the given one with your app clientId, and Secret
// https://developer.paypal.com/webapps/developer/applications/myapps
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AQHzQgVZLLuPZpNpDc4dxi4ziT5xf7R74mIOuvTQvEltEM4lfR-JxvYOob86hIBsuvsc2S47_hVmrn4y',     // ClientID
        'EN4BrcThVVnOH71rflYrHNcSUA0gBvq8d3eOCB2Hi5mjSngWeTZt4j6qNfxWwq9FB1vjXLTTAZPu2V2e'      // ClientSecret
    )
);

// 3. Lets try to create a Payment
// https://developer.paypal.com/docs/api/payments/#payment_create
$payer = new \PayPal\Api\Payer();
$payer->setPaymentMethod('paypal');

/*
$emailAddress = $_GET['email'];

$details = new Details();
$details->setEmail($emailAddress);
*/

$amount = new \PayPal\Api\Amount();
$amount->setTotal('79.00');
$amount->setCurrency('USD');

$transaction = new \PayPal\Api\Transaction();
$transaction->setAmount($amount);

$redirectUrls = new \PayPal\Api\RedirectUrls();
$redirectUrls->setReturnUrl("http://smartsite.jarthur.co")
    ->setCancelUrl("http://smartsite.jarthur.co");

$payment = new \PayPal\Api\Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions(array($transaction))
    ->setRedirectUrls($redirectUrls);

// 4. Make a Create Call and print the values
try {
    $payment->create($apiContext);
    //echo $payment;

    //echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
    header("Location: {$payment->getApprovalLink()}");
}
catch (\PayPal\Exception\PayPalConnectionException $ex) {
    // This will print the detailed information on the exception.
    //REALLY HELPFUL FOR DEBUGGING
    echo $ex->getData();
}