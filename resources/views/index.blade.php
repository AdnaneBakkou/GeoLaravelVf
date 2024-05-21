@include('layout.navbar')
    <!-- Body main wrapper start -->
    <main class="main-area fix">

        <!-- Banner area start -->
        <section class="banner-area banner-padding p-relative" style="direction:ltr !important;" >
            <div class="banner-four-shape" style="direction:ltr !important;" >
                <div class="banner-four-shape-one">
                    <img loading="lazy" src="{{asset('assets/images/shapes/banner-map-2.png')}}" alt="shape">
                </div>
             
                <div class="banner-four-shape-three">
                    <img loading="lazy" src="{{asset('assets/images/shapes/banner-line-4.svg')}}" alt="shape">
                </div>
            </div>
            <div class="banner-social banner-four-social" style="direction:ltr !important;" >
                <div class="theme-social  wow fadeInLeft" data-wow-delay=".3s">
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-instagram"></i></a>
                    <a href="#"><i class="icon-youtube"></i></a>
                </div>
            </div>
            <div class="banner-wrapper banner-four banner-four-bg p-relative">
                <div class="banner-content p-relative wow fadeInLeft" style="direction:ltr !important;"   data-wow-delay=".2s">
                      <span class="section-subtitle mb-25 wow fadeInLeft color-warning skiptranslate" data-default="bienvenue" data-wow-delay=".3s" style="direction:rtl !important;" >Bienvenue
                        Au GéoParc de chefchaouen</span>
                        <h1 class="banner-title white-text mb-30 wow fadeInLeft" data-wow-delay=".4s" style="direction:rtl !important;" >Découvrez des trésors cachés à Chefchaouen et   <span class="yellow-shape">ses régions <img loading="lazy" src="assets/images/shapes/yellow-shape.png" alt="yellow-shape"></span></h1>
                        <!-- <p class="">Share the core values and principles that drive your company. Emphasize a commitment to
                            costume.</p> -->
                    <div class="banner-btn">
                        <a href="#" class="bd-primary-btn btn-style has-arrow is-bg btn-tertiary is-white radius-60">
                            <span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
                            <span class="bd-primary-btn-text" style="direction:ltr !important;" >Découvrir</span>
                            <span class="bd-primary-btn-circle"></span>
                            <span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
                        </a>

                    </div>
                </div>
                <div class="banner-slider " style="direction:ltr !important;" >
                    <!-- Swiper -->
                    <div class="swiper banner-four-slider overflow-hidden">
                        <div class="swiper-wrapper slider">
                            <div class="swiper-slide">
                                <img loading="lazy" src="{{asset('assets/images/bg/bg-singe.jpg')}}" alt="home">

                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="assets/images/bg/newbg.jpeg" alt="home">

                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="assets/images/bg/singe_.jpeg" alt="home">

                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="assets/images/bg/bg_ak2.jpg" alt="home">

                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="assets/images/bg/randonnee-lhiver-au-parc-Talassemtane-e1687762839940.jpg" alt="home">

                            </div>
                        </div>
                        <div class="banner-four-pagination">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-scroll-bottom">
                <div class="banner-scroll-thumb">
                    <img loading="lazy" src="assets/images/shapes/home-4-banner-shape.png" alt="shape">
                </div>
                <div class="scroll-down-wrapper">
                    <a href="" class="scroll-down-btn"><span></span></a>
                </div>
            </div>
        </section>
        <!-- Banner area start -->

       

     <style>
  @media (max-width: 768px) {
    #webMobile {
      display: none;
    }
    .bd-play-btn.btn-tertiary {
    margin-left: 41%;
}
.sport_web{
          display: none;

}
  }
</style>

