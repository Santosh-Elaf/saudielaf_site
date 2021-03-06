<?php

$header_contact_info_show     = buildbench_option('header_contact_info_show', false);
$header_contact_phone_title   = buildbench_option('header_contact_phone_title');
$header_contact_phone         = buildbench_option('header_contact_phone');
$header_contact_mail_title    = buildbench_option('header_contact_mail_title');
$header_contact_mail          = buildbench_option('header_contact_mail');
$header_contact_address_title = buildbench_option('header_contact_address_title');
$header_contact_address       = buildbench_option('header_contact_address');

$header_nav_search_section    = buildbench_option('header_nav_search_section', true);
$header_quota_button          = buildbench_option('header_quota_button', true);
$header_quota_text            = buildbench_option('header_quota_text', esc_html__('Get a quote', 'buildbench'));
$header_quota_url             = buildbench_option('header_quota_url', '#');
$header_nav_sticky            = buildbench_option('header_nav_sticky', false);

// header contact info link
$header_contact_link            = buildbench_option('header_contact_link');
$header_mail_link               = buildbench_option('header_mail_link');
$header_address_link            = buildbench_option('header_address_link');

?>


<header id="header" class="header-box">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <!--  <a class="nav-brand" href="#"></a>-->
                    <div class="logo-area">
                        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="img-fluid" src="<?php
                                                        echo esc_url(
                                                            buildbench_src(
                                                                'general_main_logo',
                                                                BUILDBENCH_IMG . '/logo-dark.png'
                                                            )
                                                        );
                                                        ?>" alt="<?php bloginfo('name'); ?>">
                        </a>
                    </div>
                </div><!-- Col end -->
                <div class="col-lg-10">
                    <div class="top-bar pull-right">
                        <ul class="header-nav-right-info">

                            <li>
                                    <?php if (isset($header_contact_link) && $header_contact_link  != '') { ?>
                                        <a href="<?php echo esc_url($header_contact_link); ?>">
                                            <i class="icon icon-phone2"></i>
                                            <span> <?php echo esc_html($header_contact_phone); ?> </span>
                                            <?php echo esc_html($header_contact_phone_title); ?>
                                        </a>
                                    <?php } else { ?>
                                        <i class="icon icon-phone2"></i>
                                        <span> <?php echo esc_html($header_contact_phone); ?> </span>
                                        <?php echo esc_html($header_contact_phone_title); ?>
                                    <?php }  ?>

                                </li>
                                <li>
                                    <?php if (isset($header_mail_link) && $header_mail_link != '') { ?>
                                        <a href="<?php echo esc_url($header_mail_link); ?>">
                                            <i class="icon icon-envelope2"></i>
                                            <span> <?php echo esc_html($header_contact_mail); ?> </span>
                                            <?php echo esc_html($header_contact_mail_title); ?>
                                        </a>
                                    <?php } else { ?>

                                        <i class="icon icon-envelope2"></i>
                                        <span> <?php echo esc_html($header_contact_mail); ?> </span>
                                        <?php echo esc_html($header_contact_mail_title); ?>

                                    <?php }  ?>
                                </li>
                                <li>
                                    <?php if (isset($header_address_link) && $header_address_link != '') { ?>
                                        <a href="<?php echo esc_url($header_address_link); ?>" target="_blank">
                                            <i class="icon icon-map-marker1"></i>
                                            <span> <?php echo esc_html($header_contact_address); ?> </span>
                                            <?php echo esc_html($header_contact_address_title); ?>
                                        </a>
                                    <?php } else { ?>
                                        <i class="icon icon-map-marker1"></i>
                                        <span> <?php echo esc_html($header_contact_address); ?> </span>
                                        <?php echo esc_html($header_contact_address_title); ?>
                                    <?php }  ?>

                                </li>
                                
                        </ul>
                    </div><!-- Top bar end -->

                </div>
            </div><!-- .row end -->
        </div>
    </div>
    <!-- navbar container start -->
    <div class="navbar-container <?php echo esc_attr($header_nav_sticky == true ? 'navbar-sticky' : ''); ?> ">
        <div class="container">
            <nav class="navbar navbar-light xs-navbar navbar-expand-lg">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-nav" aria-controls="primary-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php get_template_part('template-parts/navigations/nav', 'primary'); ?>

                <ul class="nav-right ml-auto form-inline">
                    <?php if ($header_nav_search_section == true) : ?>
                        <li class="nav-search-btn">
                            <a href="#modal-popup-2" class="xs-modal-popup"><i class="icon icon-search1"></i></a>
                            <!-- xs modal -->
                        </li>
                    <?php endif; ?>
                    <?php if ($header_quota_button == true && $header_quota_text != '') : ?>
                        <li class="nav-button">
                            <a href="<?php echo esc_url($header_quota_url); ?>" class="quote-btn"> <?php echo esc_html($header_quota_text); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul><!-- Right menu end -->

            </nav>


        </div>
    </div>
    <!-- navbar contianer end -->
</header>