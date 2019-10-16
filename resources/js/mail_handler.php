 <?php
 if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $checkbox=$_POST['checkbox']; 
    $msg=$_POST['msg']; 
     
    $to='yihao6@ualberta.ca';
    /*  This email will be changed to shannon.scott@ualberta.ca  */
    
    $subject='Form Submission';
    $message="Name: ".$name."\n"."Phone: ".$Phone."\n". "I am a: ".$checkbox."\n". "Wrote the following "."\n\n". $msg; 
    $headers="From: ".$email;
     
     if(mail($to, $subject, $message, $headers)) {
         echo "<h4> Sent Successfully! Thank you"." ".$name.", We will contact you shortly!<h4>";
     }
     else {
         echo "Something went wrong!";
     }
 
 }

?>