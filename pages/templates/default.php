    <!DOCTYPE html>
<html lang="fr">
  <head>
  		<title><?= App::getInstance()->titre; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">   
    						<!-- Bootstrap core CSS -->
    	<link href="framworks/bootstrap.min.css" hrel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>

              <!-- Appelle de pages/index.php => HOME -->
                      <?= $content; ?> 

</body>
								<!-- SCRIPTS LOADS -->
	<!-- <script type="text/javascript" hrel="scripts/bootstrap.min.js"></script>
		 <script type="text/javascript" hrel="jquery-3.2.0.min.js"></script> -->

</html>
