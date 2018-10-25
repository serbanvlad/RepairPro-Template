<?php
 include('elements/styles.php');
 include('elements/menu.php');
?>

<!--   Slider Section-->

<div class="container-fluid">
    <div class="row">
        <div class="slider_row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="item_image">
                            <img class="d-block w-100 image_slider" src="https://image.ibb.co/iCoVQz/slider_1.jpg" alt="First slide">
                        </div>
                        <div class="item_content">
                            <div class="item_subtitle">
                                <h3>Want to Repair</h3>
                            </div>
                            <div class="item_headline">
                                <h1>Laptop & Computer</h1>
                            </div>
                            <div class="item_p">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut <br> labore et dolore magna aliqu enim ad minim veniam.</p>
                                <div class="item_cta">
                                    <button>PURCHASE NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://image.ibb.co/f7PgXe/slider_2.jpg" alt="Second slide">
                        <div class="item_content">
                            <div class="item_subtitle">
                                <h3>Want to Repair</h3>
                            </div>
                            <div class="item_headline">
                                <h1>Laptop & Computer</h1>
                            </div>
                            <div class="item_p">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut <br> labore et dolore magna aliqu enim ad minim veniam.</p>
                                <div class="item_cta">
                                    <button>PURCHASE NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<!--   Welcome Section -->

<div class="welcome_to">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <div class="about_bg_left">
                    <img src="https://image.ibb.co/i4XLdK/about_bg.png">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="about_bg_right">
                    <div class="right_overlay"></div>
                    <img src="https://image.ibb.co/mtSaCe/about_bg.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="our_repair_pro">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="welcome_texts">
                        <h3>Welcome to</h3>
                        <h2>Our RepairPro</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut labore et dolore magna aliqu enim ad minim veniam.</p>
                        <button>CONTACT US</button>
                        <button class="button_style2">EXPLORE MORE</button>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="video_section">
                        <div class="play_img">
                            <div class="play_icon">
                                <button class="modal_toggle"><i class="fa fa-play" style="font-size:24px"></i></button>
                            </div>
                            <div class="video_image_box">
                                <img src="https://image.ibb.co/hMdXse/video_img.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--    Modal Snippet-->

<div class="modal">
    <div class="modal_overlay">
        <div class="modal_content">
            <div class="modal_animation_w"></div>
            <div class="modal_animation_h">
                <iframe id="youtube_video" width="100%" height="100%" src="https://www.youtube.com/embed/mbCrjhau4Qg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!--    Our Services Section-->

<div class="our_services">
    <div class="our_services_overlay"></div>
    <div class="container our_services_container">
        <div class="row our_services_row">
            <div class="section_title">
                <h2>Our Services</h2>
                <div class="section_icon">
                    <i class="fa fa-wrench" style="font-size:35px"></i>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="column_content">
                    <div class="box_inner box_inner_shop">
                        <div class="img_inner">
                            <img src="https://image.ibb.co/npfBne/asset_2.jpg">
                        </div>
                        <div class="box_overlay"></div>
                        <div class="inner_content">
                            <p>Lorem ipsum dolor sit amet, consecte tur adipisicing elit, sed do eiusmtempor inciddunt ut labore.</p>
                            <button>LEARN MORE</button>
                        </div>
                    </div>
                    <div class="box_description">
                        <h4>Smartphone Repairs</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="column_content column_content_responsive">
                    <div class="box_inner">
                        <div class="img_inner">
                            <img src="https://image.ibb.co/cBjFDK/asset_3.jpg">
                        </div>
                        <div class="box_overlay"></div>
                        <div class="inner_content">
                            <p>Lorem ipsum dolor sit amet, consecte tur adipisicing elit, sed do eiusmtempor inciddunt ut labore.</p>
                            <button>LEARN MORE</button>
                        </div>
                    </div>
                    <div class="box_description">
                        <h4>Tablet & iPad Repairs</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="column_content">
                    <div class="box_inner">
                        <div class="img_inner">
                            <img src="https://image.ibb.co/i13mLz/asset_4.jpg">
                        </div>
                        <div class="box_overlay"></div>
                        <div class="inner_content">
                            <p>Lorem ipsum dolor sit amet, consecte tur adipisicing elit, sed do eiusmtempor inciddunt ut labore.</p>
                            <button>LEARN MORE</button>
                        </div>
                    </div>
                    <div class="box_description">
                        <h4>Mac & PC Repairs</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--    Our Categories Section-->

