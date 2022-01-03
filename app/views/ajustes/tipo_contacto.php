<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tipo de Contactos</h1>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Contacto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body">
                <form action="action">
                    <div class="form-group">
                        <label for="id_contacto">Index</label>
                        <input type="text" class="form-control" id="id_contacto">
                    </div>
                    <div class="form-group">
                        <label for="contacto">Tipo de contacto</label>
                        <input type="text" class="form-control" id="contacto">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Procesar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>