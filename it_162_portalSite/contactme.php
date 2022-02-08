<?php include 'includes/header.php';?>



<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i>Contact Me</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
        <?=makeLinks($nav1)?>
    <!--
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Daniel</a></li>
      -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "danielgebreselassie20@gmail.com";  //place your/your client's email address here
        $toName = "Daniel Gebreselassie"; //place your client's name here
        $website = "CLIENT WEBSITE NAME HERE";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID display-5"><?=$PageID?></h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="" class="desktop" alt="" />
 <img src="" class="phone" alt="" />
 <p></p>
 <p> </p>
 <p></p>
 <p></p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3></h3>
 <img src="" class="tablet" alt="" />
 <p></p>
 <p></p>
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