<div class="container">
    <div class="row our_categories_row">
        <div class="categories_section_title">
            <h2>Our Categories</h2>
            <div class="section_icon">
                <i class="fa fa-wrench" style="font-size:35px"></i>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="categories_box">
                <div class="icon_box">
                    <i class="fa fa-mobile-phone" style="font-size:45px"></i>
                </div>
                <div class="categories_box_content">
                    <h4>Phone Repair</h4>
                    <p>Lorem ipsum dolor sit amet cons tur adipisicing elit, sed do eiusmtempor incid.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="categories_box">
                <div class="icon_box">
                    <i class="fa fa-mobile-phone" style="font-size:45px"></i>
                </div>
                <div class="categories_box_content">
                    <h4>Phone Repair</h4>
                    <p>Lorem ipsum dolor sit amet cons tur adipisicing elit, sed do eiusmtempor incid.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="categories_box">
                <div class="icon_box">
                    <i class="fa fa-mobile-phone" style="font-size:45px"></i>
                </div>
                <div class="categories_box_content">
                    <h4>Phone Repair</h4>
                    <p>Lorem ipsum dolor sit amet cons tur adipisicing elit, sed do eiusmtempor incid.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="categories_box">
                <div class="icon_box">
                    <i class="fa fa-mobile-phone" style="font-size:45px"></i>
                </div>
                <div class="categories_box_content">
                    <h4>Phone Repair</h4>
                    <p>Lorem ipsum dolor sit amet cons tur adipisicing elit, sed do eiusmtempor incid.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="categories_box">
                <div class="icon_box">
                    <i class="fa fa-mobile-phone" style="font-size:45px"></i>
                </div>
                <div class="categories_box_content">
                    <h4>Phone Repair</h4>
                    <p>Lorem ipsum dolor sit amet cons tur adipisicing elit, sed do eiusmtempor incid.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="categories_box">
                <div class="icon_box">
                    <i class="fa fa-mobile-phone" style="font-size:45px"></i>
                </div>
                <div class="categories_box_content">
                    <h4>Phone Repair</h4>
                    <p>Lorem ipsum dolor sit amet cons tur adipisicing elit, sed do eiusmtempor incid.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--    Counter Section-->

<div class="counter">
    <div class="counter_overlay"></div>
    <div class="container">
        <div class="row counter_row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="title_box">
                    <span class="count" data-delay="1000">25</span>
                    <div class="counter_box_divider"></div>
                    <h4>Years Experience</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="title_box">
                    <span class="count" data-delay="1000">1250</span>
                    <div class="counter_box_divider"></div>
                    <h4>Happy Coustomers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="title_box title_box_responsive">
                    <span class="count" data-delay="1000">125</span>
                    <div class="counter_box_divider"></div>
                    <h4>Expert Technicians</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="title_box title_box_responsive">
                    <span class="count" data-delay="1000">3325</span>
                    <div class="counter_box_divider"></div>
                    <h4>Total Works Done</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!--    Choose Us Section-->

