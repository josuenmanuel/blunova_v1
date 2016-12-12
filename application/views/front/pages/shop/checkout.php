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

<!--/CHECKOUT OPTIONS-->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row clearfix">

                <form id="checkout_form" name="checkout" method="post" action="#">
                    <!--/BILLING & SHIPPING ADDRESS-->
                    <div class="col-md-6">

                        <!--/BILLILNG-->
                        <div id="billing" name="billing">
                            <h3>Billing Address <small>| Fields with * are required</small></h3>
                            <!--/name-->
                            <div class="col_half">
                                <label for="checkout[billing][name]">Name: *</label>
                                <input type="text" id="checkout[billing][name]" name="checkout[billing][name]" value="" class="sm-form-control" />
                            </div>
                            <!--/lastname-->
                            <div class="col_half col_last">
                                <label for="checkout[billing][lname]">Last Name: *</label>
                                <input type="text" id="checkout[billing][lname]" name="checkout[billing][lname]" value="" class="sm-form-control" />
                            </div>
                            <!--/address_1-->
                            <div class="col_full">
                                <label for="checkout[billing][address]">Address: *</label>
                                <input type="text" id="checkout[billing][address]" name="checkout[billing][address]" value="" class="sm-form-control" />
                            </div>
                            <!--/address_2-->
                            <div class="col_full">
                                <input type="text" id="checkout[billing][address2]" name="checkout[billing][address2]" value="" class="sm-form-control" />
                            </div>
                            <!--/country-->
                            <div class="col_half">
                                <label for="checkout[billing][country]">Country: *</label>
                                <input type="text" id="checkout[billing][country]" name="checkout[billing][country]" value="" class="sm-form-control" />
                            </div>
                            <!--/state-->
                            <div class="col_half col_last">
                                <label for="checkout[billing][state]">State: *</label>
                                <input type="text" id="checkout[billing][state]" name="checkout[billing][state]" value="" class="sm-form-control" />
                            </div>
                            <!--/city-->
                            <div class="col_half">
                                <label for="checkout[billing][city]">City / Town: *</label>
                                <input type="text" id="checkout[billing][city]" name="checkout[billing][city]" value="" class="sm-form-control" />
                            </div>
                            <!--/zip-->
                            <div class="col_half col_last">
                                <label for="checkout[billing][zip]">Zip code:</label>
                                <input type="text" id="checkout[billing][zip]" name="checkout[billing][zip]" value="" class="sm-form-control" />
                            </div>
                            <!--/email-->
                            <div class="col_half">
                                <label for="checkout[billing][email]">Email Address: *</label>
                                <input type="email" id="checkout[billing][email]" name="checkout[billing][email]" value="" class="sm-form-control" />
                            </div>
                            <!--/phone-->
                            <div class="col_half col_last">
                                <label for="checkout[billing][phone]">Phone: *</label>
                                <input type="text" id="checkout[billing][phone]" name="checkout[billing][phone]" value="" class="sm-form-control" />
                            </div>
                            <!--/company-->
                            <div class="col_full">
                                <label for="checkout[billing][companyname]">Company Name:</label>
                                <input type="text" id="checkout[billing][companyname]" name="checkout[billing][companyname]" value="" class="sm-form-control" />
                            </div>
                        </div>

                        <div class="clear bottommargin"></div>

                        <!--/SHIPPING-->
                        <div id="shipping" name="shipping">
                            <!--/shipping title-->
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="">Shipping Address</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="pull-right">
                                        <span>Same as billing:&nbsp;</span>
                                        <input name="shipping_check" type="checkbox" class="bt-switch" data-on-text="<i class='icon-line-check'></i>" data-off-text="<i class='icon-line-cross'></i>">
                                    </div>
                                </div>
                            </div>
                            <div id="shipping_section">
                                <!--/name-->
                                <div class="col_half">
                                    <label for="checkout[shipping][name]">Name: *</label>
                                    <input type="text" id="checkout[shipping][name]" name="checkout[shipping][name]" value="" class="sm-form-control" />
                                </div>
                                <!--/lastname-->
                                <div class="col_half col_last">
                                    <label for="checkout[shipping][lname]">Last Name: *</label>
                                    <input type="text" id="checkout[shipping][lname]" name="checkout[shipping][lname]" value="" class="sm-form-control" />
                                </div>
                                <!--/address_1-->
                                <div class="col_full">
                                    <label for="checkout[shipping][address]">Address: *</label>
                                    <input type="text" id="checkout[shipping][address]" name="checkout[shipping][address]" value="" class="sm-form-control" />
                                </div>
                                <!--/address_2-->
                                <div class="col_full">
                                    <input type="text" id="checkout[shipping][address2]" name="checkout[shipping][address2]" value="" class="sm-form-control" />
                                </div>
                                <!--/country-->
                                <div class="col_half">
                                    <label for="checkout[shipping][country]">Country: *</label>
                                    <input type="text" id="checkout[shipping][country]" name="checkout[shipping][country]" value="" class="sm-form-control" />
                                </div>
                                <!--/state-->
                                <div class="col_half col_last">
                                    <label for="checkout[shipping][state]">State: *</label>
                                    <input type="text" id="checkout[shipping][state]" name="checkout[shipping][state]" value="" class="sm-form-control" />
                                </div>
                                <!--/city-->
                                <div class="col_half">
                                    <label for="checkout[shipping][city]">City / Town: *</label>
                                    <input type="text" id="checkout[shipping][city]" name="checkout[shipping][city]" value="" class="sm-form-control" />
                                </div>
                                <!--/zip-->
                                <div class="col_half col_last">
                                    <label for="checkout[shipping][zip]">Zip code:</label>
                                    <input type="text" id="checkout[shipping][zip]" name="checkout[shipping][zip]" value="" class="sm-form-control" />
                                </div>
                                <!--/email-->
                                <div class="col_half">
                                    <label for="checkout[shipping][email]">Email Address: *</label>
                                    <input type="email" id="checkout[shipping][email]" name="checkout[shipping][email]" value="" class="sm-form-control" />
                                </div>
                                <!--/phone-->
                                <div class="col_half col_last">
                                    <label for="checkout[shipping][phone]">Phone: *</label>
                                    <input type="text" id="checkout[shipping][phone]" name="checkout[shipping][phone]" value="" class="sm-form-control" />
                                </div>
                                <!--/company-->
                                <div class="col_full">
                                    <label for="checkout[shipping][companyname]">Company Name:</label>
                                    <input type="text" id="checkout[shipping][companyname]" name="checkout[shipping][companyname]" value="" class="sm-form-control" />
                                </div>
                            </div>
                        </div>

                        <!--/NOTES-->
                        <div id="notes" name="notes">
                            <div class="col_full">
                                <label for="checkout[info][notes]">Notes</label>
                                <textarea class="sm-form-control" id="checkout[info][notes]" name="checkout[info][notes]" rows="6" cols="30" style="resize: vertical;"></textarea>
                            </div>
                        </div>

                    </div>

                    <!--/REVIEW AND TOTALS-->
                    <div class="col-md-6">

                        <!--/REVIEW-->
                        <div class="table-responsive clearfix">
                            <h3>Your Orders</h3>

                            <table class="table cart">
                                <thead>
                                <tr>
                                    <th class="cart-product-thumbnail">&nbsp;</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="cart-product-thumbnail">
                                        <a href="<?= site_url('product')?>">
                                            <img width="64" height="64" src="http://placehold.it/413x648" alt="Pink Printed Dress">
                                        </a>
                                    </td>

                                    <td class="cart-product-name">
                                        <a href="<?= site_url('product'); ?>">Pink Printed Dress</a>
                                    </td>

                                    <td class="cart-product-quantity">
                                        <div class="quantity clearfix">
                                            2
                                        </div>
                                    </td>

                                    <td class="cart-product-subtotal">
                                        <span class="amount">$39.98</span>
                                    </td>
                                </tr>
                                </tbody>

                            </table>

                        </div>

                        <div class="clear bottommargin"></div>

                        <!--/TOTALS-->
                        <div class="table-responsive">
                            <h3>Cart Totals</h3>

                            <table class="table cart">
                                <tbody>
                                <tr class="cart_item">
                                    <td class="notopborder cart-product-name">
                                        <strong>Cart Subtotal</strong>
                                    </td>

                                    <td class="notopborder cart-product-name">
                                        <span class="amount">$106.94</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Shipping</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount">Free Delivery</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Total</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount color lead"><strong>$106.94</strong></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>

                        <!--/PAYMENT METHOD-->
                        <div class="accordion clearfix">
                            <div class="acctitle">
                                <i class="acc-closed icon-remove-circle"></i>
                                <i class="acc-open icon-ok-circle"></i>
                                Pagadito
                            </div>
                            <div class="acc_content clearfix">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

                            <div class="acctitle">
                                <i class="acc-closed icon-remove-circle"></i>
                                <i class="acc-open icon-ok-circle"></i>
                                Paypal</div>
                            <div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>
                        </div>

                        <!--/SUBMIT-->
                        <div>
                            <div id="terms_confirm" class="style-msg errormsg hidden">
                                <div class="sb-msg">
                                    <i class="icon-remove"></i><strong>Error!</strong> Please confirm you have read and accepted the Termns & Conditions.</div>
                            </div>
                            <input id="checkout_terms" class="checkbox-style" name="checkout_terms" type="checkbox">
                            <label for="checkout_terms" class="checkbox-style-3-label">
                                I have read and accept the <a href="<?= site_url('terms'); ?>" target="_blank">Terms & Conditions</a>
                            </label>
                            <button id="checkout_submit" name="checkout_submit" type="submit" class="button button-3d button-purple fright"><i class="icon-credit"></i> Place Order</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>