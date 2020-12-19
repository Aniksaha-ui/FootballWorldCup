
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
			user id:
		</th>
		
		<th>
			Post id:
		</th>
		<th>
			heading :
		</th>
		<th>
			title:
		</th>
		<th>
			Action:
		</th>
	</tr>
@foreach($players as $player){
	<tr>
		<td>{{$player->id}}</td>	
	<td>{{$player->user_id}}</td>	
	<td>{{$player->post_id}}</td>
	<td>{{$player->heading}}</td>
	<td>{{$player->title}}</td>
	<td>
		<a href="{{ url('/writecomment'.$player->id) }}" class="btn btn-success">
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

