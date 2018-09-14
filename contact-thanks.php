<?php include 'header.php';?>

<?php
$name = $email = $comment = "";
$nameErr = $emailErr = $commentErr = "";


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
  
if (isset($_POST["send"])) {
    $to = 'segwynesneedle@gmail.com';
    $subject = "Message from the Segwyne's Needle";
    $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
    $message .= 'Comment: ' . $_POST['comment'];
    $headers = 'From: segwynesneedle@gmail.com\r\n';
    $headers .= 'Content-Type: text/plain; charset=utf-8\r\n';
    $headers .= 'Reply-To: $email';
    
    echo $message;
//    $success = mail($to, $subject, $message. $headers);
}
?>
<div id="article">
    <?php if (isset($success) && $success) { ?>
    <h1>Thank you!</h1>
    <p>Your message has been sent.  I will get back to you shortly.</p>
    <?php } else { ?>
    <h1>Uh-oh!</h1>
    <p>There was a problem with processing your message. Please go back and try again.</p>
    <?php } ?>
</div>
<?php include 'footer.php';?>
