<?php

namespace bebe\students\classes;

use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'vendor/autoload.php';

class SendToEmail
{
    public static function send($student)
    {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;

        $mail->host = "smtp-relay.brevo.com";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->port = 587;

        $mail->Username = "richardko1303@gmail.com";
        $mail->Password = "DHzOgFMNyvqIA2Sn";

        $mail->setFrom($student->email, $student->firstname);
        $mail->addAddress("richardko1303@gmail.com", "Richard");
        $mail->Subject = "New Student Created";
        $mail->Body = "A new student has been created with the following details: " . $student->firstname .
            " " . $student->lastname . " " . $student->email . " " . $student->age . " " . $student->grade;
        $mail->send();
    }
}
