<?php

function construction_custom_styling(){

    global $construction_options;

    // Logo dimentions    
    $logo_desktop_dimensions    = $construction_options['logo_desktop_dimensions'];
    $desktop_logo_width         = isset($logo_desktop_dimensions['width']) ? $logo_desktop_dimensions['width'] : '';
    $desktop_logo_height        = isset($logo_desktop_dimensions['height']) ? $logo_desktop_dimensions['height'] : '';
    
    $logo_desktop = '';
    
    if( !empty($desktop_logo_width) && !empty($desktop_logo_height) && $desktop_logo_width != 'px' ){
        $logo_desktop = "
        .header-menu-inner .logo img {
            width: {$desktop_logo_width} !important;
            height: {$desktop_logo_height} !important;
        }";
    }

    $body_typo = $construction_options['typo-body'];
    $typo_headers = $construction_options['typo-headers'];
    $typo_headings = $construction_options['typo-headings'];

    $construction_typography = '';
    
    if( $body_typo['font-family'] != "Open Sans" || $body_typo['font-size'] != "15px" || $body_typo['font-weight'] != "400" || $body_typo['line-height'] != "25px" || $body_typo['text-transform'] != "none" ){
        $construction_typography .= "
            body, .btn-orange, .portfolioFilter a, input[type='text'], input[type='email'], input[type='password'], textarea, select, .footer-inner .form-field button, span.wpcf7-not-valid-tip, .wpcf7-response-output, div.wpcf7-validation-errors, .vc_single_bar .vc_label, .testimonial-client-info span, .bread-right ul li a, .bread-right ul li:hover a, .bread-right ul li.active, .mc4wp-form input[type='submit'], .contact-us-page input[type='submit'], .comment-submit-button, .post-password-form input[type='submit'], .replay-comment, .widget_shopping_cart_content p.buttons a.button, .woocommerce .widget_price_filter .price_slider_amount .button, .widget.woocommerce.widget_product_search input[type='submit'], .woocommerce #review_form #respond .form-submit input.submit, .woocommerce-cart-dropdown-item .qbutton, .tags ul li a, .highlight-up, .boxer-attend, .btn-expert-common, .counter-comunity, .g-choice-inner, .boxer-attend-info h4, .counter-expand-left h3, .pckItem-over h6, .g-choice-inner h4 , .g-choice-inner h5 , .g-choice-inner h6, .g-team-blog h5, .g-team-blog small, .g-quote, .g-quote-inner h4, .g-plan-list small, .g-plan-list h2, .g-plan-list span, .g-testimonial-slider .carousel-item, .g-testimonial-info h5, .rec-art-full, .rect-cmn, .rec-art-full h6, .g-subscribe-left, .g-subscribe-left h6, .g-subscribe-right input[type='text'], .g-subscribe-right input[type='submit'], .g-footer-column, .g-cont-list-right strong, .g-footer-column h6, .g-footer-copy {
                font-family: {$body_typo['font-family']} !important;
                font-size: {$body_typo['font-size']} !important;
                font-weight: {$body_typo['font-weight']} !important;
                line-height: {$body_typo['line-height']};
                text-transform: {$body_typo['text-transform']} !important;
            }
        ";
    }

    if( $typo_headers['font-family'] != "Montserrat" || $typo_headers['font-size'] != "13px" || $typo_headers['font-weight'] != "400" || $typo_headers['line-height'] != "25px" || $typo_headers['text-transform'] != "none" || $typo_headers['text-align'] != "none" ){
        $construction_typography .= "
            .header-menu-inner .menu-wrp ul li a, .top-address .top-address-inner a, .top-address .top-address-inner p, .top-address .top-address-inner p a, .top-links a, .mean-container .mean-nav ul li a, .woocommerce-cart-dropdown-item ul li a, .woocommerce-cart-dropdown-item ul li, .header-cart-area:hover .woocommerce-cart-dropdown-item, .explore-top-left, .explore-get a, .explore-timing-right span, .explore-menu, .tag-line-small, .tag-line-large {
                font-family: {$typo_headers['font-family']};
                font-size: {$typo_headers['font-size']};
                font-weight: {$typo_headers['font-weight']};
                line-height: {$typo_headers['line-height']};
                text-transform: {$typo_headers['text-transform']};
                text-align: {$typo_headers['text-align']};
            }
        ";
    }

    if( $typo_headings['font-family'] != "Montserrat" || $typo_headings['font-weight'] != "400" || $typo_headings['text-transform'] != "uppercase" || $typo_headings['text-align'] != "inherit" ){
        $construction_typography .= "
            h1, h2, h3, h4, h5, h6, .count-list-inner p, .accordion_head, .error-msg h2, .error-msg h3, .comment-date, .single .woo-template span.onsale, .woocommerce ul.products li.product .onsale, .title-under h3, .g-choice-inner h1, .g-choice-inner h2, .g-choice-inner h3, .g-choice-inner h4, .g-choice-inner h5, .g-choice-inner h6 {
                font-family: {$typo_headings['font-family']} !important;
                font-weight: {$typo_headings['font-weight']};
                text-transform: {$typo_headings['text-transform']};
                text-align: {$typo_headings['text-align']};
            }
        ";
    }
    
    $construction_color = '';

    $body_color_one = $construction_options['body_color_one'];
    if( !empty($body_color_one) && $body_color_one != "#666666" ){
        $construction_color .= "
            body, .portfolioFilter a, .testimonial-client-info span, .sidebar-boxes li a, .widget_construction_recent_posts .post-content h5, .social-media ul li a {
                color: {$body_color_one};
            }
            .tags ul li a, .woocommerce ul.products li.product .price ins, .quantity .amount, .product_list_widget ins .amount, .woocommerce tr, .woocommerce th, .woocommerce-notice.woocommerce-notice--info.woocommerce-info, .woocommerce-message, .woocommerce-error, .woocommerce-info, .woocommerce-account .woocommerce-MyAccount-navigation ul li a, .special_newsletter .mc4wp-form input[type='email'], .g-subscribe-right input[type='email'], .rec-art-full, .g-team-blog, .g-choice-inner, .boxer-attend, .project-packery .portfolioFilter a:after, .rec-art-full h6, .g-plan-list h2, .search-for input[type='text'], .search-item input[type='submit']{
                color: {$body_color_one} !important;
            }
            .social-media ul li, .widget ul.menu li, .sidebar-boxes li{
                border-color: {$body_color_one} !important;
            }
        ";
    }

    $body_color_two = $construction_options['body_color_two'];
    if( !empty($body_color_two) && $body_color_two != "#ffffff" ){
        $construction_color .= "
            .portfolio-line-list .overlay-details, .overlay-bg, .pull-social li a, .table-list-col h6, .mc4wp-form input[type='submit'], .contact-us-page input[type='submit'], .comment-submit-button, .post-password-form input[type='submit'], .title-bread-main h1, .title-bread-main h2, .title-bread-main h3, .title-bread-main h4, .title-bread-main h5, .title-bread-main h6, .accordion_head, .bread-right ul li a:after{
                color: {$body_color_two};
            }
            .a-orange-button, .bread-right ul li a, .error-msg h2, .error-msg h3, .error-msg h4, .widget .tagcloud a,.woocommerce a.add_to_cart_button.button:before, .woocommerce a.product_type_variable.button:before, .woocommerce a.product_type_grouped.button:before, .woocommerce a.product_type_simple.button:before, .woocommerce div.product form.cart button.single_add_to_cart_button:before, .woocommerce ul.products li.product a.add_to_cart_button, .woocommerce ul.products li.product a.button, .single .woo-template span.onsale, .woocommerce ul.products li.product .onsale, .woocommerce ul.products li.product .price, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .widget_shopping_cart_content p.buttons a.button, .woocommerce .widget_price_filter .price_slider_amount .button, .widget.woocommerce.widget_product_search input[type='submit'], .woocommerce #review_form #respond .form-submit input.submit, .counter-new-style .timer, .counter-new-style p, .highlight-up strong, .counter-comunity strong, .btn-expert-common, .pckItem-over, .pckItem-over i, .btn-expert-theme, .g-social li a, .g-plan-advance h2, .g-plan-advance span, .g-plan-advance, .g-plan-advance, .g-testimonial-slider, .g-testimonial-info h5, .g-subscribe-left h6, .g-subscribe, .g-subscribe-right input[type='submit'], .g-choice-inner h1, .g-choice-inner h2, .g-choice-inner h3, .g-choice-inner h4, .g-choice-inner h5, .g-choice-inner h6, .pckItem-over h6, .explore-get a{
                color: {$body_color_two} !important;
            }
            .sidebar-boxes, .widget .tagcloud a{
                border-color: {$body_color_two} !important;
            }
            .sidebar-title, .g-testimonial-slider .owl-theme .owl-controls .owl-buttons div, .g-subscribe-right input[type='email']{
                background: {$body_color_two} none repeat scroll 0 0 !important;
            }
        ";
    }

    $body_heading = $construction_options['body_heading'];
    if( !empty($body_heading) && $body_heading != "#3f3f3f" ){
        $construction_color .= "
            h1, h2, h3, h4, h5, h6, .item h6, .count-list-inner p, .table-list-col h5, .footer-inner .form-field button{
                color: {$body_heading};
            }
            .sidebar-boxes li a:hover, .widget .tagcloud a, .woocommerce ul.cart_list li a, .woocommerce ul.product_list_widget li a, .boxer-attend-info h4, .title-under h3{
                color: {$body_heading} !important;
            }
            .table-list-col .edge-seprator{
                 background: {$body_heading} none repeat scroll 0 0;
            }
            #coupon_code:focus,#coupon_code.mc4wp-form input[type='email']:focus, .mc4wp-form input[type='email']:focus, .contact-us-page input[type='text']:focus, .contact-us-page input[type='email']:focus, .contact-us-page input[type='tel']:focus, .contact-us-page input[type='search']:focus, .contact-us-page input[type='date']:focus, .contact-us-page input[type='time']:focus, .contact-us-page input[type='datetime-local']:focus, .contact-us-page input[type='month']:focus, .contact-us-page input[type='url']:focus, .contact-us-page input[type='number']:focus, .contact-us-page input[type='range']:focus, .contact-us-page textarea:focus, .post-form input[type='text']:focus, .post-form input[type='email']:focus, .post-form input[type='url']:focus, .post-form textarea:focus, .post-password-form input[type='password']:focus{
                border-color:{$body_heading}!important
            }
            .mc4wp-form input[type='email'], .mc4wp-form input[type='text'], .contact-us-page input[type='text'], .contact-us-page input[type='email'], .contact-us-page input[type='tel'], .contact-us-page input[type='search'], .contact-us-page input[type='date'], .contact-us-page input[type='time'], .contact-us-page input[type='datetime-local'], .contact-us-page input[type='month'], .contact-us-page input[type='url'], .contact-us-page input[type='number'], .contact-us-page input[type='password'], .post-form input[type='text'], .post-form input[type='email'], .post-form input[type='url'], .post-form textarea, .contact-us-page textarea, .contact-us-page select, .post-password-form input[type='password']{
                border: 1px solid {$body_heading} !important;
                color: {$body_heading} !important;
            }
            ::-webkit-input-placeholder{
                color:{$body_heading} !important;
            }
            :-moz-placeholder{
                color:{$body_heading} !important;
                opacity:1
            }
            ::-moz-placeholder{
                color:{$body_heading} !important;
                opacity:1
            }
            :-ms-input-placeholder{
                color:{$body_heading} !important;
            }            
        ";
    }

    $body_bg_color = $construction_options['body_bg_color'];
    if( !empty($body_bg_color) && $body_bg_color != "#ffffff" ){
        $construction_color .= "
            body, .special_newsletter .mc4wp-form input[type='email'], .g-plan-list, .carousel-item {
                background-color: {$body_bg_color};
            }
            .border-top-left .highlight-inside, .border-top .highlight-inside, .border-top-right .highlight-inside {
                border-color: {$body_bg_color};
            }
        ";
    }

    $construction_primary_color = $construction_options['construction_primary_color'];
    if( !empty($construction_primary_color) && $construction_primary_color != "#ffa000" ){
        $construction_color .= "
            .btn-orange:before, .btn-orange-border, .top-address .fa, .portfolioFilter a.current,.portfolioFilter a:hover, .item h6, .bread-right ul li:hover a,.bread-right ul li.active, .social-info li:hover a, .list li:before, .city-main ul li:hover a,.city-main ul li.active a, .error-inner ul li:hover a, .widget ul.menu li.current-menu-item a, .social-media ul li a:hover, .info-icon, .mc4wp-form input[type='submit']:hover,.contact-us-page input[type='submit']:hover,.comment-submit-button:hover,.post-password-form input[type='submit']:hover, .a-orange-button:hover, .header-top a:hover,.header-top .social a:hover,.header-top .social li .fa:hover,.sidebar-boxes li a:hover, .woocommerce div.product form.cart .button:hover,.woocommerce #content div.product form.cart .button:hover, .woocommerce div.product .out-of-stock, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce .button:hover,.woocommerce button.button:hover,.woocommerce input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .widget_shopping_cart_content p.buttons a.button:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover, .widget.woocommerce.widget_product_search input[type='submit']:hover, .woocommerce #review_form #respond .form-submit input.submit:hover, .woocommerce-message a.button.wc-forward:hover, .woocommerce div.product form.cart button.single_add_to_cart_button:hover, .woocommerce ul.products li.product a.add_to_cart_button:hover, .woocommerce ul.products li.product a.button:hover, .woocommerce .star-rating span:before, .woocommerce a.button.alt:hover,.woocommerce button.button.alt:hover,.woocommerce input.button.alt:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce table.my_account_orders .order-actions .button:hover, .woocommerce table.cart a.remove, .woocommerce ul.cart_list li a.remove, .woocommerce form .form-row .required, .woocommerce-Reviews .comment-form .submit:hover, .woocommerce .cart .button, .woocommerce .cart input.button:hover, .woocommerce-checkout .button:hover, .woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a,.woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover, .woocommerce-cart-dropdown-item ul li a:hover, .woocommerce-cart-dropdown-item .qbutton:hover, .portfolio-item-content a, .a-document-link, .widget_construction_recent_posts .post-content p a, .comment-reply-link, .logged-in-as a, .woocommerce-review-link, .posted_in a, .stars a, .showcoupon, .woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a, .woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover, .woocommerce-MyAccount-content a, .footer-main .widget-contact-item .fa, .follow_us li .fa:hover, .counter-new-style i, .highlight-up span, .counter-comunity span, .btn-expert-theme, .g-team-blog small, .g-plan-list small, .g-testimonial-info small, .rect-cmn, .g-post small, .g-ul li:before{
                color: {$construction_primary_color} !important;
            }

            .construction-newsletter{
                background-image: repeating-linear-gradient(135deg, {$construction_primary_color}, {$construction_primary_color} 10px, #ffffff 0px, #ffffff 20px, #85adff 0px, #85adff 30px, #ffffff 0px, #ffffff 40px);
            }
            
            @media only screen and (min-width: 768px){
                .woocommerce table.shop_table td.product-name a:hover {
                    color: {$construction_primary_color} !important;       
                }
            }

            .a-orange-button, .edge-center:before, .btn-orange-border, .get-quorte, .accordion_head, .social-box ul li:hover a, .comment-submit-button,.post-password-form input[type='submit'], .widget .tagcloud a:hover, .a-orange-button, .single .woo-template span.onsale, .woocommerce ul.products li.product .onsale, .woocommerce div.product form.cart .button, .woocommerce #content div.product form.cart .button, .woocommerce .button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .widget_shopping_cart_content p.buttons a.button, .woocommerce .widget_price_filter .price_slider_amount .button, .widget.woocommerce.widget_product_search input[type='submit'], .woocommerce #review_form #respond .form-submit input.submit, .woocommerce-message a.button.wc-forward, .woocommerce div.product form.cart button.single_add_to_cart_button, .woocommerce ul.products li.product a.add_to_cart_button, .woocommerce ul.products li.product a.button, .woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt,.woocommerce #respond input#submit.alt, .woocommerce table.cart a.remove:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-Reviews .comment-form .submit, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce-checkout .button, .woocommerce-account .woocommerce-MyAccount-navigation ul li a, .woocommerce-message a.button.wc-forward, .pckItem-over, .g-subscribe, .explore-get a {
                background-color: {$construction_primary_color} !important;
            }
            
            .add-card span, .woocommerce-cart-dropdown-item .qbutton, .btn-orange:before, .overlay-outer:hover .overlay-bg, .edge-seprator, .top-arrow, .portfolio-line-list:hover .overlay-bg, .owl-theme .owl-controls .owl-page.active span, .owl-theme .owl-controls.clickable .owl-page:hover span, .bx-wrapper .bx-controls-direction a, .pull-social li:hover i, .bussiness, .feature-box-icon i, .item-team i:hover, .accordion_head, .a-orange-button, .widget .tagcloud a:hover, .woocommerce-message a.button.wc-forward, .btn-expert-theme, .btn-expert-black, .search-for input[type='text'] {
                background: {$construction_primary_color} none repeat scroll 0 0 !important;
            }

            .overlay-outer:hover .overlay-bg {
                opacity: 0.9;
            }

            .slider-nav .slick-slide.slick-current:before, .social-box ul li:hover a, .social-media ul li:hover,.mc4wp-form input[type='submit']:hover,.contact-us-page input[type='submit']:hover,.comment-submit-button:hover,.post-password-form input[type='submit']:hover, .a-orange-button:hover, blockquote, .top-arrow, .woocommerce div.product form.cart .button, .woocommerce #content div.product form.cart .button, .woocommerce .product_meta, .woocommerce-message, .woocommerce-info, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce div.product span.price,.woocommerce div.product p.price,.woocommerce #content div.product span.price,.woocommerce #content div.product p.price, .woocommerce .button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .widget_shopping_cart_content p.buttons a.button, .woocommerce .widget_price_filter .price_slider_amount .button, .widget.woocommerce.widget_product_search input[type='submit'], .woocommerce #review_form #respond .form-submit input.submit, .woocommerce-message a.button.wc-forward, .woocommerce div.product form.cart button.single_add_to_cart_button, .woocommerce ul.products li.product a.add_to_cart_button, .woocommerce ul.products li.product a.button, .quantity .qty, .woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt,.woocommerce #respond input#submit.alt, .woocommerce table.my_account_orders .order-actions .button, .woocommerce-Reviews .comment-form .submit:hover, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce-checkout .button, .woocommerce-account .woocommerce-MyAccount-navigation ul li a, .woocommerce-cart-dropdown-item, .woocommerce-cart-dropdown-item .qbutton, .woocommerce-message a.button.wc-forward, .woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a, .woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover {
                border-color : {$construction_primary_color} !important;
            }
            
            .woocommerce-cart-dropdown-item:before {
                border-color: transparent transparent {$construction_primary_color} !important;
            }
            
            .woocommerce-cart-dropdown-item .qbutton:hover, .a-orange-button:hover, .comment-submit-button:hover, .woocommerce #content div.product form.cart .button:hover,.woocommerce .button:hover, .woocommerce #respond input#submit:hover,.woocommerce a.button:hover,.woocommerce button.button:hover, .woocommerce input.button:hover, .widget_shopping_cart_content p.buttons a.button:hover,.woocommerce .widget_price_filter .price_slider_amount .button:hover,.widget.woocommerce.widget_product_search input[type='submit']:hover,.woocommerce #review_form #respond .form-submit input.submit:hover, .woocommerce-message a.button.wc-forward:hover, .woocommerce div.product form.cart button.single_add_to_cart_button:hover, .woocommerce ul.products li.product a.add_to_cart_button:hover, .woocommerce ul.products li.product a.button:hover, .woocommerce a.button.alt:hover,.woocommerce button.button.alt:hover,.woocommerce input.button.alt:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a, .woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover{
                background: #ffffff none repeat scroll 0 0 !important;
            }

            .btn-white:before, .btn-orange{
                border: none !important;
            }

            .portfolio-item-content a.btn-orange, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce-checkout .button, .woocommerce-message a.button, .woocommerce-Button.button {
                color: #ffffff !important;
            }
            
        ";
    }

    $construction_primary_color_hover = $construction_options['construction_primary_color_hover'];
    if( !empty($construction_primary_color_hover) && $construction_primary_color_hover != "#e18f06" ){
        $construction_color .= "
            .social li:hover .fa, .comment-reply-link:hover, .logged-in-as a:hover, .woocommerce-review-link:hover, .posted_in a:hover, .showcoupon:hover, .woocommerce-MyAccount-content a:hover {
                color: {$construction_primary_color_hover} !important;
            }

            .btn-orange, .feature-box:hover .feature-box-icon i, .btn-expert-black:hover, .btn-expert-theme:hover, .xs-arrow:hover, .g-social li:hover a, .explore-get a:hover {
                background-color: {$construction_primary_color_hover} !important;
            }

            .btn-orange-border:before {
                border-color: {$construction_primary_color_hover} !important;
            }            
        ";
    }

    $header_bg = $construction_options['header_bg'];
    if( !empty($header_bg) && $header_bg != "#ffffff" ){
        $construction_color .= "
            header .header-menu, .header-explore {
                background: {$header_bg} none repeat scroll 0 0;
            }
        ";
    }

    $header_bg_sticky = $construction_options['header_bg_sticky'];
    if( !empty($header_bg_sticky) && $header_bg_sticky != "#ffffff" ){
        $construction_color .= "
            header .header-menu.fixed, .home .explore-menu.header-menu.fixed {
                background: {$header_bg_sticky} none repeat scroll 0 0;
            }
        ";
    }

    $header_links_color = $construction_options['header_links_color'];
    if( !empty($header_links_color) && $header_links_color != "#666666" ){
        $construction_color .= "
            .menu-wrp ul li a {
                color: {$header_links_color};
            }
        ";
    }

    $header_links_color_on_sticky = $construction_options['header_links_color_on_sticky'];
    if( !empty($header_links_color_on_sticky) && $header_links_color_on_sticky != "#666666" ){
        $construction_color .= "
            .header-menu.fixed .menu-wrp ul li a {
                color: {$header_links_color_on_sticky};
            }
        ";
    }

    $header_links_hover_color = $construction_options['header_links_hover_color'];
    if( !empty($header_links_hover_color) && $header_links_hover_color != "#1a1a1d" ){
        $construction_color .= "
            .menu-wrp li.current-menu-ancestor a, .menu-wrp li:hover a, .explore-menu .menu-wrp li.current-menu-ancestor a, .explore-menu .menu-wrp li.current-menu-item a, .explore-menu .menu-wrp li:hover a {
                color: {$header_links_hover_color} !important;
            }
        ";
    }

    $header_border_color = $construction_options['header_border_color'];
    if( !empty($header_border_color) && $header_border_color != "#ffa000" ){
        $construction_color .= "
            .menu-wrp ul > li > a:before {
                background: {$header_border_color} none repeat scroll 0 0 !important;
            }
        ";
    }

    $header_submenu_bg = $construction_options['header_submenu_bg'];
    if( !empty($header_submenu_bg) && $header_submenu_bg != "#1a1a1d" ){
        $construction_color .= "
            .menu-wrp ul li .submenu li a {
                background: {$header_submenu_bg} none repeat scroll 0 0 !important;
            }            
        ";
    }

    $header_submenu_links_color = $construction_options['header_submenu_links_color'];
    if( !empty($header_submenu_links_color) && $header_submenu_links_color != "#ffffff" ){
        $construction_color .= "
            .menu-wrp ul li .submenu li a {
                color: {$header_submenu_links_color};
            }
        ";
    }

    $header_submenu_links_hover_color = $construction_options['header_submenu_links_hover_color'];
    if( !empty($header_submenu_links_hover_color) && $header_submenu_links_hover_color != "#ffffff" ){
        $construction_color .= "
            .menu-wrp ul li .submenu li a:hover {
                color: {$header_submenu_links_hover_color};
            }
        ";
    }

    $header_submenu_links_hover_bg_color = $construction_options['header_submenu_links_hover_bg_color'];
    if( !empty($header_submenu_links_hover_bg_color) && $header_submenu_links_hover_bg_color != "#ffffff" ){
        $construction_color .= "
            .menu-wrp ul li .submenu li a:hover {
                background: {$header_submenu_links_hover_bg_color} none repeat scroll 0 0;
            }
        ";
    }

    $top_bar_bg = $construction_options['top_bar_bg'];
    if( !empty($top_bar_bg) && $top_bar_bg != "#212124" ){
        $construction_color .= "
            header .header-top, .explore-top {
                background: {$top_bar_bg} none repeat scroll 0 0 !important;
            }
        ";
    }

    $top_bar_color = $construction_options['top_bar_color'];
    if( !empty($top_bar_color) && $top_bar_color != "#cccccc" ){
        $construction_color .= "
            .top-address p, .top-address a, .top-address i, .header-top p, .header-top a, .header-top .social a, .header-top .social li .fa, .top-address-inner p i, .explore-top-left li a, .social li .fa {
                color: {$top_bar_color} !important;
            }
        ";
    }

    $top_bar_color_hover = $construction_options['top_bar_color_hover'];
    if( !empty($top_bar_color_hover) && $top_bar_color_hover != "#ffa000" ){
        $construction_color .= "
            .top-address p:hover, .top-address a:hover, .top-address i:hover, .header-top p:hover, .header-top a:hover, .header-top .social a:hover, .header-top .social li .fa:hover, .explore-top-left li a:hover, .social li .fa:hover {
                color: {$top_bar_color_hover} !important;
            }
        ";
    }

    $mob_menu_bg_color = $construction_options['mob_menu_bg_color'];
    if( !empty($mob_menu_bg_color) && $mob_menu_bg_color != "#ffffff" ){
        $construction_color .= "
            header .header-menu.mean-container{
                background-color: {$mob_menu_bg_color} !important;
            }
        ";
    }

    $mob_menu_btn_color = $construction_options['mob_menu_btn_color'];
    if( !empty($mob_menu_btn_color) && $mob_menu_btn_color != "#ffa000" ){
        $construction_color .= "
            .mean-bar a.meanmenu-reveal{
                color: {$mob_menu_btn_color} !important;
            }
            .mean-container a.meanmenu-reveal span{
                background: {$mob_menu_btn_color} none repeat scroll 0 0;
            }
        ";
    }

    $mob_submenu_bg_color = $construction_options['mob_submenu_bg_color'];
    if( !empty($mob_submenu_bg_color) && $mob_submenu_bg_color != "#0c1923" ){
        $construction_color .= "
            .mean-container .mean-nav ul li, .mean-container .mean-nav ul li .mean-expand {
                background-color: {$mob_submenu_bg_color} !important;
            }
        ";
    }   

    $mob_link_color = $construction_options['mob_link_color'];
    if( !empty($mob_link_color) && $mob_link_color != "#253039" ){
        $construction_color .= "
            .mean-container .mean-nav ul li a {
                color: {$mob_link_color} !important;
            }
        ";
    }

    $mob_link_hover_color = $construction_options['mob_link_hover_color'];
    if( !empty($mob_link_hover_color) && $mob_link_hover_color != "#253039" ){
        $construction_color .= "
            .mean-container .mean-nav ul li a:hover {
                color: {$mob_link_hover_color} !important;
            }
        ";
    }

    $footer_bg_color = $construction_options['footer_bg_color'];
    if( !empty($footer_bg_color) && $footer_bg_color != "#212124" ){
        $construction_color .= "
            .footer-inside {
                background: {$footer_bg_color} none repeat scroll 0 0;
            }
        ";
    }

    $footer_color = $construction_options['footer_color'];
    if( !empty($footer_color) && $footer_color != "#b2b2b2" ){
        $construction_color .= "
            .footer-inner p, .footer-inner a, .footer-inner .post-inner .post-content h5, .footer-inner .post-inner .post-content p a, .footer-main .menu li a, .footer-main p.widget-contact-value a {
                color: {$footer_color} !important;
            }
            .post-inner{
                border-bottom: 1px solid {$footer_color};
            }
            input[type='text'], input[type='email'], input[type='password'], textarea, select, .footer-inner .form-field button {
                border: 1px solid {$footer_color} !important;
            }
            ul.timetable li{
                border-color: 1px solid {$footer_color} !important;
                border-bottom: 1px dotted {$footer_color} !important;
            }
        ";
    }

    $footer_hover_color = $construction_options['footer_hover_color'];
    if( !empty($footer_hover_color) && $footer_hover_color != "#ffffff" ){
        $construction_color .= "
            .footer-inner a:hover, .footer-inner .post-inner .post-content h5:hover, .footer-inner .post-inner .post-content p a:hover, .footer-main .menu li a:hover, .footer-main p.widget-contact-value a:hover, ul.timetable .hours-date-pro {
                color: {$footer_hover_color} !important;
            }
        ";
    }

    $footer_bottom_bg_color = $construction_options['footer_bottom_bg_color'];
    if( !empty($footer_bottom_bg_color) && $footer_bottom_bg_color != "#1a1a1c" ){
        $construction_color .= "
            .copyright-main, .g-footer-inner {
                background-color: {$footer_bottom_bg_color};
            }
        ";
    }

    $footer_bottom_border = $construction_options['footer_bottom_border'];
    if( !empty($footer_bottom_border) && $footer_bottom_border != "#212124" ){
        $construction_color .= "
            .copyright-main {
                border-top: {$footer_bottom_border['border-top']} {$footer_bottom_border['border-style']} {$footer_bottom_border['border-color']};
            }            
        ";
    }

    $footer_bottom_color = $construction_options['footer_bottom_color'];
    if( !empty($footer_bottom_color) && $footer_bottom_color != "#666666" ){
        $construction_color .= "
            .copyright-main .copyright-inner, .copyright-main p, .copyright-main a, .follow_us h6, .g-footer-column h6, .g-footer-column, .g-time span, .g-footer-ul li, .g-footer-ul li a, .g-cont-list-right strong, .g-cont-list-right span, .g-cont-list-right a, .g-footer-column a:hover {
                color: {$footer_bottom_color}
            }
            .footer-navi a:after{
                background: {$footer_bottom_color} none repeat scroll 0 0;
            }
        ";
    }

    $footer_bottom_hover_color = $construction_options['footer_bottom_hover_color'];
    if( !empty($footer_bottom_hover_color) && $footer_bottom_hover_color != "#cccccc" ){
        $construction_color .= "
            .copyright-main a:hover, .g-cont-list-right a:hover, .g-footer-column a:hover {
                color: {$footer_bottom_hover_color}
            }            
        ";
    }

    $footer_bottom_bottom_bg_color = $construction_options['footer_bottom_bottom_bg_color'];
    if( !empty($footer_bottom_bottom_bg_color) && $footer_bottom_bottom_bg_color != "#212124" ){
        $construction_color .= "
            .special-bottom-footer, .g-footer-copy {
                background-color: {$footer_bottom_bottom_bg_color};
            }
        ";
    }

    $footer_bottom_bottom_border = $construction_options['footer_bottom_bottom_border'];
    if( !empty($footer_bottom_bottom_border) && $footer_bottom_bottom_border != "#212124" ){
        $construction_color .= "
            .special-bottom-footer {
                border-top: {$footer_bottom_bottom_border['border-top']} {$footer_bottom_bottom_border['border-style']} {$footer_bottom_border['border-color']};
            }            
        ";
    }

    $footer_bottom_bottom_color = $construction_options['footer_bottom_bottom_color'];
    if( !empty($footer_bottom_bottom_color) && $footer_bottom_bottom_color != "#b2b2b2" ){
        $construction_color .= "
            .special-bottom-footer .footer-navi.text-center,.special-bottom-footer .copyright-inner, .special-bottom-footer p, .special-bottom-footer a, .g-footer-copy a, .g-footer-copy p {
                color: {$footer_bottom_bottom_color}
            }
            .footer-navi a:after{
                background: {$footer_bottom_bottom_color} none repeat scroll 0 0;
            }
        ";
    }

    $footer_bottom_bottom_hover_color = $construction_options['footer_bottom_bottom_hover_color'];
    if( !empty($footer_bottom_bottom_hover_color) && $footer_bottom_bottom_hover_color != "#ffffff" ){
        $construction_color .= "
            .special-bottom-footer a:hover, .g-footer-copy a:hover {
                color: {$footer_bottom_bottom_hover_color}
            }            
        ";
    }

    // Custom CSS
    $construction_custom_css = $construction_options['custom_css'];

    wp_add_inline_style( 'construction-style',
        $logo_desktop.
        $construction_typography.
        $construction_color.
        $construction_custom_css
    );

}
add_action( 'wp_enqueue_scripts', 'construction_custom_styling', 21 );

?>