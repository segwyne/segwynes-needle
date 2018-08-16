<?php include('header.php');?>

<h1>Showcase</h1>
<p>Here are some gratuitous photos of fall in my town.</p>
<!-- First slideshow -->
<div class="slideshow portrait">
    <div class="my-slides">
        <div class="numbertext">1 / 5</div>
        <img src="slideshow/red-tree-1.jpg" alt="" />
        <div class="caption">Red tree 1</div>
    </div>
    <div class="my-slides">
        <div class="numbertext">2 / 5</div>
        <img src="slideshow/red-tree-2.jpg" alt="" />
        <div class="caption">Red tree 2</div>
    </div>
    <div class="my-slides">
        <div class="numbertext">3 / 5</div>
        <img src="slideshow/red-tree-3.jpg" alt="" />
        <div class="caption">Red tree 3</div>
    </div>
    <div class="my-slides">
        <div class="numbertext">4 / 5</div>
        <img src="slideshow/red-tree-4.jpg" alt="" />
        <div class="caption">Red tree 4</div>
    </div>
    <div class="my-slides">
        <div class="numbertext">5 / 5</div>
        <img src="slideshow/red-tree-5.jpg" alt="" />
        <div class="caption">Red tree 5</div>
    </div>
    <a class="prev" onclick="plusDivs(-1, 0)">&#10094;</a>
    <a class="next" onclick="plusDivs(1, 0)">&#10095;</a>
  
</div>

<!-- Second slideshow -->
<div class="slideshow landscape">
    <div class="my-slides-1">
        <div class="numbertext">1 / 5</div>
        <img src="slideshow/apples-3.jpg" alt="" />
        <div class="caption">Apple orchard</div>
    </div>
    <div class="my-slides-1">
        <div class="numbertext">2 / 5</div>
        <img src="slideshow/fall-bog-3.jpg" alt="" />
        <div class="caption">Bog</div>
    </div>
    <div class="my-slides-1">
        <div class="numbertext">3 / 5</div>
        <img src="slideshow/fall-intersection-2.jpg" alt="" />
        <div class="caption">Highway intersection</div>
    </div>
    <div class="my-slides-1">
        <div class="numbertext">4 / 5</div>
        <img src="slideshow/fall-village-1.jpg" alt="" />
        <div class="caption">Quaint village</div>
    </div>
    <div class="my-slides-1">
        <div class="numbertext">5 / 5</div>
        <img src="slideshow/fall-roadside-2.jpg" alt="" />
        <div class="caption">Roadside</div>
    </div>
    <a class="prev" onclick="plusDivs(-1, 1)">&#10094;</a>
    <a class="next" onclick="plusDivs(1, 1)">&#10095;</a>
  
</div>

<!-- Blatantly copy-and-pasted since I am nowhere near ready to understand JavaScript yet -->
<script>
var slideIndex = [1,1];
var slideId = ["my-slides", "my-slides-1"]
showDivs(1, 0);
showDivs(1, 1);

function plusDivs(n, no) {
  showDivs(slideIndex[no] += n, no);
}

function showDivs(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

<?php include('footer.php');?>