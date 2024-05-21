@include('layout.navbar')

    <!-- Body main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
      
        <!-- breadcrumb area end -->

        <!-- destinations-details area start -->
        <section class="bd-destinations-details-area section-space">
            <div class="container">
                <div class="row gy-24 justify-content-center">
                    <div class="col-xxl-8 col-xl-8 col-lg-10">
                        <div class="destinations-details-wrapper">
                            <div class="destinations-details mb-25">
                                <div class="destinations-details-slider details-slide p-relative mb-30">
                                    <div class="swiper details-slide-activation">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="assets/images/bg/musee.jpeg" alt="image">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/bg/musee2.jpeg" alt="image">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/bg/musee3.jpeg" alt="image">
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="details-slide-navigation btn-navigation">
                                        <button class="tourigo-navigation-prev"><i class="fa-regular fa-angle-left"></i></button>
                                        <button class="tourigo-navigation-next"><i class="fa-regular fa-angle-right"></i></button>
                                    </div>
                                </div>
                                <div class="destinations-details-content">
                                    <h3 class="destinations-details-title mb-15">Musée Géoparc Chefchaouen  


                                    </h3>
                                    <div style="text-align: justify;" class="mb-15">
                                        {!! $musee->description !!}
                                    </div>
                                                                             
                                </div>
                                   
                                    
                           
                                    <div class="destinations-details-gallery">
                                        <div class="row gy-24">
                                            @foreach ($musee->images as $image)
                                                
                                            <div class="col-md-6">
                                                <div class="destinations-details-thumb image-hover-effect-two position-relative">
                                                    <img src="{{asset('/storage/'.$image)}}" alt="image">
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                         
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="section-divider mt-30 mb-25"></div>
                               
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
                    </div>
                </div>
            </div>
        </section>
        <!-- destinations-details area end -->

    </main>
    <!-- Body main wrapper end -->

    @include('layout.footer')
