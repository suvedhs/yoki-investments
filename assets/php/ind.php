error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
if(isset($_POST['submit'])){
    $to = "suvedhs@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission on YokiInvestments.com";
    $subject2 = "Copy of your form submission";
    $message = name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Hi " . $name . "! Here is a copy of your message to Yoki Investments. Thank you, and we will contact you shortly.
    \n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
