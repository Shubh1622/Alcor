<?php 
// 
if(isset($_POST['submit'])){
    $to = "mohnish@group2001.in"; // this is your Email address
    $fname = $_POST['Name'];
    $lname = $_POST['Lastname'];
    $mobile = $_POST['Phone'];
    $city = $_POST['City'];
    $from = $_POST['Email']; // this is the sender's Email address
 
    $detail = $_POST['Message'];
    $subject = "Booking-Inquiry";
    $message = "Email: " .$from."<br>"."Name: " .$fname. "<br>" ."Lastname: " .$lname. "<br>"  . "Phone: " .$mobile. "<br>"."City: ". $city ."<br>". "Message: " .$detail;
    $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers .= "From:" .$from. "\r\n" .
  "Reply-To: mohnish@group2001.in" . "\r\n" .
  "X-Mailer: PHP/" . phpversion();
    $success = mail($to,$subject,$message,$headers);
     if( $success == true )  
   {
      echo '<script>alert("Email has been sent successfully. we will contact you shortly.");</script>';
   }
   else
   {
	    echo '<script>alert("Message could not be sent....");</script>';
      
   }
   
    }
    echo '<script>window.location="https://bajajitsolution.com/training/sanjay/Alcor/thankyou.html"</script>';
    
?>