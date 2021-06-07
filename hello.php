<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "holytepps@gmail.com";
        $headers = "From: " .$email;
        $text = "You have received and email form" . $name. ".\n\n". $message;
        mail($mailTo,$text,$headers);
        header("Location: index.php?mailsend");
    }
