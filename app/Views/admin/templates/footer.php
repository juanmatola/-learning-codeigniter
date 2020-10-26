
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-light py-3">
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Listo para irte?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Selecciona "Cerrar Sesión" si estás listo para cerrar sesion.</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url().'/admin/logout';?>">Cerrar Sesión</a>
            </div>
        </div>
        </div>
    </div>

    
    <!-- JQuery -->
    <script src="<?php echo base_url().'/assets/libs/jquery-3.5.1/jquery.min.js' ?>"></script>
    <!-- Bootstrap JS + Popper -->
    <script src="<?php echo base_url().'/assets/libs/bootstrap-4.5.3/js/bootstrap.bundle.min.js' ?>"></script>
</body>
</html>