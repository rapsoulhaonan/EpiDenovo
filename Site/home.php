<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to RCRDB</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<!-- bottom app icons -->
			
			<style>
			 body {
  margin: 0;
  padding: 0;
  background: #ccc;
}
 
.nav ul {
  list-style: none;
  background-color: #444;
  text-align: center;
  padding: 0;
  margin: 0;
}
.nav li {
  font-family: 'Oswald', sans-serif;
  font-size: 1.2em;
  line-height: 40px;
  height: 40px;
  border-bottom: 1px solid #888;
}
 
.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  transition: .3s background-color;
}
 
.nav a:hover {
  background-color: #005f5f;
}
 
.nav a.active {
  background-color: #fff;
  color: #444;
  cursor: default;
}
 
@media screen and (min-width: 600px) {
  .nav li {
    width: 73px;
    border-bottom: none;
    height: 50px;
    line-height: 50px;
    font-size: 0.9em;
  }
 
  /* Option 1 - Display Inline */
  .nav li {
    display: inline-block;
    margin-right: -4px;
  }
 
  /* Options 2 - Float
  .nav li {
    float: left;
  }
  .nav ul {
    overflow: auto;
    width: 600px;
    margin: 0 auto;
  }
  .nav {
    background-color: #444;
  }
  */
}
			</style>
	</head>
		<!-- Navbar -->
		<body>
			<div class="nav">
				<ul>
					<li class="home"><a href="home.php">Home</a></li>
					<li class="search"><a href="search.php">Search</a></li>
					<li class="stats"><a href="stats.php">Stats</a></li>
					<li class="docs"><a href="docs.php">Docs</a></li>
					<li class="download"><a href="download.php">Download</a></li>
					<li class="links"><a href="links.php">Links</a></li>
					<li class="contact"><a href="contact.php">Contact</a></li>
					<li class="news"><a href="news.php">News</a></li>
				</ul>
			</div>
			<div>
				<h1>
					About RCRDB
						<small>An integrated transcriptional and post-transcriptional regulatory database for cycling RNAs</small>
                </h1>
					<p>The molecular mechanism of circadian rhythms initiate from typical core transcription-translation feedback loops (TTFL) in mammals. Besides transcriptional regulation, several studies have revealed that co-transcriptional and post-transcriptional regulation play major role in 70-80% RNAs cycling. 
					Here, we collected published circadian rhythms related high-throughput datasets including data sets as follows: 11 RNA-Seq of time points gene expression at nascent, total, mature and ribosome binding level; 20 differential expression datasets of WT VS KO/KD of circadian related gene; 54 ChIP-Seq of time points datasets for trancription factor or histone modifications; and 2 small-RNA-Seq of time points for miRNA profiles in mouse liver. 
					We constructed circadian rhythm related regulatory database containing 8 regulatory classes including core clock protein, histone modifications, other trancriptional factors, eRNAs, lncRNAs, miRNAs, RBPs and RNA editing.</p>
			</div>
			<!-- Automatic Slideshow Images -->
			  <div class="mySlides w3-display-container w3-center">
				<img src="C:\Users\yang\Desktop\Bio database site\Model.png" style="width:100%">
				<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
				</div>
			  </div>
			  <div class="mySlides w3-display-container w3-center">
				<img src="C:\Users\yang\Desktop\Bio database site\Rhythmic.png" style="width:100%">
				<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">  
				</div>
			  </div>
			  <div class="mySlides w3-display-container w3-center">
				<img src="C:\Users\yang\Desktop\Bio database site\Workflow.png" style="width:100%">
				<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">  
				</div>
			  </div>
		
		<!-- End Page Content -->
</div>
<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;" class="w3-grayscale-max"></div>
<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

		
		</body>
</html>