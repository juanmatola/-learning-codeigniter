
        </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-dark py-3  text-light">
            <div class="container">
                <div class="row pb-3 justify-content-around align-items-center">
                    <div class="col-12 col-md-4 text-center text-muted">
                        <p class="strong">Soporte:</p>
                        <p class="font-italic">soporte@athomic.com.ar <br>+54 9 341 6 189654</p>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="http://athomic.com.ar"><img src="<?php echo base_url().'/assets/img/admin/athomic_logo.png';?>" class="img-fluid w-50" alt="logo athomic"></a>
                    </div>
                </div>
            </div>
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; athomic 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    <!-- Scroll to Top Button-->
    <a class="btn btn-outline-secondary rounded scrolltop_btn" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Post add Modal -->

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Nuevo Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url().'/admin/savepost'; ?>" method="post" id="newpostform" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Un título para tu post.." required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Breve descripción de tu post.."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Imagen</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success" form="newpostform">Subir</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Update Post Modal -->

    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Editar Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url().'/admin/savepost'; ?>" method="post" id="updatepostform" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Un título para tu post.." required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Breve descripción de tu post.."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Imagen</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success" form="updatepostform">Guardar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Delete Post Modal -->

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Está seguro que quiere eliminar este post?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Selecciona "Eliminar" si estás listo para deshacerte del post.</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-outline-danger" id="deleteModalButton" href="#">Eliminar</a>
            </div>
        </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Listo para irte?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Selecciona "Cerrar Sesión" si estás listo para cerrar sesion.</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-outline-success" href="<?php echo base_url().'/admin/logout';?>">Cerrar Sesión</a>
            </div>
        </div>
        </div>
    </div>

    <!-- Info Modal-->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="infoModalLabel">Listo para irte?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body" id="infoModalBody"><!-- Server Response Info by js --></div>
            <div class="modal-footer">
            <button class="btn btn-outline-success" type="button" data-dismiss="modal">Ok!</button>
            </div>
        </div>
        </div>
    </div>

    <!-- JQuery -->
    <script src="<?php echo base_url().'/assets/libs/jquery-3.5.1/jquery.min.js' ?>"></script>
    <!-- Bootstrap JS + Popper -->
    <script src="<?php echo base_url().'/assets/libs/bootstrap-4.5.3/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- Modals JS -->
    <script src="<?php echo base_url().'/assets/js/admin/panel/modals.js' ?>"></script>
</body>
</html>