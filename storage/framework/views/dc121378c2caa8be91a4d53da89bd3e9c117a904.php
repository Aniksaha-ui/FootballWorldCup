
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
<?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>{
	<tr>
	<td><?php echo e($player->t_name); ?></td>
	<td><?php echo e($player->p_name); ?></td>	
	<td>
		<a href="<?php echo e(url('/editplayer')); ?>" class="btn btn-success">
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

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</thead>
</table>


</body>
</html>

