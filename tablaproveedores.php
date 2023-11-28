<?php
include "coneccionlocal.php";
$conexion = mysqli_connect($servidor, $user, $password);
$db = mysqli_select_db($conexion, $basededatos);

// Asegúrate de que $subapp esté definida
$subapp = isset($_GET['subapp']) ? $_GET['subapp'] : '';

@$proveedor = $_POST['proveedor'];
if ($proveedor == "") {
    $proveedor = "0";
}
@$contacto = $_POST['contacto'];
if ($contacto == "") {
    $contacto = "0";
}
@$direccion = $_POST['direccion'];
if ($direccion == "") {
    $direccion = "0";
}
@$telefono = $_POST['telefono'];
if ($telefono == "") {
    $telefono = "0";
}

if ($subapp == "agregar") {
    ?>
    <h1 align='center'>Formulario</h1><br>
    <h4 class="text-center">Pasame tus datos</h4>
    <form action="prueba.php?app=tablaproveedores&subapp=validaragregar" method="POST">
        <!-- ... (resto del formulario) ... -->
    </form>

    <br><br><h3 align='center'><a href='prueba.php?app=tablaproveedores'>volver</a></h3>

    <?php
} elseif ($subapp == "validaragregar") {
    $sqllist = "INSERT INTO proveedores (proveedor, contacto, direccion, telefono) VALUES ('" . ucfirst($proveedor) . "','" . $contacto . "','" . $direccion . "','" . $telefono . "')";
    $resultado = mysqli_query($conexion, $sqllist);
    ?>
    <div align='center'>
        <h5>Registro agregado</h5><br><br>
        <button type="button" class="btn btn-primary"><a href="prueba.php?app=tablaproveedores">Volver</a></button>
    </div>
<?php
} elseif ($subapp == "editar") {
    $sqllist = "SELECT * FROM proveedores WHERE id=" . $reg;
    $resultado = mysqli_query($conexion, $sqllist);
    $fila = mysqli_fetch_array($resultado);
    ?>
    <br>
    <h4 class="text-center">Modifica proveedor:<?php echo $reg; ?></h4>
    <form action="prueba.php?reg=<?php echo $reg; ?>&app=tablaproveedores&subapp=validareditar" method="POST">
        <!-- ... (resto del formulario de edición) ... -->
    </form>
    <?php
} elseif ($subapp == "validareditar") {
    // Corregir los nombres de las variables en el UPDATE
    $sqladd = "UPDATE proveedores SET proveedor='" . $proveedor . "', contacto='" . $contacto . "', direccion='" . $direccion . "', telefono='" . $telefono . "' WHERE id=" . $reg;
    $resultado = mysqli_query($conexion, $sqladd);
    ?>
    <h5 style='text-align: center;background-color: rgb(223, 188, 100);'>
        <p>Registro modificado</p><br>
        <a class='btn btn-primary btn-sm' type='button' href='prueba.php?app=tablaproveedores'>Volver</a></th>
    </h5>
<?php
} else {
    // Resto de tu código
}
?>
