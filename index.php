<?
session_start();
$_SESSION['question']=0;
?>
<html>
 <head>
 <title>Nasa Photo Quiz - Powered by Teech.io </title>
 <link rel="icon" 
      type="image/png" 
      href="icon.png" />
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53a1665d4ee741e1"></script>
	<style type="text/css">
	  body {
	  	background: url("http://static.parade.condenast.com/wp-content/uploads/2014/03/Why-Do-Stars-All-Look-Almost-the-Same-Size-ftr.jpg");
	  	background-position: center;
	    color: #34495e }
	</style>

	<!-- Twitter Card data --> 
<meta name="twitter:card" content="summary"> 
<meta name="twitter:site" content="@teech_io"> 
<meta name="twitter:title" content="Nasa Photo Quiz"> 
<meta name="twitter:description" content="A simple example of Quiz App with Teech.io PHP Sdk with API of Nasa"> 

</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container">
  <a class="navbar-brand" href="index.php"><img src="icon.png" height="25" width="25"> NASA Photo quiz</a>
    <p class="navbar-text navbar-right">Powered by <a href="http://teech.io/" target="_blank">Teech.io</a></p>
  </div>
</nav>
	<div class="container">
	<div class="jumbotron">
		<div align="right" class="addthis_sharing_toolbox" addthis:url="http://example.com" addthis:title="An excellent website"></div>
  		<h1>Houston, I'm ready to start!</h1>
  		<p>The temperature is 32.4&#176;C, the weather is good today, the wind is low, 1 mph to the NNW, humidity 43%. It's a good day to fly, your familiy have been alerted, let's start the launch procedure to learn all about NASA. Pull down your visor and let's go!</p>
  		<br></br>
  		<p align="center"><a class="btn btn-primary btn-lg" href="quiz.php"><i class="fa fa-space-shuttle"></i> Three... Two... One... Lift Off!!! <i class="fa fa-space-shuttle"></i></a></p>
  		<br></br>
  		<br></br>
  		<div align="center">
  			<p class="text-center"><h5><small>Powered by <a href="http://teech.io/" target="_blank">Teech.io</a>. Thanks to <a href="http://grin.hq.nasa.gov/" target="_blank">GRIN (GReat Images in Nasa)</a> for the beautiful photos.<small></h5></p>
  		</div>
	</div>
  	</div>
</body>
</html>