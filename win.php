<?

session_start();

if(isset($_SESSION['question'])){
	$score=$_SESSION['question'];
	$_SESSION['question']=0;
}

?>

<html>
 <head>
 <title>Nasa Photo Quiz - Powered by Teech.io </title>
 <link rel="icon" 
      type="image/png" 
      href="icon.png" />
 	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
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
    <p class="navbar-text navbar-right">Powered by <a href="http://teech.io/">Teech.io</a></p>
  </div>
</nav>
	<div class="container" align="center">
	<div class="jumbotron">
  		<h3><strong><i class="fa fa-plane"></i> Well done! All questions corrected! <i class="fa fa-plane"></i></strong></h3>
  		<p><img src="http://grin.hq.nasa.gov/IMAGES/SMALL/GPN-2000-001121.jpg" height="310" width="470"></p>
  		<p align="center"><a class="btn btn-primary btn-lg" href="quiz.php"><i class="fa fa-space-shuttle"></i> I'm ready for the next mission <i class="fa fa-space-shuttle"></i></a></p>
  		<p align="center"><a class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-floppy-o"></i> Save my score <i class="fa fa-floppy-o"></i></a></p>
	</div>
  	</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-life-ring"></i> Insert your data</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="score.php" method="post">
  			<div class="form-group" align="center">
    			<label for="exampleInputEmail1">Name</label>
    			<input class="form-control" name="name" style="width: 300px;" placeholder="Bob">
  			</div>
  			<div class="form-group" align="center">
    			<label for="exampleInputEmail1">Score</label>
    			<input  class="form-control" name="score" value="<? echo $score*3 ?>" style="width: 60px;" readonly>
  			</div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Save and go to the leaderboard"></input>
       </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>