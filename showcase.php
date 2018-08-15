<?php include('header.php');?>

<h1>Showcase</h1>
<p>Here are some gratuitous photos of fall in my town.</p>
<!-- First slideshow -->
<div class="slideshow">
    <div class="my-slides">
        <div class="numbertext">1/5</div>
        <img src="slideshow/red-tree-1.jpg" alt="" />
        <div class="caption">Red tree 1</div>
    </div>
    <div class="my-slides">
        <div class="numbertext">2/5</div>
        <img src="slideshow/red-tree-2.jpg" alt="" />
        <div class="caption">Red tree 2</div>
    </div>
    <div class="my-slides">
        <div class="numbertext">3/5</div>
        <img src="slideshow/red-tree-3.jpg" alt="" />
        <div class="caption">Red tree 3</div>
    </div>
    <div class="my-slides">
        <div class="numbertext">4/5</div>
        <img src="slideshow/red-tree-4.jpg" alt="" />
        <div class="caption">Red tree 4</div>
    </div>
    <div class="my-slides">
        <div class="numbertext">5/5</div>
        <img src="slideshow/red-tree-5.jpg" alt="" />
        <div class="caption">Red tree 5</div>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
</div>

<!-- Blatantly copy-and-pasted since I am nowhere near ready to understand JavaScript yet -->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("my-slides");    /* tweaked to match the name I used */
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<?php include('footer.php');?>