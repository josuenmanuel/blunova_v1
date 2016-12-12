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

<!--/SE IMPORTA EL SLIDER-->
<?php $this->view('front/sliders/home'); ?>

<!--/PRODUCTOS PROMOCIONADOS TITULO-->
<section id="page-title" class="page-title-center" style="background-color: #834898; padding: 15px 0;">
    <div class="container clearfix">
        <div class="row">
            <h1 class="uppercase" style="color: #fff;">featured products</h1>
        </div>
    </div>
</section>

<!--/CONTENIDO-->
<section id="content">

    <!--/featured grid-->
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="shop" class="shop grid-container clearfix" data-layout="fitRows">

                <div class="product clearfix">
                    <div class="product-image">
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a> 
                        <div class="sale-flash">50% Off</div>
                        <div class="product-overlay">
                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                            <a href="<?= site_url('product_preview'); ?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                        </div>
                    </div>
                    <div class="product-desc">
                        <div class="product-title"><h3><a href="<?= site_url('product'); ?>">Product 1</a></h3></div>
                        <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                        <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star-half-full"></i>
                            <i class="icon-star-empty"></i>
                        </div>
                    </div>
                </div>

                <div class="product clearfix">
                    <div class="product-image">
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <div class="product-overlay">
                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                            <a href="<?= site_url('product_preview'); ?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                        </div>
                    </div>
                    <div class="product-desc">
                        <div class="product-title"><h3><a href="<?= site_url('product'); ?>">Product 2</a></h3></div>
                        <div class="product-price"><ins>$52.49</ins></div>
                        <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star-half-full"></i>
                            <i class="icon-star-empty"></i>
                        </div>
                    </div>
                </div>

                <div class="product clearfix">
                    <div class="product-image">
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <div class="product-overlay">
                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                            <a href="<?= site_url('product_preview'); ?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                        </div>
                    </div>
                    <div class="product-desc">
                        <div class="product-title"><h3><a href="<?= site_url('product'); ?>">Product 3</a></h3></div>
                        <div class="product-price"><ins>$99.49</ins></div>
                        <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star-half-full"></i>
                            <i class="icon-star-empty"></i>
                            <i class="icon-star-empty"></i>
                        </div>
                    </div>
                </div>

                <div class="product clearfix">
                    <div class="product-image">
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <div class="product-overlay">
                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                            <a href="<?= site_url('product_preview'); ?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                        </div>
                    </div>
                    <div class="product-desc">
                        <div class="product-title"><h3><a href="<?= site_url('product'); ?>">Product 4</a></h3></div>
                        <div class="product-price"><ins>$12.49</ins></div>
                        <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star-empty"></i>
                        </div>
                    </div>
                </div>

                <div class="product clearfix">
                    <div class="product-image">
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <div class="product-overlay">
                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                            <a href="<?= site_url('product_preview'); ?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                        </div>
                    </div>
                    <div class="product-desc">
                        <div class="product-title"><h3><a href="<?= site_url('product'); ?>">Product 5</a></h3></div>
                        <div class="product-price"><ins>$120.49</ins></div>
                        <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                        </div>
                    </div>
                </div>

                <div class="product clearfix">
                    <div class="product-image">
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <div class="sale-flash">25% Off</div>
                        <div class="product-overlay">
                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                            <a href="<?= site_url('product_preview'); ?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                        </div>
                    </div>
                    <div class="product-desc">
                        <div class="product-title"><h3><a href="<?= site_url('product'); ?>">Product 6</a></h3></div>
                        <div class="product-price"><del>$99.99</del> <ins>$74.99</ins></div>
                        <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star-half-full"></i>
                            <i class="icon-star-empty"></i>
                        </div>
                    </div>
                </div>

                <div class="product clearfix">
                    <div class="product-image">
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <div class="sale-flash">80% Off</div>
                        <div class="product-overlay">
                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                            <a href="<?= site_url('product_preview'); ?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                        </div>
                    </div>
                    <div class="product-desc">
                        <div class="product-title"><h3><a href="<?= site_url('product'); ?>">Product 7</a></h3></div>
                        <div class="product-price"><del>$199.49</del> <ins>$39.99</ins></div>
                        <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                        </div>
                    </div>
                </div>

                <div class="product clearfix">
                    <div class="product-image">
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <a href="<?= site_url('product'); ?>"><img src="http://placehold.it/413x648"></a>
                        <div class="product-overlay">
                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                            <a href="<?= site_url('product_preview'); ?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                        </div>
                    </div>
                    <div class="product-desc">
                        <div class="product-title"><h3><a href="<?= site_url('product'); ?>">Product 8</a></h3></div>
                        <div class="product-price"><ins>$12.49</ins></div>
                        <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star-empty"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--/banner-->
    <div class="content-wrap nopadding">
        <div class="section nomargin notopborder dark" style="background-image: url('<?= site_url('assets/front/images/home/banner.jpg'); ?>'); padding: 30px 0;" data-stellar-background-ratio="0.3">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-7 bottommargin">
                        <img src="<?= site_url('assets/front/images/home/logo_white_big.png'); ?>"/>
                        <h2 class="center uppercase">check out our best selling dog show bundle</h2>
                        <div class="center">
                            <a href="#" class="btn btn-purple purple-large">click here!</a>
                        </div>
                    </div>
                    <div class="col-md-5 bottommargin">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="<?= site_url('product'); ?>"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                <div class="testi-meta">
                                    Collis Ta'eed
                                    <span>Envato Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/3 opciones de llamado-->
    <div class="content-wrap" style="padding-top: 30px;">
        <div class="container clearfix">
            <div class="row clear-bottommargin topmargin">
                <div class="col-md-4">
                    <div class="promo promo-dark promo-mini promo-center">
                        <h3 class="uppercase"><i class="fa fa-envelope fa-2x"></i><br>
                            join our newsletter
                        </h3>
                        <h4>
                            Subscribe to join the blunova dog show family & get the updates on what's new in our site!
                        </h4>
                        <a href="#" class="button button-large button-rounded">Subscribe me</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="promo promo-dark promo-mini promo-center">
                        <h3 class="uppercase"><i class="fa fa-globe fa-2x"></i><br>
                            world wide shipping!
                        </h3>
                        <h4>
                            If you love our products and work, it does not matter where you live!, we can send it to you anytime.
                        </h4>
                        <a href="#" class="button button-large button-rounded">Check our rates</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="promo promo-dark promo-mini promo-center">
                        <h3 class="uppercase"><i class="fa fa-certificate fa-2x"></i><br>
                            Prizes & Awards
                        </h3>
                        <h4>
                            Looking for prizes and awards for your show, association or kennel club?
                        </h4>
                        <a href="#" class="button button-large button-rounded">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>