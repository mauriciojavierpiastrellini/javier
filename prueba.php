<!DOCTYPE html>
<html lang="Spanish">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta charset="utf-8">
  <!--meta http-equiv="X-UA-Compatible" content="IE=edge">-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prueba</title>
  <link rel='shortcut icon' href='/javier/favicon.ico'/>
 
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>

<body  >

<?php
	$provincias[0]="no select";
    $provincias[1]="no sabe";
   	$provincias[2]="Buenos Aires";
	$provincias[3]="Ciudad Autonoma de Buenos Aires";
	$provincias[4]="Catamarca";
	$provincias[5]="Chaco";
	$provincias[6]="Cordoba";
	$provincias[7]="Corrientes";
	$provincias[8]="Entre Rios";
	$provincias[9]="Formosa";
	$provincias[10]="Jujuy";
	$provincias[11]="La Pampa";
	$provincias[12]="La Rioja";
	$provincias[13]="Mendoza";
	$provincias[14]="Misiones";
	$provincias[15]="Neuquen";
	$provincias[16]="Rio Negro";
	$provincias[17]="Salta";
	$provincias[18]="San Juan";
	$provincias[19]="San Luis";
	$provincias[20]="Santa Cruz";
	$provincias[21]="Santa Fe";
	$provincias[22]="Santiago del Estero";
	$provincias[23]="Tierra del Fuego, Antartida e Islas del Atlantico Sur";
	$provincias[24]="Tucuman"; 


	@$app=$_GET["app"];
	@$subapp=$_GET["subapp"];
	@$reg=$_GET["reg"];
	if ($app=="tablas"){include "tablas.php";
	}elseif ($app=="tablaclientes"){include "tablaclientes.php";
	}elseif ($app=="tablaproductos"){include "tablaproductos.php";
	}elseif ($app=="tablaproveedores"){include "tablaproveedores.php";
    }elseif ($app=="tablacolores"){include "tablacolores.php";
    }elseif ($app=="tabladimensiones"){include "tabladimensiones.php";
    }elseif ($app=="tablamarcas"){include "tablamarcas.php";
	}elseif ($app=="otra"){
		echo "<h1 align='center'>otra</h1>";
		echo "<br><br><h3 align='center'><a href='prueba.php'>volver</a></h3>";
	}elseif ($app=="salir"){
		echo "<h1 align='center'>hasta luego</h1>";
		echo "<br><br><h3 align='center'><a href='prueba.php'>volver</a></h3>";
	}else{	
?>
		<div align='center'>
			<table style="background-color: rgb(180, 200, 207); width: 90%; text-align: left; margin-left: auto; margin-right: auto;" cellspacing="2" cellpadding="15" border="1">
        		<tbody>
    	    		<tr>
    					<td style="text-align: left;">
    				        <div style="text-align: center;">
                    		    <h3>Menu</h3>
                        		<a style="margin:3px;" class="btn btn-sm btn-primary" href="prueba.php?app=tablas" role="button">Tablas</a>
                        		<a style="margin:3px;" class="btn btn-sm btn-primary" href="prueba.php?app=otra" role="button">Hacer otra cosa</a>
                        		<a style="margin:3px;" class="btn btn-sm btn-primary" href="prueba.php?app=salir" role="button">Salir</a>
                    		</div>
                   			<br>
                		</td>
    				</tr>
    			</tbody>
    		</table>


		</div>
<?php

}

?>


  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  
</body>

</html>