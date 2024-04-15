<!-- Modal -->
<form id="frmActualizarUsuario" method="POST" onsubmit="return actualizarUsuario()">
    <!-- El formulario se envía por método POST y llama a la función actualizarUsuario() cuando se envía. -->

    <div class="modal fade" id="modalActualizarUsuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!-- El modal Bootstrap -->
        <div class="modal-dialog modal-lg" role="document">
            <!-- Modal grande -->
            <div class="modal-content">
                <!-- Contenido del modal -->
                <div class="modal-header">
                    <!-- Encabezado del modal -->
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar usuario</h5>
                    <!-- Título del modal -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <!-- Botón para cerrar el modal -->
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Cuerpo del modal -->
                    <input type="text" id="idUsuario" name="idUsuario" hidden>
                    <!-- Campo oculto para el ID del usuario -->

                    <!-- Campos para ingresar la información del usuario -->
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="paternou">Apellido paterno</label>
                            <input type="text" class="form-control" id="paternou" name="paternou" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="maternou">Apellido materno</label>
                            <input type="text" class="form-control" id="maternou" name="maternou" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="nombreu">Nombre</label>
                            <input type="text" class="form-control" id="nombreu" name="nombreu" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="fechaNacimientou">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fechaNacimientou" name="fechaNacimientou">
                        </div>
                        <div class="col-sm-4">
                            <label for="sexou">Sexo</label>
                            <select class="form-control" id="sexou" name="sexou" required>
                                <option value=""></option>
                                <option value="F">Femenino</option>
                                <option value="M">Masculino</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="telefonou">Teléfono</label>
                            <input type="text" class="form-control" id="telefonou" name="telefonou">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="correou">Correo</label>
                            <input type="mail" class="form-control" id="correou" name="correou">
                        </div>
                        <div class="col-sm-4">
                            <label for="usuariou">Usuario</label>
                            <input type="text" class="form-control" id="usuariou" name="usuariou">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="idRolu">Rol de usuario</label>
                            <select name="idRolu" id="idRolu" class="form-control">
                                <!-- Selección del rol del usuario -->
                                <option value="1">Cliente</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="ubicacionu">Ubicación</label>
                            <textarea name="ubicacionu" id="ubicacionu" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- Pie del modal -->
                    <button class="btn btn-warning">Actualizar</button>
                    <!-- Botón de actualización -->
                </div>
            </div>
        </div>
    </div>
</form>
