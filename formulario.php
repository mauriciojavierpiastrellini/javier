<h1 align='center'>Formulario</h1>
<br>
<h4 class="text-center">Pasame tus datos</h4>
<form >
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
                        <input type="text" class="form-control" placeholder="Apellidos *" id="apellido" name="apellido">
                    </div>

                    <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                        <label for="genero">Género:</label>
                    </div>
                    <div class='col-sm-9 col-md-6 col-lg-8'>
                        <select class='form-control' id='genero' name='genero'>
                   
                            <option value="0">Mujer</option>";
                            <option value="1">Varon</option>";
                            <option value="2">Otro</option>";
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
                    <div class="col-sm-9 col-md-6 col-lg-8">
                    <select class='form-control' id='provincia' name='provincia'>
                                   
                        <option value="0">Buenos Aires</option>";
                        <option value="1">Ciudad Autonoma de Buenos Aires</option>";
                        <option value="2">Catamarca</option>";
                        <option value="3">Chaco</option>";
                        <option value="4">Chubut</option>";
                        <option value="5">Cordoba</option>";
                        <option value="6">Corrientes</option>";
                        <option selected value="7">Entre Rios</option>";
                        <option value="8">Formosa</option>";
                        <option value="9">Jujuy</option>";
                        <option value="10">La Pampa</option>";
                        <option value="11">La Rioja</option>";
                        <option value="12">Mendoza</option>";
                        <option value="13">Misiones</option>";
                        <option value="14">Neuquen</option>";
                        <option value="15">Rio Negro</option>";
                        <option value="16">Salta</option>";
                        <option value="17">San Juan</option>";
                        <option value="18">San Luis</option>";
                        <option value="19">Santa Cruz</option>";
                        <option value="20">Santa fe</option>";
                        <option value="21">Santiago del Estero</option>";
                        <option value="22">Tierra del Fuego, Antartida e Islas del Atlantico Sur</option>";
                        <option value="23">Tucuman</option>";
                    </select>
            </div>
            <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                <label for="cpostal">cpostal:</label>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-8">
                <input type="text" class="form-control" placeholder="Cpostal*" id="cpostal" name="cpostal">
            </div>
            <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                <label for="telefono">Telefono:</label>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-8">
                <input type="tel" class="form-control" placeholder="telefono*" id="telefono" name="telefono">
            </div>
            <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                <label for="email">Correo Electronico:</label>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-8">
                <input type="email" class="form-control" placeholder="ingrese mail *" id="email" name="mail">
            </div>
            <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                <label for="dni">DNI:</label>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-8">
                <input type="text" class="form-control" placeholder="DNI    *" id="dni" name="dni">
                        </div>
                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                            <label for="usuario">Usuario:</label>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-8">
                            <input type="text" class="form-control" placeholder="Usuario*" id="usuario" name="usuario">
                        </div>
                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                            <label for="contracena">Contracena:</label>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-8">
                            <input type="text" class="form-control" placeholder="Contracena*" id="contracena" name="contracena">
                        </div>
                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                            <label for="banco">Banco:</label>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-8">
                            <input type="text" class="form-control" placeholder="Banco*" id="banco" name="banco">
                        </div>
                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                            <label for="cbu">CBU:</label>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-8">
                            <input type="namber" class="form-control" placeholder="CBU*" id="cbu" name="cbu">
                        </div>
            
                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                            <label for="ccc">Ccc:</label>
                        </div>
                        <div class='col-sm-9 col-md-6 col-lg-8'>
                            <select class='form-control' id='cuentacorriente' name='cuentacorriente'>
                                   
                                <option value="0">No</option>";
                                <option value="1">Si</option>";
                            </select>  
                        </div>
            
                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                            <label for="foto">Foto:</label>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-8">
                            <input type="url" class="form-control" placeholder="Foto*" id="foto" name="foto">
                        </div>
                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                            <label for="descripcion">descripcion:</label>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-8">
                            <input type="text" class="form-control" placeholder="Descripcion*" id="descripcion" name="descripcion">
                        </div>
                        <div align="right" class="col-sm-3 col-md-6 col-lg-4">
                            <label for="saldo">Saldo:</label>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-8">
                            <input type="namber" class="form-control" id="saldo" name="saldo">
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
    <form action="prueba.php?app=tablaclientes&subapp=validaragregar" method="POST" >
  

<br><br><h3 align='center'><a href='prueba.php'>volver</a></h3>