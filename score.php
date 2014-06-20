<?
include "teechio-php-master/TeechioQuery.php";
include "teechio-php-master/TeechioObject.php";

$user = $_POST['name'];
$score = (int)$_POST['score'];

$t= new TeechioObject();
$array = array("classname"=>"leaderboard","username"=> $user, "score"=> $score);
$t->save($array);

$config = parse_ini_file('teechio-php-master/config.ini');
		
Unirest::defaultHeader("Teech-Application-Id", $config['appkey']);
Unirest::defaultHeader("Teech-REST-API-Key", $config['apikey']);

$response = Unirest::get('http://api.teech.io/classes?query={"classname": "leaderboard"}&sort={"score":-1}');
$c= $response->body; 


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
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container">
  <a class="navbar-brand" href="index.php"><img src="icon.png" height="25" width="25"> NASA Photo quiz</a>
    <p class="navbar-text navbar-right">Powered by <a href="http://teech.io/" target="_blank" target="_blank">Teech.io</a></p>
  </div>
</nav>
	<div class="container">
	<div class="jumbotron">
		<div align="right" class="addthis_sharing_toolbox"></div>
		<div align="center"><h3><i class="fa fa-sort-amount-asc"></i> Leaderboard</h3></div>
  		<table class="table table-striped" style="width: 600px;" align="center">
  		<tr><td><strong>Name</strong></td><td align="right"><strong>Score</strong></td></tr>
  		<?
  		for($i=0;$i<count($c);$i++){
  		?>
  			<tr><td><? echo $c[$i]->username ?></td><td align="right"><? echo $c[$i]->score ?></td></tr>
  		<?
  		}
  		?>
		</table>
  		<div align="center">
  			<p class="text-center"><h5><small>Powered by <a href="http://teech.io/" target="_blank">Teech.io</a>. Thanks to <a href="http://grin.hq.nasa.gov/" target="_blank">GRIN (GReat Images in Nasa)</a> for the beautiful photos.<small></h5></p>
  		</div>
	</div>
  	</div>
</body>
</html>