<?php
wp_enqueue_script( 'my-select2', P_SUBSCRIBE_URL.'includes/js/select2.min.js', array(), false, true );
wp_enqueue_style('my-css-select2', P_SUBSCRIBE_URL.'includes/css/select2.min.css', array(), false );
wp_enqueue_style('subscribes-admin-setting', P_SUBSCRIBE_URL.'includes/css/admin-setting.css', array(), false );
?>
<?php $pro_url = "https://go.premio.io/?edd_action=add_to_cart&download_id=860&edd_options[price_id]=" ?>
<div class="key-table">
    <div class="modal-upgrade upgrade-block" id="folder-modal">
        <div class="easy-modal-inner">
            <div class="container">
                <div class="pricing-table">
                    <div class="price-title">Unlock All Features</div>
                    <div class="price-tables">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="price-table basic-feature">
                                    <div class="price-table-top">
                                        <div class="price-head">
                                            <div class="plan-name">Basic</div>
                                            <div class="plan-price">$19<span>/year</span></div>
                                        </div>
                                        <div class="price-websites">For small website owners</div>
                                        <div class="price-offer">Renewals for <b>25% off</b></div>
                                    </div>
                                    <div class="price-table-middle">
                                        <ul>
                                            <li><a href="javascript:;" class="cus-tooltip">1 website<span class="has-tooltip">*</span><span class="tooltip__content">Use Subscribe Forms on 1 domain</span></a></li>
                                            <li><a href="javascript:;" class="cus-tooltip">All templates<span class="has-tooltip">*</span><span class="tooltip__content">Choose from 10+ different form designs</span></a></li>
                                            <li><a href="javascript:;" class="cus-tooltip">Unlimited forms<span class="has-tooltip">*</span><span class="tooltip__content">You can create and add unlimited forms</span></a></li>
                                            <li><a href="javascript:;" class="cus-tooltip">All customization features<span class="has-tooltip">*</span><span class="tooltip__content">Custom colors, background image, text, size and more</span></a></li>
											<li><a href="javascript:;" class="cus-tooltip">Send leads to email <span class="has-tooltip">*</span><span class="tooltip__content">Get emails notification when a visitor subscribes </span></a></li>
											<li><a href="javascript:;" class="cus-tooltip">All integrations<span class="has-tooltip">*</span><span class="tooltip__content">Mailchimp, GetResponse, Active Campaign, iContact, Constant Contact, ConvertKit, HubSpot CRM, MailerLite, MailPoet, Gist, SendFox, Pipedrive, and local database</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="price-table-bottom">
                                        <div class="custom-dd">
                                            <select class="multiple-options">
                                                <option data-option="1_year" data-header="Renewals for 25% off" data-price="19" value="<?php echo esc_url($pro_url."3") ?>">
                                                    <?php esc_html_e("Updates & support for 1 year") ?>
                                                </option>
                                                <option data-option="2_year" data-header="For 2 years" data-price="29" value="<?php echo esc_url($pro_url."13") ?>">
                                                    <?php esc_html_e("Updates & support for 2 years") ?>
                                                </option>
                                                <option data-option="lifetime" data-header="For lifetime" data-price="59" value="<?php echo esc_url($pro_url."10") ?>">
                                                    <?php esc_html_e("Updates & support for lifetime") ?>
                                                </option>
                                            </select>
                                        </div>
                                        <a class="cart-link" target="_blank" href="<?php echo esc_url($pro_url."1") ?>">Buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="price-table plus-feature">
                                    <div class="price-table-top">
                                        <div class="price-head">
                                            <div class="plan-name">Plus</div>
                                            <div class="plan-price">$39<span>/year</span></div>
                                        </div>
                                        <div class="price-websites">For businesses with multiple websites</div>
                                        <div class="price-offer">Renewals for <b>25% off</b></div>
                                    </div>
                                    <div class="price-table-middle">
                                        <ul>
                                            <li><a href="javascript:;" class="cus-tooltip">5 website<span class="has-tooltip">*</span><span class="tooltip__content">Use Subscribe Forms on 5 domain</span></a></li>
                                            <li><a href="javascript:;" class="cus-tooltip">All templates<span class="has-tooltip">*</span><span class="tooltip__content">Choose from 10+ different form designs</span></a></li>
                                            <li><a href="javascript:;" class="cus-tooltip">Unlimited forms<span class="has-tooltip">*</span><span class="tooltip__content">You can create and add unlimited forms</span></a></li>
                                            <li><a href="javascript:;" class="cus-tooltip">All customization features<span class="has-tooltip">*</span><span class="tooltip__content">Custom colors, background image, text, size and more</span></a></li>
											<li><a href="javascript:;" class="cus-tooltip">Send leads to email <span class="has-tooltip">*</span><span class="tooltip__content">Get emails notification when a visitor subscribes </span></a></li>
											<li><a href="javascript:;" class="cus-tooltip">All integrations<span class="has-tooltip">*</span><span class="tooltip__content">Mailchimp, GetResponse, Active Campaign, iContact, Constant Contact, ConvertKit, HubSpot CRM, MailerLite, MailPoet, Gist, SendFox, Pipedrive, and local database</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="price-table-bottom">
                                        <div class="custom-dd">
                                            <select class="multiple-options">
                                                <option data-option="1_year" data-header="Renewals for 25% off" data-price="39" value="<?php echo esc_url($pro_url."4") ?>">
                                                    <?php esc_html_e("Updates & support for 1 year") ?>
                                                </option>
                                                <option data-option="2_year" data-header="For 2 years" data-price="59" value="<?php echo esc_url($pro_url."14") ?>">
                                                    <?php esc_html_e("Updates & support for 2 years") ?>
                                                </option>
                                                <option data-option="lifetime" data-header="For lifetime" data-price="99" value="<?php echo esc_url($pro_url."11") ?>">
                                                    <?php esc_html_e("Updates & support for lifetime") ?>
                                                </option>
                                            </select>
                                        </div>
                                        <a class="cart-link" target="_blank" href="<?php echo esc_url($pro_url."4") ?>">Buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="price-table agency-feature">
                                    <div class="price-table-top">
                                        <div class="price-head">
                                            <div class="plan-name">Agency</div>
                                            <div class="plan-price">$79<span>/year</span></div>
                                        </div>
                                        <div class="price-websites">For agencies who manage clients</div>
                                        <div class="price-offer">Renewals for <b>25% off</b></div>
                                    </div>
                                    <div class="price-table-middle">
                                        <ul>
                                            <li>
                                                <div class="website-package">
                                                    <select class="multiple-web-options">
                                                        <option value="50_websites">50 websites</option>
                                                        <option value="500_websites">500 websites</option>
                                                        <option value="1000_websites">1000 websites</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li><a href="javascript:;" class="cus-tooltip">All templates<span class="has-tooltip">*</span><span class="tooltip__content">Choose from 10+ different form designs</span></a></li>
                                            <li><a href="javascript:;" class="cus-tooltip">Unlimited forms<span class="has-tooltip">*</span><span class="tooltip__content">You can create and add unlimited forms</span></a></li>
                                            <li><a href="javascript:;" class="cus-tooltip">All customization features<span class="has-tooltip">*</span><span class="tooltip__content">Custom colors, background image, text, size and more</span></a></li>
											<li><a href="javascript:;" class="cus-tooltip">Send leads to email <span class="has-tooltip">*</span><span class="tooltip__content">Get emails notification when a visitor subscribes </span></a></li>
											<li><a href="javascript:;" class="cus-tooltip">All integrations<span class="has-tooltip">*</span><span class="tooltip__content">Mailchimp, GetResponse, Active Campaign, iContact, Constant Contact, ConvertKit, HubSpot CRM, MailerLite, MailPoet, Gist, SendFox, Pipedrive, and local database</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="price-table-bottom">
                                        <div class="custom-dd">
                                            <select class="multiple-options has-multiple-websites">
                                                <option data-option="1_year" data-header="Renewals for 25% off" data-price="79" value="<?php echo esc_url($pro_url."3") ?>">
                                                    <?php esc_html_e("Updates & support for 1 year") ?>
                                                </option>
                                                <option data-option="2_year" data-header="For 2 years" data-price="125" value="<?php echo esc_url($pro_url."15") ?>">
                                                    <?php esc_html_e("Updates & support for 2 years") ?>
                                                </option>
                                                <option data-option="lifetime" data-header="For lifetime" data-price="199" value="<?php echo esc_url($pro_url."9") ?>">
                                                    <?php esc_html_e("Updates & support for lifetime") ?>
                                                </option>
                                            </select>
                                        </div>
                                        <a class="cart-link" target="_blank" href="<?php echo esc_url($pro_url."3") ?>">Buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="text-center price-after">
                    <p class="money-guaranteed"><span class="dashicons dashicons-yes"></span>
                        <?php esc_html_e("30 days money back guaranteed"); ?>
                    </p>
                    <p class="money-guaranteed"><span class="dashicons dashicons-yes"></span>
                        <?php esc_html_e("The plugin will always keep working even if you don't renew your license"); ?>
                    </p>
                    <div class="payments">
                        <img src="<?php echo P_SUBSCRIBE_URL ?>/includes/images/payment.png" alt="Payment" class="payment-img" />
                    </div>
                </div>
                <div class="folder-testimonial-list">
					<div class="folder-testimonial">
						<div class="testimonial-image">
							<img src="<?php echo P_SUBSCRIBE_URL ?>includes/images/client-image.jpg">
						</div>
						<div class="testimonial-data">
							<div class="testimonial-desc">This was the exact kind of product I was looking for to collect emails through my website. It was simple to install and configure to my liking. I even created the exact design I wanted in minutes since everything is very friendly to use. I would recommend this product.</div>
							<div class="testimonial-author">Kenny Maurice, <small>Consultant and speaker</small></div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<script>
    var priceOptions = {"50_websites":{"1_year":{"price":79,"link":"https:\/\/go.premio.io\/?edd_action=add_to_cart&download_id=860&edd_options[price_id]=5"},"2_year":{"price":125,"link":"https:\/\/go.premio.io\/?edd_action=add_to_cart&download_id=860&edd_options[price_id]=15"},"lifetime":{"price":199,"link":"https:\/\/go.premio.io\/?edd_action=add_to_cart&download_id=860&edd_options[price_id]=12"}},"500_websites":{"1_year":{"price":139,"link":"https:\/\/go.premio.io\/?edd_action=add_to_cart&download_id=860&edd_options[price_id]=16"},"2_year":{"price":225,"link":"https:\/\/go.premio.io\/?edd_action=add_to_cart&download_id=860&edd_options[price_id]=17"},"lifetime":{"price":359,"link":"https:\/\/go.premio.io\/?edd_action=add_to_cart&download_id=860&edd_options[price_id]=18"}},"1000_websites":{"1_year":{"price":199,"link":"https:\/\/go.premio.io\/?edd_action=add_to_cart&download_id=860&edd_options[price_id]=19"},"2_year":{"price":315,"link":"https:\/\/go.premio.io\/?edd_action=add_to_cart&download_id=860&edd_options[price_id]=20"},"lifetime":{"price":499,"link":"https:\/\/go.premio.io\/?edd_action=add_to_cart&download_id=860&edd_options[price_id]=21"}}};
    jQuery(document).ready(function(){
        if(jQuery(".multiple-options").length) {
            jQuery(".multiple-options").select2({
                minimumResultsForSearch: -1
            });
        }
        if(jQuery(".multiple-web-options").length) {
            jQuery(".multiple-web-options").select2({
                minimumResultsForSearch: -1
            });
        }
        jQuery(document).on("change", ".multiple-options", function(){
            priceText = jQuery(this).find("option:selected").attr("data-header");
            thisValue = jQuery(this).val();
            thisPrice = jQuery(this).find("option:selected").attr("data-price");
            if(!jQuery(this).hasClass("has-multiple-websites")) {
                jQuery(this).closest(".price-table").find("a.cart-link").attr("href", thisValue);
                jQuery(this).closest(".price-table").find(".plan-price").text("$" + thisPrice);
            } else {
                var webOption = jQuery(".multiple-web-options").val();
                var priceSettings = priceOptions[webOption];
                var yearPlan = jQuery(".multiple-options.has-multiple-websites option:selected").attr("data-option");
                if(priceSettings[yearPlan] != undefined) {
                    priceSettings = priceSettings[yearPlan];
                    thisValue = priceSettings.link;
                    thisPrice = priceSettings.price;
                }
            }
            thisOption = jQuery(this).find("option:selected").attr("data-option");
            if(thisOption == "1_year") {
                thisPrice = thisPrice+"<span>/year</span>";
                priceText = "Renewals for <b>25% off</b>";
            } else if(thisOption == "2_year") {
                thisPrice = thisPrice+"<span>/2 years</span>";
                priceText = "Renewals for <b>25% off</b>";
            } else {
                thisPrice = thisPrice+"<span>/lifetime</span>";
                priceText = "For lifetime";
            }
            jQuery(this).closest(".price-table").find("a.cart-link").attr("href", thisValue);
            jQuery(this).closest(".price-table").find(".plan-price").html("$" + thisPrice);
            jQuery(this).closest(".price-table").find(".price-offer").html(priceText);
        });

        jQuery(document).on("change", ".multiple-web-options", function(){
            jQuery(".multiple-options.has-multiple-websites").trigger("change");
        });

        if(jQuery(".multiple-options.has-multiple-websites").length) {
            jQuery(".multiple-options.has-multiple-websites").trigger("change");
        }
    });
</script>