<div class="container">
    <div class="row choose_us_row">
        <div class="categories_section_title">
            <h2>Why Choose Us</h2>
            <div class="section_icon">
                <i class="fa fa-wrench" style="font-size:35px"></i>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="choose_us_box">
                <div class="choose_us_box_content">
                    <h4>Phone Repair</h4>
                    <p>Lorem ipsum dolor sit amet cons tur adipisicing elit, sed do eiusmtempor incid.</p>
                </div>
                <div class="choose_us_icon">
                    <i class="fa fa-mobile-phone" style="font-size:45px"></i>
                </div>
            </div>
            <div class="choose_us_box">
                <div class="choose_us_box_content">
                    <h4>Phone Repair</h4>
                    <p>Lorem ipsum dolor sit amet cons tur adipisicing elit, sed do eiusmtempor incid.</p>
                </div>
                <div class="choose_us_icon">
                    <i class="fa fa-mobile-phone" style="font-size:45px"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="phone_img">
                <img src="https://image.ibb.co/b6vNtK/asset_5.png">
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="choose_us_box_right">
                <div class="choose_us_box_content_right">
                    <h4>Phone Repair</h4>
                    <p>Lorem ipsum dolor sit amet cons tur adipisicing elit, sed do eiusmtempor incid.</p>
                </div>
                <div class="choose_us_icon_right">
                    <i class="fa fa-mobile-phone" style="font-size:45px"></i>
                </div>
            </div>
            <div class="choose_us_box_right">
                <div class="choose_us_box_content_right">
                    <h4>Phone Repair</h4>
                    <p>Lorem ipsum dolor sit amet cons tur adipisicing elit, sed do eiusmtempor incid.</p>
                </div>
                <div class="choose_us_icon_right">
                    <i class="fa fa-mobile-phone" style="font-size:45px"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!--    Appointment Section-->

<div class="appointment_section">
    <div class="left_image"></div>
    <div class="right_image"></div>
    <div class="right_image_overlay"></div>
    <div class="left_image_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 offset-lg-6 offset-md-12 offset-12">
                <div class="appointment_content">
                    <div class="appointment_texts">
                        <div class="appointment_title">
                            <h3>Want to</h3>
                        </div>
                        <div class="appointment_headline">
                            <h2>Make a Schedule</h2>
                        </div>
                    </div>
                    <div class="contact_form_box">
                        <div class="first_inputs">
                            <input class="input_type input_type_responsive" type="text" id="fname" name="firstname" placeholder="Name">
                            <input class="input_type input_type_responsive" type="text" id="fname" name="firstname" placeholder="Email">
                        </div>
                        <div class="first_inputs">
                            <input class="input_type input_type_responsive" type="text" id="fname" name="firstname" placeholder="Phone">
                            <input class="input_type input_type_responsive" type="text" id="fname" name="firstname" placeholder="Date">
                        </div>
                        <div class="first_inputs">
                            <input class="input_type input_type_responsive" type="text" id="fname" name="firstname" placeholder="Time">
                            <input class="input_type input_type_responsive" type="text" id="fname" name="firstname" placeholder="Select Service">
                        </div>
                        <div class="button_cta">
                            <button>MAKE APPOINTMENT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--    Experts Section-->

<div class="container">
    <div class="row experts_row">
        <div class="categories_section_title">
            <h2>Meet Our Experts</h2>
            <div class="section_icon">
                <i class="fa fa-wrench" style="font-size:35px"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="image_container">
                <div class="image_inner">
                    <div class="overlay_inner"></div>
                    <div class="photo_inner">
                        <img src="https://image.ibb.co/kLB3kz/asset_6.jpg">
                    </div>
                    <div class="icons_inner">
                        <div class="icon_box_inner">
                            <a href="#"><i class="fa fa-facebook-f" style="font-size:14px"></i></a>
                        </div>
                        <div class="icon_box_inner">
                            <a href="#"><i class="fa fa-twitter" style="font-size:14px"></i></a>
                        </div>
                        <div class="icon_box_inner">
                            <a href="#"><i class="fa fa-vimeo" style="font-size:14px"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text_bottom text_bottom_responsive">
                <h4>Charles Nicholes</h4>
                <p>Tablet Expert</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="image_container">
                <div class="image_inner">
                    <div class="overlay_inner"></div>
                    <div class="photo_inner">
                        <img src="https://image.ibb.co/kLB3kz/asset_6.jpg">
                    </div>
                    <div class="icons_inner">
                        <div class="icon_box_inner">
                            <a href="#"><i class="fa fa-facebook-f" style="font-size:14px"></i></a>
                        </div>
                        <div class="icon_box_inner">
                            <a href="#"><i class="fa fa-twitter" style="font-size:14px"></i></a>
                        </div>
                        <div class="icon_box_inner">
                            <a href="#"><i class="fa fa-vimeo" style="font-size:14px"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text_bottom text_bottom_responsive">
                <h4>Charles Nicholes</h4>
                <p>Tablet Expert</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="image_container">
                <div class="image_inner">
                    <div class="overlay_inner"></div>
                    <div class="photo_inner">
                        <img src="https://image.ibb.co/kLB3kz/asset_6.jpg">
                    </div>
                    <div class="icons_inner">
                        <div class="icon_box_inner">
                            <a href="#"><i class="fa fa-facebook-f" style="font-size:14px"></i></a>
                        </div>
                        <div class="icon_box_inner">
                            <a href="#"><i class="fa fa-twitter" style="font-size:14px"></i></a>
                        </div>
                        <div class="icon_box_inner">
                            <a href="#"><i class="fa fa-vimeo" style="font-size:14px"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text_bottom text_bottom_mobile">
                <h4>Charles Nicholes</h4>
                <p>Tablet Expert</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="image_container">
                <div class="image_inner">
                    <div class="overlay_inner"></div>
                    <div class="photo_inner">
                        <img src="https://image.ibb.co/kLB3kz/asset_6.jpg">
                    </div>
                    <div class="icons_inner">
                        <div class="icon_box_inner">
                            <a href="#"><i class="fa fa-facebook-f" style="font-size:14px"></i></a>
                        </div>
                        <div class="icon_box_inner">
                            <a href="#"><i class="fa fa-twitter" style="font-size:14px"></i></a>
                        </div>
                        <div class="icon_box_inner">
                            <a href="#"><i class="fa fa-vimeo" style="font-size:14px"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text_bottom text_bottom_mobile">
                <h4>Charles Nicholes</h4>
                <p>Tablet Expert</p>
            </div>
        </div>
    </div>
