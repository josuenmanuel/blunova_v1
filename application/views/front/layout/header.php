<?php $this->view('front/layout/init_page'); ?>

<!--/HEADER-->
<header id="header" class="full-header">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!--/MENU-->
            <nav id="primary-menu" class="style-3">
                <ul>
                    <li><a href="<?= site_url(); ?>"><div>Home</div></a></li>
                    <li data-url="catalog" class="mega-menu">
                        <a href="<?= site_url('catalog'); ?>"><div>Breeds Catalog</div></a>
                        <div class="mega-menu-content style-2 clearfix">
                            <ul class="mega-menu-column col-md-12">
                                <li>
                                    <div class="widget clearfix">
                                        <!--/breeds groups-->
                                        <div class="portfolio portfolio-4 clearfix">
                                            <article class="portfolio-item pf-media pf-icons">
                                                <div class="portfolio-image">
                                                    <a href="javascript:;">
                                                        <img src="http://placehold.it/400x250" alt="Open Imagination">
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?= site_url('catalog'); ?>#atof" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="<?= site_url('catalog'); ?>#atof">Breeds A - F</a></h3>
                                                </div>
                                            </article>
                                            <article class="portfolio-item pf-media pf-icons">
                                                <div class="portfolio-image">
                                                    <a href="javascript:;">
                                                        <img src="http://placehold.it/400x250" alt="Open Imagination">
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?= site_url('catalog'); ?>#gtol" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="<?= site_url('catalog'); ?>#gtol">Breeds G - L</a></h3>
                                                </div>
                                            </article>
                                            <article class="portfolio-item pf-media pf-icons">
                                                <div class="portfolio-image">
                                                    <a href="javascript:;">
                                                        <img src="http://placehold.it/400x250" alt="Open Imagination">
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?= site_url('catalog'); ?>#mtor" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="<?= site_url('catalog'); ?>#mtor">Breeds M - R</a></h3>
                                                </div>
                                            </article>
                                            <article class="portfolio-item pf-media pf-icons">
                                                <div class="portfolio-image">
                                                    <a href="javascript:;">
                                                        <img src="http://placehold.it/400x250" alt="Open Imagination">
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="<?= site_url('catalog'); ?>#stoz" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="<?= site_url('catalog'); ?>#stoz">Breeds S - Z</a></h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li data-url="shop"><a href="<?= site_url('shop'); ?>"><div>Shop</div></a></li>
                    <li><a href="#"><div>Personalized</div></a></li>
                    <li data-url="about"><a href="<?= site_url('about'); ?>"><div>About us</div></a>
                        <ul class="submenu">
                            <li><a href="<?= site_url('gallery'); ?>"><div>Gallery</div></a></li>
                        </ul>
                    </li>
                    <li data-url="contact"><a href="<?= site_url('contact'); ?>"><div>Contact Us</div></a></li>
                    <li data-url="login"><a href="<?= site_url('login'); ?>"><div>login</div></a></li>
                </ul>

                <!--CARRITO-->
                <div id="top-cart">
                    <a href="#" id="top-cart-trigger"><i class="fa fa-shopping-cart"></i><span>1</span></a>
                    <div class="top-cart-content">
                        <div class="top-cart-title">
                            <h4>Shopping Cart</h4>
                        </div>
                        <div class="top-cart-items">
                            <div class="top-cart-item clearfix">
                                <div class="top-cart-item-image">
                                    <a href="#"><img src="http://placehold.it/100x100" alt="Blue Round-Neck Tshirt" /></a>
                                </div>
                                <div class="top-cart-item-desc">
                                    <a href="#">Blue Round-Neck Tshirt</a>
                                    <span class="top-cart-item-price">$19.99</span>
                                    <span class="top-cart-item-quantity">x 2</span>
                                </div>
                            </div>
                        </div>
                        <div class="top-cart-action clearfix">
                            <span class="fleft top-checkout-price">$114.95</span>
                            <button onclick="window.location = '<?= site_url('cart'); ?>';" class="button button-purple button-small nomargin fright"><i class="icon-cart"></i> View Cart</button>
                        </div>
                    </div>
                </div>

                <!--/BUSCADOR-->
                <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="fa fa-search"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter...">
                    </form>
                </div>

            </nav>

        </div>
    </div>
</header>