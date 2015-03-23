<?php
	include_once("app/includes/config.php");
	include_once("app/PanoramaManager.php");
	
	PanoramaWebsite\PanoramaManager::createNewPanorama(ARCHIVE_DIR, TEMP_DIR);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Panorama Website</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="assets/css/theme.css" rel="stylesheet">
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Panorama Photography Website</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#archive">Archive</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <div class="jumbotron">
        <h1>Aktuell</h1>
        <p><?php echo PanoramaWebsite\PanoramaManager::getCurrentTempImage(TEMP_DIR . "/" . TEMP_NAME, 1000, 300); ?></p>
		<p><button id="makePanorama" class="btn btn-primary">Bildschirmaufnahme starten</button> <button class="btn btn-danger">Bilder älter als 14 Tage löschen</button></p>
      </div>
	
	<?php
		if(array_key_exists("site", $_GET) && $_GET["site"] == "archive"){
			include_once(SITES_DIR . "/archiv.php");
		}
	?>

	 </div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>