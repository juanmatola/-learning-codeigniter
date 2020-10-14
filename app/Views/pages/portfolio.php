<section id="portfolio_gallery">
        <div class="container">
            <div class="row">
                <div class="col ">
                    <h1 class="text-center my-3"> Portfolio </h1>
                </div>
            </div>
        </div>
            <div class="container" id="gallery">
                <div class="row">

                    <?php for ($i=0; $i < 6 ; $i++) { ?>
                        <!-- <div class="col-12 col-sm-4 mb-4">
                            <div class="card portfolio-card" style="background-image: url(assets/img/example1.jpg);">
                                <div class="card-footer bg-light" style="margin-top: 250px;">
                                <small class="text-muted">Last updated <?php echo $i?> mins ago</small>
                                </div>
                            </div>
                        </div> -->

                        <div class="col-12 col-sm-6 col-lg-4 my-3">
                            <div class="gallery_image" style="background-image: url(assets/img/example1.jpg);"></div>
                            <div class="card-footer">
                                <small class="text-muted"> Titulo 1 </small>
                            </div>
                        </div>
                    <?php }  ?>

                </div>
            </div>
    </section>