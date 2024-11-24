<!DOCTYPE html>
<html lang="en">

<?php $title='Styleguide' ?>

<?php include './partials/head.php' ?>

<body>
    <main class="page-wrapper">
        <!--..:: Start Header Top Area  ::..-->
        <?php include './partials/top_header.php' ?>
        <!--..:: End Header Top Area  ::..-->

        <!--..:: Start Header Area  ::..-->
        <?php include './partials/header_1.php' ?>
        <!--..:: End Header Area  ::..-->
        
        <?php include './partials/pop_mobile.php' ?>

        <!--..:: Imroz Preloader ::..-->
        <?php include './partials/preloader.php' ?>

        <!--..:: Start Breadcrumb Area  ::..-->
        <div class="main-content">
            <!--..:: Start Breadcarumb area  ::..-->
            <div class="breadcrumb-area breadcarumb-style-1 pt--180 pb--100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-inner text-center">
                                <h3 class="title h3">Style Guide</h3>
                                <ul class="page-list">
                                    <li class="rainbow-breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="rainbow-breadcrumb-item active">Style Guide</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--..:: End Breadcarumb area  ::..-->
        </div>

        <div class="rbt-style-guide-area rbt-utilize-area rainbow-section-gap-big">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3">
                        <div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                            <div class="inner">
                                <div class="content-item-content">
                                    <div class="rbt-widget-details">
                                        <nav class="onepagenav">
                                            <ul class="mainmenu rbt-course-details-list-wrapper">
                                                <li class="current"><a href="#colorPalette"><span>1. Color Palette</span></a></li>
                                                <li><a href="#gradient"><span>2. Color Gradient</span></a></li>
                                                <li><a href="#typography"><span>3. Typography</span></a></li>
                                                <li><a href="#formElements"><span>4. Form Elements</span></a></li>
                                                <li><a href="#pagination"><span>5. Pagination</span></a></li>
                                                <li><a href="#avatars"><span>6. Avatars</span></a></li>
                                                <li><a href="#animatedHeading"><span>7. Animated Heading</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">

                        <div id="colorPalette" class="rbt-elements-area rbt-shadow-box mb--60">
                            <div class="wrapper">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Color Palette</h4>
                                </div>

                                <div class="row g-5">

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-primary radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#805AF5</span>
                                                <h6 class="title mb--0">Primary Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-primary-alt radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#35316f</span>
                                                <h6 class="title mb--0">Primary Alt Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-secondary radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#ffffff</span>
                                                <h6 class="title mb--0">Secondary Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-heading radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#800080</span>
                                                <h6 class="title mb--0">Heading Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-bg-one radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#0E0C15</span>
                                                <h6 class="title mb--0">Background Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-dark radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#21242D</span>
                                                <h6 class="title mb--0">Dark Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-darker radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">rgba(6, 6, 6, 0.7)</span>
                                                <h6 class="title mb--0">Darker Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-darkest radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">rgba(0, 0, 0, 0.3)</span>
                                                <h6 class="title mb--0">Darkest Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-white-off radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">rgba(255,255,255,0.05)</span>
                                                <h6 class="title mb--0">white off Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-white radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#FFFFFF</span>
                                                <h6 class="title mb--0">white Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-body radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#BCC3D7</span>
                                                <h6 class="title mb--0">Body Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-link radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#B9B9B9</span>
                                                <h6 class="title mb--0">Link Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-border radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#2E313D</span>
                                                <h6 class="title mb--0">Border Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-border radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#e5e7eb</span>
                                                <h6 class="title mb--0">Light Border Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-gray radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#3E414B</span>
                                                <h6 class="title mb--0">gray Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-midgray radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#878787</span>
                                                <h6 class="title mb--0">Midgray Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-success radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#3EB75E</span>
                                                <h6 class="title mb--0">success Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-danger radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#FF0003</span>
                                                <h6 class="title mb--0">danger Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-warning radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#FFC876</span>
                                                <h6 class="title mb--0">warning Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-color-info radius-10"></div>
                                            <div class="content mt--10">
                                                <span class="rbt-title-style-2">#1BA2DB</span>
                                                <h6 class="title mb--0">info Color</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div id="gradient" class="rbt-elements-area rbt-shadow-box mb--60">
                            <div class="wrapper">

                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Color Gradient</h4>
                                </div>

                                <div class="row g-5">

                                    <div class="col-lg-3">
                                        <div class="color-box-inner">
                                            <div class="color-box bg-gradient-1 radius-10"></div>
                                            <div class="content mt--10">
                                                <h6 class="title mb--0">Gradient 1</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div id="typography" class="rbt-elements-area rbt-shadow-box mb--60">
                            <div class="wrapper">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Typography</h4>
                                </div>

                                <div class="row g-5">
                                    <div class="col-lg-6">
                                        <h1>H1. Heading 1</h1>
                                        <h2>H2. Heading 2</h2>
                                        <h3>H3. Heading 3</h3>
                                        <h4>H4. Heading 4</h4>
                                        <h5>H5. Heading 5</h5>
                                        <h6>H6. Heading 6</h6>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="b1">B1- Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                            Similique non ipsam reiciendis.</p>
                                        <p class="b2">B2- Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                            Similique non ipsam reiciendis.</p>
                                        <p class="b3">B3- Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                            Similique non ipsam reiciendis.</p>
                                        <p>Befault- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique non
                                            ipsam reiciendis.</p>
                                    </div>
                                </div>

                                <div class="row mt--40">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Heading Style</h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="section-title text-center">
                                            <h2 class="title">Heading Style One.</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt--60">
                                        <div class="section-title text-center">
                                            <h2 class="rbt-title-style-2">Heading Style Two.</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt--60">
                                        <div class="section-title text-center">
                                            <h2 class="rbt-title-style-3">Heading Style Three.</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt--60">
                                        <div class="section-title text-center">
                                            <h2 class="rbt-short-title">Heading Short Title.</h2>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="formElements" class="rbt-elements-area rbt-shadow-box mb--60">
                            <div class="wrapper">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Form Elements</h4>
                                </div>
                                <form action="#" class="rbt-image-genarator-row rbt-default-form row row--15">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="firstname4">First Name</label>
                                            <input id="firstname4" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="lastname4">Last Name</label>
                                            <input id="lastname4" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="username4">User Name</label>
                                            <input id="username4" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phonenumber4">Phone Number</label>
                                            <input id="phonenumber4" type="tel">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="bio4">Bio</label>
                                            <textarea id="bio4" cols="20" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 mt--20">
                                        <div class="form-group mb--0">
                                            <a class="btn-default" href="#">Update Info</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div id="pagination" class="rbt-elements-area rbt-shadow-box mb--60">
                            <div class="wrapper">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Pagination</h4>
                                </div>
                                <div class="row g-5">
                                    <div class="col-lg-12">
                                        <nav>
                                            <ul class="rbt-pagination justify-content-start">
                                                <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                                                <li><a href="#">1</a></li>
                                                <li class="active"><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-lg-12">
                                        <nav>
                                            <ul class="rbt-pagination justify-content-center">
                                                <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                                                <li><a href="#">1</a></li>
                                                <li class="active"><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-lg-12">
                                        <nav>
                                            <ul class="rbt-pagination justify-content-end">
                                                <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                                                <li><a href="#">1</a></li>
                                                <li class="active"><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="avatars" class="rbt-elements-area rbt-shadow-box mb--60">
                            <div class="wrapper">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Avatars</h4>
                                </div>
                                <div class="row g-5 align-items-center">
                                    <div class="col-lg-2">
                                        <div class="rbt-avatars m-auto size-lg">
                                            <img src="assets/images/team/team-01.png" alt="Author Images">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="rbt-avatars m-auto">
                                            <img src="assets/images/team/team-02.png" alt="Author Images">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="rbt-avatars m-auto size-sm">
                                            <img src="assets/images/team/team-03.png" alt="Author Images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="animatedHeading" class="rbt-elements-area rbt-shadow-box mb--60">
                            <div class="wrapper">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Animated Heading</h4>
                                </div>
                                <div class="row g-5">
                                    <div class="col-lg-12">

                                        <h3 class="title">Clip Animated
                                            <span class="header-caption">
                                            <span class="cd-headline clip is-full-width">
                                                <span class="cd-words-wrapper" style="width: 156px;">
                                                    <b class="theme-gradient is-hidden">Clip One.</b>
                                                    <b class="theme-gradient is-visible">Clip Two.</b>
                                                    <b class="theme-gradient is-hidden">Clip Three.</b>
                                                </span>
                                            </span>
                                            </span>
                                        </h3>

                                        <h3 class="title">Rotate Animated
                                            <span class="header-caption">
                                                <span class="cd-headline rotate-1">
                                                    <span class="cd-words-wrapper" style="width: 221px;">
                                                        <b class="theme-gradient is-visible">Rotate One.</b>
                                                        <b class="theme-gradient is-hidden">Rotate Two.</b>
                                                        <b class="theme-gradient is-hidden">Rotate Three.</b>
                                                    </span>
                                            </span>
                                            </span>
                                        </h3>

                                        <h3 class="title">Loading Animated
                                            <span class="header-caption">
                                            <span class="cd-headline loading-bar">
                                                <span class="cd-words-wrapper is-loading">
                                                    <b class="theme-gradient is-hidden">Loading One.</b>
                                                    <b class="theme-gradient is-hidden">Loading Two.</b>
                                                    <b class="theme-gradient is-visible">Loading Three.</b>
                                                </span>
                                            </span>
                                            </span>
                                        </h3>

                                        <h3 class="title">Zoom Animated
                                            <span class="header-caption">
                                            <span class="cd-headline zoom">
                                                <span class="cd-words-wrapper" style="width: 201px;">
                                                    <b class="theme-gradient is-hidden">Zoom One.</b>
                                                    <b class="theme-gradient is-visible">Zoom Two.</b>
                                                    <b class="theme-gradient is-hidden">Zoom Three.</b>
                                                </span>
                                            </span>
                                            </span>
                                        </h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!--..:: Start Footer Area  ::..-->
    <?php include './partials/footer.php' ?>
    <!--..:: End Footer Area  ::..-->

    <!--..:: Start Copy Right Area  ::..-->
   <?php include './partials/copyRight.php' ?>
    <!--..:: End Copy Right Area  ::..-->

    <!--..:: All Scripts  ::..-->
    <?php include './partials/Scripts.php' ?>

</html>