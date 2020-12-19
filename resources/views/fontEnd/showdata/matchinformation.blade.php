
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		table{
			border-collapse: collapse;
			
			width:70%;
			text-align: center;
			float:right;
		}
	</style>
</head>
<body>

<table class="table table-hover" border='1'>
	<thead>
	<tr>
		<th>
			player ID:
		</th>
		
		<th>
			player names:
		</th>
		<th>
			player position:
		</th>
		<th>
			status:
		</th>
		<th>
			Action:
		</th>
	</tr>
@foreach($matchs as $matchs){
	<tr>
	<td>{{$matchs->match_id}}</td>	
	<td>{{$matchs->t_code}}</td>
	<td>{{$matchs->m_date}}</td>
	<td>{{$matchs->s_id}}</td>
	<td>
		<a href="{{ url('/editplayer',$player->id) }}" class="btn btn-success">
			<span class="glyphicon glyphicon-edit">
				
			</span>
			
		</a>

		<a href="" class="btn btn-danger">
			<span class="glyphicon glyphicon-trash">
				
			</span>
			
		</a>

	</td>
</tr>
}

@endforeach
</thead>
</table>


</body>
</html>

