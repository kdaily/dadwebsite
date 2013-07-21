<?php
  // force UTF-8
define('SERVERPATH','../../zenphoto'); 
define('WEBPATH','../../zenphoto/'); 

require_once(SERVERPATH.'/zp-core/template-functions.php');
require_once(SERVERPATH.'/zp-core/functions-controller.php');

if (!defined('WEBPATH')) die();

$albumName = 'new/';

zp_load_album($albumName);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>M.C. Daily Photography</title>
    <meta name="viewport" content="width=device-width,
				   initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
	  href="../assets/bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
	  href="../assets/bootstrap/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72"
	    href="../assets/bootstrap/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed"
			  href="../assets/bootstrap/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon"
					 href="../assets/bootstrap/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar"
          data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.html">M.C. Daily Photography</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle"
                data-toggle="dropdown">Portfolio<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="new.php">New</a></li>
                  <li><a href="bw.php">Black and White</a></li>
                  <li><a href="color.php">Color</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
  <div class="container">
      
  <?php $imgcount = 0; ?>
  <?php while (next_image(true)): ?>


	  <?php if (($imgcount % 4) == 0) {echo " <div class=\"row\">";}?>
	     
	
	<div class="span3">
	  <div class="photo">
	    <div class="photo_body">
	    <!-- <a href="<?php echo html_encode(getImageLinkURL());?>" title="<?php echo getBareImageTitle();?>"> -->
	    <?php printCustomSizedImage(getImageTitle(), 300); ?>
	    <!-- </a> -->
            </div>
	    <div class="photo_info">
              <p><?php printImageDesc(); ?></p>
	    </div>
	  </div>
	</div>


      <?php if ((($imgcount + 1) % 4) == 0) {echo " </div>";}?>

     <?php $imgcount += 1; ?>

    <?php endwhile; ?>

      <?php if (($imgcount % 4) != 0) {echo " </div>";}?>

      <hr>

      <footer>
        <p>&copy; M.C. Daily Photography 2013</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster
    -->
    <script src="../assets/js/jquery-1.9.1.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>

  </body>
</html>
