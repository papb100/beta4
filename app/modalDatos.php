<!-- Modal -->
<div class="modal fade" id="modalDatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
          <div class="form-group">
              <label for="mClave">clave:</label>
              <input type="number" class="form-control " id="eClave" autofocus required maxlength="3">
          </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-4">
              <div class="form-group">
                  <label for="mNombre">Nombre:</label>
                  <input type="text" class="form-control " id="mNombre" autofocus required>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
              <div class="form-group">
                  <label for="mApPaterno">Apellido Paterno:</label>
                  <input type="text" class="form-control activo" id="mApPaterno" required>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
              <div class="form-group">
                  <label for="mApMaterno">Apellido Materno:</label>
                  <input type="text" class="form-control activo" id="mApMaterno" required>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
              <div class="form-group">
                  <label for="mFNac">Nacimiento:</label>
                  <input type="date" class="form-control activo" id="mfNac" required value="<?php echo $fecha ?>">
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
              <div class="form-group">
                  <label for="mEdad">Edad:</label>
                  <input type="text" class="form-control activo" id="mEdad" readonly value=0>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
              <div class="form-group">
                  <label for="mCorreo">Correo:</label>
                  <input type="text" class="form-control activo" id="mCorreo" required>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
              <div class="form-group">
                  <label for="mCurp">Curp:</label>
                  <input type="text" class="form-control activo" id="mCurp" required>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
              <div class="form-group">
                  <label for="mDomicilio">Domicilio:</label>
                  <input type="text" class="form-control activo" id="mDomicilio" required>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
              <div class="form-group">
                  <label for="mSexo">Sexo:</label>
                  <select id="mSexo" class="select2" style="width: 100%" >
                      <option value="M">Masculino</option>
                      <option value="F">Femenino</option>
                  </select>
              </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
              <div class="form-group">
                  <label for="mEcivil">Estado Civil:</label>
                  <select id="mEcivil" class="select2" style="width: 100%" >

                  </select>
              </div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>