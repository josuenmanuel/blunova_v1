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

<!--/GOOGLE MAPS-->
<section id="google-map" class="gmap slider-parallax"></section>

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <!--/contact form-->
            <div class="postcontent nobottommargin">

                <h3>Send us an Email</h3>

                <div class="contact-widget">
                    <div class="contact-form-result"></div>
                    <form class="nobottommargin" id="contact_form" name="contact_form" action="include/sendemail.php" method="post">
                        <div class="form-process"></div>

                        <div class="col_one_third">
                            <label for="contact_form-name">Name <small>*</small></label>
                            <input type="text" id="contact_form-name" name="contact_form-name" value="" class="sm-form-control required" />
                        </div>

                        <div class="col_one_third">
                            <label for="contact_form-email">Email <small>*</small></label>
                            <input type="email" id="contact_form-email" name="contact_form-email" value="" class="required email sm-form-control" />
                        </div>

                        <div class="col_one_third col_last">
                            <label for="contact_form-phone">Phone</label>
                            <input type="text" id="contact_form-phone" name="contact_form-phone" value="" class="required sm-form-control" />
                        </div>

                        <div class="clear"></div>

                        <div class="col_two_third">
                            <label for="contact_form-subject">Subject <small>*</small></label>
                            <input type="text" id="contact_form-subject" name="contact_form-subject" value="" class="required sm-form-control" />
                        </div>

                        <div class="col_one_third col_last">
                            <label for="contact_form-service">Type</label>
                            <select id="contact_form-service" name="contact_form-service" class="required sm-form-control">
                                <option value="">-- Select One --</option>
                                <option value="Question">Question</option>
                                <option value="Comment">Comment</option>
                                <option value="Follow up">Follow up</option>

                            </select>
                        </div>

                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="contact_form-message">Message <small>*</small></label>
                            <textarea class="required sm-form-control" id="contact_form-message" name="contact_form-message" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col_full hidden">
                            <input type="text" id="contact_form-botcheck" name="contact_form-botcheck" value="" class="sm-form-control" />
                        </div>

                        <div class="col_full">
                            <button class="button button-3d button-purple nomargin" type="submit" id="contact_form-submit" name="contact_form-submit" value="submit"><i class="fa fa-send"></i> Send Message</button>
                        </div>

                    </form>
                </div>

            </div>

            <!--/sidebar-->
            <div class="sidebar col_last nobottommargin">

                <address>
                    <strong>Headquarters:</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                </address>
                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com

                <div class="widget noborder notoppadding">

                    <a href="#" class="social-icon si-small si-dark si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-dark si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-dark si-instagram">
                        <i class="icon-instagram"></i>
                        <i class="icon-instagram"></i>
                    </a>

                </div>

            </div>

        </div>
    </div>
</section>