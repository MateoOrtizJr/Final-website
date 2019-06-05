<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mateo's Digital Portfolio</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="port.js" type="text/css">
</head>


<header class="por">
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="index.html">Mateo's<span>Web</span>site</a></h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Aboutme1.html">About Me</a></li>
                    <li><a href="portfolio1.html">Portfolio</a></li>
                    <li><a href="Resume.html">Resume</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul></nav>
                <h1>Innovation</h1>
<div class="sle">
   <script>
    var i = 0; 			
var images = [];	
var time = 3000;	
images[0] = "J0ltwrk.png";
images[1] = "poject3.jpg";
images[2] = "my project 2.jpg";
images[3] = "innovation2.png";
function changeImg(){
	document.slide.src = images[i];
	if(i < images.length - 1){
	  i++; 
	} else { 
		i = 0;
	}
	setTimeout("changeImg()", time);
}
window.onload=changeImg;</script>
    <img name="slide" width="400" height="200" /> <p class="port">This was one of the first websites I made, only three pages. The colorful little boxes are Moodboards that I have also created.
     The image with the arms and gel are from innovations for hummanity that Jive and I worked on for CART 
Spring showcase.</p>
</div>
    </div>
    </header>
  <body>

 <footer id="footer">
       <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Resume</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
   </footer>

</body>
</html>