</div>


<!--    Working Process-->


<div class="working_process">
    <div class="container">
        <div class="row">
            <div class="categories_section_title">
                <h2>Working Proccess</h2>
                <div class="section_icon">
                    <i class="fa fa-wrench" style="font-size:35px"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="process_container">
                    <div class="icon_number">
                        <div class="process_icon">
                            <i class="fa fa-desktop" style="font-size:35px"></i>
                        </div>
                        <div class="number">1</div>
                    </div>
                    <div class="description">
                        <h4>Damage Device</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="process_container">
                    <div class="icon_number">
                        <div class="process_icon">
                            <i class="fa fa-desktop" style="font-size:35px"></i>
                        </div>
                        <div class="number">1</div>
                    </div>
                    <div class="description">
                        <h4>Damage Device</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="process_container">
                    <div class="icon_number">
                        <div class="process_icon">
                            <i class="fa fa-desktop" style="font-size:35px"></i>
                        </div>
                        <div class="number">1</div>
                    </div>
                    <div class="description">
                        <h4>Damage Device</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="process_container">
                    <div class="icon_number">
                        <div class="process_icon">
                            <i class="fa fa-desktop" style="font-size:35px"></i>
                        </div>
                        <div class="number">1</div>
                    </div>
                    <div class="description">
                        <h4>Damage Device</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--   Trusted Clients & FAQ Section-->


