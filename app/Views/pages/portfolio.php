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

                    <?php foreach ($posts as $post) { ?>
                        <div class="col-12 col-sm-6 col-lg-4 my-3 gallery-object">
                            <a class="text-white" href="#"><div class="gallery_image d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url().'/writable/uploads/portfolio/'.$post['image']; ?>);"></div></a>
                            <div class="card-footer">
                                <small class=""><?php echo $post['title']; ?></small>
                            </div>
                        </div>
                    <?php }  ?>


                   
                </div>
            </div>
    </section>