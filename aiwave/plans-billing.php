<!DOCTYPE html>
<html lang="en">

<?php $title='Plans-Billing' ?>

<?php include './partials/head.php' ?>

<body>
    <main class="page-wrapper rbt-dashboard-page">
        <div class="rbt-panel-wrapper">

        <?php include './partials/header_2.php' ?>

            <?php include './partials/pop_mobile.php' ?>

            <!--..:: Imroz Preloader ::..-->
            <?php include './partials/preloader.php' ?>

            <!--..:: Start Left panel ::..-->
            <?php include './partials/start_Left_panel.php' ?>
            <!--..:: End Left panel ::..-->

            <!--..:: Main content ::..-->
            <div class="rbt-main-content mb--0">
                <div class="rbt-daynamic-page-content center-width">

                    <!--..:: Dashboard Center Content ::..-->
                    <div class="rbt-dashboard-content">
                        <div class="banner-area">
                            <!--..:: AiWavesmall Slider ::..-->
                            <div class="settings-area">
                                <h3 class="title">Plans & Billing</h3>
                                <ul class="user-nav">
                                    <li>
                                        <a href="profile-details.php">
                                            <span>Profile Details</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="notification.php">
                                            <span>Notification</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chat-export.php">
                                            <span>Chat Export</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="appearance.php">
                                            <span>Appearance</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="plans-billing.php">
                                            <span>Plans and Billing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sessions.php">
                                            <span>Sessions</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-page pb--50">
                            <!--..:: Pricing Part ::..-->
                            <div class="wrapper">
                                <div class="container">
                                    <div class="row">

                                        <nav class="aiwave-tab">
                                            <div class="tab-btn-grp nav nav-tabs mb-3 text-center justify-content-center" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                                    Monthly
                                                </button>
                                                <button class="nav-link with-badge" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                    Yearly
                                                    <span class="rainbow-badge-card badge-border"
                                            >20% Off</span>
                                                </button>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="tab-content p-0 bg-transparent border-0 border bg-light" id="nav-tabContent">
                                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="row row--15">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt--30">
                                                <div class="rainbow-pricing style-aiwave active">
                                                    <div class="pricing-table-inner">
                                                        <div class="pricing-top">
                                                            <div class="pricing-header">
                                                                <div class="icon">
                                                                    <i class="fa-sharp fa-regular fa-flower"></i>
                                                                </div>
                                                                <h4 class="title color-var-two">Premium</h4>
                                                                <p class="subtitle">For large teams & corportaions</p>
                                                                <div class="pricing">
                                                                    <span class="price-text">$60.50</span>
                                                                    <span class="text">/Per Month</span>

                                                                </div>
                                                            </div>
                                                            <div class="pricing-body">
                                                                <div class="features-section has-show-more">
                                                                    <h6>Features</h6>
                                                                    <ul class="list-style--1 has-show-more-inner-content">
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 12,700
                                                                            7-9 day turnarouord
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                                            Naive development
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                                            Task delivered one-by-one
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 7,700
                                                                            3-5 day turnarouord
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                                            Naive development
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                                            Task delivered one-by-one
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> AI Blog
                                                                            Updates via dashboard & slack
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> Advance
                                                                            Updates via dashboard & slack
                                                                        </li>
                                                                    </ul>
                                                                    <div class="rbt-show-more-btn">Show More</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-footer">
                                                            <a class="btn-default" href="#">Get Started</a>
                                                            <p class="bottom-text">Limited Offer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt--30">
                                                <div class="rainbow-pricing style-aiwave">
                                                    <div class="pricing-table-inner">
                                                        <div class="pricing-top">
                                                            <div class="pricing-header">
                                                                <div class="icon">
                                                                    <i class="fa-sharp fa-regular fa-waveform-lines"></i>
                                                                </div>
                                                                <h4 class="title color-var-three">Enterprise</h4>
                                                                <p class="subtitle">For large teams & corportaions</p>
                                                                <div class="pricing">
                                                                    <span class="price-text">$80.50</span>
                                                                    <span class="text">/Per Month</span>
                                                                </div>
                                                            </div>
                                                            <div class="pricing-body">
                                                                <div class="features-section has-show-more">
                                                                    <h6>Features</h6>
                                                                    <ul class="list-style--1 has-show-more-inner-content">
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 15,700
                                                                            15-30 day turnarouord
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                                            Naive development
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                                            Task delivered one-by-one
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 7,700
                                                                            3-5 day turnarouord
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                                            Naive development
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                                            Task delivered one-by-one
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> AI Blog
                                                                            Updates via dashboard & slack
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> Advance
                                                                            Updates via dashboard & slack
                                                                        </li>
                                                                    </ul>
                                                                    <div class="rbt-show-more-btn">Show More</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-footer">
                                                            <a class="btn-default btn-border" href="#">Get Started</a>
                                                            <p class="bottom-text">Limited Offer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="row row--15">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt--30">
                                                <div class="rainbow-pricing style-aiwave active">
                                                    <div class="pricing-table-inner">
                                                        <div class="pricing-top">
                                                            <div class="pricing-header">
                                                                <div class="icon">
                                                                    <i class="fa-sharp fa-regular fa-flower"></i>
                                                                </div>
                                                                <h4 class="title color-var-two">Premium</h4>
                                                                <p class="subtitle">For large teams & corportaions</p>
                                                                <div class="pricing">
                                                                    <span class="price-text">$60.50</span>
                                                                    <span class="text">/Per Month</span>

                                                                </div>
                                                            </div>
                                                            <div class="pricing-body">
                                                                <div class="features-section has-show-more">
                                                                    <h6>Features</h6>
                                                                    <ul class="list-style--1 has-show-more-inner-content">
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 12,700
                                                                            7-9 day turnarouord
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                                            Naive development
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                                            Task delivered one-by-one
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 7,700
                                                                            3-5 day turnarouord
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                                            Naive development
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                                            Task delivered one-by-one
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> AI Blog
                                                                            Updates via dashboard & slack
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> Advance
                                                                            Updates via dashboard & slack
                                                                        </li>
                                                                    </ul>
                                                                    <div class="rbt-show-more-btn">Show More</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-footer">
                                                            <a class="btn-default" href="#">Get Started</a>
                                                            <p class="bottom-text">Limited Offer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt--30">
                                                <div class="rainbow-pricing style-aiwave">
                                                    <div class="pricing-table-inner">
                                                        <div class="pricing-top">
                                                            <div class="pricing-header">
                                                                <div class="icon">
                                                                    <i class="fa-sharp fa-regular fa-waveform-lines"></i>
                                                                </div>
                                                                <h4 class="title color-var-three">Enterprise</h4>
                                                                <p class="subtitle">For large teams & corportaions</p>
                                                                <div class="pricing">
                                                                    <span class="price-text">$80.50</span>
                                                                    <span class="text">/Per Month</span>
                                                                </div>
                                                            </div>
                                                            <div class="pricing-body">
                                                                <div class="features-section has-show-more">
                                                                    <h6>Features</h6>
                                                                    <ul class="list-style--1 has-show-more-inner-content">
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 15,700
                                                                            15-30 day turnarouord
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                                            Naive development
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                                            Task delivered one-by-one
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 7,700
                                                                            3-5 day turnarouord
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 6+
                                                                            Naive development
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-regular fa-circle-check"></i> 5+
                                                                            Task delivered one-by-one
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> AI Blog
                                                                            Updates via dashboard & slack
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-sharp fa-regular fa-minus-circle"></i> Advance
                                                                            Updates via dashboard & slack
                                                                        </li>
                                                                    </ul>
                                                                    <div class="rbt-show-more-btn">Show More</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-footer">
                                                            <a class="btn-default btn-border" href="#">Get Started</a>
                                                            <p class="bottom-text">Limited Offer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rbt-sm-separator"></div>

                        <!--..:: Start Pricing Compare Detailed  ::..-->
                        <div class="rainbow-pricing-detailed-area mt--60">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title text-left mb--30" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                                        <h3 class="title w-600 mb--0">Detailed Compare</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row row--15">
                                <div class="col-lg-12">
                                    <div class="rainbow-compare-table style-1">
                                        <table class="table-responsive">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th class="sm-radius-top-left">Free</th>
                                                    <th class="style-prymary">Creator</th>
                                                    <th class="style-prymary">Business</th>
                                                    <th class="style-prymary sm-radius-top-right">
                                                        Enterprise
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="heading-row">
                                                    <td>
                                                        <h6>Price & Credits</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Price & Credits</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Price & Credits</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Price & Credits</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Price & Credits</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Photo Avatar</td>
                                                    <td>Unlimited</td>
                                                    <td>Unlimited</td>
                                                    <td>Unlimited</td>
                                                    <td>Unlimited</td>
                                                </tr>
                                                <tr>
                                                    <td>Instant Avatar</td>
                                                    <td>Paid Add-On</td>
                                                    <td>Paid Add-On</td>
                                                    <td>Paid Add-On</td>
                                                    <td>Customizable</td>
                                                </tr>
                                                <tr>
                                                    <td>Unit Price</td>
                                                    <td>Free</td>
                                                    <td>$2 / Credit Monthly</td>
                                                    <td>$3 / Credit Monthly</td>
                                                    <td>Customizable</td>
                                                </tr>
                                                <tr>
                                                    <td>Credit Plans</td>
                                                    <td>1 Credit</td>
                                                    <td>15, 30, 60, 90, 120 / Month</td>
                                                    <td>30, 60, 120, 180, 300 / Month</td>
                                                    <td>Customizable</td>
                                                </tr>
                                                <tr>
                                                    <td>Switch/Cancel Anytime</td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>Customizable</td>
                                                </tr>
                                                <tr>
                                                    <td>Unit Price</td>
                                                    <td>Free</td>
                                                    <td>$2 / Credit Monthly</td>
                                                    <td>$3 / Credit Monthly</td>
                                                    <td>Customizable</td>
                                                </tr>
                                                <tr class="heading-row">
                                                    <td>
                                                        <h6>Avatars</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Avatars</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Avatars</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Avatars</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Avatars</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Public Avatars</td>
                                                    <td>Free</td>
                                                    <td>100+ Premium Avatars</td>
                                                    <td>100+ Premium Avatars</td>
                                                    <td>100+ Premium Avatars</td>
                                                </tr>
                                                <tr>
                                                    <td>Photo Avatar</td>
                                                    <td>Unlimited</td>
                                                    <td>Unlimited</td>
                                                    <td>Unlimited</td>
                                                    <td>Unlimited</td>
                                                </tr>
                                                <tr>
                                                    <td>Instant Avatar</td>
                                                    <td>Paid Add-On</td>
                                                    <td>Paid Add-On</td>
                                                    <td>Paid Add-On</td>
                                                    <td>Customizable</td>
                                                </tr>
                                                <tr>
                                                    <td>Studio Avatar</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr class="heading-row">
                                                    <td>
                                                        <h6>All Features</h6>
                                                    </td>
                                                    <td>
                                                        <h6>All Features</h6>
                                                    </td>
                                                    <td>
                                                        <h6>All Features</h6>
                                                    </td>
                                                    <td>
                                                        <h6>All Features</h6>
                                                    </td>
                                                    <td>
                                                        <h6>All Features</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Avatar FaceSwap</td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Photo Avatar Generation</td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Text2Image</td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>GPT4 Script Writer</td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>AI Matting</td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>URL To Video</td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr class="heading-row">
                                                    <td>
                                                        <h6>Team Collaboration</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Team Collaboration</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Team Collaboration</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Team Collaboration</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Team Collaboration</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Space Seats</td>
                                                    <td>2 Seats</td>
                                                    <td>3 Seats</td>
                                                    <td>5 Seats</td>
                                                    <td>Customizable</td>
                                                </tr>
                                                <tr>
                                                    <td>Credit Control</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Role Control</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Usage Report</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Brand Kit</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Access Control</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>SSO</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr class="heading-row">
                                                    <td>
                                                        <h6>Video Creation</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Video Creation</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Video Creation</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Video Creation</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Video Creation</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Audio Input</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Video Duration</td>
                                                    <td>1-Min Max Duration</td>
                                                    <td>5-Min Max Duration</td>
                                                    <td>20-Min Max Duration</td>
                                                    <td>60-Min Max Duration</td>
                                                </tr>
                                                <tr>
                                                    <td>Video Templates</td>
                                                    <td>400+</td>
                                                    <td>400+</td>
                                                    <td>400+</td>
                                                    <td>400+</td>
                                                </tr>
                                                <tr>
                                                    <td>Stock Elements</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Audio Recording</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Import PPT/PDF</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Image/Video Background</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Background Music</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Stock Library</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Video Animation</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1080P Export</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Audio Input</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Priority Process</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>API Integration</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4K Export</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Auto Captions</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>SRT Download</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr class="heading-row">
                                                    <td>
                                                        <h6>Video Share</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Video Share</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Video Share</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Video Share</h6>
                                                    </td>
                                                    <td>
                                                        <h6>Video Share</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Audio Input</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Stock Elements</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Audio Recording</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Import PPT/PDF</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Image/Video Background</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Background Music</td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon bg-dark">
                                                <i class="fa-sharp fa-solid fa-xmark"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon">
                                                <i class="fa-sharp fa-solid fa-check"></i>
                                            </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--..:: Start FAQ Section  ::..-->
                        <div class="row rainbow-section-gap row--20">
                            <div class="col-lg-12">
                                <div class="rainbow-accordion-style  accordion">
                                    <div class="accordion" id="accordionExamplea">
                                        <div class="accordion-item card ">
                                            <h2 class="accordion-header card-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    What is AiWave? How does it work?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExamplea">
                                                <div class="accordion-body card-body">
                                                    AiWaveis an AI-powered messaging platform that understands and responds to your natural language queries. Ask anything you'd typically ask a human assistant—get weather updates, news, restaurant recommendations, and more!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item card ">
                                            <h2 class="accordion-header card-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    What kind of questions can I ask AiWave?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExamplea">
                                                <div class="accordion-body card-body">
                                                    AiWave, an AI-driven messaging platform, adeptly communicates with users using natural language understanding. It delivers helpful responses to your inquiries and requests.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item card ">
                                            <h2 class="accordion-header card-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Can I get update regularly and For how long do I get updates?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExamplea">
                                                <div class="accordion-body card-body">
                                                    Yes, We will get update the AiWave. And you can get it any time. Next
                                                    time we will comes with more feature. You can be get update for
                                                    unlimited times. Our dedicated team works for update.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item card ">
                                            <h2 class="accordion-header card-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    How can I get the customer support?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExamplea">
                                                <div class="accordion-body card-body">
                                                    After purchasing the product need you any support you can be share with
                                                    us with sending mail to rainbowit10@gmail.com.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item card ">
                                            <h2 class="accordion-header card-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    HIs my data safe with AiWave?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExamplea">
                                                <div class="accordion-body card-body">
                                                    Feel free to toss any questions at AiWave, just like you would with a human helper—whether it's about the weather, the latest news, restaurant suggestions, or anything else you fancy!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item card ">
                                            <h2 class="accordion-header card-header" id="headingSix">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    Is AiWaveavailable in multiple languages?
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamplea">
                                                <div class="accordion-body card-body">
                                                    Yes, AiWaveis designed to support multiple languages, offering a versatile and inclusive communication experience for users worldwide.
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--..::New Chat Section Modal HTML ::..-->
        <div id="newchatModal" class="modal rbt-modal-box copy-modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content wrapper">
                    <div class="section-title text-center mb--30 sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                        <h3 class="title mb--0 w-600">Unlock the power of AI</h3>
                    </div>
                    <div class="genarator-section">
                        <ul class="genarator-card-group">
                            <li>
                                <a href="text-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/text.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Text Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="image-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/photo.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Image Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="image-editor.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/photo.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Photo Editor</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="code-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/code-editor.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Code Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="text-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/text-voice.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Text to speech</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="text-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/voice.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Speech to text</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="video-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/video-camera.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Video Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="genarator-card disabled" tabindex="-1">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/website-design.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Website Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <span class="rainbow-badge-card">Coming</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="code-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/code-editor.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">HTML Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="text-generator.php" class="genarator-card disabled" tabindex="-1">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/document.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Chat with Documents</h5>
                                        </div>
                                        <div class="right-align">
                                            <span class="rainbow-badge-card">Coming</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="email-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/email.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Email Writer</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="genarator-card disabled" tabindex="-1">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/lyrics.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Lyrics Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <span class="rainbow-badge-card">Coming</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="close-button" data-bs-dismiss="modal">
                        <i class="fa-sharp fa-regular fa-x"></i>
                    </button>
                </div>
            </div>
        </div>

        <!--..::Like_DisLike_Share Modal HTML ::..-->
        <?php include './partials/like_section.php' ?>

        <!--..::DisLike Section Modal HTML ::..-->
        <?php include './partials/dislike.php' ?>

        <!--..::Share Section Modal HTML ::..-->
        <?php include './partials/share.php' ?>

    </main>
    <!--..:: All Scripts  ::..-->
    <?php include './partials/Scripts.php' ?>
</body>

</html>