<!-- about area Start -->
<section class="bd-about-area flash-white section-space">
  <div class="container">
    <div class="row gy-24 justify-content-between">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 order-2 order-md-1" data-aos="fade-right">
        <div class="about-thumb-wrap about-style-two">
          <div class="about-thumb-one">
            <img loading="lazy" src="assets/images/bg/apropos.jpg" alt="image">
          </div>
          <div class="about-thumb-two">
            <img loading="lazy" src="assets/images/bg/apropos_.jpg" alt="image">
          </div>
          <div class="about-icon-badge">
            <span><i class="fa-duotone fa-seedling"></i></span>
          </div>
          <div class="about-shape">
            <img loading="lazy" src="assets/images/shapes/about-shape.png" alt="shape">
          </div>
          <div id="webMobile" style="right: 0 !important; top: 405px; margin-left: 373px;" class="about-thumb-two">
            <img loading="lazy" style="max-width: 144%;" src="assets/images/bg/eeee.jpg" alt="image">
          </div>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 order-1 order-md-2">
        <div class="section-title-wrapper mb-35 anim-wrapper animation-style-3">
          <span class="section-subtitle mb-15">A PROPOS DE NOUS</span>
          <h2 class="section-title title-animation mb-20 skiptranslate" data-default="TextApropos1">Géoparc Chefchaouen</h2>
        </div>
        <div class="about-list">
          <style>
            .about-list {
              text-align: justify;
            }
          </style>
          <ul>
            <li>
              <span class="about-list-icon">
                <i class="fa-solid fa-seedling"></i>
              </span>
              <div>
                <span class="about-list-title mb-5">Préservation</span>
                <span style="text-align: justify;" class="about-list-subtitle">Une meilleure connaissance scientifique des sites permet d’orienter et d’adopter, si nécessaire, des mesures de gestion pour la préservation des richesses géologiques.</span>
              </div>
            </li>
            <li>
              <span class="about-list-icon">
                <i class="icon-doc"></i>
              </span>
              <div>
                <span class="about-list-title mb-5">Education</span>
                <span class="about-list-subtitle skiptranslate" data-default="TextApropos2">Dans un Géoparc, la géologie est une porte d’entrée privilégiée pour la sensibilisation à l’environnement et au territoire.</span>
              </div>
            </li>
            <li>
              <span class="about-list-icon">
                <i class="fa-solid fa-chart-mixed"></i>
              </span>
              <span>
                <span class="about-list-title mb-5">Développement local</span>
                <span class="about-list-subtitle skiptranslate" data-default="TextApropos">Dans un Géoparc, le géotourisme participe au développement local à travers un tourisme durable qui met en lumière cet héritage géologique remarquable.</span>
                <br>
                <span class="about-list-subtitle">
                  <br>
                  En valorisant les richesses géologiques de son territoire, le Géoparc va permettre d’améliorer la prise de conscience et la compréhension d’enjeux de société importants sur la planète.
                </span>
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

        <!-- about area end -->

        <!-- activity area start -->
        <section class="bd-activity-area theme-bg-secondary section-space-top activity-space-bottom  p-relative">
            <div class="container">
                <div class="activity-tab-shape">
                    <div class="activity-tab-shape-one">
                        <svg class="line-dash" width="64" height="110" viewbox="0 0 64 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M63.0075 2.51142C40.3989 -1.71898 24.5461 7.67511 22.5494 16.7009C18.2933 35.94 30.3292 52.129 37.0858 68.6868C52.9154 107.479 9.35688 114.781 -1.05847 104.689" stroke="#FFF8E6" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="3 3"></path>
                        </svg>
                    </div>
                    <div class="activity-tab-shape-two">
                        <img loading="lazy" width="66px" src="assets/images/shapes/badge-2.png" alt="shape">
                    </div>
                    <div class="activity-tab-shape-three">
                        <img loading="lazy" src="assets/images/shapes/cta-x.png" alt="shape">
                    </div>
                    <div class="activity-tab-shape-four">
                        <img loading="lazy" src="assets/images/shapes/cta-x.png" alt="shape">
                    </div>
                    <div class="activity-tab-shape-five">
                        <img loading="lazy" src="assets/images/shapes/triangle.png" alt="shape">
                    </div>
                </div>
                <div class="row gy-24 text-center align-items-center justify-content-center section-title-space">
                    <div class="col-xl-6">
                        <div class="section-title-wrapper anim-wrapper animation-style-3">
                            <span class="section-subtitle color-warning mb-10">Un patrimoine naturel riche</span>
                            <h2 class="section-title white-text title-animation">Découvrez la Richesse Naturelle qui Nous Entoure</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-24">
                    <div class="col-xxl-4 col-xl-4 col-lg-4" data-aos="fade-right">
                        <div class="activity-tab">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-item-one-tab" data-bs-toggle="pill" data-bs-target="#pills-item-one" type="button" role="tab" aria-controls="pills-item-one" aria-selected="true"><span><i class="icon-mountain"></i></span>Géologie</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-two-tab" data-bs-toggle="pill" data-bs-target="#pills-item-two" type="button" role="tab" aria-controls="pills-item-two" aria-selected="false"><span><i class="fa-solid fa-trees"></i></span>Biodiversité</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-three-tab" data-bs-toggle="pill" data-bs-target="#pills-item-three" type="button" role="tab" aria-controls="pills-item-three" aria-selected="false"><span><i class="fa-solid fa-bee"></i></span>Maison d'abeille</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-three-tab" data-bs-toggle="pill" data-bs-target="#pills-item-four" type="button" role="tab" aria-controls="pills-item-three" aria-selected="false"><span><i class="icon-cycling"></i></span>Sport de montagne</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-four-tab" data-bs-toggle="pill" data-bs-target="#pills-item-five" type="button" role="tab" aria-controls="pills-item-four" aria-selected="false"><span><i class="fa-sharp fa-solid fa-landmark"></i></span>Musée Géoparc</button>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8" data-aos="fade-left">
                        <div class="activity-tab-wrapper">
                            <div class="tab-content activity-tab-anim" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-item-one" role="tabpanel" aria-labelledby="pills-item-one-tab" tabindex="0">
                                    <div class="activity-tab-content-wrapper p-relative">
                                        <div class="activity-tab-content-thumb">
                                            <img loading="lazy" src="assets/images/bg/geo1.jpg" alt="image">
                                        </div>
                                        <div class="activity-tab-content">
                                            <h5 class="activity-tab-title underline mb-10 skiptranslate" data-default="TextHomeGeo"><a href="#">Le futur Géoparc de Chefchaouen est un espace naturel à la géodiversité  ...</a></h5>
                                           
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-item-two" role="tabpanel" aria-labelledby="pills-item-two-tab" tabindex="0">
                                    <div class="activity-tab-content-wrapper p-relative">
                                        <div class="activity-tab-content-thumb">
                                            <img loading="lazy" src="assets/images/bg/ddd-1.jpg" alt="image">
                                        </div>
                                        <div class="activity-tab-content">
                                            <h5 class="activity-tab-title underline mb-10 skiptranslate" data-deault="TextHomeBio"><a href="#">Le Géoparc de Chefchaouen présente aussi une richesse patrimoniale culturelle ...</a></h5>
                                           
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-item-three" role="tabpanel" aria-labelledby="pills-item-three-tab" tabindex="0">
                                    <div class="activity-tab-content-wrapper p-relative">
                                        <div class="activity-tab-content-thumb">
                                            <img loading="lazy" src="assets/images/bg/dar.jpg" alt="image">
                                        </div>
                                        <div class="activity-tab-content">
                                            <h5 class="activity-tab-title underline mb-10"><a href="#">DAR NAHLA est une référence claire au monde des abeilles ...</a></h5>
                                           
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-item-four" role="tabpanel" aria-labelledby="pills-item-four-tab" tabindex="0">
                                    <div class="activity-tab-content-wrapper p-relative">
                                        <div class="activity-tab-content-thumb">
                                            <img loading="lazy" src="assets/images/bg/sport.jpg" alt="image">
                                        </div>
                                        <div class="activity-tab-content">
                                            <h5 class="activity-tab-title underline mb-10 skiptranslate" data-default="TextHomeSport"><a href="#">Le Géoparc Chefchaouen, offre de nombreuses possibilités pour les amateurs de sports ...</a></h5>
                                            
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-item-five" role="tabpanel" aria-labelledby="pills-item-five-tab" tabindex="0">
                                    <div class="activity-tab-content-wrapper p-relative">
                                        <div class="activity-tab-content-thumb">
                                            <img loading="lazy" src="assets/images/bg/muse.jpeg" alt="image">
                                        </div>
                                        <div class="activity-tab-content">
                                            <h5 class="activity-tab-title underline mb-10"><a href="#">Dans une première étape et en attente de la création d’un musée spécial pour ...</a></h5>
                                            
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
        <!-- activity area end -->

        <!-- cta area start  -->
        <!-- <section class="bd-cta-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-wrapper cta-item cta-top p-relative fix">
                            <div class="cta-thumb">
                                <img loading="lazy" src="assets/images/cta/cta-bg-3.png" alt="image">
                            </div>
                            <div class="cta-five-shape-wrap">
                                <div class="cta-five-shape-one">
                                    <svg class="line-dash" xmlns="http://www.w3.org/2000/svg" width="62" height="189" viewbox="0 0 62 189" fill="none">
                                        <path d="M60.8463 1.88108C24.1532 4.12571 3.23706 24.8596 3.65598 39.628C4.54894 71.1079 29.5088 91.5168 46.4287 114.553C86.0696 168.522 21.3918 196.8 1.31736 185.21" stroke="#FFF8E6" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="3 3"></path>
                                    </svg>
                                </div>
                                <div class="cta-five-shape-two">
                                    <img loading="lazy" src="assets/images/shapes/plane-7.png" alt="image">
                                </div>
                            </div>
                            <div class="cta-item-box">
                                <div class="cta-item-box-left">
                                    <div class="">
                                        <div class="cta-item-box-thumb spin">
                                            <img loading="lazy" src="assets/images/shapes/cta-world.png" alt="shape">
                                        </div>
                                    </div>
                                    <div class="section-title-wrapper p-relative z-index-11 anim-wrapper animation-style-3">
                                        <span class="section-subtitle color-warning mb-10">VISITEZ CHEFCHAOUEN</span>
                                        <h4 class="section-title white-text title-animation mb-5">Profitez de votre voyage avec notre patrimoine écologique et naturel</h4>
                                    </div>
                                </div>
                                <div class="cta-btn">
                                    <a href="#" class="bd-primary-btn btn-style has-arrow is-bg btn-tertiary is-white radius-60">
                                        <span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
                                        <span class="bd-primary-btn-text">Voir plus</span>
                                        <span class="bd-primary-btn-circle"></span>
                                        <span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- cta area end  -->




        <!-- tour area start -->
        <section class="bd-service-area section-space">
            <div class="container">
                <div class="row gy-24 text-center justify-content-center section-title-space">
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8">
                        <div class="section-title-wrapper anim-wrapper animation-style-3">
                            <span class="section-subtitle mb-10">Géologie</span>
                            <h2 class="section-title title-animation">Espace naturel à la géodiversité remarquable</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-24">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="tour-wrapper style-five">
                            <div class="tour-thumb-wrapper p-relative">
                                <div class="tour-thumb image-overly">
                                    <a href="{{url('/geologie')}}"><img loading="lazy" src="assets/images/bg/geo2.jpg" alt="image"></a>
                                </div>
                                <!-- <div class="tour-top-meta">
                                    <div class="tour-badge">
                                        <div class="tour-badge-single">
                                            <span class="bd-badge warning fw-5">Cértifié</span>
                                        </div>
                                    </div>
                                   
                                </div> -->
                            </div>
                            <div class="tour-content">
                                <div class="tour-meta-center mb-15 d-flex align-items-center justify-content-between">
                                    <div class="tour-rating-wrap d-flex align-items-center gap-10">
                                        <div class="tour-rating-icon fs-14 d-flex rating-color">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="tour-camera-btn-wrapper">
                                        <a href="{{url('/geologie')}};" class="tour-camera-btn tour-image-popup" data-gallery-options='{
                                  "items": [
                                    {
                                      "src": "assets/images/bg/ben1.jpg"
                                    },
                                    {
                                        "src": "assets/images/bg/ben2.jpg"
                                    },
                                    {
                                        "src": "assets/images/bg/be3.jpg"
                                    }
                                
                                  ],
                                  "gallery": {
                                    "enabled": true
                                  },
                                  "type": "image"
                              }'>
                                            <i class="fa-light fa-camera"></i>
                                            <span>3</span>
                                        </a>
                                   
                                    </div>
                                </div>
                                <h5 class="tour-title fw-5 underline mb-10"><a href="{{url('/geologie')}}">Péridotite de Beni Bouzra
                                </a>
                                </h5>
                                <div class="tour-meta mb-5">
                                    <div class="tour-location d-flex gap-10 align-items-center">
                                        <i class="fa-regular fa-location-dot"></i> <a href="{{url('/geologie')}}">Chefchaouen,
                                            Maroc</a>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="tour-wrapper style-five">
                            <div class="tour-thumb-wrapper p-relative">
                                <div class="tour-thumb image-overly">
                                    <a href="{{url('/geologie')}}"><img loading="lazy" src="assets/images/bg/geo3.jpg" alt="image"></a>
                                </div>
                               
                            </div>
                            <div class="tour-content">
                                <div class="tour-meta-center mb-15 d-flex align-items-center justify-content-between">
                                    <div class="tour-rating-wrap d-flex align-items-center gap-10">
                                        <div class="tour-rating-icon fs-14 d-flex rating-color">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="tour-camera-btn-wrapper">
                                        <a href="{{url('/geologie')}}" class="tour-camera-btn tour-image-popup" data-gallery-options='{
                                  "items": [
                                    {
                                      "src": "assets/images/bg/set1.jpg"
                                    },
                                    {
                                      "src": "assets/images/bg/set2.jpg"
                                    },
                                    {
                                      "src": "assets/images/bg/set3.jpg"
                                    }
                                  ],
                                  "gallery": {
                                    "enabled": true
                                  },
                                  "type": "image"
                              }'>
                                            <i class="fa-light fa-camera"></i>
                                            <span>3</span>
                                        </a>
                                      
                                    </div>
                                </div>
                                <h5 class="tour-title fw-5 underline mb-10"><a href="{{url('/geologie')}}">Gneiss de Stehat
                                </a>
                                </h5>
                                <div class="tour-meta mb-5">
                                    <div class="tour-location d-flex gap-10 align-items-center">
                                        <i class="fa-regular fa-location-dot"></i> <a href="{{url('/geologie')}}">Chefchaouen, Maroc</a>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="tour-wrapper style-five">
                            <div class="tour-thumb-wrapper p-relative">
                                <div class="tour-thumb image-overly">
                                    <a href="{{url('/geologie')}}"><img loading="lazy" src="assets/images/bg/geo4.jpg" alt="image"></a>
                                </div>
                               
                            </div>
                            <div class="tour-content">
                                <div class="tour-meta-center mb-15 d-flex align-items-center justify-content-between">
                                    <div class="tour-rating-wrap d-flex align-items-center gap-10">
                                        <div class="tour-rating-icon fs-14 d-flex rating-color">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="tour-camera-btn-wrapper">
                                        <a href="{{url('/geologie')}}" class="tour-camera-btn tour-image-popup" data-gallery-options='{
                                  "items": [
                                    {
                                       "src": "assets/images/bg/tar1.jpg"
                                    },
                                    {
                                       "src": "assets/images/bg/tar2.jpg"
                                    },
                                    {
                                      "src": "assets/images/bg/tar3.jpg"
                                    }
                                  ],
                                  "gallery": {
                                    "enabled": true
                                  },
                                  "type": "image"
                              }'>
                                            <i class="fa-light fa-camera"></i>
                                            <span>3</span>
                                        </a>
                                      
                                    </div>
                                </div>
                                <h5 class="tour-title fw-5 underline mb-10"><a href="{{url('/geologie')}}">Mica schist de Targha
                                </a>
                                </h5>
                                <div class="tour-meta mb-5">
                                    <div class="tour-location d-flex gap-10 align-items-center">
                                        <i class="fa-regular fa-location-dot"></i> <a href="{{url('/geologie')}}">Chefchaouen, Maroc</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="tour-wrapper style-five">
                            <div class="tour-thumb-wrapper p-relative">
                                <div class="tour-thumb image-overly">
                                    <a href="{{url('/geologie')}}"><img loading="lazy" src="assets/images/bg/geo5.jpg" alt="image"></a>
                                </div>
                             
                            </div>
                            <div class="tour-content">
                                <div class="tour-meta-center mb-15 d-flex align-items-center justify-content-between">
                                    <div class="tour-rating-wrap d-flex align-items-center gap-10">
                                        <div class="tour-rating-icon fs-14 d-flex rating-color">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="tour-camera-btn-wrapper">
                                        <a href="{{url('/geologie')}}" class="tour-camera-btn tour-image-popup" data-gallery-options='{
                                    "items": [
                                    {
                                    "src": "assets/images/bg/cha1.jpg"
                                    },
                                    {
                                    "src": "assets/images/bg/cha2.jpg"
                                    },
                                    {
                                    "src": "assets/images/bg/cha3.jpg"
                                    }
                                 ],
                                 "gallery": {
                                    "enabled": true
                                 },
                                 "type": "image"
                              }'>
                                            <i class="fa-light fa-camera"></i>
                                            <span>3</span>
                                        </a>
                                      
                                    </div>
                                </div>
                                <h5 class="tour-title fw-5 underline mb-10"><a href="{{url('/geologie')}}">Kinzigite de Chmaala
                                </a>
                                </h5>
                                <div class="tour-meta mb-5">
                                    <div class="tour-location d-flex gap-10 align-items-center">
                                        <i class="fa-regular fa-location-dot"></i> <a href="{{url('/geologie')}}">Chefchaouen,
                                            Maroc</a>
                                    </div>
                                </div>
                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- tour area end -->


