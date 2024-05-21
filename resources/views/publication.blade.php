@include('layout.navbar')


    <!-- Body main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <section class="bd-breadcrumb-area p-relative fix">
            <!-- breadcrumb background image -->
            <div class="bd-breadcrumb-bg" data-background="assets/images/bg/close-up-books-bookstore.jpg"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">Publication</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="{{url('/')}}"><i class="icon-home"></i>Géoparc</a></span>
                                        <span>Publications</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- tour area start -->
        <section class="bd-service-area section-space">
            <div class="container">
                <div class="row gy-24 text-center justify-content-center section-title-space">
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8">
                        <div class="section-title-wrapper anim-wrapper animation-style-3">
                            <span class="section-subtitle mb-10">Publications</span>
                            <h2 class="section-title title-animation">La mémoire est la sentinelle de l'ésprit</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-24">
                   @foreach ($publications as $publication)
    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="tour-wrapper style-five">
            <div class="tour-thumb-wrapper p-relative">
                <div class="tour-thumb image-overly">
                    <a href="{{ asset('storage/' . $publication->pdf) }}" target="_blank"><img
                            src="{{ asset('storage/' . $publication->images['0']) }}"
                            alt="image"></a>
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
                        <a href="javascript:void(0);" class="tour-camera-btn tour-image-popup"
                            data-gallery-options='{
                              "items": [
                                @foreach ($publication->images as $image)
                                    {
                                      "src": "{{ asset('storage/' . $image) }}"
                                    }@if (!$loop->last),@endif @endforeach
                              ],
                              "gallery": {
                                "enabled": true
                              },
                              "type": "image"
                          }'>
                            <i class="fa-light fa-camera"></i>
                            <span>{{ count($publication->images) }}</span>
                        </a>
                    </div>
                </div>
                <h5 class="tour-title fw-5 underline mb-10"><a href="{{ asset('storage/' . $publication->pdf) }}" target="_blank">{{ $publication->title }}</a></h5>
                <div class="tour-meta mb-5">
                    <div class="tour-location d-flex gap-10 align-items-center">
                        <i class="icon-pin"></i> <a href="#">{{ $publication->tag }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach


                </div>
            </div>
        </section>
        <!-- tour area end -->
        <!-- tour-grid area end -->
        <!-- cta area start -->

        <!-- cta area end -->
    </main>
    <!-- Body main wrapper end -->
    @include('layout.footer')
