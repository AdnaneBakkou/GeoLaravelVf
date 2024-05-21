@include('layout.navbar')


<!-- Body main wrapper start -->
<main>

    <style>
        .bd-breadcrumb-content {
            padding-top: 148px;
        }
    </style>
    <!-- breadcrumb area start -->
    <section class="bd-breadcrumb-area p-relative fix">
        <!-- breadcrumb background image -->
        <div class="bd-breadcrumb-bg" data-background="assets/images/bg/eagle.jpg"></div>
        <div class="bd-breadcrumb-wrapper p-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                            <div class="bd-breadcrumb-content text-center">
                                <h1 class="bd-breadcrumb-title">Biodiversité</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><a href="{{ url('/') }}"><i class="icon-home"></i>GéoParc
                                            chefchaouen</a></span>
                                    <span>Biodiversité</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->
    
    <!-- destinations-details area start -->
    <section class="bd-tour-details-area section-space">
        <div class="container">
            <div class="row gy-24">
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
                <div class="col-xxl-8 col-xl-8 col-lg-7">
                    <div class="destinations-details-wrapper">
                        <div class="destinations-details mb-25">
                            <div class="destinations-details-slider details-slide p-relative mb-30">
                                <div class="swiper details-slide-activation">
                                    <div class="swiper-wrapper">
                                        @foreach ($biodiversite->images as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ asset("storage/$image") }}" alt="image">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="details-slide-navigation btn-navigation">
                                    <button class="tourigo-navigation-prev"><i
                                            class="fa-regular fa-angle-left"></i></button>
                                    <button class="tourigo-navigation-next"><i
                                            class="fa-regular fa-angle-right"></i></button>
                                </div>
                            </div>
                            <div class="destinations-details-content">
                                <h3 class="destinations-details-title mb-15">Biodiversité
                                </h3>
                                <div style="text-align: justify;" class="mb-15">{!!$biodiversite->description!!}</div>


                                <div class="post-details-blockquote mb-30">
                                    <blockquote>
                                        <h4 class="blockquote-title">Pouvez-vous laisser ce monde un peu mieux que
                                            vous ne l’avez trouvé ?</h4>
                                        <p class="d-flex justify-content-end"><span>Robert Baden-Powell</span></p>
                                    </blockquote>
                                </div>

                                @foreach ($biodiversite->sites as $item)
                                    <h5 class="destinations-details-title mb-15">{{ $item['name'] }}</h5>
                                    <p style="text-align: justify;">{{ $item['description'] }}</p>
                                    <div class="destinations-details-gallery">
                                        <div class="row gy-24">
                                            @foreach ($item['images'] as $image)
                                                <div class="col-md-4">
                                                    <div
                                                        class="destinations-details-thumb image-hover-effect-two position-relative">
                                                        <img src="{{ asset("storage/$image") }}" alt="image">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- <div style="padding-top: 10px;" class="destinations-details-gallery">
                                            <div class="row gy-24">
                                                <div class="col-md-12">
                                                    <div
                                                        class="destinations-details-thumb image-hover-effect-two position-relative">
                                                        <img src="assets/images/bg/ak4.jpg" alt="image">
                                                    </div>
                                                </div>

                                            </div>
                                        </div> --}}
                            </div>
                            <div class="section-divider mt-30 mb-25"></div>
                            @endforeach

                        </div>


                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    
    <!-- destinations-details area end -->

</main>
@include('layout.footer')