<div class="container">
    <div class="row testimonials_acordion">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="categories_section_title">
                <h2>Trusted Clients</h2>
                <div class="testimonials_icon">
                    <i class="fa fa-wrench" style="font-size:35px"></i>
                </div>
            </div>
            <div class="owl-carousel">
                <div>
                    <div class="testimonial_carousel">
                        <div class="avatar_carousel">
                            <img src="https://image.ibb.co/fc3g8K/asset_10.png">
                        </div>
                        <div class="carousel_text">
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit, sed do eiusmtempor incid et dolore magna aliqu enim ad minim veniam quis nostrud exercitation ullam co laboris nisi ut aliquip excepteur sint occaecat cu.</p>
                        </div>
                        <div class="carousel_name">
                            <h4>John Doe</h4>
                        </div>
                        <div class="carousel_description">
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonial_carousel">
                        <div class="avatar_carousel">
                            <img src="https://image.ibb.co/fc3g8K/asset_10.png">
                        </div>
                        <div class="carousel_text">
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit, sed do eiusmtempor incid et dolore magna aliqu enim ad minim veniam quis nostrud exercitation ullam co laboris nisi ut aliquip excepteur sint occaecat cu.</p>
                        </div>
                        <div class="carousel_name">
                            <h4>John Doe</h4>
                        </div>
                        <div class="carousel_description">
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonial_carousel">
                        <div class="avatar_carousel">
                            <img src="https://image.ibb.co/fc3g8K/asset_10.png">
                        </div>
                        <div class="carousel_text">
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit, sed do eiusmtempor incid et dolore magna aliqu enim ad minim veniam quis nostrud exercitation ullam co laboris nisi ut aliquip excepteur sint occaecat cu.</p>
                        </div>
                        <div class="carousel_name">
                            <h4>John Doe</h4>
                        </div>
                        <div class="carousel_description">
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="categories_section_title testimonials_title">
                <h2>FAQ</h2>
                <div class="testimonials_icon">
                    <i class="fa fa-wrench" style="font-size:35px"></i>
                </div>
            </div>
            <div class="accordion_container">
                <div id="accordion">
                    <div class="card accordion_card">
                        <div class="card-header accordion_box" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn card_button btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapse 1
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body card_content">
                                Lorem ipsum dolor sit amet constur adipisicing elit, sed do eiusmtempor incid et dolore magna aliqu enim ad minim veniam quis nostrud exercitation ullam co laboris nisi ut aliquip excepteur sint occaecat cu
                            </div>
                        </div>
                    </div>
                    <div class="card accordion_card">
                        <div class="card-header accordion_box" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn card_button btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Collapse 2
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body card_content">
                                Lorem ipsum dolor sit amet constur adipisicing elit, sed do eiusmtempor incid et dolore magna aliqu enim ad minim veniam quis nostrud exercitation ullam co laboris nisi ut aliquip excepteur sint occaecat cu
                            </div>
                        </div>
                    </div>
                    <div class="card accordion_card">
                        <div class="card-header accordion_box" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn card_button btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Collapse 3
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body card_content">
                                Lorem ipsum dolor sit amet constur adipisicing elit, sed do eiusmtempor incid et dolore magna aliqu enim ad minim veniam quis nostrud exercitation ullam co laboris nisi ut aliquip excepteur sint occaecat cu
                            </div>
                        </div>
                    </div>
                    <div class="card accordion_card">
                        <div class="card-header accordion_box" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn card_button btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    Collapse 4
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body card_content">
                                Lorem ipsum dolor sit amet constur adipisicing elit, sed do eiusmtempor incid et dolore magna aliqu enim ad minim veniam quis nostrud exercitation ullam co laboris nisi ut aliquip excepteur sint occaecat cu
                            </div>
                        </div>
                    </div>
                    <div class="card accordion_card">
                        <div class="card-header accordion_box accordion_box_last" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn card_button btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                    Collapse 5
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body card_content card_content_last">
                                Lorem ipsum dolor sit amet constur adipisicing elit, sed do eiusmtempor incid et dolore magna aliqu enim ad minim veniam quis nostrud exercitation ullam co laboris nisi ut aliquip excepteur sint occaecat cu
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--    Computer Repair Section-->


<div class="computer_repair">
    <div class="container-fluid">
        <div class="row computer_repair_row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="image_left">
                    <img src="https://image.ibb.co/ehomdK/cta_1.png">
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="computer_repair_content">
                    <div class="computer_repair_texts">
                        <div class="computer_repair_title">
                            <h2>Neet a Computer Repair?</h2>
                        </div>
                        <div class="computer_repair_p">
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit, sed do eiusmtempor incid <br />et dolore magna aliqu enim ad minim veniam quis nostru.</p>
                        </div>
                    </div>
                    <div class="computer_repair_button">
                        <button>CONTACT US</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--    Blog Articles Section-->


