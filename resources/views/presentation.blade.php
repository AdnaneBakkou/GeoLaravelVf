@include('layout.navbar')


    <!-- search popup area end here  -->
    <main>


        <!-- about-us area start -->
<style>
  @media (max-width: 768px) {
    #webMobile {
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
          <h2 class="section-title title-animation mb-20">Géoparc Chefchaouen</h2>
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
                <span class="about-list-subtitle">Dans un Géoparc, la géologie est une porte d’entrée privilégiée pour la sensibilisation à l’environnement et au territoire.</span>
              </div>
            </li>
            <li>
              <span class="about-list-icon">
                <i class="fa-solid fa-chart-mixed"></i>
              </span>
              <span>
                <span class="about-list-title mb-5">Développement local</span>
                <span class="about-list-subtitle">Dans un Géoparc, le géotourisme participe au développement local à travers un tourisme durable qui met en lumière cet héritage géologique remarquable.</span>
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
        <!-- about-us area end -->

 <section class="bd-shop-area section-space">
            <div class="container">
                <div class="row gy-24 justify-content-between">
                  
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="product-details-wrapper">
                            <h2 class="product-details-title small mb-10">{{$presentation->title}}
                            </h2>
                          
                            <div style="text-align: justify;" class="mb-15">
                                {!! $presentation->description !!}
                            </div>
                          
                          
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="product-details-wrapper">
                            <h2 class="product-details-title small mb-10">Qu’est-ce qu’un Géoparc Mondial UNESCO ?</h2>
                           
                            <p style="text-align: justify;" class="mb-15">Le label Géoparc mondial UNESCO est attribué par l’UNESCO et le réseau mondial des Geoparcs à un territoire présentant un patrimoine géologique remarquable. Il valorise une démarche ambitieuse portée par un territoire et tous ses représentants (élus, associations, habitants…).</p>
                        
                         
                        </div>
                        <div  style="margin-top:30px;" class="product-details-wrapper">
                            <h2 class="product-details-title small mb-10">Un géoparc fait-il uniquement référence à la géologie ?</h2>
                           
                            <p style="text-align: justify;" class="mb-15">Non ! Si un géoparc mondial UNESCO doit démontrer l’importance internationale de son patrimoine géologique, son principal objectif est d’explorer, de développer et de célébrer les liens entre cet héritage géologique et tous les autres aspects du patrimoine naturel, culturel et immatériel. Il s’agit de reconnecter l’humanité à tous les niveaux de la planète, et de révéler la façon dont elle a façonné les aspects de nos vies et de nos sociétés depuis 4 600 millions d’années.</p>
                        
                         
                        </div>
                    </div>
                </div>
                <div class="product-information section-space">
                    <div class="row gy-24 justify-content-center">
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="product-information-tab">
                                <ul class="nav nav-pills mb-35 flex-wrap gap-10" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button onclick="afficherParagraphe()" class="nav-link active" id="pills-information-tab" data-bs-toggle="pill" data-bs-target="#pills-information" type="button" role="tab" aria-controls="pills-information" aria-selected="true">Plus
                                            d'informations</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review" aria-selected="false">Ressources</button>
                                    </li>
                                   
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab" tabindex="0">
                                        <div class="information-wrapper">
                                            <div class="information-material mb-20">
                                                <h5 class="information-title mb-10"></h5>
                                                <p id="monParagraphe" style="        display: none;text-align: justify;
                                                ">L’aspirant Géoparc de Chefchaouen est un espace naturel à la géodiversité remarquable. Cette diversité se matérialise par 42 sites d’intérêt géologique de typologies différentes. Évaluation quantitative des SG inventoriés dans la zone d’étude à l’aide de méthodologies récentes (Reynard, 2007 ; Bruschi et Cendrero, 2009 ; Reynard, 2009 ; Pereira et Pereira, 2010 ; Bruschi et coll., 2011 ; Pereira et Pereira, 2012 ; Bollati et coll., 2013, 2015, 2018 ; Brilha, 2016), a conduit à la distinction de 17 géosites (Gorge et Oued Tassikisste, Panorama du Jbel Kelti, Calcaire de Nummulitidae, Talâat Adrhosse, Bassin de Tirinesse, Koudiat Achacha, Source de Ras Ma, Source de Chrafate, Brèche de Chrafate, Glissière d’Ametrasse, Jbel Chrafate Panoramic, Panorama de Jbel Lakraa, Mica des schistes de Targha, Gneiss de Stehat, Kinzigite de Beni Bouzra, Delta de Tihissase, Péridotite de Beni Bouzra) grâce à leur VS,   PUE et/ou PUT supérieurs à 75 %. 
                                                
                                                <br>
                                        
                                                L’évaluation a également révélé que le risque de dégradation de ces SG était modéré dans la plupart des cas.

                                                    Ces données prouvent que la géodiversité de la zone d’étude est suffisamment pertinente pour être utilisée à des fins scientifiques, éducatives et/ou touristiques.
                                                    
                                                    <br>
                                                    Cette étude quantitative a révélé l’état des infrastructures dans chaque secteur et particulièrement les sentiers, dont certains sont plus faciles d’accès et d’autres plus difficiles. Le chapitre suivant tentera de présenter des propositions de développement qui déclencheront le projet d’utilisation des potentialités (éducatives et géotouristiques) de la zone d’étude en attirant un plus large éventail de visiteurs (étudiants et touristes) selon les normes du développement durable.
                                                    
                                                  
                                                    
                                                   <br>
                                                    
                                                    La plus grande partie du futur Géoparc de Chefchaouen, et plus particulièrement le Parc National de Talassemtane, s’étend sur la dorsale calcaire qui est formée par les sols carbonatés du Trias-Jurassique et qui constitue les reliques d’une marge continentale qui formait la marge continentale passive de la branche méridionale d’un ancien océan qui existait au Jurassique-Crétacé à l’emplacement de l’actuelle Méditerranée (Océan Téthys) fermée depuis le Crétacé supérieur suite à la convergence de la Plaques africaines et eurasiennes mais dont les vestiges ont été soit incorporés dans les chaînes de montagnes qui font partie de la ceinture orogénique alpine, soit engloutis sous la Méditerranée. 
                                                    
                                                    Le futur Géoparc a fait l’objet de nombreuses études géologiques scientifiques, principalement stratigraphiques, paléontologiques, sédimentologiques et structurelles, qui ont contribué aux reconstitutions paléogéographiques et à la compréhension de l’évolution géologique alpine des montagnes du Rif depuis plus de 180 millions d’années et par conséquent de son homologue de la Bétique, puisque les deux chaînes partagent une histoire géologique commune.      
                                                    
                                                    <br>
                                                    
                                                    De plus, et d’un autre point de vue, les sols calcaires sont le terrain des phénomènes de karstification et des paysages karstiques par excellence. De splendides structures karstiques, superficielles (dolines, ouvalas, poljés, etc.) et souterraines (grottes à spéléothèmes) qui ont attiré de grands scientifiques, spéléologues et amateurs professionnels de spéléologie, subsistent dans le futur Géoparc.            
                                                    
                                                    Le futur Géoparc est riche d’un patrimoine géologique qui intéresse la communauté scientifique et paysagère nationale et internationale (cascades et lac Akchour, canyons et gorges de la vallée de l’Oued Laou, pâturages perchés à haute altitude rappelant les plateaux tibétains, etc.) attirant des touristes de différentes nationalités. Le futur Géoparc accueillera des lieux où les amateurs de sports de montagne pourront pratiquer leur sport favori (alpinisme, escalade, etc.). </p>
                                            </div>
                                          
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab" tabindex="0">
                                        <div class="tour-details-rating-wrapper mb-35">
                                            <div class="row gy-24">
                                                    <div style="padding-bottom: 1px;" class="bd-map-area section-space-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="google-map">
                         <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1xoLxCStQQKAEwFMN6-ndiXDhnfumqL8&ehbc=2E312F&noprof=1" width="640" height="480"></iframe></div>
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
                </div>
        
            </div>
        </section>
        
        <!-- video area end -->

       
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
                        <img loading="lazy" src="assets/images/shapes/plane-2.png" alt="shape">
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
                                <h2 class="section-title title-animation mb-15">Qu’est-ce qu’un Géoparc Mondial UNESCO ?</p>
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
 

        <section style=" margin-top: 101px;">
    <div class="bd-instagram-area pb-50">
    
        <div class="swiper instagram-slide-activation">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="instagram-image">
                        <img loading="lazy" src="assets/images/bg/akchour.jpg" style="cursor: pointer;" onclick="openFullscreen(this.src)" alt="image">
                      
                    </div>
                 
                    
                </div>
                <div class="swiper-slide">
                    <div class="instagram-image">
                        <img loading="lazy" src="assets/images/bg/apropos.jpg" style="cursor: pointer;" onclick="openFullscreen(this.src)" alt="image">
                      
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-image">
                        <img loading="lazy" src="assets/images/bg/apropos_.jpg" style="cursor: pointer;" onclick="openFullscreen(this.src)" alt="image">
                        
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-image">
                        <img loading="lazy" src="assets/images/bg/bg-chefchaouen-night.jpg" style="cursor: pointer;" onclick="openFullscreen(this.src)" alt="image">
                        
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-image">
                        <img loading="lazy" src="assets/images/bg/card1.jpg" style="cursor: pointer;" onclick="openFullscreen(this.src)" alt="image">
                       
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram-image">
                        <img loading="lazy" src="assets/images/instagram/insta-img-6.png" style="cursor: pointer;" onclick="openFullscreen(this.src)" alt="image">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fullscreenModal" onclick="closeFullscreen()">
        <img loading="lazy" id="fullscreenImg" src="" alt="Fullscreen Image">
    </div>
</section>        
        <!-- instagram area start -->

    </main>

    <script>
        function afficherParagraphe() {
            // Sélectionne l'élément par son ID
            var paragraphe = document.getElementById("monParagraphe");
    
            // Change le style pour afficher le paragraphe
            paragraphe.style.display = "block";
        }
    </script>
    <!-- Body main wrapper end -->
    @include('layout.footer')
