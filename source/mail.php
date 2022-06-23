<?php
    $to = "youremail.com"; // replace this email with yours
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "Content-type: text/html;From: $from";
    $subject = $_REQUEST['subject'];

    $fields = array();
    $fields["name"] = $_REQUEST['name'];
    $fields["email"] = $_REQUEST['email'];
    $fields["subject"] = $_REQUEST['subject'];
    $fields["message"] = $_REQUEST['message'];

    $body = "Message From" $_SERVER['SERVER_NAME']":\n\n <br><br>";
    $body .= '<strong>Name</strong> : '.$fields['name']. '<br><br>';
    $body .= '<strong>Email</strong> : '.$fields['email']. '<br><br>';
    $body .= '<strong>Subject</strong> : '.$fields['subject']. '<br><br>';
    $body .= '<strong>Message</strong> : <br><br>'.$fields['message']. '<br>';

    $send = mail($to, $subject, $body, $headers);
