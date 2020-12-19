<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	#sub{
  		width:100%;
  	}
#c1{
	float:right;
}

  </style>
</head>
<body>
<div class="container" id="c1">
	<div class="row">
		<div class="col-lg-12">
			<div class="well">
				<form class="form-horizontal" method="POST" id="form1" >
				{{ csrf_field() }}

			<div class ="form-group">
					<label for ="name" class="col-sm-2" control-label>player ID:</label>
					<div class="col-sm-8">
						<input type="text" max="200" name="p_id" max="200" class="form-control">
			</div>
		</div>

			<div class ="form-group">
					<label for ="name" class="col-sm-2" control-label>Match ID:</label>
					<div class="col-sm-8">
						<input type="number" max="32" name="match_id" class="form-control">
			</div>
		</div>

		
		<div class ="form-group">
					
					<div class="col-lg-10">
						<input type="submit" name="sub" id="sub">
			</div>
		</div>

		</form>

		</div>
	</div>
</div>


</body>
</html>