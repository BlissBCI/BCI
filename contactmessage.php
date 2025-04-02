<?php

    if(isset($_POST['btnsend']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        if (empty($name) || empty($email) || empty($subject) || empty($message) )
            {
                header('location:https://conceptography.org/fcontactus.php?error');
            }
            else
            {
                $recipient="uodaccw@gmail.com";

                if(mail($recipient, $subject, $message, $mailheader))
                {
                    header('location:https://conceptography.org/fcontactus.php?success');
                }
            } 

        else {
            
            header("location:https://conceptography.org/fcontactus.php?success")
        }
    }
?>