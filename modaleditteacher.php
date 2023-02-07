<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar datos del  profesor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="registerteacher.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class=" col-12 form-group mb-3">
                            <label>Nombre</label>
                            <input type="text" required class="form-control" name="name" placeholder="Nombre">
                        </div>
                        <div class="col-12 form-group mb-3">
                            <label>Email</label>
                            <input type="email" required class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Número de teléfono</label>
                        <input type="number" required class="form-control" name="phone" placeholder="Número de teléfono">
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" required class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit" name="registrar"> Registrar</button>
                    </div>
                </form>                
        </div>
    </div>
</div>