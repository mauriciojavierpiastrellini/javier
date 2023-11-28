<?php
 	include "coneccionlocal.php";
	$conexion = mysqli_connect( $servidor, $user, $password );
	$db = mysqli_select_db( $conexion, $basededatos );
	@$categoria=$_POST['categoria'];if($categoria==""){$categoria="0";}
	@$foto=$_POST['foto'];if($foto==""){$foto="0";}
	
	
	if ($subapp=="agregar"){
	?>
       	<h1 align='center'>Formulario</h1><br>
    	<h4 class="text-center">Pasame tus datos</h4>
    	<form action="prueba.php?app=tablacategorias&subapp=validaragregar" method="POST" >
        	<div class="row">
            	<div class="col-sm">
                	<div class="container-fluid">
                    	<div class="row">
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="categoria">Categoria:</label>
	                        </div>
	                        <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input  type="text" class="form-control" required placeholder="Categoria *" id="categoria" name="categoria">
	                        </div>
	                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
	                            <label for="foto">Foto:</label>
	                        </div>                        
                            <div class="col-sm-9 col-md-6 col-lg-8">
	                            <input  type="text" class="form-control" required placeholder="Foto *" id="foto" name="foto">
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
  
  

	<br><br><h3 align='center'><a href='prueba.php?app=tablacategorias'>volver</a></h3>

<?php 
}elseif ($subapp=="validaragregar"){       
	$sqllist="INSERT INTO categorias  (id, categoria, foto) VALUES (NULL,'".ucfirst($categoria)."',".$foto."')";
        echo $sqllist;
     $resultado = mysqli_query( $conexion, $sqllist );                          
 	?>
 	<div align='center'>
		<h5 >Registro agregado</h5><br><br>
		<button type="button" class="btn btn-primary" ><a href="prueba.php?app=tablacategorias">Volver</a></button>
	</div>
	<?php

}elseif($subapp=="editar"){
       $sqllist="SELECT * FROM categorias WHERE id=".$reg;
        $resultado = mysqli_query( $conexion, $sqllist);
        $fila=mysqli_fetch_array($resultado);
?>
        <br>
        <h4 class="text-center">Modifica cliente:<?php echo $reg;?></h4>
        <form action="prueba.php?reg=<?php echo $reg;?>&app=tablaclientes&subapp=validareditar" method="POST" >
            <div class="row">
                <div class="col-sm">
                    <div class="container-fluid">
                        <div class="row">
                            <div align='right' class='col-sm-3 col-md-6 col-lg-4'>
                                <label for='categoria'>Categoria:</label>
								<label for='foto'>Foto:</label>
                            </div>
                            <div class='col-sm-9 col-md-6 col-lg-8'>
                                <input type='text' class='form-control' value='<?php echo $fila['categoria'];?>' id='categoria' name='categoria'>
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
       
        $sqladd="UPDATE categorias SET categoria='".$categoria."' WHERE id=".$reg;
           // echo $sqladd;
        $resultado = mysqli_query( $conexion, $sqladd );                          
        ?>
    	<h5 style='text-align: center;background-color: rgb(223, 188, 100);'>
	    	<p>Registro modificado</p><br>	
	        <a class='btn btn-primary btn-sm' type='butom' color='white' href='prueba.php?app=tablacategorias'>Volver</a></th>
    	</h5>
       <?php


}else{ 
	?>
	<div align='center'>
		<h1 >Tabla de categorias</h1><br>
	</div>
	
 	<h5  style='text-align: center;background-color: rgb(223, 188, 100);'>
        <th scope='col'><a class='btn btn-primary btn-sm' type='butom' color='white' href='prueba.php?salir#ventana'>Volver</a></th>
    </h5>

	<div class="table-responsive">
        <table class="table table-sm table-dark">
            <thead>
                <tr class='bg-danger'>
                	<th scope='col'><a type='butom' color='white' href='prueba.php?app=tablaclientes&subapp=agregar#ventana'>Agregar</a></th>
                    <th scope='col'>Id</th>
                    <th scope='col'>Categoria</th>
					<th scope='col'>foto</th>
                </tr>
            </thead>
        	<tbody>
	<?php
		$sqllist="  SELECT * FROM clientes"; 
    	$resultado = mysqli_query( $conexion, $sqllist);
                
   		while ($fila=mysqli_fetch_array($resultado)){
        	echo "<tr id='ventreg".$fila['id']."' class='bg-dark'>";
        	echo "  <td scope='row'><a type='butom' color='white' href='prueba.php?reg=".$fila['id']."&app=tablaclientes&subapp=editar#ventana'>Edit<a></td>";
    	   	echo "<td>".$fila['id']."</td>";
           	echo "<td>".$fila['categoria']."</td>";
			echo "<td>".$fila['foto']."</td>";
    	}
    
?>
            </tbody>
        </table>
    </div> 
    


<?php        
}
?>