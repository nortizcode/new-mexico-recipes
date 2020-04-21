<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param string $mailgunDomain your mailgun private api key.
 * @param string $mailgunApiKey your mailgun domain relay.
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//mailgun API Key authorization

$mailgunApiKey = "13951635fd8273ac7b004a797fd475d6-f135b0f1-24d3370e";
$mailgunDomain = "https://app.mailgun.com/app/sending/domains/sandbox30282ec56f4947f39769aa9961227b75.mailgun.org";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6Le5Z-wUAAAAALeT1SrD7ffkP5aFYfxjPlGglmEi';
$secret = '6Le5Z-wUAAAAAFj-tOd2Qb41RoLIwW7TLN5S020P';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "sickknate25@gmail.com" => "Nathan Ortiz"];
$MAIL_RECIPIENT = ["sickknate25@gmail.com"];