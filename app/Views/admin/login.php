<main class="login">
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
        <div class="login__container">
            <img src="<?php echo base_url().'/assets/img/admin/athomic_logo.png'; ?>" alt="" class="login__container--img">
            <form>
                <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                    <input type="email" class="form-control" placeholder="Usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                </div>
                <div class="form-group">
                    <!-- <label for="exampleInputPassword1">Password</label> -->
                    <input type="password" class="form-control" placeholder="Contraseña" id="exampleInputPassword1">
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
</main>