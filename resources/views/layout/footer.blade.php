
    <!-- Footer area start -->
    <footer  class="bd-footer-area theme-bg-secondary">
        
        <div class="bd-footer section-space">
            <div class="container">
                <div class="row gy-24">
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="footer-widget footer-4-col-1">
                            <div class="footer-widget-logo mb-25">
                                <a href="{{url('/')}}">
                                    <img loading="lazy" src="assets/images/bg/logo_new.jpeg" alt="logo not found">
                                </a>
                            </div> 
                            <div class="footer-widget-content skiptranslate" data-default="footer">
                                <p style="text-align: justify;">Le futur « Géoparc de Chefchaouen », qui comprend le Parc National de Talassemtane et la Côte de Ghomara (PNTLS-CG), est inscrit sur la liste du patrimoine exceptionnel du Maroc par l’UNESCO.</p>
                                <div class="theme-social is-white-color">
                                    <a href="#"><i class="icon-facebook"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                    <a href="#"><i class="icon-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="footer-widget footer-4-col-2">
                            <h5 class="footer-widget-title white-text">Liens utils</h5>
                            <div class="footer-widget-links has-white">
                                <ul>
                                    <li class="underline-two"><a href="{{url('/presentation')}}">Présentation</a></li>
                                    <li class="underline-two"><a href="{{url('/geologie')}}">Géologie</a></li>
                                    <li class="underline-two"><a href="{{url('/biodiversite')}}">Biodiversité</a></li>
                                    <li class="underline-two"><a href="{{url('/chefchaouen')}}">Chefchaouen</a>
                                    </li>
                                    <li class="underline-two"><a href="{{url('/sport')}}">Sport de montagne</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="footer-widget footer-4-col-2">
                            <h5 class="footer-widget-title white-text">Liens utils</h5>
                            <div class="footer-widget-links has-white">
                                <ul>
                                    <li class="underline-two"><a href="{{url('/maison')}}">Maison d'abeille </a></li>
                                    <li class="underline-two"><a href="{{url('/geosites')}}">Géosites</a></li>
                                    <li class="underline-two"><a href="{{url('/geositeChefchaouen')}}">Carte Géoparc Chefchaouen</a></li>
                                    <li class="underline-two"><a href="{{url('/maison-musee')}}">Musée Géoparc 
</a>
                                    </li>
                                    <li class="underline-two"><a href="{{url('/gallerie')}}">Gallerie</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="footer-widget footer-4-col-4">
                            <h5 class="footer-widget-title white-text">Contact Us</h5>
                            <div class="footer-widget-list-wrapper">
                                <ul class="footer-widget-list-items">
                                    <li class="footer-widget-list-single-item">
                                        <span class="footer-widget-list-icon"><i class="icon-call"></i></span>
                                        <span class="footer-widget-list-text">
                                 <span class="footer-widget-list-text-top">
                                    Téléphone
                                 </span>
                                        <a href="tel:+">+212539989727</a>
                                        </span>
                                    </li>
                                    <li class="footer-widget-list-single-item">
                                        <span class="footer-widget-list-icon"><i class="icon-envelope"></i></span>
                                        <span class="footer-widget-list-text">
                                 <span class="footer-widget-list-text-top">
                                    Email 
                                 </span>
                                        <a href=""><span class="__cf_email__" data-cfemail="">assated@yahoo.fr</span></a>
                                        </span>
                                    </li>
                                    <li class="footer-widget-list-single-item">
                                        <span class="footer-widget-list-icon"><i class="icon-location-fill"></i></span>
                                        <span class="footer-widget-list-text">
                                 <span class="footer-widget-list-text-top">
                                    Localisation
                                 </span>
                                        <a class="skiptranslate" data-default="emplacement" href="#">Géoparc Chefchaouen / Quartier Ain Haouzi , BP 101</a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area border-two">
            <div class="container">
                <div class="row gy-24 align-items-center justify-content-between align-content-end">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="footer-copyright has-white">
                            <p>Copyright @ 2024. All
                                Right Reserved</p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer area end -->

    <!-- back to top -->
    <!-- Backtotop start -->
    <div class="backtotop-wrap cursor-pointer">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- Backtotop end -->

    <!-- JS here -->

    <style>
        /* Styles for the full screen modal */
        #fullscreenModal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 9999;
            display: none; /* Hidden by default */
            align-items: center;
            justify-content: center;
        }
    
        #fullscreenModal img {
            max-width: 90%;
            max-height: 90%;
            border: 3px solid white;
        }
    </style>
    <script>
        // Function to open the image in full screen
        function openFullscreen(src) {
            var modal = document.getElementById('fullscreenModal');
            var fullImg = document.getElementById('fullscreenImg');
            fullImg.src = src; // Set the source of the modal image to the source of the clicked image
            modal.style.display = 'flex'; // Show the modal
        }
    
        // Function to close the fullscreen view
        function closeFullscreen() {
            var modal = document.getElementById('fullscreenModal');
            modal.style.display = 'none'; // Hide the modal
        }
    </script>

<script>
    	/**********************/
	/*	Client carousel   */
	/**********************/
	$('.carousel-client').bxSlider({
		auto: true,
	    slideWidth: 234,
	    minSlides: 2,
	    maxSlides: 5,
	    controls: false
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/plugins/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
<script src="{{ asset('assets/js/vendor/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/purecounter.js') }}"></script>
<script src="{{ asset('assets/js/plugins/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/cleave.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/SplitText.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/flatpickr.js') }}"></script>
<script src="{{ asset('assets/js/vendor/ajax-form.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>