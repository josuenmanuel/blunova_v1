<!-- Footer
============================================= -->
<footer id="footer" class="dark">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_one_fourth">
                <div class="widget clearfix">
                    <h4>quick links</h4>
                    <div class="bottommargin-sm widget_links">
                        <ul>
                            <li><a href="#">Our shipping costs</a></li>
                            <li><a href="#">Looking for prizes and awards?</a></li>
                            <li><a href="<?= site_url('shop'); ?>">View our products</a></li>
                            <li><a href="<?= site_url('faq'); ?>">Frecuent Asked Questions</a></li>
                            <li><a href="<?= site_url('terms'); ?>">Terms & Conditions</a></li>
                            <!--<li><a href="#">Third link</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col_one_fourth">
                <div class="widget clearfix">
                    <h4>last articles</h4>

                    <div id="post-list-footer">
                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                </div>
                            </div>
                        </div>

                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                </div>
                            </div>
                        </div>

                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
            <div class="col_one_fourth">
                <div class="widget quick-contact-widget clearfix">
                    <h4>Subscribe</h4>
                    <h5>To our newsletter to get important news, amazing offers &amp; inside scoops:</h5>

                    <div class="quick-contact-form-result"></div>

                    <form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">

                        <div class="form-process"></div>

                        <div class="input-group divcenter">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="required form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                        </div>
                        <div class="input-group divcenter">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="required form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                        </div>
                        <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                        <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-purple nomargin" value="submit">Subscribe <i class="fa fa-send"></i></button>

                    </form>

                </div>
            </div>
            <div class="col_one_fourth col_last">
                <div class="widget clearfix">
                    <h4>Facebook</h4>
                    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FBlunovaDogShow&amp;width=240&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:290px;" allowTransparency="true"></iframe>
                </div>
            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
			============================================= -->
    <div id="copyrights">

        <div class="container center clearfix">
            <i class="fa fa-facebook-official fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-instagram fa-2x"></i><br>
            <span>Copyright &copy; <?php echo date("Y"); ?> Blunova Dog Show, All Rights Reserved</span><br>
            <span><strong>Developed by: </strong><a href="http://lieison.com" target="_blank">Lieison Working Together S.A. de C.V.</a></span>
        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->
<?php $this->view('front/layout/end_page'); ?>