<?php include('header.php') ?>
    <h1>Contact</h1>
    <p>I would love to hear from you.</p>
    <form id="contact" method="post" action="contact-thanks.php">
        Name:<br />
        <input name="name" type="text" required="required" /><br /><br />
        Email:<br />
        <input name="email" type="text" required="required" /><br /><br />
        Message:<br />
        <textarea name="comment" rows="5" cols="40" required="required"></textarea><br /><br />
        <input type="submit" name="send" value="Submit" />  
    </form>
<?php include('footer.php') ?>

