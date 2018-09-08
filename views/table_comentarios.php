<!DOCTYPE html>
<html>
<head>
	<title>USUARIOS</title>
	<link rel="stylesheet" 
	type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
	<link rel="stylesheet" 
	type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>


        $(function(){
            $("#btnSave").on('click',function () {
                $.ajax({
                    method:'POST',
                    url:"?controller=ComentarioController&method=save_ajax",
                    data: {
                        'name': $("#name").val(),
                        'description': $("#description").val(),
                        'tipo_id': $("#tipo_id").val(),
                    }
                }).done(function (data) {
                    $("#divAjax").html("");
                   $.each(data,function (key,value) {
                        $("#divAjax").prepend(
                        '<div class="jumbotron">' +
                            '<h2>' +value.name+'</h2>' +
                            '<p>' + value.description+
                            '</p>' +
                            '<p>' +
                            '<form action="?controller=ComentarioController&method=destroy"  method="POST" ' +
                            'onsubmit="return confirm(\'DESEAS ELIMINAR?\')">' +
                            '<button type="submit" name="id" value="'+value.id+'" class="btn btn-primary btn-large">ELIMINAR</button> ' +
                            '</form></p></div>'
                        );
                   });
                   $("#exampleModal").modal('toggle');
                }).fail(function (error) {
                    console.log(error);
                });
            });
        });
    </script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
        <?php include('modal.php'); ?>
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
						 id="description" name="description"></textarea>
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

            <div id="divAjax">
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
</div>
</body>
</html>