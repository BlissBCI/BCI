//<?php

//$message_sent = false;
//if(isset($_POST['email']) && $_POST['email'] != '') {

    //if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        //submit form
        //$name=$_POST['name'];
        //$email=$_POST['email'];
        //$subject=$_POST['subject'];
        //$message=$_POST['message'];

        //$to="gatillom@yahoo.com";
        //$body="";

        //$body.="From: ".$name. "\r\n";
        //$body.="Email: ".$email. "\r\n";
        //$body.="Message: ".$message. "\r\n";

        //mail($to,$subject,$body);

        //message_sent=true;
    //}
    //else{
        //$invalid_class_name="form-invalid";
    //}
//}


$message_sent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { // Ensure it's a valid email
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "gatillom@yahoo.com";
        $body = "From: $name \r\nEmail: $email \r\nMessage: $message \r\n";

        if (mail($to, $subject, $body)) {
            // Redirect back to form with a success message
            header("Location: https://conceptography.org/contactus.php?sent=1");
            exit();
        }
    }
}



    //if(isset($_POST['btnsend']))
    //{
        //$name=$_POST['name'];
        //$email=$_POST['email'];
        //$subject=$_POST['subject'];
        //$message=$_POST['message'];

        //if (empty($name) || empty($email) || empty($subject) || empty($message) )
            //{
                //header('location:https://conceptography.org/fcontactus.php?error');
            //}
            //else
            //{
                //$recipient="uodaccw@gmail.com";

                //if(mail($recipient, $subject, $message, $mailheader))
                //{
                    //header('location:https://conceptography.org/fcontactus.php?success');
                //}
            //} 

        //else {
            
            //header("location:https://conceptography.org/fcontactus.php?success")
        //}
    //}
?>