<div class="container">
    <div class="row blog_row">
        <div class="categories_section_title">
            <h2>Our Latest News</h2>
            <div class="section_icon">
                <i class="fa fa-wrench" style="font-size:35px"></i>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="article_box article_box_responsive">
                <div class="article_photo">
                    <a href="#"><img src="https://image.ibb.co/ebQcJK/news_1.jpg"></a>
                </div>
                <div class="article_content">
                    <div class="article_ribbon">
                        <div class="square_ribobon">
                            <div class="article_date">
                                <h4>25</h4>
                                <p>Feb</p>
                            </div>
                        </div>
                        <div class="triangle_ribbon"></div>
                    </div>
                    <div class="article_texts">
                        <div class="article_title">
                            <h4>Finibus Bonorum Malorum</h4>
                        </div>
                        <div class="article_infos">
                            <div class="admin">
                                <div class="admin_icon">
                                    <i class="fa fa-user" style="font-size:16px"></i>
                                </div>
                                <div class="admin_text">
                                    <p>Admin</p>
                                </div>
                            </div>
                            <div class="favorites">
                                <div class="fav_icon">
                                    <i class="fa fa-user" style="font-size:16px"></i>
                                </div>
                                <div class="fav_text">
                                    <p>350</p>
                                </div>
                            </div>
                            <div class="comments">
                                <div class="comm_icon">
                                    <i class="fa fa-user" style="font-size:16px"></i>
                                </div>
                                <div class="comm_text">
                                    <p>30</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article_paragraph">
                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim.</p>
                </div>
                <div class="article_link">
                    <a href="#">
                        <p>Read More</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="article_box">
                <div class="article_photo">
                    <a href="#"><img src="https://image.ibb.co/ebQcJK/news_1.jpg"></a>
                </div>
                <div class="article_content">
                    <div class="article_ribbon">
                        <div class="square_ribobon">
                            <div class="article_date">
                                <h4>25</h4>
                                <p>Feb</p>
                            </div>
                        </div>
                        <div class="triangle_ribbon"></div>
                    </div>
                    <div class="article_texts">
                        <div class="article_title">
                            <h4>Finibus Bonorum Malorum</h4>
                        </div>
                        <div class="article_infos">
                            <div class="admin">
                                <div class="admin_icon">
                                    <i class="fa fa-user" style="font-size:16px"></i>
                                </div>
                                <div class="admin_text">
                                    <p>Admin</p>
                                </div>
                            </div>
                            <div class="favorites">
                                <div class="fav_icon">
                                    <i class="fa fa-user" style="font-size:16px"></i>
                                </div>
                                <div class="fav_text">
                                    <p>350</p>
                                </div>
                            </div>
                            <div class="comments">
                                <div class="comm_icon">
                                    <i class="fa fa-user" style="font-size:16px"></i>
                                </div>
                                <div class="comm_text">
                                    <p>30</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article_paragraph">
                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim.</p>
                </div>
                <div class="article_link">
                    <a href="#">
                        <p>Read More</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="article_box">
                <div class="article_photo">
                    <a href="#"><img src="https://image.ibb.co/ebQcJK/news_1.jpg"></a>
                </div>
                <div class="article_content">
                    <div class="article_ribbon">
                        <div class="square_ribobon">
                            <div class="article_date">
                                <h4>25</h4>
                                <p>Feb</p>
                            </div>
                        </div>
                        <div class="triangle_ribbon"></div>
                    </div>
                    <div class="article_texts">
                        <div class="article_title">
                            <h4>Finibus Bonorum Malorum</h4>
                        </div>
                        <div class="article_infos">
                            <div class="admin">
                                <div class="admin_icon">
                                    <i class="fa fa-user" style="font-size:16px"></i>
                                </div>
                                <div class="admin_text">
                                    <p>Admin</p>
                                </div>
                            </div>
                            <div class="favorites">
                                <div class="fav_icon">
                                    <i class="fa fa-user" style="font-size:16px"></i>
                                </div>
                                <div class="fav_text">
                                    <p>350</p>
                                </div>
                            </div>
                            <div class="comments">
                                <div class="comm_icon">
                                    <i class="fa fa-user" style="font-size:16px"></i>
                                </div>
                                <div class="comm_text">
                                    <p>30</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article_paragraph">
                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim.</p>
                </div>
                <div class="article_link">
                    <a href="#">
                        <p>Read More</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('elements/footer.php');
 ?>


<?php
include('elements/scripts.php');
?>