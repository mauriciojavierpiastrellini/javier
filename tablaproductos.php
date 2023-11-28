<?php
 	include "coneccionlocal.php";
	$conexion = mysqli_connect( $servidor, $user, $password );
	$db = mysqli_select_db( $conexion, $basededatos );
	@$nombre=$_POST['nombre'];if($nombre==""){$nombre="0";}
	@$descripcion=$_POST['descripcion'];if($descripcion==""){$descripcion="0";}
	@$id_categoria=$_POST['id_categoria'];if($id_categoria==""){$id_categoria="0";}
	@$precio_compra=$_POST['precio_compra'];if($precio_compra==""){$precio_compra="0";}
	@$precio_venta=$_POST['precio_venta'];if($precio_venta==""){$precio_venta="0";}
	@$id_proveedor=$_POST['id_proveedor'];if($id_proveedor==""){$id_proveedor="0";}
	@$codigo=$_POST['codigo'];if($codigo==""){$codigo="0";}
	@$fecha_actualizacion=$_POST['fecha_actualizacion'];if($fecha_actualizacion==""){$fecha_actualizacion="0";}
	@$id_variedad_serie=$_POST['id_variedad_serie'];if($id_variedad_serie==""){$id_variedad_serie="0";}
	@$id_marca=$_POST['id_marca'];if($id_marca==""){$id_marca="0";}
	@$id_color=$_POST['id_color'];if($id_color==""){$id_color="0";}
	@$id_dimension=$_POST['id_dimension'];if($id_dimension==""){$id_dimension="0";}
	@$divisa=$_POST['divisa'];if($divisa==""){$divisa="0";}
	@$ministock=$_post['ministock'];if($ministock=""){$ministock="0";}
	@$desactivado=$_post['desactivado'];if($desactivado=""){$desactivado="0";}
	if ($subapp=='elim'){
        $sqlelim = "DELETE FROM productos where id=".$reg;
        $resultado = mysqli_query( $conexion, $sqlelim );
       
    }
	if ($subapp=="agregar"){
		?>
			   <h1 align='center'>Formulario</h1><br>
			<h4 class="text-center">Producto</h4>
			<form action="prueba.php?app=tablaproductos&subapp=validaragregar" method="POST" >
				<div class="row">
					<div class="col-sm">
						<div class="container-fluid">
							<div class="row">
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="nombre">Nombre:</label>
								</div>
								
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="text" class="form-control" required placeholder="Nombre *" id="nombre" name="nombre">
								</div>
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="descripcion">Descripcion:</label>
								</div>
	
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="text" class="form-control" placeholder="Una breve descripcion del producto" id="descripcion" name="descripcion">
								</div> 
	
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="id_categoria">Categoria:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="number" class="form-control" id="id_categoria" name="id_categoria">
								</div>
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="precio_compra">$compra:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="number" class="form-control" placeholder="Precio_compra" id="precio_compra" name="precio_compra">
								</div>
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="precio_venta">$venta:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="number" class="form-control"  id="precio_venta" name="precio_venta">
								</div>
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="id_proveedor">Proveedor:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="number" class="form-control" placeholder="Id_Proveedor*" id="id_proveedor" name="id_proveedor">
								</div>
						
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="fecha_actualizacion">fecha_actualizacion:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="date" class="form-control" placeholder="fecha_actualizacion" id="fecha_actualizacion" name="fecha_acutalizacion">
								</div>
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="codigo">Codigo:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="text" class="form-control" placeholder="codigo" id="codigo" name="codigo">
								</div>
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="id_variedad_serie">variedad o serie:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="text" class="form-control" required placeholder="Id_variedad_serie*" id="id_variedad_serie" name="id_variedad_serie">
								</div>
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="id_marca">Marca:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="number" class="form-control"  required placeholder="Id_marca*" id="id_marca" name="id_marca">
								</div>
							


								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="id_color">Color:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
								   <select class='form-control' id='id_color' name='id_color'>
									<?php
	            						$sql="SELECT * FROM colores"; 
    									$res = mysqli_query( $conexion, $sql);
                						while ($fil=mysqli_fetch_array($res)){
              							echo "<option value=".$fil['id'].">".$fil['color']."</option>";
                						}
									?>
					
		                               
										
	                            	</select>  
								</div>
						
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="id_dimension">Dimension:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="number" class="form-control"  required placeholder="Id_dimension*" id="id_dimension" name="id_dimension">
								</div>
							

								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="divisa">Divisa:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="number" class="form-control" placeholder="divisa" id="divisa" name="divisa">
								</div>
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="ministock">Ministock:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="number" class="form-control" placeholder="ministock" id="ministock" name="ministock">
								</div>
								<div align="right" class="col-sm-3 col-md-6 col-lg-4">
									<label for="desactivado">Desactivado:</label>
								</div>
								<div class="col-sm-9 col-md-6 col-lg-8">
									<input type="number" class="form-control" placeholder="desactivado" id="desactivado" name="desactivado">
								</div>
						 </div>
						
					</div>
				</div>
			</div>
			<div align="center">
				<br>
				<p>* Campo requerido </p>
			</div>
			<div align="center">
				<br>
	
				<button type="submit"  class="btn btn-primary">Enviar</button>
			</div>
			
		</form>
	  
	  
	
		<br><br><h3 align='center'><a href='prueba.php?app=tablaproductos'>volver</a></h3>
<?php 
} elseif ($subapp == "validaragregar") {
	$sqllist = "INSERT INTO productos  
	(nombre, descripcion, id_categoria, precio_compra, precio_venta, id_proveedor, fecha_actualizacion, codigo, id_variedad_serie, id_marca, id_color, id_dimension, divisa, ministock, desactivado) 
	VALUES 
		('" . ucfirst($nombre) . "', 
		'" . $descripcion . "', 
		'" . $id_categoria . "', 
		'" . $precio_compra . "', 
		'" . $precio_venta . "', 
		'" . $id_proveedor . "',
		'" . $fecha_actualizacion . "',
		'" . $codigo . "', 
		'" . $id_variedad_serie . "', 
		'" . $id_marca . "', 
		'" . $id_color . "', 
		'" . $id_dimension . "', 
		'" . $divisa . "', 
		'" . $ministock . "', 
		'" . $desactivado . "')";

echo $sqllist;
$resultado = mysqli_query($conexion, $sqllist);

    echo $sqllist;
    $resultado = mysqli_query($conexion, $sqllist);
    ?>
    <div align='center'>
        <h5>Registro agregado</h5><br><br>
        <button type="button" class="btn btn-primary"><a href="prueba.php?app=tablaproductos">Volver</a></button>
    </div>

<?php
}elseif($subapp=="editar"){
       $sqllist="SELECT * FROM productos WHERE id=".$reg;
        $resultado = mysqli_query( $conexion, $sqllist);
        $fila=mysqli_fetch_array($resultado);
?>
        <br>
        <h4 class="text-center">Modifica cliente:<?php echo $reg;?></h4>
        <form action="prueba.php?reg=<?php echo $reg;?>&app=tablaproductos&subapp=validareditar" method="POST" >
            <div class="row">
                <div class="col-sm">
                    <div class="container-fluid">
                        <div class="row">
                            <div align='right' class='col-sm-3 col-md-6 col-lg-4'>
                                <label for='nombre'>Nombre:</label>
								<label for='descripcion'>Descripcion:</label>
								<label for='id_categoria'>_Id_Categoria:</label>
								<label for='precio_compra'>Precio_compra</label>
								<label for='precio_venta'>Precio_venta</label>
								<label for='id_proveedor'>id_Proveedor</label>
								<label for='fecha_actualizacion'>Fecha_actualizacion</label>
								<label for='codigo'>codigo</label>
								<label for='id_variedad_serie'>Id_variedad_serie</label>
								<label for='id_color'>Id_color</label>
								<label for='id_dimension'>Id_dimension</label>
								<label for='divisa'>Divisa</label>
								<label for='ministock'>Ministock</label>
								<label for='desactivado'>desactivado</label>
                            </div>
                            <div class='col-sm-9 col-md-6 col-lg-8'>
                                <input type='text' class='form-control' value='<?php echo $fila['nombre'];?>' id='nombre' name='nombre'>
								<input type='text' class='from_control' value='<?php echo $fila['descripcion'];?>' id='descripcion' name='descripcion'>
								<input type='text' class='form-control' value='<?php echo $fila['idcategoria'];?>' id='idcategoria' name='idcategoria'>
								<input type='text' class='from_control' value='<?php echo $fila['precio_compra'];?>' id='precio_compra' name='precio_compra'>
								<input type='text' class='form-control' value='<?php echo $fila['precio_venta'];?>' id='precio_venta' name='precio_venta'>
								<input type='text' class='from_control' value='<?php echo $fila['id_proveedor'];?>' id='id_proveedor' name='id_proveedor'>
								<input type='text' class='form-control' value='<?php echo $fila['fecha_actualizacion'];?>' id='fecha_actualizacion' name='fecha_actualizacion'>
								<input type='text' class='from_control' value='<?php echo $fila['codigo'];?>' id='codigo' name='codigo'>
								<input type='text' class='form-control' value='<?php echo $fila['id_variedad_serie'];?>' id='id_serie' name='id_serie'>
								<input type='text' class='from_control' value='<?php echo $fila['id_color'];?>' id='id_color' name='id_color'>
								<input type='text' class='form-control' value='<?php echo $fila['id_dimension'];?>' id='id_dimension' name='id_dimension'>
								<input type='text' class='from_control' value='<?php echo $fila['divisa'];?>' id='divisa' name='divisa'>
								<input type='text' class='form-control' value='<?php echo $fila['ministock'];?>' id='ministock' name='ministock'>
								<input type='text' class='from_control' value='<?php echo $fila['desactivado'];?>' id='desactivado' name='desactivado'>

                            </div>
                            <div class="valid-feedback">Valido</div>
                            <div class="invalid-feedback">Vuelva a ingresar</div>
                        </div>
                    </div>
                </div>
            </div>
            <div align="center">
                <br>
                <button type="submit"  class="btn btn-primary">Enviar</button>
            </div>
        </form>
          
    <?php        
    
 }elseif ($subapp=="validareditar"){
       
	$sqladd = "UPDATE productos SET 
    nombre='" . $nombre. "',
    descripcion='" . $descripcion . "',
    id_categoria='" . $id_categoria . "',
    precio_compra='" . $precio_compra . "',
    precio_venta='" . $precio_venta . "',
    id_proveedor='" . $id_proveedor . "',
    fecha_actualizacion='" . $fecha_actualizacion . "', 
    codigo='" . $codigo . "',
    id_variedad_serie=" . $id_variedad_serie . ",
    id_color=" . $id_color . ",
    id_dimension=" . $id_dimension . ",
    divisa=" . $divisa . ",
    ministock='" . $ministock . "',
    desactivado='" . $desactivado . "'
	WHERE id=" . $reg;
           // echo $sqladd;
        $resultado = mysqli_query( $conexion, $sqladd );                          
        ?>
    	<h5 style='text-align: center;background-color: rgb(223, 188, 100);'>
	    	<p>Registro modificado</p><br>	
	        <a class='btn btn-primary btn-sm' type='butom' color='white' href='prueba.php?app=tablaproductos'>Volver</a></th>
    	</h5>
	<?php


}else{ 
	?>
	<div align='center'>
		<h1 >Tabla de productos</h1><br>
	</div>
	
 	<h5  style='text-align: center;background-color: rgb(223, 188, 100);'>
        <th scope='col'><a class='btn btn-primary btn-sm' type='butom' color='white' href='prueba.php?salir#ventana'>Volver</a></th>
    </h5>

	<div class="table-responsive">
        <table class="table table-sm table-dark">
            <thead>
                <tr class='bg-danger'>
                	<th scope='col'><a type='butom' color='white' href='prueba.php?app=tablaproductos&subapp=agregar#ventana'>Agregar</a></th>
                    <th scope='col'>Id</th>
					<th scope='col'>Nombre</th>
					<th scope='col'>descripcion</th>
					<th scope='col'>Categoria</th>
					<th scope='col'>Compra</th>
					<th scope='col'>Venta</th>
					<th scope='col'>Proveedor</th>
					<th scope='col'>Factualiaz</th>
					<th scope='col'>Codigo</th>
					<th scope='col'>Varserie</th>
					<th scope='col'>Color</th>
					<th scope='col'>Dimension</th>
					<th scope='col'>Divisa</th>
					<th scope='col'>Minstock</th>
					<th scope='col'>Desactivado</th>
				
                </tr>
            </thead>
        	<tbody>
	<?php
		$sqllist="  SELECT * FROM productos"; 
    	$resultado = mysqli_query( $conexion, $sqllist);
                
   		while ($fila=mysqli_fetch_array($resultado)){
        	echo "<tr id='ventreg".$fila['id']."' class='bg-dark'>";
        	echo "  <td scope='row'><a type='butom' color='white' href='prueba.php?reg=".$fila['id']."&app=tablaproductos&subapp=editar#ventana'>Edit<a></td>";
    	   	echo "<td>".$fila['id']."</td>";
           	echo "<td>".$fila['nombre']."</td>";
			echo "<td>".$fila['descripcion']."</td>";
			echo "<td>".$fila['id_categoria']."</td>";
			echo "<td>".$fila['precio_compra']."</td>";
			echo "<td>".$fila['precio_venta']."</td>";
			echo "<td>".$fila['id_proveedor']."</td>";
			echo "<td>".$fila['fecha_actualizacion']."</td>";
			echo "<td>".$fila['codigo']."</td>";
			echo "<td>".$fila['id_variedad_serie']."</td>";
			echo "<td>".$fila['id_dimension']."</td>";
			echo "<td>".$fila['divisa']."</td>";
			echo "<td>".$fila['ministock']."</td>";
			echo "<td>".$fila['desactivado']."</td>";
    	}
    
?>
            </tbody>
        </table>
    </div> 
    


<?php        
}
?>