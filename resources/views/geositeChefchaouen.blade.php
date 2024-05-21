@include('layout.navbar')

    <main>
        <!-- breadcrumb area start -->
     
        <!-- breadcrumb area end -->

        <!-- blog-list area start -->
        <div class="bd-blog-list-area section-space">
            <div class="container">
                <div class="row gy-24 justify-content-center">
                    <div class="col-xxl-8 col-xl-8 col-lg-7">
                        <article class="blog-list-single-wrapper">
                            <div class="blog-list-thumb image-hover-effect mb-25">
       <div class="bd-map-area">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="google-map">
                       <iframe src="https://www.google.com/maps/d/u/4/embed?mid=1SJiiES_Ctp5iZzfej9QRDpIpiikfrME&ehbc=2E312F&noprof=1" width="640" height="480"></iframe></div>
                    </div>
                </div>
            </div>
        </div>                            </div>
                            <div class="blog-content">
                                
                                <h4 class="blog-title mb-15 underline"><a href="blog-details.html">Carte Géoparc Chefchaouen 
                                </a></h4>
                                <p style="text-align: justify;" class="blog-description">Le futur « Géoparc de Chefchaouen », qui comprend le Parc National de Talassemtane et la Côte de Ghomara (PNTLS-CG), est inscrit sur la liste du patrimoine exceptionnel du Maroc par l’UNESCO. Il se caractérise par sa grande biodiversité et fait partie de la Réserve de biosphère intercontinentale de la Méditerranée (RBIM).  </p>
                                    <p style="text-align: justify;" class="blog-description">
                                        Situé au Nord-Ouest du Maroc au centre de la chaîne du Rif, il s’étend sur une superficie de 194010ha (1940,1km²) (cette zone contient la superficie de la partie maritime avec des limites à 1 km de la côte : 46,78 km²) répartie entre les provinces de Chefchaouen et de Tétouan, réparties sur 13 communes territoriales.                                     </p>
                                    
                            </div>
                        </article>
                        <article class="blog-list-single-wrapper">
                            <div class="tour-details-slider details-slide p-relative mb-30">
                                <div class="swiper details-slide-activation">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="assets/images/bg/cartech.jpeg" alt="image">
                                        </div>
                                     
                                    </div>
                                </div>
                                <div class="details-slide-navigation btn-navigation">
                                    <button class="tourigo-navigation-prev"><i class="fa-regular fa-angle-left"></i></button>
                                    <button class="tourigo-navigation-next"><i class="fa-regular fa-angle-right"></i></button>
                                </div>
                            </div>
                            
                        </article>
                        
                        
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" style="width:100%">
                            <tbody><tr><td><strong>Zone</strong>&nbsp;</td><td><strong>Commune</strong>&nbsp;</td><td><strong>Province</strong>&nbsp;</td><td><strong>Population</strong>&nbsp;</td></tr><tr><td rowspan="9">Parc de Talassemtane&nbsp;</td><td>El Hamra&nbsp;</td><td rowspan="3">Tétouan&nbsp;</td><td rowspan="9">&nbsp;97807 habitants et 16555 familles (RGPH, 2014) densité de 35 habitants/hectare&nbsp;</td></tr><tr><td>Oulad Ali Mansour&nbsp;</td></tr><tr><td>El Ouad&nbsp;</td></tr><tr><td>Chefchaouen&nbsp;</td><td rowspan="10">Chefchaouen&nbsp;</td></tr><tr><td>Tassift&nbsp;</td></tr><tr><td>Talembote&nbsp;</td></tr><tr><td>Bab Taza&nbsp;</td></tr><tr><td>Beni Derkoul&nbsp;</td></tr><tr><td>Beni Selman&nbsp;</td></tr><tr><td rowspan="4">Côte de Ghomara&nbsp;</td><td>Tizgane&nbsp;</td><td rowspan="4">41375 habitants et 7393 familles (RGPH, 2014),&nbsp;</td></tr><tr><td>Stéphanie&nbsp;</td></tr><tr><td>Beni Bouzra&nbsp;</td></tr><tr><td>Amtar&nbsp;</td></tr><tr><td colspan="4"><strong>Tableau : Découpage administratif de la zone du Géoparc</strong>&nbsp;</td></tr></tbody></table>
      
                      </div>
                             
                            </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-5">
                            <aside class="sidebar-wrapper sidebar-sticky">
                                <div class="sidebar-widget-wrapper mb-30">
                                    <div class="sidebar-widget widget">
                                        <h6 class="sidebar-widget-title small mb-15">Explorer notre Géoparc</h6>
                                        <div class="sidebar-widget-post">
                                            <div class="recent-post">
                                                <div class="recent-post-thumb mr-10">
                                                    <a href="{{url('/biodiversite')}}">
                                                        <img src="assets/images/bg/eagle.jpg" alt="image">
                                                    </a>
                                                </div>
                                                <div class="recent-post-content">
                                                    <h6 class="recent-post-title small underline">
                                                        <a href="{{url('/biodiversite')}}">Biodiversité</a>
                                                    </h6>
                                                 
                                                </div>
                                            </div>
                                            <div class="recent-post">
                                                <div class="recent-post-thumb mr-10">
                                                    <a href="{{url('/chefchaouen')}}">
                                                        <img src="assets/images/bg/ch.png" alt="image">
                                                    </a>
                                                </div>
                                                <div class="recent-post-content">
                                                    <h6 class="recent-post-title small underline">
                                                        <a href="{{url('/chefchaouen')}}">La ville de chefchaouen </a>
                                                    </h6>
                                                    
                                                </div>
                                            </div>
                                            <div class="recent-post">
                                                <div class="recent-post-thumb mr-10">
                                                    <a href="{{url('/maison')}}">
                                                        <img src="assets/images/bg/maison.jpg" alt="image">
                                                    </a>
                                                </div>
                                                <div class="recent-post-content">
                                                    <h6 class="recent-post-title small underline">
                                                        <a href="{{url('/maison')}}">Maison D’abeille (Dar Nahla)</a>
                                                    </h6>
                                                    
                                                </div>
                                            </div>
                                              <div class="recent-post">
                                                <div class="recent-post-thumb mr-10">
                                                    <a href="{{url('/sport')}}">
                                                        <img src="assets/images/bg/sport.jpg" alt="image">
                                                    </a>
                                                </div>
                                                <div class="recent-post-content">
                                                    <h6 class="recent-post-title small underline">
                                                        <a href="{{url('/sport')}}">Sport de Montagne</a>
                                                    </h6>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </aside>
                        </div>
                        </article>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-list area end -->

    </main>
    <!-- Body main wrapper end -->
    @include('layout.footer')
