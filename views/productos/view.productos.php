<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../asset/style/crud.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../asset/js/crud.js"></script>
  
  <body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Crear poducto</span></a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Id</th>
                        <th>Nombre</th>
						<th>Referencia</th>
                        <th>Precio</th>
                        <th>Peso</th>
                        <th>Categoria</th>
                        <th>Stock</th>
                        <th>FechaCreacion</th>
                    </tr>
                </thead>
                <tbody>
					<?php

						foreach ($data as $key) {					
							echo('
							<tr>
								<td>
									<span class="custom-checkbox">
										<label for="checkbox1"></label>
									</span>
								</td>');
									foreach ($key as $Vkey => $value) {								
										echo('<td>'.$value.'</td>');
									}
								
								echo('
								<td>
									<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
									<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
								</td>
							</tr>  ');
						}
					?>                                      
                </tbody>
            </table>
        </div>
    </div>
	<!-- Crear Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="nuevo" name="nuevo" method="POST" action="index.php?c=productos&a=insertarProducto">
					<div class="modal-header">						
						<h4 class="modal-title">Crear poducto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre</label>
							<input id="Nombre" name="Nombre" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Referencia</label>
							<input id="Referencia" name="Referencia" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Precio</label>
							<textarea class="form-control" name="Precio" required></textarea>
						</div>
						<div class="form-group">
							<label>Peso</label>
							<input id="Precio" name="Peso" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Categoria</label>
							<input id="Peso" name="Categoria" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Stock</label>
							<input id="Stock" name="Stock" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>FechaCreacion</label>
							<input id="FechaCreacion" name="FechaCreacion" type="date" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<form id="editar" name="editar" method="POST" action="index.php?c=productos&a=modificar&id=Id">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
						<input type="hidden" class="form-control" name="Id" id="Id" value=" <?php echo($data["Id"])?>" required>				
						<div class="form-group">
							<label>Nombre</label>
							<input id="Nombre" name="Nombre" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Referencia</label>
							<input id="Referencia" name="Referencia" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Precio</label>
							<textarea class="form-control" name="Precio" required></textarea>
						</div>
						<div class="form-group">
							<label>Peso</label>
							<input id="Precio" name="Peso" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Categoria</label>
							<input id="Peso" name="Categoria" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Stock</label>
							<input id="Stock" name="Stock" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>FechaCreacion</label>
							<input id="FechaCreacion" name="FechaCreacion" type="date" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>