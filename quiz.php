<?
include "teechio-php-master/Material.php";
session_start();

$material = new Material();
$materials = $material->fetchAll();

/************************************************************************

	EXAMPLE OF MATERIAL

{
	"_id": "53a0c3f1e4b0b7f31ef21dc8",
	"photo1": "http://grin.hq.nasa.gov/IMAGES/SMALL/GPN-2003-000005.jpg",
	"true": "photo2",
	"description": "Which is the photo of Saturn ?",
	"photo2": "http://grin.hq.nasa.gov/IMAGES/SMALL/GPN-2002-000060.jpg",
	"title": "Which is the photo of Saturn ?",
	"type": "other"
 }

*************************************************************************/

$size = count($materials);
$rdn = rand(0, $size-1);

if(isset($_GET['photo']) && isset($_GET['id'])) {
	$material = new Material();
	$material->fetch($_GET['id']);
	$material->true;
	$photo = $_GET['photo'];
	if($material->true != 'photo'.$photo){
		header( 'Location: error.php' );
	}
	
	if(isset($_SESSION['question']) && ($_GET['id'] != $_SESSION['id'])) {
		$_SESSION['id']=$material->_id;
		$_SESSION['question']=$_SESSION['question']+1;
		if($_SESSION['question']>=15){
				header( 'Location: win.php' );
		}
	}	
}
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
    <p class="navbar-text navbar-right">Powered by <a href="http://teech.io/" target="_blank">Teech.io</a></p>
  </div>
</nav>
	<div class="container">
	<div class="jumbotron">
		<div class="row">
		<h2 id="glyphicons" class="page-header" align="center"><? echo $materials[$rdn]->title ?></h2>
  			<div class="col-md-6" align="center">
  				<a href="quiz.php?photo=1&id=<? echo $materials[$rdn]->_id ?>"><img src="<? echo $materials[$rdn]->photo1 ?>"  height="310" width="350" class="img-rounded"></a>
  			</div>
 			<div class="col-md-6" align="center">
 				<a href="quiz.php?photo=2&id=<? echo $materials[$rdn]->_id?>"><img src="<? echo $materials[$rdn]->photo2 ?>"  height="310" width="350" class="img-rounded"></a>
 			</div>
 			<br>
		</div>
		<div align="center"><h5><small><? echo $_SESSION['question']." questions corrected" ?></small></h5></div>
	</div>
  	</div>
  
  
 		<div align="center" class="addthis_sharing_toolbox"></div>
 	
 
</body>
</html>