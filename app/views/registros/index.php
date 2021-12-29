<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Control de Registros</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Nuevo Registro</a>
</div>
<div class="card mb-4">

    <div class="card-body">
        <form action="" method="post">

            <div class="row">
                <div class="col-md-4">
                    <label for="contact-type">Tipo de Contacto</label>
                    <select name="" id="contact-type" name="contact-type" class="form-control">
                        <option value="0">Seleccione un tipo de contacto</option>
                        <option value="">Llamada Entrante</option>
                        <option value="">Llamada Saliente</option>
                        <option value="">Web WhatsApp</option>
                        <option value="">Web Telegram</option>
                        <option value="">Web Facebook</option>
                        <option value="">Web Correo</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="question-tipe">Tipo de Consulta</label>
                    <select name="" id="question-tipe" name="question-tipe" class="form-control">
                        <option value="0">Seleccione un tipo de consulta</option>
                        <option value="">Solicitu de Cita Medica</option>
                        <option value="">Confirmación de Cita Medica</option>
                        <option value="">Cancelación de Cita Medica</option>
                        <option value="">Disponibilidad de Medicamentos</option>Salary
                        <option value="">SIPE</option>
                        <option value="">Consultas Generales</option>
                        <option value="">Banco de Sangre</option>
                        <option value="">Red Estrella</option>
                        <option value="">Informacion COVID-19</option>
                        <option value="">Casos 311</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="telnumero">Numero de telefono</label>
                    <input type="tel" name="telnumero" id="telnumero" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="notes">Comentarios</label>
                    <textarea name="notes" id="notes" class="form-control"></textarea>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4 align-self-center">
                    <button type="button" class="btn btn-primary btn-block"><i class="far fa-paper-plane"></i> Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Creación</th>
                        <th>Usuario</th>
                        <th>Contacto</th>
                        <th>Tipo Contacto</th>
                        <th>Motivo Contacto</th>
                        <th>Comentarios</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<!-- Basic Card Example -->