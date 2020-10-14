<main class="login">
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
        <div class="login__container fade">
            <img src="<?php echo base_url().'/assets/img/admin/athomic_logo.png'; ?>" alt="" class="login__container--img">
            <form action="" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña" id="exampleInputPassword1">
                </div>
                <div class="text-center form__buttons">
                    <a href="/">Regresar</a>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
</main>