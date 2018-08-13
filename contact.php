<!doctype html>
<html lang="en-US" dir="ltr">
<head>
  <title>Segwyne's Needle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">  <!-- local style sheet -->
  <link href="https://fonts.googleapis.com/css?family=Parisienne|Cinzel:bold" rel="stylesheet"> <!-- font -->
</head>
<body>
<header>
    <h1 id="banner">Segwyne's Needle</h1>
    <p id="byline"><i>Because adults like to play dress up, too</i></p>
</header>
<nav id="menu">  <!-- build my top menu -->
    <label for="tm" id="toggle-menu">Navigation <span class="drop-icon">▾</span></label>
    <input type="checkbox" id="tm" style="border: 1px solid red">
    <ul class="menu" id="main-menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="pricelist.html">Price List</a></li>
        <li><a href="showcase.html">Showcase</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav>  <!-- end of menu -->

<div id="content" class="clearfix">
<div id="article" class="clearfix">
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
</div> <!-- #article -->
</div> <!-- #content -->
<footer>
    <div>
        &#169; 2018 Segwyne's Needle
    </div>
    <div>
        Web Design by <a href="saunderstechnology.com">Saunders Technology</a>
    </div>
</footer>
</body>
</html>

