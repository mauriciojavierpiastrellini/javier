<?php
 	include "coneccionlocal.php";
	$conexion = mysqli_connect( $servidor, $user, $password );
	$db = mysqli_select_db( $conexion, $basededatos );
	@$dimension=$_POST['dimension'];if($dimension==""){$dimension="0";}
	if ($subapp=='elim'){
        $sqlelim = "DELETE FROM dimensiones where id=".$reg;
        $resultado = mysqli_query( $conexion, $sqlelim );
       
    }
    if ($subapp=="agregar"){
?>
		<h1 align='center'>Formulario</h1><br>
		<h4 class="text-center">Dimensiones</h4>
		<form action="prueba.php?app=tabladimensiones&subapp=validaragregar" method="POST" >
			<div class="row">
				<div class="col-sm">
					<div class="container-fluid">
						<div class="row">
							<div align="right" class="col-sm-3 col-md-6 col-lg-4">
								<label for="dimension">Dimension:</label>
							</div>
							<div class="col-sm-9 col-md-6 col-lg-8">
								<input  type="text" class="form-control" required placeholder="dimension *" id="dimension" name="dimension">
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
	  
	  
	
		<br><br><h3 align='center'><a href='prueba.php?app=tabladimensiones'>volver</a></h3>
	
<?php 
	}elseif ($subapp=="validaragregar"){       
		$sqllist="INSERT INTO dimensiones  (id, dimension) VALUES (NULL,'".ucfirst($dimension)."')";
			echo $sqllist;
		 $resultado = mysqli_query( $conexion, $sqllist );                          
?>
		 <div align='center'>
			<h5 >Registro agregado</h5><br><br>
			<button type="button" class="btn btn-primary" ><a href="prueba.php?app=tabladimensiones">Volver</a></button>
		</div>
<?php
	}elseif($subapp=="editar"){ 
		$sqllist="SELECT * FROM dimensiones WHERE id=".$reg; $resultado = mysqli_query( $conexion, $sqllist); 
		$fila=mysqli_fetch_array($resultado); ?> 
		<br> 
		<h4 class="text-center">Modifica dimension:<?php echo $reg;?></h4> 
		<form action="prueba.php?reg=<?php echo $reg;?>&app=tabladimensiones&subapp=validareditar" method="POST" >
			<div class="row"> 
				<div class="col-sm"> 
					<div class="container-fluid"> 
						<div class="row"> 
					
							<div align='right' class='col-sm-3 col-md-6 col-lg-4'> 
								<label for='dimension'>dimension:</label> 
							</div> 
							<div class='col-sm-9 col-md-6 col-lg-8'>
								<input type='text' class='form-control' value='<?php echo $fila['dimension'];?>' id='dimension' name='dimension'> 
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
	}elseif ($subapp == "validareditar") {
    	$sqlupd = "UPDATE dimensiones SET dimension='" . $dimension . "' WHERE id=" . $reg;
    	echo $sqlupd;
    	$resultado = mysqli_query($conexion, $sqlupd);
?>
	    <h5 style='text-align: center; background-dimension: rgb(223, 188, 100);'>
	        <p>Registro modificado</p><br>
	        <a class='btn btn-primary btn-sm' type='butom' dimension='white' href='prueba.php?app=tabladimensiones'>Volver</a></th>
	    </h5>
<?php
	}else{ 
?>
		<div align='center'>
			<h1 >Tabla de dimensiones</h1><br>
		</div>
	
	 	<h5  style='text-align: center;background-dimension: rgb(223, 188, 100);'>
	        <th scope='col'><a class='btn btn-primary btn-sm' type='butom' dimension='white' href='prueba.php?salir#ventana'>Volver</a></th>
	    </h5>

		<div class="table-responsive">
        	<table class="table table-sm table-dark">
            	<thead>
                	<tr class='bg-danger'>

                		<th scope='col'><a type='butom' dimension='white' href='prueba.php?app=tabladimensiones&subapp=agregar#ventana'>Agregar</a></th>
                		<th scope='col'>Elim</th>
                    	<th scope='col'>Id</th>
                     	<th scope='col'>dimension</th>
                	</tr>
            	</thead>
        		<tbody>
	<?php
				$sqllist="SELECT * FROM dimensiones"; 
    			$resultado = mysqli_query( $conexion, $sqllist);
                
			   		while ($fila=mysqli_fetch_array($resultado)){
			   			$anterior=$fila['id']-1;
			        	echo "<tr id='ventreg".$fila['id']."' class='bg-dark'>";
			        	echo "  <td scope='row'><a type='butom' dimension='white' href='prueba.php?reg=".$fila['id']."&app=tabladimensiones&subapp=editar#ventana'>Edit<a></td>";
			        	echo "  <td scope='row'><a type='butom' dimension='white' href='prueba.php?reg=".$fila['id']."&app=tabladimensiones&subapp=elim#ventana".$anterior."'>Elim<a></td>";
			    	   	echo "<td>".$fila['id']."</td>";
			           	echo "<td>".$fila['dimension']."</td>";
					}
    
?>
            	</tbody>
        	</table>
    	</div> 
    
<?php        
	}
?>