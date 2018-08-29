<!DOCTYPE html>
<html>
<head>
	<title>USUARIOS</title>
	<link rel="stylesheet" 
	type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
	<link rel="stylesheet" 
	type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	

	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-primary text-center">
				Listado de Comentarios
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<form role="form" action="?controller=ComentarioController&method=save" method="POST">
				<div class="form-group"> 
					<label for="name">
						Título
					</label>
					<input type="text" class="form-control" id="name" name="name" />
				</div>
				<div class="form-group"> 
					<label for="description">
						Descripcion
					</label>
					<textarea class="form-control"
						 id="description" name="description">
					</textarea>
				</div>
				<div class="form-group"> 
					<label for="tipo_id">
						Tipo
					</label>
					<select class="form-control"
						 id="tipo_id" name="tipo_id">
						 <?php echo getCombo($tipos)?>
					</select>
				</div>
				
				
				<button type="submit" class="btn btn-primary">
					Guardar
				</button>
			</form>
		</div>
		<div class="col-md-8">
					<form 
					action="?controller=ComentarioController
					&method=index" 
						method="POST">
						<input type="text" name="filter" value="<?php echo $filter ?>">
						<button type="submit" class="btn btn-primary btn-large">Buscar</button>
					</form>

			<?php foreach ($comentarios as $comentario) {?>
			<div class="jumbotron">
				<h2>
					<?php echo $comentario->name?>
				</h2>
				<p>
					<?php echo $comentario->description?>
				</p>
				<p>
					<form 
					action="?controller=ComentarioController
					&method=destroy" 
					method="POST" 
					onsubmit="return confirm('DESEAS ELIMINAR?')">

						<button type="submit" name="id" value="<?php echo $comentario->id?>" class="btn btn-primary btn-large">ELIMINAR</button>
					</form>
				</p>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
</body>
</html>