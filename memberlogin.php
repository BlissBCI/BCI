<?php

    if(isset($_POST['btnsend']))
    {
        $exampleFormControlInput1=$_POST['name'];
        $exampleFormControlInput2=$_POST['email'];
        $exampleFormControlInput3=$_POST['subject'];
        $exampleFormControlTextarea1=$_POST['message'];

        if (empty($exampleFormControlInput1) || empty($exampleFormControlInput2) || empty($exampleFormControlInput3) || empty($exampleFormControlTextarea1) )
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