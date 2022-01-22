<?php include 'includes/header.php';?>
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Daniel Gebreselassie Winter 2022 SCC IT162 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="/index.php" class="selected">Welcome</a></li>
      <li><a href="/big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="/fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Daniel</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/IMG_0758.jpeg" class="desktop" alt="" />
 <img src="images/IMG_0887.JPG" class="phone" alt="" />
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3></h3>
 <img src="images/IMG_0620.WEBP" class="tablet" alt="" />
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>
<!-- END RIGHT COL -->
<?php include 'includes/footer.php';?>
</main>
<!-- END WRAPPER -->

  <script>
	//https://tinyurl.com/dynamic-html-checker
	document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 

	//manages mobile nav - from W3Schools
	function myFunction() {
    	    var x = document.getElementById("myTopnav");
    	    if (x.className === "topnav") {
        	         x.className += " responsive";
    	    } else {
        	         x.className = "topnav";
    	   }
	}   
 </script>
</body>
</html>
 
