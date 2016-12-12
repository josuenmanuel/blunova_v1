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

<!--/LOGIN PAGE-->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <!--/login option-->
            <div class="col_one_third nobottommargin">

                <div class="well well-lg nobottommargin">
                    <form id="login-form" name="login-form" class="nobottommargin aboutclass" action="#" method="post">

                        <h3>Login to your Account</h3>

                        <div class="col_full">
                            <label for="login-form-user">User:</label>
                            <input type="text" id="login-form-user" name="login-form-user" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="login-form-password">Password:</label>
                            <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
                        </div>

                        <div class="col_full nobottommargin">
                            <button class="button button-purple nomargin" id="login-form-submit" name="login-form-submit" value="login"><i class="icon-line2-login"></i> Login</button>
                            <a href="#" class="fright">Forgot Password?</a>
                        </div>

                    </form>
                </div>

            </div>

            <!--/register option-->
            <div class="col_two_third col_last nobottommargin aboutclass">

                <h3>Don't have an Account? Register Now.</h3>

                <p>Please complete de form below to create your account, which will help you to purchase and our site and will give you access to much more.</p>

                <form id="register-form" name="register-form" class="nobottommargin" action="#" method="post">

                    <div class="col_half">
                        <label for="register-form-email">Email Address:</label>
                        <input type="text" id="register-form-user" name="register-form-user" value="" class="form-control" />
                        <label class="help-block"></label>
                    </div>

                    <div class="col_half col_last">
                        <label for="register-form-repassword">Password:</label>
                        <input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
                        <label class="help-block"></label>
                    </div>

                    <div class="clear"></div>

                    <div class="col_full nobottommargin">
                        <button class="button button-purple nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</section><!-- #content end -->