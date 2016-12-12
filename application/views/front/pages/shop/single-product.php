<?php
    foreach ($detalle_producto as $registro) {
        $name=$registro['product_name'];
    }
?>
<!--/TITULO DE LA PAGINA-->
<section id="page-title" class="page-title-center" style="background-color: #0b0b0b; padding: 15px 0;">
    <div class="container clearfix">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <img src="<?= site_url('assets/front/images/home/welcome_logo.png'); ?>" title="Welcome"/>
            </div>
        </div>
    </div>
</section>



<!--/SINGLE PRODUCT CONTENT-->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <h1 class="uppercase" style="margin-bottom: 20px;"><?php echo $name; ?></h1>

            <!--/PRODUCT INFORMATION-->
            <div class="postcontent nobottommargin clearfix">

                <!--/single product-->
                <div class="single-product">
                    <div class="product">
                        <!--/galeria de imagenes-->
                        <div class="col_half">
                            <div class="product-image">
                                 <div class="fslider" data-pagi="false" data-arrows="true" data-thumbs="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap" data-lightbox="gallery">
                                            <?php
                                                foreach($imagenes as $registro){
                                                    ?>
                                                        <div class="slide" data-thumb="http://placehold.it/413x648">
                                                            <a href="<?= site_url('assets/front/images/shop/');
                                                            echo $registro['name'];?>" data-lightbox="gallery-item">
                                                                <img src="<?= site_url('assets/front/images/shop/');
                                                                echo $registro['name'];?>">

                                                            </a>
                                                        </div>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--/divider-->
                <div class="clear"></div><div class="line" style="margin: 40px 0;"></div>

                <!--/related products-->
                <?php $this->view('front/emkt/related_products_4'); ?>

            </div>

            <!--/PRODUCT SIDEBAR-->
            <div class="sidebar nobottommargin col_last clearfix">
                <div class="sidebar-widgets-wrap">
                    <div class="feature-box fbox-plain fbox-dark fbox-small">
                        <div class="fbox-icon">
                            <i class="icon-thumbs-up2"></i>
                        </div>
                        <h3>100% for you</h3>
                        <p class="notopmargin">We guarantee you the sale of prodcuts made for you.</p>
                    </div>

                    <div class="feature-box fbox-plain fbox-dark fbox-small">
                        <div class="fbox-icon">
                            <i class="icon-credit-cards"></i>
                        </div>
                        <h3>Payment Options</h3>
                        <p class="notopmargin">We accept Visa, MasterCard and American Express.</p>
                    </div>

                    <div class="feature-box fbox-plain fbox-dark fbox-small">
                        <div class="fbox-icon">
                            <i class="icon-truck2"></i>
                        </div>
                        <h3>shipping</h3>
                        <p class="notopmargin">We will delivery your purchase worldwide to your door.</p>
                    </div>

                    <!--/recent items-->
                    <?php $this->view('front/emkt/recent_items'); ?>

                </div>
            </div>

        </div>
    </div>
</section>