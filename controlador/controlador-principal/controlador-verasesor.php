<?php
@include '../../modelo/conexion.php';

if (isset($_POST['click_btn_ver'])) {
  $id = $_POST['user_id'];
    $sql = "SELECT 
    colaborador.nombre AS NombreColaborador,
    colaborador.apellido AS ApellidoColaborador,
    colaborador.celular AS Celular,
    colaborador.direccion AS Direccion,
    colaborador.sexo AS Sexo,
    colaborador.fechanacimiento AS FechaNacimiento,
    empresa.nombre AS NombreEmpresa,
    tematica.nombre AS NombreTematica,
    login.usuario AS Usuario,
    login.contraseña AS Contraseña
FROM 
    colaborador colaborador
    INNER JOIN empresa empresa ON colaborador.id_empresa = empresa.id_empresa
    INNER JOIN tematica tematica ON colaborador.id_tematica = tematica.id_tematica
    INNER JOIN login login ON colaborador.id_login = login.id_login where id_colaborador = '$id'";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        while ($fila = mysqli_fetch_array($resultado)) {
?>
            <div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                    <input type="hidden" id="id_colaborador" name="id_colaborador">
                                    <div class="nombre-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="nombre_asesor" class="col-form-label">Nombre:</label></div>
                                    <div class="input-nombreEnt" ;><input style="margin-bottom: 5px" class="form-control" type="text" id="asesor" name="asesor" value="<?php echo $fila['nombreColaborador'] ?>" readonly>
                                    </div>
                                    </div>
                            <div class="row">
                                <div class="col-12">
                                <div class="apellido-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="apellido_asesor" class="col-form-label">Apellido:</label></div>
                                    <div class="input-nombreEnt"><input style="margin-bottom: 5px" class="form-control" type="text" id="apellido_asesor" name="apellido_asesor" value="<?php echo $fila['apellido_asesor'] ?>" readonly>
                                    </div>
                                    </div>
                                </div>
                            </div><div class="row">
                                <div class="col-12">
                                <div class="celular-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="celular_asesor" class="col-form-label">Celular:</label></div>
                                    <div class="input-nombreEnt"><input style="margin-bottom: 5px" class="form-control" type="text" id="celular_asesor" name="celular_asesor" value="<?php echo $fila['celular-asesor'] ?>" readonly>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div><div class="row">
                                <div class="col-12">
                                <div class="direccion-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="direccion_asesor" class="col-form-label">Direccion:</label></div>
                                    <div class="input-nombreEnt"><input style="margin-bottom: 5px" class="form-control" type="text" id="direccion_asesor" name="direccion_asesor" value="<?php echo $fila['direccion-asesor'] ?>" readonly>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div><div class="row">
                                <div class="col-12">
                                <div class="sexo-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="sexo_asesor" class="col-form-label">Sexo:</label></div>
                                    <div class="input-nombreEnt"><input style="margin-bottom: 5px" class="form-control" type="text" id="sexo_asesor" name="sexo_asesor" value="<?php echo $fila['sexo-asesor'] ?>" readonly>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div><div class="row">
                                <div class="col-12">
                                <div class="sexo-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="sexo_asesor" class="col-form-label">Sexo:</label></div>
                                    <div class="input-nombreEnt"><input style="margin-bottom: 5px" class="form-control" type="text" id="sexo_asesor" name="sexo_asesor" value="<?php echo $fila['sexo-asesor'] ?>" readonly>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div><div class="row">
                                <div class="col-12">
                                <div class="fecnac-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="fecnac_asesor" class="col-form-label">Fecha de nacimiento:</label></div>
                                    <div class="input-nombreEnt"><input style="margin-bottom: 5px" class="form-control" type="text" id="fecnac_asesor" name="fecnac_asesor" value="<?php echo $fila['fecnac-asesor'] ?>" readonly>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div><div class="row">
                                <div class="col-12">
                                <div class="empresa-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="empresa_asesor" class="col-form-label">Empresa:</label></div>
                                    <div class="input-nombreEnt"><input style="margin-bottom: 5px" class="form-control" type="text" id="empresa_asesor" name="empresa_asesor" value="<?php echo $fila['empresa-asesor'] ?>" readonly>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div><div class="row">
                                <div class="col-12">
                                <div class="tematica-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="tematica_asesor" class="col-form-label">Tematica:</label></div>
                                    <div class="input-nombreEnt"><input style="margin-bottom: 5px" class="form-control" type="text" id="tematica_asesor" name="tematica_asesor" value="<?php echo $fila['tematica-asesor'] ?>" readonly>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div><div class="row">
                                <div class="col-12">
                                <div class="usuario-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="usuario_asesor" class="col-form-label">Usuario:</label></div>
                                    <div class="input-nombreEnt"><input style="margin-bottom: 5px" class="form-control" type="text" id="usuario_asesor" name="usuario_asesor" value="<?php echo $fila['usuario-asesor'] ?>" readonly>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div><div class="row">
                                <div class="col-12">
                                <div class="contraseña-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="contraseña_asesor" class="col-form-label">Contraseña:</label></div>
                                    <div class="input-nombreEnt"><input style="margin-bottom: 5px" class="form-control" type="text" id="contraseña_asesor" name="contraseña_asesor" value="<?php echo $fila['contraseña-asesor'] ?>" readonly>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>

<?php

        }
        
    }
}
?>