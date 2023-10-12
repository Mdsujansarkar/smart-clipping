<?php

/*
Template Name: Portfolio
*/

get_header(); 
global $sclipping;

?>





    <!-- SERVICE BANNER SECTION START -->
    <section class="service-banner">
        <div class="container">
            <div class="service-banner-content">
                <h1 class="service-title">Our Portfolio</h1>
                <p class="service-text">
                    We can coloraturas any product quickly <br>
                    And easily for you.
                </p>
            </div>
        </div>

        <div class="overlay"></div>
    </section>
    <!-- SERVICE BANNER SECTION END -->

    <!-- SERVICE QUALITY SECTION START -->
    <!-- SERVICE QUALITY SECTION END -->

    
    <!-- SERVICE SLIDER SECTION START -->
    <section class="home-portfolio">
        <div class="container">
            <div class="service-slider-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px;">
                            <div class="card-product-header">
                            <?php if(!$sclipping['port-beforeAfter-one'] && !$sclipping['port-beforeAfter-one']): ?>
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/bike-after.jpg" alt="after" />
                                    <img class="before_image" src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/bike-before.jpg" alt="before" />
                                </div>
                            <?php else:  ?>
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo $sclipping['port-beforeAfter-one']; ?>" alt="after" />
                                    <img class="before_image" src="<?php echo $sclipping['port-afterAfter-one']; ?>" alt="before" />
                                </div>
                            <?php endif; ?>
                            </div>
    
                            <div class="card-product-body">
                                <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000;">Get a Quote</a>
                                <a href="form" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6">
                        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px;">
                            <div class="card-product-header">
                            <?php if(!$sclipping['port-beforeAfter-two'] && !$sclipping['port-afterAfter-two']): ?>
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/after-shadow.jpg" alt="after" />
                                    <img class="before_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/before-shadow.jpg" alt="before" />
                                </div>
                               
                            <?php else:  ?>
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo $sclipping['port-beforeAfter-two']; ?>" alt="after" />
                                    <img class="before_image" src="<?php echo $sclipping['port-afterAfter-two']; ?>" alt="before" />
                                </div>
                                <?php endif; ?>
                            </div>
    
                            <div class="card-product-body">
                                <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000;">Get a Quote</a>
                                <a href="form" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
                            </div>
                        </div>
                    </div>
                    
    
                    <div class="col-lg-4 col-md-6">
                        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px;">
                            <div class="card-product-header">
                            <?php if(!$sclipping['port-beforeAfter-three'] && !$sclipping['port-afterAfter-three']): ?>
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo get_template_directory_uri(  );?>/assets/images/sliders/color-correction-after.jpg" alt="after" />
                                    <img class="before_image" src="<?php echo get_template_directory_uri(  );?>/assets/images/sliders/color-correction-before.jpg" alt="before" />
                                </div>
                                <?php else: ?>
                                    <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo $sclipping['port-beforeAfter-three']; ?>" alt="after" />
                                    <img class="before_image" src="<?php echo $sclipping['port-afterAfter-three']; ?>" alt="before" />
                                </div>
                                    <?php endif;?>
                            </div>
    
                            <div class="card-product-body">
                                <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000;">Get a Quote</a>
                                <a href="form" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6">
                        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px;">
                            <div class="card-product-header">
                            <?php if(!$sclipping['port-beforeAfter-four'] && !$sclipping['port-afterAfter-four']): ?>
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_after.jpg" alt="after" />
                                    <img class="before_image" src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg" alt="before" />
                                </div>
                                <?php else: ?>
                                    <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo $sclipping['port-beforeAfter-four']; ?>" alt="after" />
                                    <img class="before_image" src="<?php echo $sclipping['port-afterAfter-four']; ?>" alt="before" />
                                </div>
                                <?php endif; ?>
                            </div>
    
                            <div class="card-product-body">
                                <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000;">Get a Quote</a>
                                <a href="form" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6">
                        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px;">
                            <div class="card-product-header">
                            <?php if(!$sclipping['port-beforeAfter-five'] && !$sclipping['port-afterAfter-five']): ?>
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/retouch-after.jpg" alt="after" />
                                    <img class="before_image" src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/retouch-before.jpg" alt="before" />
                                </div>
                                <?php else: ?>
                                    <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo $sclipping['port-beforeAfter-five']; ?>" alt="after" />
                                    <img class="before_image" src="<?php echo $sclipping['port-afterAfter-five']; ?>" alt="before" />
                                </div>
                                <?php endif; ?>
                            </div>
    
                            <div class="card-product-body">
                                <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000;">Get a Quote</a>
                                <a href="form" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6">
                        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px;">
                            <div class="card-product-header">
                            <?php if(!$sclipping['port-beforeAfter-six'] && !$sclipping['port-afterAfter-six']): ?>
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo get_template_directory_uri(  );?>/assets/images/sliders/size_optimize_after.jpg" alt="after" />
                                    <img class="before_image" src="<?php echo get_template_directory_uri(  );?>/assets/images/sliders/size_optimize_before.jpg" alt="before" />
                                </div>
                            <?php else: ?>
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo $sclipping['port-beforeAfter-six']; ?>" alt="after" />
                                    <img class="before_image" src="<?php echo $sclipping['port-afterAfter-six']; ?>" alt="before" />
                                </div>
                            <?php endif; ?>
                            </div>
    
                            <div class="card-product-body">
                                <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000;">Get a Quote</a>
                                <a href="form" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>