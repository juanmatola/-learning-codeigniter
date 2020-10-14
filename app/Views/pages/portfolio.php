<section id="portfolio_galery">
        <div class="container">
            <div class="row">
                <div class="col ">
                    <h1 class="text-center my-3"> Portfolio </h1>
                </div>
            </div>
        </div>
            <div class="container" id="galeria">
                <div class="row">

                    <?php for ($i=0; $i < 6 ; $i++) { ?>
                        <div class="col-12 col-sm-4 mb-4">
                            <div class="card portfolio-card" style="background-image: url(assets/img/example1.jpg);">
                                <div class="card-footer bg-light" style="margin-top: 250px;">
                                <small class="text-muted">Last updated <?php echo $i?> mins ago</small>
                                </div>
                            </div>
                        </div>
                    <?php }  ?>

                </div>
            </div>
    </section>