<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width initial-scale=1" />
	<link   type="text/css " href="css/bootstrap.css " rel="stylesheet"/>
	<title> Sample web</title>
</head>

<body>
	<div class="container">	
		<h1><a href="#"><img src="img/logo.png">Days calculator.com</a></h1>
	<div class="row">
	<div class="col-md-3">
	<address>
	Developed by <strong>Francis Ganya</strong><br>
	<a href="mailto:slimgaxienza@live.com">Email me at slimgaxienza@live.com</a>
	</address></div>
	<div class=col-md-9>
	<p>
	Hello there!Have you ever thought of how many days you have spent on this earth?If you havent,probably the thought has crossed your mind now and you are like
	<i>"Really,how many days have i lived on this dear earth"</i>.well not to worry.The days calculator calculates the exact number of days you have lived on earth ,
	taking into consideration <strong>leap years,exclusive days of birthyear and current year .</strong>"
	</p>
	</div>	
	</div>
	<div class="row">
	<div class="col-sm-3">
	<div class="table-responsive">
	<table class="table table-striped table-hover">
	<caption>Recent users</caption>
	<thead>
	<tr class="danger">
	<th>Name</th>
	<th>Age</th>
	<th>Date</th>
	</tr>
	</thead>
	<tbody>
<?php
	for ($n=0; $n<5; $n++)
	{echo"<tr><td>Francis ganya</td><td>18</td><td>11/02/2015</td><tr>";}				
?>
	</tbody>
	</table>
	</div>
	</div>
	<div class="col-sm-9">
	<p class="lead">What are you waiting for!? Enter your details below and hit the calculate button</p>
	<form   method="POST" role="form">
			<div class=row>
			<div class="form-group ">
			<label class="col-sm-2 control-label" for="name">Name</label>
			<div class="col-sm-6"><input type="text" name="username" class="input-sm form-control" id="name" placeholder="enter full name(optional)"></div>
			</div>
			</div>
			<br>
			<div class="row">
			<div class="form-group">
			 <label class="col-sm-2 control-label" for="date of birth">Date of birth</label> 
			<div class="col-sm-8 input-group">
			<div class="col-sm-2"><select name="date" type="text" class="form-control" id="date of birth" >
			 
			
				<?php	for($date=1; $date<=31; $date++)	{	echo"<option value=$date>".$date."</option>";	}	?>
			</select>
			</div>
			<div class="col-sm-3"><select name="month" class="form-control" id="date of birth">
				<?php $months=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");	for($month=0; $month<=11; $month++)	
					{	echo"<option value=$month>".$months[$month]."</option>";	}	?>
			</select>
			</div>
			<div class="col-sm-3 "><select name="year" class="form-control" id="date of birth">
			<?php	for($year=date(Y); $year>=1900; $year--)	{	echo"<option value=$year>".$year."</option>";	}	?>
			</select>
			</div>
			</div>
			</div>
			</div>
			<div class="row">			 		
			<div class="col-sm-9  col-sm-offset-2">			 
			 <button   type="submit" name="calculate" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Calculate</button>
			</div>
			</div>
			<br>
			<?php
			if(isset($_POST['calculate'])) {
				if(empty($name)){$name="annonymous";}
				$name=$_POST['username'];
			   $day=$_POST['date'];
				$month1=$_POST['month'];
			  $u_year=$_POST['year'];
			 
			///*
			include('days calculator.php');
			echo "<div class='row'>
			<div class='col-sm-6 col-sm-offset-2 jumbotron ' >
			<div class='container'>
			<h2  >Your Results $name:</h2>
			<p>you have lived $total_days_on_earth days on earth</p>
			<button type='reset 'class='btn btn-success'>Close</button>
			</div>
			</div>
			</div>";
			//*/
			}
			?>
			 
			</div>	
		<hr>
	</form>
	
	 
	</div>
	 
	</div>
	 
	 
	<!adding my jquery scripts and my bootstrap scripts>
	<script    src="jquery/jquery-2.1.3.js"></script>
	<script  type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>