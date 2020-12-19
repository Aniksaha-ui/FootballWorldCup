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


  </style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="well">
				<form class="form-horizontal" method="POST" >
				{{ csrf_field() }}

			<div class ="form-group">
					<label for ="name" class="col-sm-2" control-label>Name:</label>
					<div class="col-sm-10">
						<input type="text" name="p_name" value= "{{$playerbyid->p_name}}" class="form-control">
			</div>
		</div>

		<div class ="form-group">
					<label for ="address" class="col-sm-2" control-label>Playing position:</label>
					<div class="col-sm-10">
						<input type="text"  name="player_position" value= "{{$playerbyid->player_position}}" class="form-control">

						<input type="text"  name="id" value= "{{$playerbyid->id}}" class="form-control">
			</div>
		</div>

		<div class ="form-group">
					<label for ="address" class="col-sm-2" control-label>Playing number:</label>
					<div class="col-sm-10">
						<input type="text"  name="player_number" value= "{{$playerbyid->player_number}}" class="form-control">
			</div>
		</div>

		<div class ="form-group">
					<label for ="address" class="col-sm-2" control-label> Status:</label>
					<div class="col-sm-10">
						<input type="text"  name="status" value= "{{$playerbyid->status}}" class="form-control">
			</div>
		</div>

		<div class ="form-group">
					<label for ="address" class="col-sm-2" control-label> Team code:</label>
					<div class="col-sm-10">
						<input type="text"  name="t_code" max="32" value= "{{$playerbyid->t_code}}" class="form-control">
			</div>
		</div>

		<div class ="form-group">
					
					<div class="col-lg-12">
						<input type="submit" name="sub" id="sub">
			</div>
		</div>

		</form>

		</div>
	</div>
</div>


</body>
</html>