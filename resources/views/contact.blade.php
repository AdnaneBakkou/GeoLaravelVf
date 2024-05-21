@include('layout.navbar')


    <!-- Body main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <section class="bd-breadcrumb-area p-relative fix">
            <!-- breadcrumb background image -->
            <div class="bd-breadcrumb-bg" data-background="assets/images/bg/ch.png"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">Contactez-nous </h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="{{url('/')}}"><i class="icon-home"></i>GéoParc</a></span>
                                        <span>Contact</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- contact-address area start -->
        <section class="bd-about-us-area section-space">
            <div class="container">
                <div class="row gy-24">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="contact-box">
                            <div class="contact-icon mb-30"><i class="icon-call-ring"></i></div>
                            <h5 class="contact-title mb-15">Téléphone </h5>
                            <div class="contact-content">
                                <a href="tel:+415864872899">+212 5 399 897 27</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="contact-box">
                            <div class="contact-icon mb-30"><i class="icon-envelope-b"></i></div>
                            <h5 class="contact-title mb-15">Email </h5>
                            <div class="contact-content">
                                <a href="/cdn-cgi/l/email-protection#1e6d6b6e6e716c6a5e6a716b6c777971307d7173"><span class="__cf_email__" data-cfemail="483b3d3838273a3c083c273d3a212f27662b2725">assated@yahoo.fr</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="contact-box">
                            <div class="contact-icon mb-30"><i class="icon-location-fill"></i></div>
                            <h5 class="contact-title mb-15"> Localisation</h5>
                            <div class="contact-content">
                                <a href="#">Géoparc Chefchaouen Quartier Ain Haouzi BP 101</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-address area end -->

        <!-- contact form area start -->
        <section class="bd-contact-form section-space-bottom">
            <div class="container">
                <div class="row gy-24 justify-content-between">
                    <div class="col-xxl-5 col-xl-5 col-lg-6">
                        <div class="section-title-wrapper">
                            <span class="section-subtitle mb-10">Contactez-nous</span>
                            <h3 class="section-title mb-15">Nous sommes à votre disposition pour répondre à toutes vos questions et vous fournir des informations supplémentaires. N'hésitez pas à nous contacter.</h3>
                            <div class="section-divider mb-25"></div>
                            <div class="contact-social">
                                <div class="social-menu">
                                    <ul>
                                        <li><a class="facebook" href="https://facebook.com/" target="blank"><i class="icon-facebook"></i></a></li>
                                      
                                        <li><a class="instagram" href="https://www.instagram.com" target="blank"><i class="icon-instagram"></i></a></li>
                                        <li><a class="youtube" href="https://www.linkedin.com" target="blank"><i class="icon-youtube"></i></a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="contact-form">
                            <h5 class="mb-24">Formulaire de contact  </h5>
                            <form action="#">
                                <div class="row gy-24">
                                    <div class="col-md-12">
                                        <div class="floating-form-input">
                                            <input type="text" class="inputText" id="fullName" name="fullName" required="">
                                            <span class="floating-label">Le nom complet </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="floating-form-input">
                                            <input type="text" class="inputText" id="email" name="email" required="">
                                            <span class="floating-label">Votre Email</span>
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="col-md-12">
                                        <div class="form-input-box">
                                            <div class="floating-form-input">
                                                <textarea class="textareaText" id="message" name="message" required=""></textarea>
                                                <span class="floating-label-two">Votre Message</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                      
                                        <div class="contact-form-btn">
                                            <button type="submit" class="bd-primary-btn btn-style has-arrow is-bg radius-60">
                                                <span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
                                                <span class="bd-primary-btn-text">Envoyer </span>
                                                <span class="bd-primary-btn-circle"></span>
                                                <span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- contact form area end -->

        <!-- google map area start -->
        <div class="bd-map-area section-space-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="google-map">
                         <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1xoLxCStQQKAEwFMN6-ndiXDhnfumqL8&ehbc=2E312F&noprof=1" width="640" height="480"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- google map area end-->

    </main>
    <!-- Body main wrapper end -->
    @include('layout.footer')
