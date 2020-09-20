<?php 
   $name = $_POST['name'];
   $visitor_email = $_POST['email'];
   $message = $_POST['message'];


   $email_form = 'adityaghadge854@gmail.com';
   $email_subjest = "new form submission";
   $email_body = "user name: $name./n".
                    "user email: $visitor_email./n".
                    "user message: $message./n".
 $to = "adityaghadge854@gmail.com";
 
 $headers = "form: $email_form /r/n";
 $headers = "Reply-to: $visitor_email /r/n";
 mail($to,$email_subject,$email_body,$headers);
 headers("location: contactform.html");