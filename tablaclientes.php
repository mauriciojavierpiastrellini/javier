<?php
 	include "coneccionlocal.php";
	$conexion = mysqli_connect( $servidor, $user, $password );
	$db = mysqli_select_db( $conexion, $basededatos );
	@$apellido=$_POST['apellido'];if($apellido==""){$apellido="0";}
	@$nombres=$_POST['nombres'];if($nombres==""){$nombres="0";}
	@$genero=$_POST['genero'];if($genero==""){$genero="0";}
	@$fnacimiento=$_POST['fnacimiento'];if($fnacimiento==""){$fnacimiento="0";}
	@$domicilio=$_POST['domicilio'];if($domicilio==""){$domicilio="0";}
	@$localidad=$_POST['localidad'];if($localidad==""){$localidad="0";}
	@$provincia=$_POST['provincia'];if($provincia==""){$provincia="0";}
	@$cpostal=$_POST['cpostal'];if($cpostal==""){$cpostal="0";}
	@$telefono=$_POST['telefono'];if($telefono==""){$telefono="0";}
	@$mail=$_POST['mail'];if($mail==""){$mail="0";}
	@$dni=$_POST['dni'];if($dni==""){$dni="0";}
	@$usuario=$_POST['usuario'];if($usuario==""){$usuario="0";}
	@$contrasena=$_POST['contrasena'];if($contrasena==""){$contrasena="0";}
	@$banco=$_POST['banco'];if($banco==""){$banco="0";}
	@$cbu=$_POST['cbu'];if($cbu==""){$cbu="0";}
	@$ccc=$_POST['ccc'];if($ccc==""){$ccc="0";}
	@$foto=$_POST['foto'];if($foto==""){$foto="0";}
	@$saldo=$_POST['saldo'];if($saldo==""){$saldo="0";}
	@$descripcion=$_POST['descripcion'];if($descripcion==""){$descripcion="0";}
	if ($subapp=='elim'){
        $sqlelim = "DELETE FROM clientes where id=".$reg;
        $resultado = mysqli_query( $conexion, $sqlelim );
       
    }
    if ($subapp=="agregar"){
	?>
       	<h1 align='center'>Formulario</h1><br>
    	<h4 class="text-center">Pasame tus datos</h4>
    	<form action="prueba.php?app=tablaclientes&subapp=validaragregar" method="POST" >
        	<div class="row">
            	<div class="col-sm">
                	<div class="container-fluid">
                    	<div class="row">
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="nombres">Nombres:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input  type="text" class="form-control" required placeholder="Nombres *" id="nombres" name="nombres">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="apellido">Apellidos:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input type="text" class="form-control" required placeholder="Apellidos *" id="apellido" name="apellido">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="genero">Genero:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            
	                            <select class='form-control' id='genero' name='genero'>
	                                   
	                                <option value="0">Otro</option>
	                                <option value="1">Hombre</option>
									<option value="2">Mujer</option>
	                            </select>  


	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="fnacimiento">Fnacimiento:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input type="date" class="form-control" id="fnacimiento" name="fnacimiento">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="domicilio">Domicilio:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input type="text" class="form-control" placeholder="Calle y número" id="domicilio" name="domicilio">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="localidad">localidad:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input type="text" class="form-control"  id="lacalidad" name="localidad">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="provincia">Provincia:</label>
	                        </div>
							<div class='col-sm-9 col-md-6 col-lg-8'>
	                            <select class='form-control' id='provincia' name='provincia'>
	                            <?php 
	                            	
	                            	for ($i=1;$i<=24;$i++){
	                            		echo "<option value=".$i.">".$provincias[$i]."</option>";	

       								}
       							?>
	                           
	                            </select>  
	                        </div>
	                      
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="cpostal">cpostal:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input type="text" class="form-control" placeholder="Cpostal*" id="cpostal" name="cpostal">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="telefono">Teléfono:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input type="tel" class="form-control"  required placeholder="telefono*" id="telefono" name="telefono">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="email">Correo Electrónico:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input type="email" class="form-control" required placeholder="ingrese mail *" id="email" name="mail">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="dni">DNI:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input type="text" class="form-control" placeholder="DNI " id="dni" name="dni">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="usuario">Usuario:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input type="text" class="form-control" required placeholder="Usuario*" id="usuario" name="usuario">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="contrasena">Contraseña:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input type="text" class="form-control"  required placeholder="Contracena*" id="contrasena" name="contrasena">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="banco">Banco:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input type="text" class="form-control" placeholder="Banco" id="banco" name="banco">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="cbu">CBU:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input type="namber" class="form-control" placeholder="CBU" id="cbu" name="cbu">
	                        </div>
							<div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="ccc">Ccc:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            
	                            <select class='form-control' id='ccc' name='ccc'>
	                                   
	                                <option value="0">No</option>
	                                <option value="1">Si</option>
	                            </select>  


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
  
  

	<br><br><h3 align='center'><a href='prueba.php?app=tablaclientes'>volver</a></h3>

<?php 
}elseif ($subapp=="validaragregar"){       
	$sqllist="INSERT INTO clientes  (id, apellido, nombres, genero, fnacimiento, domicilio, localidad, provincia, cpostal, telefono, mail, dni, usuario, contrasena, banco, cbu, ccc) VALUES (NULL,'".ucfirst($apellido)."','".ucfirst($nombres)."',".$genero.",'".$fnacimiento."','".$domicilio."','".$localidad."',".$provincia.",'".$cpostal."','".$telefono."','".$mail."','".$dni."','".$usuario."','".$contrasena."','".$banco."','".$cbu."',".$ccc.")";
        echo $sqllist;
     $resultado = mysqli_query( $conexion, $sqllist );                          
 	?>
 	<div align='center'>
		<h5 >Registro agregado</h5><br><br>
		<button type="button" class="btn btn-primary" ><a href="prueba.php?app=tablaclientes">Volver</a></button>
	</div>
	<?php

}elseif($subapp=="editar"){ 
	$sqllist="SELECT * FROM clientes WHERE id=".$reg; $resultado = mysqli_query( $conexion, $sqllist); 
	$fila=mysqli_fetch_array($resultado); ?> 
	<br> 
	<h4 class="text-center">Modifica cliente:<?php echo $reg;?></h4> 
	<form action="prueba.php?reg=<?php echo $reg;?>&app=tablaclientes&subapp=validareditar" method="POST" >
		<div class="row"> 
			<div class="col-sm"> 
				<div class="container-fluid"> 
					<div class="row"> 
					
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'> 
							<label for='apellido'>Apellido:</label> 
						</div> 
						<div class='col-sm-9 col-md-6 col-lg-8'>
							<input type='text' class='form-control' value='<?php echo $fila['apellido'];?>' id='apellido' name='apellido'> 
						</div> 
						
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'> 
							<label for='nombres'>Nombres:</label>
						</div> 
						<div class='col-sm-9 col-md-6 col-lg-8'> 
							<input type='text' class='form-control' value='<?php echo $fila['nombres'];?>' id='nombres' name='nombres'> 
						</div> 

						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
							<label for='genero'>Genero:</label> 
						</div> 

						<div class='col-sm-9 col-md-6 col-lg-8'> 
							<select class='form-control' id='genero' name='genero'> 
								<option <?php if ($fila['genero']==0){ echo "selected";}?> value="0">Otro</option> 
								<option <?php if ($fila['genero']==1){ echo "selected";}?> value="1">Hombre</option> 
								<option <?php if ($fila['genero']==2){ echo "selected";}?> value="2">Mujer</option> 
							</select>  
						</div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='fnacimiento'>Fnacimiento:</label>
	                    </div>
						<div class='col-sm-9 col-md-6 col-lg-8'>
	                    	<input type='text' class='form-control' value='<?php echo $fila['fnacimiento'];?>' id='fnacimiento' name='fnacimiento'>
						</div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='domicilio'>Domicilio:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                        <input type='text' class='form-control' value='<?php echo $fila['domicilio'];?>' id='domicilio' name='domicilio'>
	                    </div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='localidad'>Localidad:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                        <input type='text' class='form-control' value='<?php echo $fila['localidad'];?>' id='localidad' name='localidad'>
	                    </div>
								
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='provincia'>Provincia:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                       <select class='form-control' id='provincia' name='provincia'>
									<?php for ($i=1;$i<=24;$i++){?>
										<option <?php if ($fila['provincia']==$i){echo "selected";}?> value="<?php echo $i;?>"><?php echo $provincias[$i];?></option>
									<?php }?>
	                        </select>
	                    </div>
								
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='cpostal'>Cpostal:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                        <input type='text' class='form-control' value='<?php echo $fila['cpostal'];?>' id='cpostal' name='cpostal'>
	                    </div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='telefono'>Telefono:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                    	<input type='text' class='form-control' value='<?php echo $fila['telefono'];?>' id='telefono' name='telefono'>
	                    </div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='mail'>Mail:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                        <input type='text' class='form-control' value='<?php echo $fila['mail'];?>' id='mail' name='mail'>
	                    </div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='dni'>DNI:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                    	<input type='text' class='form-control' value='<?php echo $fila['dni'];?>' id='dni' name='dni'>
	                    </div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='usuario'>Usuario:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                        <input type='text' class='form-control' value='<?php echo $fila['usuario'];?>' id='usuario' name='usuario'>
	                    </div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='contrasena'>Contraseña:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                        <input type='text' class='form-control' value='<?php echo $fila['contrasena'];?>' id='contrasena' name='contrasena'>
	                    </div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='banco'>Banco:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                        <input type='text' class='form-control' value='<?php echo $fila['banco'];?>' id='banco' name='banco'>
	                    </div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='cbu'>CBU:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                        <input type='text' class='form-control' value='<?php echo $fila['cbu'];?>' id='cbu' name='cbu'>
	                    </div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='ccc'>CCC:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'> 
							<select class='form-control' id='ccc' name='ccc'> 
								<option <?php if ($fila['ccc']==0){ echo "selected";}?> value="0">No</option> 
								<option <?php if ($fila['ccc']==1){ echo "selected";}?> value="1">Si</option> 
							</select>  
						</div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='foto'>foto:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                        <input type='text' class='form-control' value='<?php echo $fila['foto'];?>' id='foto' name='foto'>
	                    </div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='descripcion'>Descripción:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                    	  <textarea type='msg'  rows='3' class='form-control' id='descripcion' name='descripcion'></textarea>
	                        

	                    </div>
						<div align='right' class='col-sm-3 col-md-6 col-lg-4'>
	                        <label for='saldo'>Saldo:</label>
	                    </div>
	                    <div class='col-sm-9 col-md-6 col-lg-8'>
	                        <input type='text' class='form-control' value='<?php echo $fila['saldo'];?>' id='saldo' name='saldo'>
	                    </div>
						<div class='col-sm-9 col-md-6 col-lg-8'> 
							<select class='form-control' id='ccc' name='ccc'> 
								<option <?php if ($fila['ccc']==0){ echo "selected";}?> value="0">No</option> 
								<option <?php if ($fila['ccc']==1){ echo "selected";}?> value="1">Si</option>
							</select>  
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
       
        $sqlupd="UPDATE clientes SET 
        	apellido='".$apellido."',
        	nombres='".$nombres."',
        	genero=".$genero.",
        	fnacimiento='".$fnacimiento."',
        	domicilio='".$domicilio."',
        	localidad='".$localidad."',
        	provincia=".$provincia.",
        	cpostal='".$cpostal."',
        	telefono='".$telefono."',
        	mail='".$mail."',
        	dni='".$dni."',
        	usuario='".$usuario."',
        	contrasena='".$contrasena."',
        	banco='".$banco."',
        	cbu='".$cbu."',
        	ccc=".$ccc.",
        	foto='".$foto."',
        	descripcion='".$descripcion."',
        	saldo =".$saldo.",
			ccc=".$ccc."
        WHERE id=".$reg;
        echo $sqlupd;
        $resultado = mysqli_query( $conexion, $sqlupd );                          
        ?>
    	<h5 style='text-align: center;background-color: rgb(223, 188, 100);'>
	    	<p>Registro modificado</p><br>	
	        <a class='btn btn-primary btn-sm' type='butom' color='white' href='prueba.php?app=tablaclientes'>Volver</a></th>
    	</h5>
    <?php


	}else{ 
	?>
	<div align='center'>
		<h1 >Tabla de clientes</h1><br>
	</div>
	
 	<h5  style='text-align: center;background-color: rgb(223, 188, 100);'>
        <th scope='col'><a class='btn btn-primary btn-sm' type='butom' color='white' href='prueba.php?salir#ventana'>Volver</a></th>
    </h5>

	<div class="table-responsive">
        <table class="table table-sm table-dark">
            <thead>
                <tr class='bg-danger'>

                	<th scope='col'><a type='butom' color='white' href='prueba.php?app=tablaclientes&subapp=agregar#ventana'>Agregar</a></th>
                	<th scope='col'>Elim</th>
                    <th scope='col'>Id</th>
                     <th scope='col'>Apellido</th>
					 <th scope='col'>Nombres</th>
					 <th scope='col'>Genero</th>
					 <th scope='col'>Fnacimiento</th>
					 <th scope='col'>Domicilio</th>
					 <th scope='col'>Localidad</th>
					 <th scope='col'>Provincia</th>
					 <th scope='col'>Cpostal</th>
					 <th scope='col'>Telefono</th>
					 <th scope='col'>Mail</th>
					 <th scope='col'>Dni</th>
					 <th scope='col'>Usuario</th>
					 <th scope='col'>Contraseña</th>
					 <th scope='col'>Banco</th>
					 <th scope='col'>Cbu</th>
                </tr>
            </thead>
        	<tbody>
	<?php
		$sqllist="  SELECT * FROM clientes"; 
    	$resultado = mysqli_query( $conexion, $sqllist);
                
   		while ($fila=mysqli_fetch_array($resultado)){
   			$anterior=$fila['id']-1;
        	echo "<tr id='ventreg".$fila['id']."' class='bg-dark'>";
        	echo "  <td scope='row'><a type='butom' color='white' href='prueba.php?reg=".$fila['id']."&app=tablaclientes&subapp=editar#ventana'>Edit<a></td>";
        	  echo "  <td scope='row'><a type='butom' color='white' href='prueba.php?reg=".$fila['id']."&app=tablaclientes&subapp=elim#ventana".$anterior."'>Elim<a></td>";
    	   	echo "<td>".$fila['id']."</td>";
           	echo "<td>".$fila['apellido']."</td>";
			echo "<td>".$fila['nombres']."</td>";
            
            if ($fila['genero']==1){$sino="Hombre";
        		}elseif($fila['genero']==2){$sino="Mujer";
        		}else{$sino="otro";
        	}
            echo "<td>".$sino."</td>";
			
			echo "<td>".$fila['fnacimiento']."</td>";
			echo "<td>".$fila['domicilio']."</td>";
			echo "<td>".$fila['localidad']."</td>";
			


			echo "<td>".$provincias[$fila['provincia']]."</td>";
			echo "<td>".$fila['cpostal']."</td>";
			echo "<td>".$fila['telefono']."</td>";
			echo "<td>".$fila['mail']."</td>";
			echo "<td>".$fila['dni']."</td>";
			echo "<td>".$fila['usuario']."</td>";
			echo "<td>".$fila['contrasena']."</td>";
			echo "<td>".$fila['banco']."</td>";
			echo "<td>".$fila['cbu']."</td>";
    	}
    
?>
            </tbody>
        </table>
    </div> 
    


<?php        
}
?>