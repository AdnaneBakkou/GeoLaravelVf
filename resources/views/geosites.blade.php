@include('layout.navbar')

    <!-- Body main wrapper start -->
    <main>
        <!-- breadcrumb area start 
        <section class="bd-breadcrumb-area p-relative fix">
            <div class="bd-breadcrumb-bg" data-background="assets/images/bg/breadcrumb-bg.png"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">Géiosites</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="{{url('/')}}"><i class="icon-home"></i>Géoparc
                                                Chefchaouen</a></span>
                                        <span>Géosites</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->
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
                                                   <iframe src="https://www.google.com/maps/d/u/4/embed?mid=1SJiiES_Ctp5iZzfej9QRDpIpiikfrME&ehbc=2E312F&noprof=1" width="640" height="480"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content">

                                <h4 class="blog-title mb-15 underline"><a href="blog-details.html">Géiosites</a></h4>
                                <div style="text-align: justify;" class="blog-description">
                                    {!!$geosite->text_1!!}

                                </div>
                            </div>
                        </article>
                        <article class="blog-list-single-wrapper">
                            <div class="tour-details-slider details-slide p-relative mb-30">
                                <div class="swiper details-slide-activation">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{asset("/storage/".$geosite->image_1)}}" alt="image">
                                        </div>

                                    </div>
                                </div>
                                <div class="details-slide-navigation btn-navigation">
                                    <button class="tourigo-navigation-prev"><i
                                            class="fa-regular fa-angle-left"></i></button>
                                    <button class="tourigo-navigation-next"><i
                                            class="fa-regular fa-angle-right"></i></button>
                                </div>
                            </div>
                            <div class="blog-content">

                                <h4 class="blog-title mb-15 underline"><a href="blog-details.html">Liste et
                                        description des sites géologiques du Géoparc mondial UNESCO </a></h4>
                                <div style="text-align: justify;" class="blog-description"> 
                                    {!!$geosite->text_2!!}
                                </div>

                            </div>
                        </article>
                        <article class="blog-list-single-wrapper">
                            <div class="tour-details-slider details-slide p-relative mb-30">
                                <div class="swiper details-slide-activation">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{asset("/storage/".$geosite->image_2)}}" alt="image">
                                        </div>

                                    </div>
                                </div>
                                <div class="details-slide-navigation btn-navigation">
                                    <button class="tourigo-navigation-prev"><i
                                            class="fa-regular fa-angle-left"></i></button>
                                    <button class="tourigo-navigation-next"><i
                                            class="fa-regular fa-angle-right"></i></button>
                                </div>
                            </div>
                            <div class="blog-content">

                                <h4 class="blog-title mb-15 underline"><a href="blog-details.html">Inventaire des
                                        sites géologique

                                    </a></h4>
                                <p style="text-align: justify;" class="blog-description">Tableau des sites géologiques
                                    au niveau du géoparc de Chefchaouen, les sites les plus importants (17 sites) sont
                                    en vert dans le tableau et sont classés selon leurs intérêts géologiques.

                               
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col" colspan="4">Niveau d'importance</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">Nom du site géologique</th>
                                            <th scope="col">Type d'intérêt géologique</th>
                                            <th>Référence mondiale</th>
                                            <th>International</th>
                                            <th>National</th>
                                            <th>Local</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($geosite['table'] as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item['nom'] }}</td>
                                                <td>{{ $item['type'] }}</td>
                                                <td>{{ in_array('Référence mondiale', $item['niveau'])  ? 'X' : '' }}
                                                </td>
                                                <td>{{ in_array('International', $item['niveau']) ? 'X' : '' }}</td>
                                                <td>{{ in_array('National', $item['niveau']) ? 'X' : '' }}</td>
                                                <td>{{ in_array('Local', $item['niveau']) ? 'X' : '' }}</td>
                                            </tr>
                                        @endforeach

                                        <!-- Répétez des balises <tr> pour les autres lignes du tableau -->
                                    </tbody>
                                </table>
                                </div>
                            </div>

                            </p>

                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-5">
                        <aside class="sidebar-wrapper sidebar-sticky">
                            <div class="sidebar-widget-wrapper mb-30">
                                <div class="sidebar-widget widget">
                                    <h6 class="sidebar-widget-title small mb-15">Explorer notre Géoparc</h6>
                                    <div class="sidebar-widget-post">
                                        <div class="recent-post">
                                            <div class="recent-post-thumb mr-10">
                                                <a href="blog-details.html">
                                                    <img src="assets/images/bg/eagle.jpg" alt="image">
                                                </a>
                                            </div>
                                            <div class="recent-post-content">
                                                <h6 class="recent-post-title small underline">
                                                    <a href="blog-details.html">Biodiversité</a>
                                                </h6>

                                            </div>
                                        </div>
                                        <div class="recent-post">
                                            <div class="recent-post-thumb mr-10">
                                                <a href="blog-details.html">
                                                    <img src="assets/images/bg/ch.png" alt="image">
                                                </a>
                                            </div>
                                            <div class="recent-post-content">
                                                <h6 class="recent-post-title small underline">
                                                    <a href="blog-details.html">La ville de chefchaouen </a>
                                                </h6>

                                            </div>
                                        </div>
                                        <div class="recent-post">
                                            <div class="recent-post-thumb mr-10">
                                                <a href="blog-details.html">
                                                    <img src="assets/images/bg/maison.jpg" alt="image">
                                                </a>
                                            </div>
                                            <div class="recent-post-content">
                                                <h6 class="recent-post-title small underline">
                                                    <a href="blog-details.html">Maison D’abeille (Dar Nahla)</a>
                                                </h6>

                                            </div>
                                        </div>
                                        <div class="recent-post">
                                            <div class="recent-post-thumb mr-10">
                                                <a href="blog-details.html">
                                                    <img src="assets/images/bg/sport.jpg" alt="image">
                                                </a>
                                            </div>
                                            <div class="recent-post-content">
                                                <h6 class="recent-post-title small underline">
                                                    <a href="blog-details.html">Sport de Montagne</a>
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
