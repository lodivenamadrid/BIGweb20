<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Web Developer Examples and Resources by Lodi Madrid</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
    
  <!-- jQuery -->
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    
  <!-- MenuMaker Plugin -->
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    
  <!-- Icon Library -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <script src="js/script.js"></script>
 <script src="https://kit.fontawesome.com/bd33f4d75c.js" crossorigin="anonymous"></script>
   </head>

    
 <body>
    <main> 
    <header>
        <h1><a href="index.html">Web Developer Examples and Resources by Lodi Madrid</a></h1>
       <nav>
      <nav id="cssmenu">
        <ul>
          <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
          <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG</a></li>
          <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Lightbox II</a></li>    
          <!-- drop down menu for research pages -->
          <li><a href="#"> Research Topics</a>
        <ul>
          <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
          <li><a href="accessibility.html"><i class="fas fa-globe"></i> Accessibility</a></li>
          <li><a href="userform.html"><i class="far fa-clone"></i> HTML Forms</a></li>
        </ul>
          </li>
         <!-- drop down menu for google tool pages -->
          <li><a href="#"> Google Tools</a>
        <ul>
          <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
          <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
          <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
        </ul>
           <li><a href="contact.php"><i class="far fa-address-card"></i> Contact Me</a></li>
        </ul>
       </nav>
     </nav>
    </header>
    
       <h2 class="subheader">Contact Lodi</h2>
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "Lodivena.Madrid@seattlecentral.edu";  //place your/your client's email address here
        $toName = "Lodi Madrid"; //place your client's name here
        $website = "Food.Stay.Wander";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Contact Lodi Madrid </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>

     
 </body>
</html>