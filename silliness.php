<?php include('header.php') ?>

<div id="content" class="clearfix">

<div align="center">
<h1>Practice page</h1>
<p>Just because I can</p>
<button type="button" onclick="document.getElementById('roll').style.display = 'block'; document.getElementById('box').style.display = 'none'">Make the photo roll</button>
<button type="button" onclick="document.getElementById('box').style.display = 'block'; document.getElementById('roll').style.display = 'none'">Make photo go in a square</button>
<button type="button" onclick="document.getElementById('box').style.display = 'none'; document.getElementById('roll').style.display = 'none'">Make photo disappear</button>
</div>

<div id="roll">
<!-- base image -->
<img src="profile.jpg" alt="" width="100"/>
</div> <!-- roll -->
<br /><br />
<div id="box">
<!-- base image -->
<img src="profile.jpg" alt="" width="100"/>
</div> <!-- box -->


</div> <!-- #content -->
<?php include('footer.php') ?>
