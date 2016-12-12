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

<!--/SHOP-->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <!--/sidebar-->
            <div class="sidebar nobottommargin">
                <div class="sidebar-widgets-wrap">

                    <div class="widget widget-filter-links clearfix">
                        <h4>Select Category</h4>
                        <ul class="custom-filter" data-container="#shop" data-active-class="active-filter">
                            <li class="widget-filter-reset active-filter"><a href="#" data-filter="*">Clear</a></li>
                            <?php
                                foreach ($categorias as $registro) {
                                    ?>
                                        <li>
                                            <a href="#" data-filter=".ct-cat<?php echo $registro['idcategory'];?>">
                                                <?php echo $registro['name'];?>
                                            </a>
                                        </li>
                                    <?php
                                }
                            ?>
                           
                            
                        </ul>
                    </div>

                    <div class="widget widget-filter-links clearfix">
                        <h4>Sort By</h4>
                        <ul class="shop-sorting">
                            <li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">Clear</a></li>
                            <li><a href="#" data-sort-by="name">Name</a></li>
                            <li><a href="#" data-sort-by="price_lh">Price: Low to High</a></li>
                            <li><a href="#" data-sort-by="price_hl">Price: High to Low</a></li>
                        </ul>
                    </div>

                    <!--/recent items-->
                    <?php $this->view('front/emkt/recent_items');?>

                </div>
            </div>

            <!--/cuadricula-->
            <div class="postcontent nobottommargin col_last">
                <div id="shop" class="shop product-4 grid-container clearfix">


                   <?php
                        foreach ($productos as $registro) {
                            ?>
                                <div class="product ct-cat<?php echo $registro['idcategory'];?> clearfix">
                                      <div class="product-image">
                            <a href="<?= site_url('product/uno.php'); ?>"><img src="<?= site_url('assets/front/images/shop/'); 
                            echo $registro['image_name'];
                            ?>">
                            </a>
                            <a href="<?= site_url('front/product/'); 
                                echo $registro['idproduct'];
                            ?>"><img src="<?= site_url('assets/front/images/shop/');
                            echo $registro['image_name'];?>"></a>
                            <?php
                                $discount=$registro['discount'];
                                if ($registro['discount']==1){
                                    ?>
                                        <div class="sale-flash"><?php echo $registro['discount_percentage'];?>% Off*</div>
                                    <?php
                                }
                                if($registro['sale']==1){
                                    ?>
                                    <div class="sale-flash">Sale!</div>
                                    <?php
                                }
                            ?>
                            


                            <div class="product-overlay">
                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                <a href="<?= site_url('product_preview'); ?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                            </div>
                        </div>
                        <div class="product-desc center">
                            <div class="product-title"><h4><a href="<?= site_url('product'); ?>"><?php echo $registro['product_name']; ?></a></h4></div>
                            <?php
                            if ($registro['discount']==1 or $registro['sale']==1){
                                ?>
                                    <div class="product-price"><del>$<?php echo $registro['price']; ?></del><ins>$<?php echo $registro['discount_price'];?></ins></div>
                                <?php
                            }else{
                                ?>
                                <div class="product-price">$<?php echo $registro['price']; ?></div>
                                <?php
                            }
                            ?>
                            

                        </div>   
                                </div>
                            <?php
                        }
                   ?>

                    

                  

                   

                   

                    

                   

                    

                   

                   

                    
                   

                </div>
            </div>

        </div>
    </div>
</section>