<section>
         <div class="bd-map-area section-space-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="google-map">
                      <iframe src="https://www.google.com/maps/d/u/4/embed?mid=1SJiiES_Ctp5iZzfej9QRDpIpiikfrME&ehbc=2E312F&noprof=1" width="640" height="480"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
</section>

        <!-- travel area start -->
        <section class="bd-travel-area theme-bg-secondary section-space p-relative">
            <div class="container">
                <div class="travel-shape">
                    <div class="travel-shape-one">
                        <svg class="line-dash" xmlns="http://www.w3.org/2000/svg" width="62" height="189" viewbox="0 0 62 189" fill="none">
                            <path d="M60.8463 1.88108C24.1532 4.12571 3.23706 24.8596 3.65598 39.628C4.54894 71.1079 29.5088 91.5168 46.4287 114.553C86.0696 168.522 21.3918 196.8 1.31736 185.21" stroke="#FFF8E6" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="3 3"></path>
                        </svg>
                    </div>
                    <div class="travel-shape-two">
                        <img loading="lazy" src="assets/images/shapes/triangle.png" alt="shape">
                    </div>
                    <div class="travel-shape-three">
                        <img loading="lazy" src="assets/images/shapes/camera.png" alt="shape">
                    </div>
                    <div class="travel-shape-four">
                        <img loading="lazy" src="assets/images/shapes/line-circle.png" alt="shape">
                    </div>
                    <div class="travel-shape-five">
                        <img loading="lazy" src="assets/images/shapes/circle-bg-3.png" alt="shape">
                    </div>
                    <div class="travel-shape-six">
                        <img loading="lazy" src="assets/images/shapes/stone.png" alt="shape">
                    </div>
                </div>
                <div class="row gy-24 align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-6">
                        <div class="travel-section">
                           
                            <div class="section-title-wrapper is-white mb-35 anim-wrapper animation-style-3">
                                <span class="section-subtitle text-warning mb-10">Géoparc Chefchaouen Maroc</span>
                                <h2 class="section-title title-animation mb-15 skiptranslate" data-default="Unesco">Qu’est-ce qu’un Géoparc Mondial UNESCO ?</p>
                            </div>
                            <div class="popup-vido mb-40">
                                <a class="bd-play-btn btn-tertiary popup-video animation-two theme-bg" href="https://www.youtube.com/watch?v=4AMSN6LwuSU">
                                    <i class="icon-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="row gy-24">
                            <div class="col-lg-6 col-sm-6">
                                <div class="travel-wrapper">
                                    <div class="travel-item">
                                        <div class="travel-icon"><span><i class="fa-thin fa-leaf-maple"></i></span></div>
                                        <h5 class="travel-title white-text underline-two"><a href="#">Nature</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="travel-wrapper">
                                    <div class="travel-item">
                                        <div class="travel-icon"><span><i class="fa-solid fa-monkey"></i></span></div>
                                        <h5 class="travel-title white-text underline-two"><a href="#">Biodiversité</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="travel-wrapper">
                                    <div class="travel-item">
                                        <div class="travel-icon"><span><i class="icon-mountain"></i></span></div>
                                        <h5 class="travel-title white-text underline-two"><a href="#">Géologie</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="travel-wrapper">
                                    <div class="travel-item">
                                        <div class="travel-icon"><span><i class="icon-adventure"></i></span></div>
                                        <h5 class="travel-title white-text underline-two"><a href="#">Sport</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- travel area end -->
     
        <!-- trip area start -->
      
        <section class="bd-trip section-space">
            <div class="container">
                <div class="row gy-24 text-center justify-content-center section-title-space">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10">
                        <div class="section-title-wrapper anim-wrapper animation-style-3">
                            <span class="section-subtitle mb-10">Biodiversité</span>
                            <h2 class="section-title title-animation">Massif montagneux, importantes sections des rivières et fleuves</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-24">
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="trip-row-col">
                            <div class="trip-wrapper trip-style-one border-tag p-relative">
                                <div class="trip-thumb image-overly">
                                    <a href="{{url('/biodiversite')}}"><img loading="lazy" src="assets/images/bg/eagle.jpg" alt="image"></a>
                                </div>
                                <!-- <div class="trip-tag">
                                    <a class="trip-tag-border" href="#">3 Tour</a>
                                </div> -->
                                <div class="trip-content">
                                    <h5 class="trip-title white-text underline-two"><a href="{{url('/biodiversite')}}"> Aigle Royale</a></h5>
                                </div>
                            </div>
                            <div class="trip-wrapper trip-style-one border-tag p-relative">
                                <div class="trip-thumb image-overly">
                                    <a href="{{url('/biodiversite')}}"><img loading="lazy" src="assets/images/bg/singe.jpg" alt="image"></a>
                                </div>
                                
                                <div class="trip-content">
                                    <h5 class="trip-title white-text underline-two"><a href="{{url('/biodiversite')}}">Singe Magit </a></h5>
                                </div>
                            </div>
                            
                        </div>
                       
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-12">
                        <div class="trip-wrapper trip-style-one border-tag p-relative">
                            <div class="trip-thumb image-overly">
                                <a href="{{url('/biodiversite')}}"><img loading="lazy" src="assets/images/bg/akchour.jpg" alt="image"></a>
                            </div>
                            <!-- <div class="trip-tag">
                                <a class="trip-tag-border" href="#">3 Tour</a>
                            </div> -->
                            <div class="trip-content">
                                <h5 class="trip-title white-text underline-two"><a href="{{url('/biodiversite')}}">Site Touristique Akchour

                                </a></h5>
                            </div>
                        </div>
                      
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12">
                        <div class="trip-flex">
                            <div class="trip-wrapper trip-style-one border-tag p-relative">
                                <div style="height: 424px;" class="trip-thumb image-overly">
                                    <a href="{{url('/biodiversite')}}"><img loading="lazy" src="assets/images/bg/neige1.jpg" alt="image"></a>
                                </div>
                                <!-- <div class="trip-tag">
                                    <a class="trip-tag-border" href="#">5 Tour</a>
                                </div> -->
                                <div class="trip-content">
                                    <h5 class="trip-title white-text underline-two"><a href="{{url('/biodiversite')}}">Parc Naturel de Talassemtane
                                    </a></h5>
                                </div>
                            </div>
                           
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trip area end -->
        <section class="bd-about-area flash-white section-space">
            <div class="container">
                <div class="row gy-24 justify-content-between">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12" data-aos="fade-right">
                        <div class="about-content-wrapper">
                            <div class="section-title-wrapper mb-35">
                                <span class="section-subtitle mb-15">Sport de motagne</span>
                                <h2 class="section-title mb-20">Faites des aventures et créer des souvenirs</h2>
                                <p class="skiptranslate" data-default="TextHomeSport">Le Géoparc Chefchaouen, offre de nombreuses possibilités pour les amateurs de sports de montagne
                                </p>
                            </div>
                            <div class="about-feature-list">
                                <ul>
                                    <li>
                                        <span class="list-icon">
                                 <i class="fa-solid fa-check"></i>
                              </span>
                                        <p>Explorez les sommets et découvrez votre force intérieure.</p>
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                 <i class="fa-solid fa-check"></i>
                              </span>
                                        <p>Plongez dans l'aventure et s'inspirer par la beauté des montagnes.</p>
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                 <i class="fa-solid fa-check"></i>
                              </span>
                                        <p>Rejoignez notre communauté  et créez des souvenirs inoubliables .</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-btn-wrap">
                                <div class="about-btn">
                                    <a href="{{url('/sport')}}" class="bd-primary-btn btn-style has-arrow is-bg radius-60">
                                        <span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
                                        <span class="bd-primary-btn-text">Voir Plus</span>
                                        <span class="bd-primary-btn-circle"></span>
                                        <span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
                                    </a>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12">
                        <div class="about-thumb-wrapper about-style-three">
                            <div class="about-thumb-seven wow img-custom-anim-left">
                                <img class="sport_web" loading="lazy" src="assets/images/bg/sport.jpg" alt="image">
                            </div>
                            <div class="about-thumb-eight wow img-custom-anim-right">
                                <img loading="lazy" src="assets/images/bg/sport1.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
        <!-- counter area start -->
        <!-- <section class="bd-counter-area counter-bottom">
            <div class="container">
                <div class="row gy-24 text-center justify-content-center section-title-space">
                    <div class="col-lg-8col-md-8" style="padding-top: 40px;">
                        <div class="section-title-wrapper anim-wrapper animation-style-3">
                            <span class="section-subtitle mb-10">Nos chiffres</span>
                            <h2 class="section-title title-animation">On célèbre :</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-24">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="counter-wrapper counter-style-four">
                            <div class="counter-item">
                                <div class="counter-content">
                                    <span class="counter-icon bg-two"><i class="icon-location-crosshairs"></i></span>
                                    <h2><span data-purecounter-duration="1" data-purecounter-end="100" class="purecounter">0</span>+
                                    </h2>
                                    <p>Destiantion</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="counter-wrapper counter-style-four">
                            <div class="counter-item">
                                <div class="counter-content">
                                    <span class="counter-icon bg-two"><i class="icon-campaigns"></i></span>
                                    <h2><span data-purecounter-duration="1" data-purecounter-end="599" class="purecounter">0</span>+
                                    </h2>
                                    <p>Campaigns Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="counter-wrapper counter-style-four">
                            <div class="counter-item">
                                <div class="counter-content">
                                    <span class="counter-icon bg-two"><i class="icon-circle-user"></i></span>
                                    <h2><span data-purecounter-duration="1" data-purecounter-end="9999" class="purecounter">0</span>+
                                    </h2>
                                    <p>Visiteur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="counter-wrapper counter-style-four">
                            <div class="counter-item">
                                <div class="counter-content">
                                    <span class="counter-icon bg-two"><i class="icon-balloons"></i></span>
                                    <h2><span data-purecounter-duration="1" data-purecounter-end="195" class="purecounter">0</span>M
                                    </h2>
                                    <p>Happy Traveler</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    -->
  
        <!-- counter area end -->

        <!-- testimonial area start 
        <section class="bd-testimonial-area section-space-bottom testimonial-space-top p-relative fix flash-white">
            <div class="container">
                <div class="row gy-24 justify-content-between">
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="section-title-wrapper mb-35 anim-wrapper animation-style-3">
                            <span class="section-subtitle mb-10">Testimonials</span>
                            <h2 class="section-title mb-15 title-animation">Voices of Travelers Testimonials and Reviews</h2>
                            <p class="">Lorem ipsum dolor sit amet consectetur. Facilisis in neque curabitur tristique placerat
                                sit
                                turpis.</p>
                        </div>
                        <div class="travel-btn">
                            <a href="#" class="bd-primary-btn btn-style has-arrow is-bg radius-60">
                                <span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
                                <span class="bd-primary-btn-text">Know More</span>
                                <span class="bd-primary-btn-circle"></span>
                                <span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
                            </a>

                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="testimonial-five">
                            <div class="swiper testimonial-five-active position-relative">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-wrapper testimonial-style-five">
                                            <div class="testimonial-content p-relative">
                                                <div class="avatar-rating mb-25">
                                                    <div class="fs-14 d-flex rating-color">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="testimonial-description">Visiting Machu Picchu was an absolute dream come true! The ancient ruins are truly mesmerizing, and the views are breathtaking.</p>
                                                <div class="testimonial-quotation">
                                                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                                                </div>
                                            </div>
                                            <div class="testimonial-avatar-wrap">
                                                <div class="avatar-thumb">
                                                    <img loading="lazy" src="assets/images/client/01.png" alt="">
                                                </div>
                                                <div class="avatar-meta">
                                                    <h6 class="avatar-meta-title">Noah Taylor</h6>
                                                    <p>CEO, XYZ Group</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-wrapper testimonial-style-five">
                                            <div class="testimonial-content p-relative">
                                                <div class="avatar-rating mb-25">
                                                    <div class="fs-14 d-flex rating-color">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="testimonial-description">Santorini is a slice of heaven on Earth! The white-washed buildings against the backdrop of the azure Aegean Sea create a picture-perfect setting.</p>
                                                <div class="testimonial-quotation">
                                                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                                                </div>
                                            </div>
                                            <div class="testimonial-avatar-wrap">
                                                <div class="avatar-thumb">
                                                    <img loading="lazy" src="assets/images/client/05.png" alt="">
                                                </div>
                                                <div class="avatar-meta">
                                                    <h6 class="avatar-meta-title">Isabella Wright</h6>
                                                    <p>Fashion Model</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-wrapper testimonial-style-five">
                                            <div class="testimonial-content p-relative">
                                                <div class="avatar-rating mb-25">
                                                    <div class="fs-14 d-flex rating-color">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="testimonial-description">Kyoto is a city that seamlessly blends tradition with modernity. The temples, shrines, and gardens are simply exquisite.</p>
                                                <div class="testimonial-quotation">
                                                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                                                </div>
                                            </div>
                                            <div class="testimonial-avatar-wrap">
                                                <div class="avatar-thumb">
                                                    <img loading="lazy" src="assets/images/client/03.png" alt="">
                                                </div>
                                                <div class="avatar-meta">
                                                    <h6 class="avatar-meta-title">Olivia Bennett</h6>
                                                    <p>Builder</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-wrapper testimonial-style-five">
                                            <div class="testimonial-content p-relative">
                                                <div class="avatar-rating mb-25">
                                                    <div class="fs-14 d-flex rating-color">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="testimonial-description">Banff National Park is a paradise for outdoor enthusiasts! The stunning landscapes, towering mountains, and crystal-clear lakes make it a haven for hikers and photographers.</p>
                                                <div class="testimonial-quotation">
                                                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                                                </div>
                                            </div>
                                            <div class="testimonial-avatar-wrap">
                                                <div class="avatar-thumb">
                                                    <img loading="lazy" src="assets/images/client/04.png" alt="">
                                                </div>
                                                <div class="avatar-meta">
                                                    <h6 class="avatar-meta-title">Logan Foster</h6>
                                                    <p>Student</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-pagination-wrapper testimonial-five-pagination">
                                    <div class="slider-pagination bd-pagination justify-content-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- testimonial area end  -->

        <!-- blog area start -->
        <!-- <section class="bd-blog-area section-space">
            <div class="container">
                <div class="row gy-24 align-items-center justify-content-center section-title-space">
                    <div class="col-xl-6 col-md-8">
                        <div class="section-title-wrapper text-center anim-wrapper animation-style-3">
                            <span class="section-subtitle mb-10">Our Blog</span>
                            <h2 class="section-title title-animation">Blog For Travel Updates</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-24">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <article class="blog-wrapper blog-default blog-style-six">
                            <div class="blog-thumb image-hover-effect">
                                <a href="#"><img loading="lazy" src="assets/images/blog/blog-image-20.png" alt="image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta-list">
                                    <div class="blog-meta-item has-seperator">
                                        <span class="meta-icon">
                    <i class="icon-profile"></i>
                </span>
                                        <span class="meta-text"><a class="meta-author" href="#">David William</a></span>
                                    </div>
                                    <div class="blog-meta-item">
                                        <span class="meta-icon">
                    <i class="icon-cleander-check"></i>
                </span>
                                        <span class="meta-text"><a href="#">March 20 2024</a></span>
                                    </div>
                                </div>
                                <h5 class="blog-title mb-5 underline"><a href="#">Passage Perspectives: Discovering Cultures Through Travel</a></h5>
                                <p>Embark on an odyssey of discovery with Odyssey Oasis, where every destination</p>
                                <div class="">
                                    <div class="icon-text-btn p-relative">
                                        <a href="#">
                                            <span>Read More</span>
                                            <i>
                        <svg width="18" height="14" viewbox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2871 1L17 6.71285L11.2871 12.4257" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M1 6.71313H16.8397" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <article class="blog-wrapper blog-default blog-style-six">
                            <div class="blog-thumb image-hover-effect">
                                <a href="#"><img loading="lazy" src="assets/images/blog/blog-image-21.png" alt="image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta-list">
                                    <div class="blog-meta-item has-seperator">
                                        <span class="meta-icon">
                    <i class="icon-profile"></i>
                </span>
                                        <span class="meta-text"><a class="meta-author" href="#">John Wick</a></span>
                                    </div>
                                    <div class="blog-meta-item">
                                        <span class="meta-icon">
                    <i class="icon-cleander-check"></i>
                </span>
                                        <span class="meta-text"><a href="#">March 15 2024</a></span>
                                    </div>
                                </div>
                                <h5 class="blog-title mb-5 underline"><a href="#">Trekker's Tales: Navigating the World's Wonders</a></h5>
                                <p>Embark on an odyssey of discovery with Odyssey Oasis, where every destination</p>
                                <div class="">
                                    <div class="icon-text-btn p-relative">
                                        <a href="#">
                                            <span>Read More</span>
                                            <i>
                        <svg width="18" height="14" viewbox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2871 1L17 6.71285L11.2871 12.4257" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M1 6.71313H16.8397" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <article class="blog-wrapper blog-default blog-style-six">
                            <div class="blog-thumb image-hover-effect">
                                <a href="#"><img loading="lazy" src="assets/images/blog/blog-image-22.png" alt="image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta-list">
                                    <div class="blog-meta-item has-seperator">
                                        <span class="meta-icon">
                    <i class="icon-profile"></i>
                </span>
                                        <span class="meta-text"><a class="meta-author" href="#">Mazharul Islam</a></span>
                                    </div>
                                    <div class="blog-meta-item">
                                        <span class="meta-icon">
                    <i class="icon-cleander-check"></i>
                </span>
                                        <span class="meta-text"><a href="#">March 10 2024</a></span>
                                    </div>
                                </div>
                                <h5 class="blog-title mb-5 underline"><a href="#">Excursion Express: Fast-Track to Your Dream Destinations</a></h5>
                                <p>Embark on an odyssey of discovery with Odyssey Oasis, where every destination</p>
                                <div class="">
                                    <div class="icon-text-btn p-relative">
                                        <a href="#">
                                            <span>Read More</span>
                                            <i>
                        <svg width="18" height="14" viewbox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2871 1L17 6.71285L11.2871 12.4257" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M1 6.71313H16.8397" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- blog area end -->
         <!-- activity area start -->
         <section  class="bd-activity-area section-space fix">
            <div class="container">
                <div class="row gy-24 text-center align-items-center justify-content-center section-title-space">
                    <div class="col-xl-4">
                        <div class="section-title-wrapper anim-wrapper animation-style-3">
                            <span class="section-subtitle mb-10">Notre Ville</span>
                            <h2 class="section-title title-animation skiptranslate">Visitez Chefchaouen !</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-24">
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="activity-wrapper activity-style activity-style-six">
                            <div class="activity-thumb image-overly">
                                <a href="{{url('/chefchaouen')}}"><img loading="lazy" src="assets/images/bg/card1.jpg" alt="image"></a>
                            </div>
            
                            <div class="activity-content-wrap">
                                <div class="activity-content">
                                    <div class="activity-content-top d-flex align-items-center gap-10 justify-content-between">
                                        <div class="activity-title-wrap">
                                            <h6 class="underline"><a href="{{url('/chefchaouen')}}">Silhouettes Bleutées...</a></h6>
                                        </div>
                                        <div class="activity-btn">
                                            <a class="bd-icon-btn hover-style" href="{{url('/chefchaouen')}}" target="_blank"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="activity-wrapper activity-style activity-style-six">
                            <div class="activity-thumb image-overly">
                                <a href="{{url('/chefchaouen')}}"><img loading="lazy" src="assets/images/bg/jben.jpg" alt="image"></a>
                            </div>
                           
                            <div class="activity-content-wrap">
                                <div class="activity-content">
                                    <div class="activity-content-top d-flex align-items-center gap-10 justify-content-between">
                                        <div class="activity-title-wrap">
                                            <h6 class="underline"><a href="{{url('/chefchaouen')}}">Trésors du Terroir...</a></h6>
                                        </div>
                                        <div class="activity-btn">
                                            <a class="bd-icon-btn hover-style" href="{{url('/chefchaouen')}}" target="_blank"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="activity-wrapper activity-style activity-style-six">
                            <div class="activity-thumb image-overly">
                                <a href="{{url('/chefchaouen')}}"><img loading="lazy" src="assets/images/bg/card3.jpg" alt="image"></a>
                            </div>
                          
                            <div class="activity-content-wrap">
                                <div class="activity-content">
                                    <div class="activity-content-top d-flex align-items-center gap-10 justify-content-between">
                                        <div class="activity-title-wrap">
                                            <h6 class="underline"><a href="{{url('/chefchaouen')}}">Richesse des saveurs...</a></h6>
                                        </div>
                                        <div class="activity-btn">
                                            <a class="bd-icon-btn hover-style" href="{{url('/chefchaouen')}}" target="_blank"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="activity-wrapper activity-style activity-style-six">
                            <div class="activity-thumb image-overly">
                                <a href="{{url('/chefchaouen')}}"><img loading="lazy" src="assets/images/bg/tapis.jpg" alt="image"></a>
                            </div>
                           
                            <div class="activity-content-wrap">
                                <div class="activity-content">
                                    <div class="activity-content-top d-flex align-items-center gap-10 justify-content-between">
                                        <div class="activity-title-wrap">
                                            <h6 class="underline"><a href="{{url('/chefchaouen')}}">Savoir-faire artisanal... </a></h6>
                                        </div>
                                        <div class="activity-btn">
                                            <a class="bd-icon-btn hover-style" href="{{url('/chefchaouen')}}" target="_blank"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            @keyframes slide {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-100%);
  }
}

