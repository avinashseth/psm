<?php
    require_once(__DIR__ . '/../vendor/phpmailer/phpmailer/PHPMailerAutoload.php');
    function send_new_email
    (
        $from = null,
        $to = null,
        $subject = null,
        $message = null
    )
    {
        if(is_null($from) || is_null($to) || is_null($subject) || is_null($message)) {
            return false;
        } else {
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = 'html';
            $mail->Host = 'ssl://smtp.gmail.com';
            $mail->Port = 465;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            $mail->Username = $from;
            $mail->Password = EMAIL_PASSWORD;
            $mail->setFrom($from, 'Pet Social Media');
            $mail->addAddress($to, 'Welcome ' . $to);
            $mail->Subject = $subject;
            $mail->msgHTML($message);
            if($mail->send()) {
                return true;
            } else {
                return false;
            }
        }

    }
