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

                        <div class="col-12 col-sm-6 col-lg-4 my-3 gallery-object">
                            <a class="text-white" href="#"><div class="gallery_image d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url();?>/assets/img/example1.jpg);"></div></a>
                            <div class="card-footer">
                                <small class=""> Titulo 1 </small>
                            </div>
                        </div>

                    <?php }  ?>

                </div>
            </div>
    </section>