.logos {
  overflow: hidden;
  padding: 10px 0;
  white-space: nowrap;
  position: relative;
}

.logos:before,
.logos:after {
  position: absolute;
  top: 0;
  width: 250px;
  height: 100%;
  content: "";
  z-index: 2;
}

.logos:before {
  left: 0;
}

.logos:after {
  right: 0;
}

.logos:hover .logos-slide {
  animation-play-state: paused;
}

.logos-slide {
  display: inline-block;
  animation: 35s slide infinite linear;
}

.logos-slide img {
  height: 100px;
  margin: 0 40px;
}
        </style>
<section class="bd-about-area flash-white section-space">
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-12">
                        <div class="section-title-space">
                            <div class="section-title-wrapper text-center anim-wrapper animation-style-3">
                                <span class="section-subtitle mb-10">Nos Partenaires</span>
                                <h2 class="section-title title-animation">Unis dans l'Action : <span class="skiptranslate" data-default="partenaire">Rencontrez Nos Alliés</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="logos">
            <div class="logos-slide">
                <img loading="lazy" style=" transition: transform 0.3s ease-in-out;" src="./assets/images/bg/pro.png" />
              <img loading="lazy" style=" transition: transform 0.3s ease-in-out;" src="./assets/images/bg/fs.png" />
              <img loading="lazy" style=" transition: transform 0.3s ease-in-out;" height="130px" src="./assets/images/bg/tang.png" />
              <img loading="lazy" style=" transition: transform 0.3s ease-in-out;" src="./assets/images/bg/rabt.png" />
              <img loading="lazy" style=" transition: transform 0.3s ease-in-out;" src="./assets/images/bg/par5.png" />
              <img loading="lazy" src="./assets/images/bg/pro.png" />
              <img loading="lazy" src="./assets/images/bg/fs.png" />
              <img loading="lazy" height="128px" src="./assets/images/bg/tang.png" />
              <img loading="lazy" src="./assets/images/bg/rabt.png" />
              <img loading="lazy" src="./assets/images/bg/par5.png" />
            </div>
      
            
          </div>
         </section>
    <!-- blog area start -->
    <section class="bd-blog-area section-space">
        <div class="container">
            <div    class="row justify-content-center">
                <div class="col-xl-6 col-lg-12">
                    <div class="section-title-space">
                        <div class="section-title-wrapper text-center anim-wrapper animation-style-3">
                            <span class="section-subtitle mb-10">Nos Actualités</span>
                            <h2 class="section-title title-animation skiptranslate " data-default="actu">Découvrez les Dernières Nouvelles</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-24">
                <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <article class="blog-wrapper blog-default blog-style">
                        <div class="blog-thumb image-hover-effect">
                            <a href="#"><img loading="lazy" src="assets/images/bg/actu.png" alt="img"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag">
                                <span><a href="#">Géologie</a></span>
                            </div>
                            <div class="blog-meta-list">
                                <div class="blog-meta-item">
                                    <span class="meta-icon">
                <i class="icon-person"></i>
            </span>
                                    <span class="meta-text">Par <a class="meta-author" href="#">Administrateur</a></span>
                                </div>
                                <div class="blog-meta-item">
                                    <span class="meta-icon">
                <i class="icon-cleander-check"></i>
            </span>
                                    <span class="meta-text"><a href="#">01-05-2024</a></span>
                                </div>
                            </div>
                            <h5 class="blog-title mb-25 underline"><a href="#">Découvrez le parc de Talassemtane en hiver ...</a></h5>
                            <div class="blog-btn">
                                <div class="icon-text-btn p-relative">
                                    <a href="#">
                                        <span>Lire plus </span>
                                        <i>
                    <svg width="18" height="14" viewbox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.2871 1L17 6.71285L11.2871 12.4257" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M1 6.71313H16.8397" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="blog-flex">
                        <article class="blog-wrapper blog-default blog-style-two">
                            <div class="blog-thumb image-hover-effect">
                                <a href="#"><img loading="lazy" src="assets/images/bg/actu2.png" alt="img"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-tag">
                                    <span><a href="#">Tourisme</a></span>
                                </div>
                                <div class="blog-meta-list">
                                    <div class="blog-meta-item">
                                        <span class="meta-icon">
                <i class="icon-person"></i>
            </span>
                                        <span class="meta-text">Par <a class="meta-author" href="#">Administrateur</a></span>
                                    </div>
                                    <div class="blog-meta-item">
                                        <span class="meta-icon">
                <i class="icon-cleander-check"></i>
            </span>
                                        <span class="meta-text"><a href="#">28-04-2024</a></span>
                                    </div>
                                </div>
                                <h5 class="blog-title mb-30 underline"><a href="#">Semana Santa : Les Espagnols plébiscitent Chefchaouen</a></h5>
                                <div class="blog-btn">
                                    <div class="icon-text-btn p-relative">
                                        <a href="#">
                                            <span>Lire plus </span>
                                            <i>
                    <svg width="18" height="14" viewbox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.2871 1L17 6.71285L11.2871 12.4257" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M1 6.71313H16.8397" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="blog-wrapper blog-default blog-style-two">
                            <div class="blog-thumb image-hover-effect">
                                <a href="#"><img loading="lazy" src="assets/images/bg/actu3.png" alt="img"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-tag">
                                    <span><a href="#">Chefchaouen</a></span>
                                </div>
                                <div class="blog-meta-list">
                                    <div class="blog-meta-item">
                                        <span class="meta-icon">
                <i class="icon-person"></i>
            </span>
                                        <span class="meta-text">Par <a class="meta-author" href="#">Administrateur</a></span>
                                    </div>
                                    <div class="blog-meta-item">
                                        <span class="meta-icon">
                <i class="icon-cleander-check"></i>
            </span>
                                        <span class="meta-text"><a href="#">25-04-2024</a></span>
                                    </div>
                                </div>
                                <h5 class="blog-title mb-30 underline"><a href="#">Chefchaouen: Inauguration d’un complexe intégré à Ras El Ma</a></h5>
                                <div class="blog-btn">
                                    <div class="icon-text-btn p-relative">
                                        <a href="#">
                                            <span>Lire plus </span>
                                            <i>
                    <svg width="18" height="14" viewbox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.2871 1L17 6.71285L11.2871 12.4257" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M1 6.71313H16.8397" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- blog area end -->
   
        <!-- activity area end -->
        <!-- instagram area start -->
        <!-- instagram area start -->
    </main>
    <!-- Body main wrapper end -->
@include('layout.footer')
